<?php

class Instruktur extends Controller {
    public function index() {
        $data['judul'] = "Instruktur";
        $data['instrukturList'] = $this->model('Instruktur_model')->getInstrukturList();

        $this->view('templates/header', $data);
        $this->view('instruktur/index', $data);
        $this->view('templates/footer');
    }

    public function detail($idInstruktur) {
        $data['judul'] = "Detail Instruktur";
        $data['instrukturDetail'] = $this->model('Instruktur_model')->getInstrukturDetail($idInstruktur);

        // Debug: Check what's being returned
        // echo '<pre>';
        // var_dump($data['instrukturDetail']);
        // echo '</pre>';
        // die();

        $this->view('templates/header', $data);
        $this->view('instruktur/detail', $data);
        $this->view('templates/footer');
    }
}