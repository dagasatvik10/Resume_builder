<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Resume;
use App\Section;
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
        return view('resume.show',compact('resume','user'));
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
}
