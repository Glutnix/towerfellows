<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        @yield('title', "Towerfellows")
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{ HTML::style( asset('css/bootstrap.min.css') ) }}
    {{ HTML::style( asset('css/bootstrap-theme.min.css') ) }}

    {{ HTML::style( asset('css/main.css') ) }}

    {{ HTML::script( asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') ) }}

  </head>
  <body>
      <!--[if lt IE 7]>
          <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->

      @include('nav.nav')

    @yield('content')

<!--     <div class="container">
      <hr>
      <footer>
        <p>&copy; Brett Taylor 2014</p>
      </footer>
    </div>
 -->
    {{ HTML::script( '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>


    {{ HTML::script( asset('js/vendor/bootstrap.min.js') ) }}
    {{ HTML::script( asset('js/plugins.js') ) }}
    {{ HTML::script( asset('js/main.js') ) }}

  </body>
</html>
