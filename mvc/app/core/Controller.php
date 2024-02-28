<?php

class Controller
{
    public funtion view($name)
    {
        if(file_exist('../app/views/' . $name . '.php'))
        {
            require '../app/views/'. $name .'.php';
        }
        else
        {
            require '../app/views/404.php';
        }
    }
}