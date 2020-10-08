<?php

namespace Coba;

class Segitiga
{
    public function HalloSegitiga($data){
        $alas = $data['alas'];
        $tinggi = $data['tinggi'];

        $hasil = $alas * $tinggi;
        echo "<script>alert('hasilnya adalah $hasil')</script>";
    }
}