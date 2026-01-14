<?php

class Instruktur extends Controller {
    public function index() {
        $data['judul'] = "Instruktur";
        $data['instrukturList'] = $this->model('Instruktur_model')->getInstrukturList();

        // Data untuk dropdown di modal tambah
        $data['branchList'] = $this->model('Instruktur_model')->getBranchList();
        $data['statusList'] = $this->model('Instruktur_model')->getStatusList();
        $data['levelDanList'] = $this->model('Instruktur_model')->getLevelDanList();

        $this->view('templates/header', $data);
        $this->view('instruktur/index', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        $data['judul'] = "Tambah Instruktur";
        
        // Jika form disubmit
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Debug data yang dikirim form
            // echo '<pre>';
            // var_dump($_POST);
            // echo '</pre>';
            // die();
        
            // Setelah debugging berhasil, baru panggil ini:
            $this->model('Instruktur_model')->tambahInstruktur($_POST);
        }
        header('Location: '. BASEURL . '/instruktur');
        exit;
    }

    public function detail($idInstruktur) {
        $data['judul'] = "Detail Instruktur";
        $data['instrukturDetail'] = $this->model('Instruktur_model')->getInstrukturById($idInstruktur);
        
        // Debug: Check what's being returned
        // echo '<pre>';
        // var_dump($data['instrukturDetail']);
        // echo '</pre>';
        // die();

        $this->view('templates/header', $data);
        $this->view('instruktur/detail', $data);
        $this->view('templates/footer');
    }

    public function getUbahInstruktur() {
        echo json_encode($this->model('Instruktur_model')->getInstrukturDetail($_POST['idInstruktur']));
    }

    // public function ubahInstruktur() {
    //     $this->model('Instruktur_model')->
    // }

    public function hapus($idInstruktur) {
        $data['judul'] = "Hapus Instruktur";
        $data['instrukturHapus'] = $this->model('Instruktur_model')->deleteInstruktur($idInstruktur);

        header('Location: '. BASEURL . '/instruktur');
        exit;
    }
}