<?php

class Users extends Controller
{
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $user = new User();
    $data = $user->findAll();

    $this->view('users/index', [
      'users' => $data
    ]);
  }

  public function create()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $errors = [];
    $user = new User();

    if (count($_POST) > 0) {

      if ($user->validate($_POST)) {

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user->insert($_POST);

        redirect('users');
      } else {
        $errors = $user->errors;
      }
    }


    $this->view('users/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new User();
    $arr['id'] = $id;
    $data = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('users');
    }

    $this->view('users/edit', [
      'row' => $data
    ]);
  }

  public function delete($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new User();
    $arr['id'] = $id;
    $data = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('users');
    }

    $this->view('users/delete', [
      'row' => $data
    ]);
  }
}