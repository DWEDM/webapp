<?php

class Controller
{
    public function view($name)
    {
        if(file_exists('../app/views/' . $name . '.php'))
        {
            require '../app/views/'. $name .'.php';
        }
        else
        {
            require '../app/views/_404.php';
        }
    }
}