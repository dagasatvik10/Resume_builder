@extends('layouts.master')

@section('header')
    <h2>Project</h2>
@stop

@section('form')
    <div id="project_name">
        <label>Project Name:</label>
        {!! Form::text('project_name') !!}
    </div>
    <div id="project_status">
        <label>Project Status:</label>
         {!! Form::select('project_status', array('d' => 'Deployed', 'u' => 'Undeployed')); !!}
    </div>
    <div id="add">
        {!! Form::button('Add+') !!}
    </div>
    <div id="delete">
        {!! Form::button('Delete') !!}
    </div>
@stop
