@extends('layouts.master')

@section('header')
    <div class="container">
        <h3>Work Experience</h3>
    </div>
@stop

@section('form')
    <div class="container row col s8">
        <div class="input-field col s4">
            <label for="job_title">Job Title:</label>
            {!! Form::text('job_title',null,array(
                'class' => 'validate',
                'id' => 'job_title'
            )); !!}
        </div>
        <div class="input-field col s4">
            <label for="company_name">Company Name:</label>
            {!! Form::text('company_name',null,array(
                'class' => 'validate',
                'id' => 'company_name'
            )); !!}
        </div>
    </div>
    <div class=" container row col s8">
        <div class="input-field col s4">
            <label for="start_date">Start Date:</label>
            {!! Form::text('start_date',null,array(
                'class' => 'validate',
                'id' => 'start_date'
            )); !!}
        </div>
        <div class="input-field col s4">
            <label for="end_date">End Date:</label>
            {!! Form::text('end_date',null,array(
                'class' => 'validate',
                'id' => 'end_date'
            )); !!}
        </div>
    </div>
        <div class="container input-field">
            <label for="other_info">Other Information:</label>
            {!! Form::textarea('other_info',null,array(
                'class' => 'validate',
                'id' => 'other_info'
            )); !!}
        </div><br>
        <div class="row col s8 container">
            <div class="col s4">
                {!! Form::button('delete',array(
                    'class' => 'waves-effect waves-light btn-large'
                )); !!}
            </div>
            <div class=" col s4">
                {!! Form::button('Add+',array(
                    'class' => 'waves-effect waves-light btn-large'
                )) !!}
            </div>
        </div>    
@stop