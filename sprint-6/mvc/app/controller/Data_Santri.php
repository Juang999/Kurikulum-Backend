<?php

class Data_Santri extends Controller
{
    public function index(){
        $data['judul'] = 'Daftar Santri';
        $data['Data_Santri'] = $this->model('Santri_Model')->getAllSantri();
        $this->view('tamplates/header', $data);
        $this->view('Daftar_Santri/index', $data);
        $this->view('tamplates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Santri';
        $data['Data_Santri'] = $this->model('Santri_Model')->getSantriById($id);
        $this->view('tamplates/header', $data);
        $this->view('Daftar_Santri/Detail', $data);
        $this->view('tamplates/footer');
    }

    public function tambah(){
        if($this->model('Santri_Model')->tambahDataSantri($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/Data_Santri');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/Data_Santri');
            exit;
        }
    }

    public function hapus($id){
        if($this->model('Santri_Model')->hapusDataSantri($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/Data_Santri');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/Data_Santri');
            exit;
        }
    }

    public function getUbah(){
       echo json_encode($this->model('Santri_Model')->getSantriById($_POST['id']));
    }

    public function ubah(){
        if($this->model('Santri_Model')->ubahDataSantri($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/Data_Santri');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . '/Data_Santri');
            exit;
        }
    }

    public function cari(){
        $data['judul'] = 'Daftar Santri';
        $data['Data_Santri'] = $this->model('Santri_Model')->cariDataSantri();
        $this->view('tamplates/header', $data);
        $this->view('Daftar_Santri/index', $data);
        $this->view('tamplates/footer');
    }
}

?>