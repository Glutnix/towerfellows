<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {{ link_to_route("home", "Towerfellows", null, ['class' => "navbar-brand"]) }}
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        {{ HTML::navlink("home", "Home") }}
      </ul>
      @include('nav.usermenu')
    </div><!--/.navbar-collapse -->
  </div>
</div>