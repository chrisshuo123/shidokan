<?php

class About extends Controller {
    public function index() {
        $data['judul'] = "About Us";

        $this->view('templates/header', $data);
        $this->view('3_about/index', $data);
        $this->view('templates/footer');
    }

    public function profile() {
        $data['judul'] = "Profile";

        $this->view('templates/header', $data);
        $this->view('3_about/profile', $data);
        $this->view('templates/footer');
    }

    public function profile1() {
        $data['judul'] = "profile 1";

        $this->view('templates/header', $data);
        $this->view('3_about/profile1', $data);
        $this->view('templates/footer');
    }

    public function sejarah() {
        $data['judul'] = "Sejarah";

        $this->view('templates/header', $data);
        $this->view('3_about/sejarah', $data);
        $this->view('templates/footer');
    }
}