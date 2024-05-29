<?php
// ATODs AOTD $aotd aotds
class AOTDs extends Controller
{
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }
    
    $aotd = new AOTD();

    $data = $aotd->findAll();

    $this->view('aotds/index', [
      'aotds' => $data
    ]);
  }

  public function create()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }
    $errors = [];
    $aotd = new AOTD();

    if (count($_POST) > 0) {

      if ($aotd->validate($_POST)) {

        $aotd->insert($_POST);

        redirect('aotds');
      } else {
        $errors = $aotd->errors;
      }
    }


    $this->view('aotds/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new AOTD();
    $arr['id'] = $id;
    $data = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('aotds');
    }

    $this->view('aotds/edit', [
      'row' => $data
    ]);
  }

  public function delete($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new AOTD();
    $arr['id'] = $id;
    $data = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('aotds');
    }

    $this->view('aotds/delete', [
      'row' => $data
    ]);
  }
}