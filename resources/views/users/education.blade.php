@extends('users.master')

@section('Header')
    <h2>Education</h2>
@stop

@section('form')
    <div id="course_name">
        <label>Course Name:</label>
        {!! Form::text('course_name') !!}
    </div>
    <div id="institution_name">
        <label>Institution Name:</label>
        {!! Form::text('institution_name') !!}
    </div>
    <div id="passing_year">
        <label>Passing Year:</label>
        {!! Form::date('passing_year') !!}
    </div>
    <div id="marks">
        <label>Marks:</label>
        {!! Form::number('marks') !!}.{!! Form::number('marks') !!}
    </div>
    {!! Form::button('Add+')!!}
    <br><br>
    {!! Form::button('Delete') !!}
@stop