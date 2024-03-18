<?php

class Model extends Database{
    public function findAll()
    {
        $query = "Select * from users";

        $result = $this->query($query);
        if($result){
            return $result;
        }
        return false;
    }
}