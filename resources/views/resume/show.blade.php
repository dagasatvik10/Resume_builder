@extends('layouts.master')

@section('section')
    <div class="container" style="margin-top: 100px;">
        @foreach($resume->sections as $section)
            <div id={{ 'section_'.$section->id }}>
                <div class="row" style="font-weight: bold; font-size: 25px; ">{{ $section->section_name }}</div><br>
                <div class="" style="font-size: 25px;">  @foreach($section->mapping_sections()->where('resume_id',$resume->id)->get() as $mapping_section)
                </div>
                    <div class="mapping_section" style="margin-left: 50px;">
                        @foreach($mapping_section->subsections as $subsection)
                            <div  id={{ 'subsection_'.$subsection->id }}>
                                <div class="row" style="font-size: 25px; font-weight: bold;">{{ $subsection->subsection_name }}</div>
                                @foreach($subsection->detail()->where('mapping_subsection_id',$subsection->pivot->id)->get() as $detail)
                                    <div class="" style="font-size: 25px;">{{ $detail->content }}</div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @endforeach<br>
            </div>
        @endforeach
    </div>
@stop