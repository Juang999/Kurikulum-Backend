<?php

// PersegiPanjang
function PersegiPanjang(int $panjang, int $lebar): float {
    if ($panjang <= 0 || $lebar <= 0) {
        throw new Exception("   nilai input tidak boleh kurang dari 1 ");
    }
    $hitung = $panjang*$lebar;
    return $hitung;
}
echo "\n";
echo "=======================\n";
echo "|   PERSEGI PANJANG   |\n";
echo "=======================\n";
echo "\n";
echo "masukkan nilai panjang : ";
$Panjang = trim(fgets(STDIN));
echo "masukkan nilai lebar : ";
$Lebar = trim(fgets(STDIN));

try {
    $hasil = PersegiPanjang($Panjang, $Lebar);
    echo "$Panjang*$Lebar : ".$hasil."\n";
} catch (Exception $segi) {
    echo "\n";
    echo "kesalahan ada pada file ".$segi->getFile()." pesan ada di baris ".$segi->getLine()."\n";
    echo $segi->getMessage()."\n";
}


// Lingkaran
function Lingkaran(int $diameter){
    if ($diameter <= 0) {
        throw new Exception("nilai input tidak boleh dibawah angka 1");     
    }

    $jari = $diameter/2;
    $rumus = 3.14*($jari*$jari);
    return $rumus;
}
echo "\n";
echo "=================\n";
echo "|     BULAT     |\n";
echo "=================\n";
echo "\n";
echo "masukkan nilai diameter : ";
$Diameter = trim(fgets(STDIN));

try {
    $bulat = Lingkaran($Diameter);
    echo "luas lingkaran adalah : ".$bulat."\n";
} catch (Exception $bulat) {
    echo "\n";
    echo "kesalahan adad pada file ".$bulat->getFile()." pesan ada dibaris ".$bulat->getline()."\n";
    echo $bulat->getMessage()."\n";
}

function Trapesium(int $sisi1, int $sisi2, int $tinggi) {
    if ($sisi1 <= 0 || $sisi2 <= 0 || $tinggi <= 0) {
        throw new Exception("nilai input tidak boleh kurang dari angka 1");
        
    }
    $kali = 1/2*($sisi1+$sisi2)*$tinggi;
    return $kali;
}
echo "\n";
echo "=======================\n";
echo "|      TRAPESIUM      |\n";
echo "=======================\n";
echo "\n";
echo "masukkan nilai sisi pertama : ";
$Sisi1 = trim(fgets(STDIN));
echo "masukkan nilai sisi kedua : ";
$Sisi2 = trim(fgets(STDIN));
echo "masukkan nilai tinggi : ";
$Tinggi = trim(fgets(STDIN));

try {
    $segitiga = Trapesium($Sisi1, $Sisi2, $Tinggi);
    echo "1/2*($Sisi1+$Sisi2)*$Tinggi : ".$segitiga."\n";
} catch (\Exception $Segitiga) {
    echo "pesan terdapat pada file ".$Segitiga->getFile()." pesan terdapat pada baris ".$Segitiga->getLine()."\n";
    echo $Segitiga->getMessage()."\n";
}
?>