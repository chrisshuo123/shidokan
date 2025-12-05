<?php

class ContactDojo extends Controller {
    public function index() {
        $data['judul'] = "Contact & Dojo List";
    
        $this->view('templates/header', $data);
        $this->view('6_contactDojo/index', $data);
        $this->view('templates/footer');
    }
}