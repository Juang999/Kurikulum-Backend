<?php 


class persegiPanjang
{
    public function show($data){
        $panjang = $data['panjang'];
        $lebar = $data['lebar'];

        $hasil = $panjang * $lebar;
        echo "<script>alert('hasil dari luas persegi panjang adalah $hasil')</script>";
    }
}



?>