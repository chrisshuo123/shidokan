<?php

class Sponsor extends Controller {
    public function index() {
        $data['judul'] = "Our Sponsors";
    
        $this->view('templates/header', $data);
        $this->view('8_sponsors/index', $data);
        $this->view('templates/footer');
    }

    public function merchandise() {
        $data['judul'] = "Merchandise";
    
        $this->view('templates/header', $data);
        $this->view('8_sponsors/merchandise', $data);
        $this->view('templates/footer');
    }

    public function ourPartner() {
        $data['judul'] = "Our Partner";
    
        $this->view('templates/header', $data);
        $this->view('8_sponsors/ourPartner', $data);
        $this->view('templates/footer');
    }
}