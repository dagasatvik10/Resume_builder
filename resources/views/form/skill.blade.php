@extends('layouts.master')

@section('header')
    <div class="container">
    	<h2>Skills</h2>
    </div>
@stop

@section('form')
    <div class="container input-field col s6">
        {!! Form::text('skills',null,array(
        	'id' => 'skill',
        	'class' => 'validate'
        )); !!}
        <label for="skill">Skills:</label>
    </div>
    <div class="container">
        {!! Form::button('Add+',array(
        	'class' => 'waves-effect waves-light btn-large'
        )); !!}
    </div>
@stop