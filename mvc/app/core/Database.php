<?php

class Database {
    public function connect()
    {
        $string = "mysql:host=localhost;dbname=mvc_bsis3g";
        $con = new PDO($string, 'root', '');
        return $con;
    }
}