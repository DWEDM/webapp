<?php

class Events extends Controller
{
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }
    
    $event = new Event();

    $data = $event->findAll();

    $this->view('events/index', [
      'events' => $data
    ]);
  }

  public function create()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }
    $errors = [];
    $event = new Event();

    if (count($_POST) > 0) {

      if ($event->validate($_POST)) {

        $event->insert($_POST);

        redirect('events');
      } else {
        $errors = $event->errors;
      }
    }


    $this->view('events/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Event();
    $arr['id'] = $id;
    $data = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('events');
    }

    $this->view('events/edit', [
      'row' => $data
    ]);
  }

  public function delete($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Event();
    $arr['id'] = $id;
    $data = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('events');
    }

    $this->view('events/delete', [
      'row' => $data
    ]);
  }
}