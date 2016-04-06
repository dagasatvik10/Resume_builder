@extends('layouts.master')

@section('section')
    <div class="container">
        @foreach($resume->sections as $section)
            <div class="row" id={{ 'section_'.$section->id }}>
                <div class="col-sm-4" style="font-weight: bold; font-size: 30px;">{{ $section->section_name }}</div>
                <div class="col-sm-7" style="font-size: 25px;">@foreach($section->mapping_sections()->where('resume_id',$resume->id)->get() as $mapping_section)</div>
                    <div class="mapping_section row">
                        @foreach($mapping_section->subsections as $subsection)
                            <div  id={{ 'subsection_'.$subsection->id }}>
                                <div class="col-sm-4" style="font-size: 25px; font-weight: bold;">{{ $subsection->subsection_name }}</div>
                                @foreach($subsection->detail()->where('mapping_subsection_id',$subsection->pivot->id)->get() as $detail)
                                    <div class="col-sm-8" style="font-size: 25px;">{{ $detail->content }}</div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@stop

@section('footer')
    <footer class="container-fluid panel-footer" style="margin-top: 50px;">
        <ul style="list-style: none; text-align: center;">
            <li style="display: inline;"><a href="www.facebook.com/softwareincubator"><img src="img/fb.png" class="f_img"></a></li>
            <li style="display: inline;"><img src="img/twitter.png"class="f_img"></li>
            <li style="display: inline;"><img src="img/google.png" class="f_img"></li>
        </ul>
        <div style="text-align: center;">ResumeBuilder-2016 &copy; @ Software Incubator.</div>
    </footer>
@stop