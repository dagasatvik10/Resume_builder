@extends('layouts.master')

@section('header')
    <h2>Personal Details</h2>
@stop

@section('form')
    <div id="address">
        <label>Address:</label>
        {!! Form::text('address') !!}
    </div>
    <div id="phone_num">
        <label>Phone Number:</label>
        {!! Form::text('phone_num') !!}
    </div>
    <div id="father_name">
        <label>Father's Name:</label>
        {!! Form::text('father_name') !!}
    </div>
    <div id="country">
        <label>Country:</label>
        {!! Form::text('country') !!}
    </div>
    
@stop