<?php

class Featureds extends Controller
{
  // Featureds Featured $featured featureds
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }
    
    $featured = new Featured();

    $data = $featured->findAll();

    $this->view('featureds/index', [
      'featureds' => $data
    ]);
  }

  public function create()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }
    $errors = [];
    $featured = new Featured();

    if (count($_POST) > 0) {

      if ($featured->validate($_POST)) {

        $featured->insert($_POST);

        redirect('featureds');
      } else {
        $errors = $featured->errors;
      }
    }


    $this->view('featureds/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Featured();
    $arr['id'] = $id;
    $data = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('featureds');
    }

    $this->view('featureds/edit', [
      'row' => $data
    ]);
  }

  public function delete($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Featured();
    $arr['id'] = $id;
    $data = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('featureds');
    }

    $this->view('featureds/delete', [
      'row' => $data
    ]);
  }
}