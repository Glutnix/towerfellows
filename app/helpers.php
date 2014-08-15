<?php

HTML::macro('navlink', function($route, $text, $classes = "") {

  $active = '';

  if( Route::currentRouteName() == $route ) {
    $active = "active";
  }

  $class_attribute = "";

  $class_attribute = trim($active . ' ' . $classes);

  if (strlen($class_attribute) > 0) {
    $class_attribute = " class='" . $class_attribute . "'";
  }

  $route_url = URL::route($route);

  return '<li' . $class_attribute . '>' . link_to($route_url, $text) . '</li>';
});

