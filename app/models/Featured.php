<?php

class Featured extends Model
{
  public function validate($dataevent)
  {
    $this->errors = [];

    if (empty($dataevent['id'])) {

      $this->errors['id'] = 'Event id is requred';
    }
    if (empty($dataevent['title'])) {

      $this->errors['title'] = 'Event name is requred';
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