<?php

class Database
{
  public function connect()
  {
    // task - id, task_name, task_description, task_status, task_due
    $string = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
    $con = new PDO($string, DB_USER, DB_PASS);
    return $con;
  }

  public function query($query, $data = [])
  {
    $con = $this->connect();
    $stm = $con->prepare($query);
    $check = $stm->execute($data);
    if ($check) {
      $result = $stm->fetchAll(PDO::FETCH_OBJ);
      if (is_array($result) && count($result) > 0) {
        return $result;
      }
    }
    return false;
  }
}