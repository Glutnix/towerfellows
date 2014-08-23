@if (Route::currentRouteName() !== "login" )
  <ul class="nav navbar-nav navbar-right">

  @if (Auth::check())

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="nav-gravatar">
          {{ Gravatar::image(Auth::user()->email, null, ['width' => 30]) }}
        </span>
        {{ Auth::user()->username }}
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right" role="menu">
        <li>
          <a href="#">
            <span class="gravatar">
              {{ Gravatar::image(Auth::user()->email) }}
            </span>
            {{ Auth::user()->username }}
          </a>
        </li>
        <li class="divider"></li>
        <li>{{ link_to_route('logout', 'Log out') }}</li>
      </ul>
    </li>

  @else

    <li><a href="/users/sign_up">Sign Up</a></li>
    <li class="divider-vertical"></li>
    <li class="dropdown">
      <a id="nav-sign-in" class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
      <ul class="dropdown-menu dropdown-menu-right">
        <!-- Login form here -->
        <li>
          {{ Form::open(['route' => 'sessions.store', 'class' => '', 'role' => 'form', 'id' => 'nav-sign-in-form']) }}

            <div class="form-group">
              {{ Form::email('email', "", ['placeholder' => 'Email', 'class' => 'form-control']) }}
            </div>
            <div class="form-group">
              {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
            </div>
            <div class="checkbox">
              {{ Form::checkbox('remember_me', '1', true, ['id' => 'remember_me']) }}
              {{ Form::label('remember_me', 'Keep me logged in')}}
            </div>
            {{ Form::submit('Sign In', ['class' => 'btn btn-success btn-block']) }}

          {{ Form::close() }}
        </li>
      </ul>
    </li>

  @endif

  </ul>


@endif