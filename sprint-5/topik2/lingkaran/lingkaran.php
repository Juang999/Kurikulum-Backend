<?php

class lingkaran
{
    public function show($data){
        $jari = $data['jari'];

        $hasil = 22.7*($jari*$jari);
        echo "<script>alert('hasil dari luas lingkaran adalah $hasil')</script>";
    }
}


?>