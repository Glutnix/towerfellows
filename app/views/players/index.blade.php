@extends('layouts.master')

@section('content')

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2>Players</h2>
        <ul>
          @foreach($users as $user)
            <li>{{ $user->username }}</li>
          @endforeach
        </ul>
      </div>
    </div>

  </div> <!-- /container -->

@stop