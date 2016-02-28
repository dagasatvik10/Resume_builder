@extends('layouts.master')

@section('header')
    <div class="container">
        <h3>Education</h3>
    </div>
    
@stop

@section('form')
    <div class="row container">
        <div class="input-field col s4">
           {!! Form::text('course_name',null,array(
                'class' => 'validate',
                'id' => 'course_name'
           )); !!}
            <label for="course_name">Course Name:</label>
        </div>
        <div class="input-field col s4">
            {!! Form::text('institution_name',null,array(
                'class' => 'validate',
                'id' => 'institution_name'
            )); !!}
            <label for="institution_name">Institution Name:</label>
        </div>
    </div>
    <div class="row container">
        <div class="input-field col s4">
            {!! Form::text('passing_year',null,array(
                'class' => 'validate',
                'id' => 'passing_year'
            )); !!}
            <label for="passing_year">Passing Year:</label>
        </div>
        <div class="input-field col s4">
            {!! Form::text('marks',null,array(
                'class' => 'validate',
                'id' => 'marks'
            )); !!}
            <label for="marks">Marks:</label>
        </div>
    </div>
    <div class="container"> 
    {!! Form::button('Add+',array(
        'class' => 'waves-effect waves-light btn-large'
    )); !!}
    
    {!! Form::button('Delete',array(
        'class' => 'waves-effect waves-light btn-large'
    )); !!}
    </div>
    <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
@stop