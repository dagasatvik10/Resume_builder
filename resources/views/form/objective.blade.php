@extends('layouts.master')

@section('header')
    <div class="container">
    	<h3>Objective</h3>
    </div>
@stop

@section('form')
    <div class="container input-field col s6">
        {!! Form::textarea('objective',null,array(
        	'id' => 'objective',
        	'class' => 'validate'
        )); !!}
        <label for="objective">Objective:</label>
    </div>
@stop