@extends('layouts.master')

@section('header')
    <div class="container">
        <h3>Personal Details</h3>
    </div>
@stop

@section('form')
    <div class="container input-field col s6">
        {!! Form::text('address',null,array(
            'id' => 'address',
            'class' => 'validate'
        )); !!}
        <label for="address">Address:</label>
    </div>
    <div class="container input-field col s6">
        {!! Form::text('phone_num',null,array(
            'id' => 'phone_num',
            'class' => 'validate'
        )); !!}
        <label for="phone_num">Phone Number:</label>
    </div>
    <div class="container input-field col s6">
        {!! Form::text('father_name',null,array(
            'id' => 'father_name',
            'class' => 'validate'
        )); !!}
        <label for="father_name">Father's Name:</label>
    </div>
    <div class="container input-field col s6">
        {!! Form::text('country',null,array(
            'id'=>'country',
            'class' => 'validate'
        )); !!}
        <label for="country">Country:</label>
    </div>
    
@stop