<?php

namespace Coba;

class Lingkaran
{
    public function HalloLingkaran($data){
        $jari = $data['jari'];

        $hasil = 22.7*($jari*$jari);
        echo "<script>alert('hasilnya adalah $hasil')</script>";
    }
}