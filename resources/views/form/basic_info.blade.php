@extends('layouts.master')

@section('header')
    <div class="container">
        <h3>Login</h3>   
    </div>
@stop

@section('form')
    <div class="container">
    <div class="input-field col s6">
        {!! Form::text('name',null,array(
            'class'=> 'validate',
            'id' => 'name'
        )); !!}
        <label for="name">Name:</label>
    </div>
    <div class="input-field col s6">
        {!! Form::text('email',null,array(
            'class' => 'validate',
            'id' => 'email'
        )); !!}
        <label for="email">Email</label>
    </div>
    <br>
    {!! Form::checkbox('password',null,array(
        'id' => 'pw'
    )); !!}
    <label for="pw">Password (only if you want to register)</label>
    <div class="input-field col s6">
        {!! Form::password('password',null,array(
            'class' => 'validate',
            'id' => 'password'
        )); !!}
        <label for="password">Password:</label>
    </div>
    <div class="input-field col s6">
        {!! Form::text('websites',null,array(
            'class' => 'validate',
            'id' => 'websites'
        )); !!}
        <label for="websites">Websites:</label>
        {!! Form::button('Add+',array(
            'class' => 'waves-effect waves-light btn-large'
        )); !!}
    </div>
    </div>       
@stop