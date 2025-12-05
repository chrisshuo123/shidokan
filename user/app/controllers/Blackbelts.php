<?php

class Blackbelts extends Controller {
    public function index() {
        $data['judul'] = "Blackbelt Lists";
    
        $this->view('templates/header', $data);
        $this->view('4_blackbelts/index', $data);
        $this->view('templates/footer');
    }
    public function shodan() {
        $data['judul'] = "Shodan Blackbelt";

        $this->view('templates/header', $data);
        $this->view('4_blackbelts/1_shodan', $data);
        $this->view('templates/footer');
    }

    public function nidan() {
        $data['judul'] = "Nidan Blackbelt";

        $this->view('templates/header', $data);
        $this->view('4_blackbelts/2_nidan', $data);
        $this->view('templates/footer');
    }

    public function sandan() {
        $data['judul'] = "Sandan Blackbelt";

        $this->view('templates/header', $data);
        $this->view('4_blackbelts/3_sandan', $data);
        $this->view('templates/footer');
    }

    public function yondan() {
        $data['judul'] = "Yondan Blackbelt";

        $this->view('templates/header', $data);
        $this->view('4_blackbelts/4_yondan', $data);
        $this->view('templates/footer');
    }

    public function godan() {
        $data['judul'] = "Godan Blackbelt";

        $this->view('templates/header', $data);
        $this->view('4_blackbelts/5_godan', $data);
        $this->view('templates/footer');
    }
}