<?php

class Tasks extends Controller
{
  public function index()
  {
    $task = new Task();
    $data = $task->findAll();

    $this->view('tasks/index', [
      'tasks' => $data
    ]);
  }

  public function create()
  {
    $x = new Task();

    if (count($_POST) > 0) {

      // $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

      $x->insert($_POST);

      redirect('tasks');
    }


    $this->view('tasks/create');
  }

  public function edit($id)
  {
    $x = new Task();
    $arr['id'] = $id;
    $data = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('tasks');
    }

    $this->view('tasks/edit', [
      'row' => $data
    ]);
  }

  public function delete($id)
  {
    $x = new Task();
    $arr['id'] = $id;
    $data = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('tasks');
    }

    $this->view('tasks/delete', [
      'row' => $data
    ]);
  }
}