@extends('users.master')

@section('header')
    <?php // dd('Work Experience'); ?>
@stop

@section('form')
    <div id="job_title">
        <label>Job Title:</label>
        {!! Form::text('job_title') !!}
    </div>
    <div id="company_name">
        <label>Company Name:</label>
        {!! Form::text('company_name') !!}
    </div>
    <div id="start_date">
        <label>Start Date:</label>
        {!! Form::date('start_date') !!}
    </div>
    <div id="end_date">
        <label>End Date:</label>
        {!! Form::date('end_date') !!}
    </div>
    <div id="other_info">
        <label>Other Information:</label>
        {!! Form::textarea('other_info') !!}
    </div>
    <div id="delete">
        {!! Form::button('delete') !!}
    </div>
    <div id="save">
        {!! Form::button('save') !!}
    </div>

    
@stop