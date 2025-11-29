<?php

class Shibucho extends Controller {
    public function index() {
        $data['judul'] = "Voice From Shibucho";
    
        $this->view('templates/header', $data);
        $this->view('7_voiceFromShibucho/index', $data);
        $this->view('templates/footer');
    }

    public function joinUs() {
        $data['judul'] = "Join Us";

        $this->view('templates/header', $data);
        $this->view('7-voiceFromShibucho/joinUs', $data);
        $this->view('templates/footer');
    }

    public function tataTertib() {
        $data['judul'] = "Tata Tertib Dojo";

        $this->view('templates/header', $data);
        $this->view('7-voiceFromShibucho/tataTertib', $data);
        $this->view('templates/footer');
    }
}