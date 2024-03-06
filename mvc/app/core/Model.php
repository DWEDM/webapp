<?php

class Model extends Database{
    public function findAll()
    {
        $query = "select * from users";

        $result = $this->query($query);
        if($result){
            return $result;
        }
        return false;
    }
}