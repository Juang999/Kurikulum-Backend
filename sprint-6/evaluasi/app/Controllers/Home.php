<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Beranda';
        $data['artikel'] = $this->model('tampil_model')->getALlArtikel();
        $this->view('Tamplates/header', $data);
        $this->view('Home/index', $data);
        $this->view('Tamplates/footer');
    }
}

?>