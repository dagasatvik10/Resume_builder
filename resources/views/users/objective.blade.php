@extends('users.master')

@section('header')
    <h2>Objective</h2>
@stop

@section('form')
    <div id="objective">
        <label>Objective:</label><br>
        {!! Form::textarea('objective') !!}
    </div>
@stop