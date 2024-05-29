<?php

function show($stuff)
{
  echo '<pre>';
  print_r($stuff);
  echo '</pre>';
}

function redirect($path)
{
  header("Location: " . ROOT . "/" . $path);
}

function get_var($key)
{
  if (isset($_POST[$key])) {
    return $_POST[$key];
  }
}

function get_select($key, $value)
{
  if (isset($_POST[$key])) {

    if ($_POST[$key] == $value) {
      return "selected";
    }
  }
  return "";
}