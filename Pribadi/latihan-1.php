<?php

class Perpustakaan{
    protected $Buku = [
        'sejarah' => 'Sejarah = ISBN-123123123',
        'ekonomi' => 'Ekonomi = ISBN-456456456',
        'pendidikan' => 'Pendidikan = ISBN-789789789'
    ];
}

class pinjam extends Perpustakaan
{
    public function sejarah(){
        $tampil = $this->Buku['sejarah'];
        return $tampil;
    }

    public function ekonomi(){
        $lihat = $this->Buku['ekonomi'];
        return $lihat;
    }

    public function pendidikan(){
        $lihat = $this->Buku['pendidikan'];
        return $lihat;
    }
}

$barang = new Pinjam;

echo "======================\n";
echo "|    PERPUSTAKAAN    |\n";
echo "======================\n";
echo "\n";
echo "- Sejarah\n";
echo "- Ekonomi\n";
echo "- Pendidikan\n";
echo "\n";
echo "pinjam buku : ";
$pilih = trim(fgets(STDIN));
echo "\n";
if ($pilih == 'Sejarah') {
    echo $barang->sejarah()."\n";
    echo "--=[ waktu pinjam adalah 24 jam ]=--\n";
}elseif ($pilih == 'Ekonomi') {
    echo $barang->ekonomi()."\n";
    echo "--=[ waktu pinjam adalah 24 jam ]=--\n";
}elseif ($pilih == 'Pendidikan') {
    echo $barang->pendidikan()."\n";
    echo "--=[ waktu pinjam adalah 24 jam ]=--\n";
}
?>