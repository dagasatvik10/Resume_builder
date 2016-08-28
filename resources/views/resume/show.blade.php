@extends('layouts.resume_show')

@section('link')
	@include('templates.css._resume_show_'.$resume_design)
    {{--<link href="{{ asset('/css/template2.css') }}">--}}
@stop

@section('section')
    @include('templates.html.resume_show_'.$resume_design)
@stop
