<?php

class Dojo extends Controller {
    public function index() {
        $data['judul'] = "Dojo List";
    
        $this->view('templates/header', $data);
        $this->view('5_dojo/index', $data);
        $this->view('templates/footer');
    }
}