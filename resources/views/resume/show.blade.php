@extends('layouts.resume_show')

@section('link')
	@include('templates.css._resume_show_'.$resume_design)
@stop

@section('section')
    @if($resume_design!=2)
        @include('templates.html.resume_show_4')
    @else
        @include('templates.html.resume_show_2')
    @endif
@stop
