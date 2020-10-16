<?php

class About extends Controller{
    public function index($nama = "Juang", $profesi = "Programmer"){
        $data['nama'] = $nama;
        $data['profesi'] = $profesi;
        $data['judul'] = "index About";
        $this->view('tamplates/header', $data);
        $this->view('about/index', $data);
        $this->view('tamplates/footer');
    }
    public function page(){
        $data['judul'] = "page about";
        $this->view('tamplates/header', $data);
        $this->view('about/page');
        $this->view('tamplates/footer');
    }
}

?>