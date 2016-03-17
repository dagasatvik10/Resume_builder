<?php

namespace App\Http\Controllers;

use App\Mapping_section;
use App\Resume;
use App\Section;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
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

        $mapping_sections = $resume->mapping_sections;
        foreach($mapping_sections as $mapping_section)
        {
            $sections = $mapping_section->sections;
            dd($sections);
            $subsections = $section->subsections;
            foreach($subsections as $subsection)
            {
                $subsection->mapping_section()->attach($mapping_section->id);
            }
        }


        return redirect()->route('resume.create');
    }

    public function create()
    {
        return view('resume');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
