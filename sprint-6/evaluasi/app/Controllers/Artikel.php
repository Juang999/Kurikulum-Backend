<?php

class Artikel extends Controller
{
    public function index()
    {
        $data['judul'] = "Tulis Artikel";
        $this->view('Tamplates/HeaderArt', $data);
        $this->view('Artikel/tulis');
        $this->view('Tamplates/footer');
    }

    public function Tambah(){
        if ($this->model('tampil_model')->tambahArtikel($_POST) > 0) {
            header("Location: ".BASEURL."/Home");
            exit;
        }
    }

    public function Ubah($id){
        $data['judul'] = 'Ubah Artikel';
        $data['Artikel'] = $this->model('tampil_model')->pilihData($id);
        $this->view('Tamplates/HeaderArt', $data);
        $this->view('Artikel/Ubah', $data);
        $this->view('Tamplates/FooterArt');

    }

    public function GetUbah(){
        if ($this->model('tampil_model')->ubah($_POST) > 0) {
            header("location:".BASEURL."/Home");
        }
    }

    public function Hapus(){
        if ($this->model('tampil_model')->hapus($_POST) > 0) {
            header("location:".BASEURL."/Home");
            exit;
        }
    }

    public function Baca_Lagi($id){
        $data['judul'] = "Detail";
        $data['detail'] = $this->model('tampil_model')->pilihData($id);
        $this->view('Tamplates/HeaderDet', $data);
        $this->view('Artikel/Detail', $data);
        $this->view('Tamplates/FooterDet');
    }
    

}

?>