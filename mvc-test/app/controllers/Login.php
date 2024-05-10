<?php

class Login extends Controller
{
  public function index()
  {
    $errors = [];
    $user = new User();

    if (count($_POST) > 0) {

      $arr['email'] = $_POST['email'];

      $row = $user->first($arr);

      if ($row) {

        if (password_verify($_POST['password'], $row->password)) {

          Auth::authenticate($row);

          redirect('home');
        } else {

          $errors['errors'] = 'Email or Password is invalid';
        }
      } else {

        $errors['errors'] = 'Email or Password is invalid';
      }
    }


    $this->view('login', [
      'errors' => $errors
    ]);
  }
}