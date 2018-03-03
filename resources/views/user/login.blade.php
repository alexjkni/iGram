@extends('layouts.app')

@section('content')
{{ Form::open(['url' => '/login']) }}
{{ Form::label('username', 'Username') }}
{{ Form::text('username', '', array('class' => 'form-control')) }}
{{ Form::label('password', 'Password') }}
{{ Form::password('password', array('class' => 'form-control')) }}
{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
@include('includes.form-errors')
{{ Form::close() }}
@endsection
