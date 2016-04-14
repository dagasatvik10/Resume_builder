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
use PDF;


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
        return back();
        //return response()->json(['responseText' => 'Success!'], 200);
    }

    public function show($id=null)
    {
        $user = Auth::user();
        $resume = $user->resumes->find($id);

        if($resume==null)
        {
            return redirect()->route('user.dashboard');
        }

        $check_section = [];
        $default_section = [];
        foreach($resume->sections as $section)
        {
            if(!in_array($section->id,$check_section))
            {
                $j = 0;
                foreach ($section->mapping_sections()->where('resume_id',$resume->id)->get() as $mapping_section)
                {
                    $check_subsection = [];
                    //$default_section[$section->id][$j] = 'hey';
                    foreach ($mapping_section->subsections as $subsection)
                    {
                        if(!in_array($subsection->id,$check_subsection))
                        {
                            $i = 0;
                            foreach ($subsection->mapping_subsections()->where('mapping_section_id', $mapping_section->id)->get()
                                     as $mapping_subsection)
                            {
                               if ($mapping_subsection->detail != null) {
                                    $default_section[$section->id][$j][$subsection->subsection_name][$i] =
                                        $mapping_subsection->detail->content;
                                } else {
                                    $default_section[$section->id][$j][$subsection->subsection_name][$i] = null;
                                }
                                $i++;
                            }
                            array_push($check_subsection,$subsection->id);
                        }
                    }
                    $j++;
                }
                array_push($check_section,$section->id);
            }

        }

        foreach($default_section as $key_s => $section)
        {
            $counter_s = 0;
            foreach($section as $key_mp => $mapping_section)
            {
                $counter_mp = 0;
                foreach($mapping_section as $key_sub => $subsection)
                {
                    $counter_sub = 0;
                    foreach($subsection as $mapping_subsection)
                    {
                        if(!empty($mapping_subsection))
                        {
                            $counter_s++;
                            $counter_mp++;
                            $counter_sub++;
                        }
                    }
                    if($counter_sub == 0)
                    {
                        $default_section[$key_s][$key_mp][$key_sub] = null;
                    }
                }
                if($counter_mp == 0)
                {
                    $default_section[$key_s][$key_mp] = null;
                }
            }
            if($counter_s == 0)
            {
                $default_section[$key_s] = null;
            }
        }
        $new_section = [];
        foreach($default_section as $key => $section)
        {
            if($key > 7)
            {
                $new_section[$key] = $section;
            }
        }
        //dd($default_section);
        $pdf = PDF::loadView('resume.show',compact('resume','user','default_section','new_section'));
        return $pdf->stream();
        //return $pdf->download('resume.pdf');
        //return view('resume.show',compact('resume','user','default_section','new_section'));
    }

    public function generatePDF($id=null)
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
        $pdf = PDF::loadView('resume.show',compact('resume','user','section'));
        return $pdf->download('resume.pdf');
//        return $pdf->stream();

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
        if($subsection->flag != 0)
        {
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

    public function addNewSection($id,Request $request)
    {
        $resume = Auth::user()->resumes->find($id);
        $section = new Section;
        $section->section_name = $request->input('section_name');
        $section->flag = 2;
        $section->save();
        $subsection = new Subsection;
        $subsection->subsection_name = $request->input('subsection_name');
        $subsection->flag = 2;
        $subsection->section()->associate($section);
        $subsection->save();
        $resume->sections()->attach($section->id);
        $mapping_section = $section->mapping_sections()->where('resume_id',$resume->id)->first();
        $subsection->mapping_sections()->attach($mapping_section);

        return back();
    }

    public function deleteNewAddedSection($id,$section_id)
    {
        $user = Auth::user();
        $resume = $user->resumes->find($id);

        if($resume==null)
        {
            return redirect()->route('user.dashboard');
        }

        $section = $resume->section->find($section_id);
        $section->delete();

        return back();
    }

}
