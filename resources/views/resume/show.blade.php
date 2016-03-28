@extends('layouts.master')

@section('section')
    <div class="container">
        @foreach($resume->sections as $section)
            <div id={{ 'section_'.$section->id }}>
                <h3>{{ $section->section_name }}</h3>
                @foreach($section->mapping_sections()->where('resume_id',$resume->id)->get() as $mapping_section)
                    <div class="mapping_section">
                        @foreach($mapping_section->subsections as $subsection)
                            <div class="row" id={{ 'subsection_'.$subsection->id }}>
                                <h5>{{ $subsection->subsection_name }}</h5>
                                @foreach($subsection->detail()->where('mapping_subsection_id',$subsection->pivot->id)->get() as $detail)
                                    <div class="col s12">{{ $detail->content }}</div>
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
    <footer>
        <div class="row card-panel #212121 grey darken-4 #fafafa grey-text text-lighten-5">
            <div class="col s8">
                Resume Builder &copy; Software Incubator 2016.
                All rights Reserved
            </div>
            <div class="col s2">Terms and Policy</div>
            <div class="col s2">
                Contact
            </div>
        </div>
    </footer>
@stop