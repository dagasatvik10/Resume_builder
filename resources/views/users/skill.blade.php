@extends('users.master')

@section('header')
    <h2>Skills</h2>
@stop

@section('form')
    <div id="skills">
        <label>Skills:</label>
        {!! Form::text('skills') !!}
    </div>
    <div id="add">
        {!! Form::button('Add+') !!}
    </div>
@stop