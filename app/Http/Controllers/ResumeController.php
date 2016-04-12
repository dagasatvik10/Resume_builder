<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Resume;
use App\Section;
use App\Subsection;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ResumeController extends Controller
{
//  /**
//   * Create a new controller instance.
//   *
//   * @return void
//   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function store_resume_name(Request $request)
    {
        $resume = new Resume;
        $resume->name = $request['name'];
        $resume->user()->associate(Auth::user());
        $resume->save();

        $sections = Section::where('flag','!=','2')->get();
        foreach($sections as $section)
        {
            $resume->sections()->attach($section->id);
        }

        $sections = $resume->sections;
        foreach($sections as $section)
        {
            $subsections = $section->subsections;
            foreach($subsections as $subsection)
            {
              $subsection->mapping_sections()->attach($section->pivot->id);
            }
        }
        return redirect()->route('resume.create',[$resume]);
    }

    public function create($id=null)
    {
        $user = Auth::user();
        $resume = $user->resumes->find($id);
        if($resume==null)
        {
            return redirect()->route('user.dashboard');
        }
        Session::put('user.resume',$resume);
        return view('resume.create',compact(['user','resume']));
    }

    public function store($id,Request $request)
    {
        $resume = Auth::user()->resumes->find($id);
        foreach($resume->mapping_subsections as $mapping_subsection)
        {
            $detail = $mapping_subsection->detail;
            if($detail === null)
            {
                $detail = new Detail;
                $detail->content = $request->input($mapping_subsection->id);
                $mapping_subsection->detail()->save($detail);
            }
            else
            {
                $detail->content = $request->input($mapping_subsection->id);
                $detail->save();
            }
        }
        return redirect()->route('user.dashboard');
    }

    public function show($id=null)
    {
        $user = Auth::user();
        $resume = $user->resumes->find($id);

        if($resume==null)
        {
            return redirect()->route('user.dashboard');
        }

        foreach($resume->mapping_sections as $mapping_section)
        {
            foreach($mapping_section->mapping_subsections as $mapping_subsection)
            {
                if(!empty($mapping_subsection->detail))
                {
                    $section[$mapping_section->section->id][$mapping_subsection->subsection->subsection_name] =
                        $mapping_subsection->detail->content;
                }
                else
                {
                    $section[$mapping_section->section->id][$mapping_subsection->subsection->subsection_name] = null;
                }
            }
        }
        return view('resume.show',compact('resume','user','section'));
    }

    public function delete($id=null)
    {
        $resume = Auth::user()->resumes->find($id);
        if($resume==null)
        {
            return redirect()->route('user.dashboard');
        }
        $resume->delete();
        return redirect()->route('user.dashboard');
    }

    public function addSection($section_id,$resume_id)
    {
        $resume = Auth::user()->resumes->find($resume_id);
        $section = Section::find($section_id);
        if($section->flag != 0)
        {
            $resume->sections()->attach($section->id);

            $mapping_section = $section->mapping_sections()->where('resume_id',$resume->id)->orderBy('id','desc')->first();

            $subsections = $section->subsections;
            foreach ($subsections as $subsection)
            {
                $subsection->mapping_sections()->attach($mapping_section->id);
            }
        }

        return back();
    }

    public function deleteSection($mapping_section_id,$resume_id)
    {
        $resume = Auth::user()->resumes->find($resume_id);
        $mapping_section = $resume->mapping_sections->find($mapping_section_id);

        if ($mapping_section->section->flag != 0)
        {
            $mapping_section->delete();
        }

        return back();
    }

    public function addSubsection($mapping_section_id,$subsection_id)
    {
        $subsection = Subsection::find($subsection_id);
        if($subsection->flag != 0) {
            $subsection->mapping_sections()->attach($mapping_section_id);
        }

        return back();
    }

    public function deleteSubsection($mapping_subsection_id,$resume_id)
    {
        $resume = Auth::user()->resumes->find($resume_id);
        $mapping_subsection = $resume->mapping_subsections->find($mapping_subsection_id);

        if($mapping_subsection->subsection->flag != 0)
        {
            $mapping_subsection->delete();
        }

        return back();
    }



}
