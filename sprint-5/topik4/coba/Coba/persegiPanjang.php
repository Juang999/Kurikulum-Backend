<?php

namespace Coba;

class persegiPanjang
{
    public function HalloPersegipanjang($data){
        $panjang = $data['panjang'];
        $lebar = $data['lebar'];

        $hasil = $panjang * $lebar;
        echo "<script>alert('hasilnya adalah $hasil')</script>";
    }
}


?>