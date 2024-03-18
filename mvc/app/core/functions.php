<?php

function show($stuff)
{
    echo '<pre';
    print_r(explode('/', $_GET['url']));
    echo '</pre>';
}