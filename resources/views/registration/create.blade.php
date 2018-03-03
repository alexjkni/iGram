@extends('layouts.app')

@section('page-title', 'Register')

@section('content')
<h1>User Registration</h1>
{{ Form::open(['url' => 'register']) }}
{{ Form::label('username', 'Username') }}
{{ Form::text('username', 'Test', array('class' => 'form-control')) }}
{{ Form::label('email', 'Email') }}
{{ Form::email('email', 'test@test.co.uk', array('class' => 'form-control')) }}
{{ Form::label('password', 'Password') }}
{{ Form::password('password', array('class' => 'form-control')) }}
{{ Form::label('passwordConfirmation', 'Password Confirmation') }}
{{ Form::password('passwordConfirmation', array('class' => 'form-control')) }}
{{ Form::submit('Register', array('class' => 'btn btn-primary')) }}
@include('includes.form-errors')
{{ Form::close() }}
@endsection
