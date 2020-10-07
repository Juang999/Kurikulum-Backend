<?php

class segitiga
{
    public function show($data){
        $alas = $data['alas'];
        $tinggi = $data['tinggi'];

        $hasil = $alas * $tinggi;
        echo "<script>alert('hasil dari luas segitiga adalah $hasil')</script>";
    }
}

?>