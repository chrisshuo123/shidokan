<?php

class Dojo extends Controller {
    public function index() {
        $data['judul'] = "Dojo";
        $data['dojoList'] = $this->model('Dojo_model')->getDojoList();
    
        $this->view('templates/header', $data);
        $this->view('dojo/index', $data);
        $this->view('templates/footer');
    }
}