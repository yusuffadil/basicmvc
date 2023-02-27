<?php

class Mahasewa extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Mahasewa';
        $data['mhs'] = $this->model('Mahasewa_model')->getAllMahasewa();

        $this->view('templates/header', $data);
        $this->view('mahasewa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Daftar Mahasewa';
        $data['mhs'] = $this->model('Mahasewa_model')->getAllMahasewaById($id);

        $this->view('templates/header', $data);
        $this->view('mahasewa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        if($this->model('Mahasewa_model')->tambahDataMahasewa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasewa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasewa');
            exit;
        }
    }

    public function hapus($id) {
        if($this->model('Mahasewa_model')->hapusDataMahasewa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasewa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasewa');
            exit;
        }
    }
}