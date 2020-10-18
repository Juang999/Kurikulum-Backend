<?php

class About extends Controller
{
    public function index(){
        $data['judul'] = 'Author';
        $this->view('Tamplates/header', $data);
        $this->view('About/Author');
        $this->view('Tamplates/footer');
    }
}