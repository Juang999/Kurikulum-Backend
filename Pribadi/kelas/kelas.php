<?php

class OperasiHitung
{
    protected $operator = [
        'tambah' => '+',
        'tambah' => '-',
        'tambah' => '*',
        'tambah' => '/'
    ];
    public function perkalian($nilai1, $nilai2) {
        $hasil = $nilai1+$nilai2;
        return $nilai1.$this->operator['tambah'].$nilai2."= ".$hasil;
        $hasil = $nilai1-$nilai2;
        return $nilai1.$this->operator['kurang'].$nilai2."= ".$hasil;
        $hasil = $nilai1*$nilai2;
        return $nilai1.$this->operator['kali'].$nilai2."= ".$hasil;
        $hasil = $nilai1/$nilai2;
        return $nilai1.$this->operator['bagi'].$nilai2."= ".$hasil;
    }
}

$hitung = new OperasiHitung;

echo "hasil dari ".$hitung->pembagian(10, 2)."\n";

?>