<?php

class Instruktur extends Controller {
    public function index() {
        $data['judul'] = "Instruktur";

        $this->view('templates/header', $data);
        $this->view('instruktur/index', $data);
        $this->view('templates/footer');
    }
}