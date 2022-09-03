<?php
spl_autoload_register(function ($path) {
  $path = $path . '.php';
  var_dump("path : ${path}");
  require_once $path;
});