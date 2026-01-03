<?php

class Instruktur extends Controller {
    public function index() {
        $data['judul'] = "Instruktur";
        $data['instrukturList'] = $this->model('Instruktur_model')->getInstrukturList();

        $this->view('templates/header', $data);
        $this->view('instruktur/index', $data);
        $this->view('templates/footer');
    }

    public function detail() {
        $data['judul'] = "Detail Instruktur";

        $this->view('templates/header', $data);
        $this->view('instruktur/detail', $data);
        $this->view('templates/footer');
    }
}