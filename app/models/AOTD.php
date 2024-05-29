<?php

class AOTD extends Model
{
  public function validate($dataevent)
  {
    $this->errors = [];

    if (empty($dataevent['id'])) {

      $this->errors['id'] = 'Id is requred';
    }
    if (empty($dataevent['title'])) {

      $this->errors['title'] = 'Name is requred';
    }

    if (empty($dataevent['description'])) {

      $this->errors['description'] = 'Description is required';
    }

    if (count($this->errors) == 0) {
      return true;
    }
    return false;
  }
}