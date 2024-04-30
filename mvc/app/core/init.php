<?php

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';

spl_autoload_register(function ($class_name) {

  require '../app/models/' . $class_name . '.php';
});