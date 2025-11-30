<?php

class Home extends Controller {
    public function index() {
        $data['judul'] = "Home";

        $this->view('templates/header', $data);
        $this->view('1_home/index', $data);
        $this->view('templates/footer');
    }
}