@extends('layouts.master')

@section('content')


  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
        <h2>Login</h2>
        {{ Form::open(['route'=>'sessions.store']) }}
          {{ $errors->first('login', '<div class="alert alert-danger" role="alert">:message</div>') }}
          <div class="form-group">
              {{ Form::label('email', 'Email') }}
              {{ Form::email('email', null, ['class' => 'form-control']) }}
          </div>
          <div class="form-group">
              {{ Form::label('password', 'Password') }}
              {{ Form::password('password', ['class' => 'form-control']) }}
          </div>
          <div class="checkbox">
            {{ Form::checkbox('remember_me', '1', true, ['id' => 'remember_me']) }}
            {{ Form::label('remember_me', 'Keep me logged in on this computer')}}
          </div>
          <div>
              {{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
          </div>
        {{ Form::close() }}
      </div>
    </div>

  </div> <!-- /container -->

@stop