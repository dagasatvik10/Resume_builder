@extends('layouts.master')

@section('header')
    <div class="container"><h2>Project</h2>
    </div>
@stop

@section('form')
    <div class="row col s8 container">
       <div class="input-field col s4">
        {!! Form::text('project_name',null,array(
            'id' => 'project_name',
            'class' => 'validate'
        )); !!}
        <label for="project_name">Project Name:</label>
    </div>
    <div class="input-field col s4">
        <!--{!! Form::select('project_status', array(
        'd' => 'Deployed', 
        'u' => 'Undeployed',
         )); !!}-->
        <select>
          
          <option value="D">Deployed</option>
          <option value="U">Underdeployment</option>
        </select>
        <label>Project Status:</label>
        
    </div>
    </div>   
    <div class="container input-field col s4">
        {!! Form::button('Add+',array(
            'class' =>'waves-effect waves-light btn-large'
        )); !!}
    </div>
    <div class="container input-field col s4">
        {!! Form::button('Delete', array(
            'class' => 'waves-effect waves-light btn-large'
        )); !!}
    </div>  
@stop
