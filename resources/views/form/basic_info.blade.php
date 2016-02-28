@extends('users.master')

@section('header')
    <h1>Login</h1>
@stop

@section('form')
    <div id="name">
        <label>Name:</label>
        {!! Form::text('name') !!}
    </div>
    <div id="email">
        <label>Email</label>
        {!! Form::text('email') !!}
    </div>
    <br>
    {!! Form::checkbox('password') !!}
    <label>Password (only if you want to register)</label>
    <div id="password">
        <label>Password:</label>
        {!! Form::password('password') !!}
    </div>
    <div id="websites">
        <label>Websites:</label>
        {!! Form::text('websites') !!}
        {!! Form::button('Add+') !!}
    </div>
@stop