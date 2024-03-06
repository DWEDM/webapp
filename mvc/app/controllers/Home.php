<?php

class Home extends Controller
{
    // controller -> method ->> ahfajklsdf nicesuuu cyka blyaddd
    public function index()
    {
        $model = new Model();

        $data = $model->findAll();
        show($data);

        $this->view('home');
    }
}