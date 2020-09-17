<?php

class bangun
{

    protected static function PersegiPanjang(int $panjang, int $lebar) {
        if ($panjang <= 0 || $lebar <= 0) {
            throw new Exception("angka input tidak boleh kurang dari 1 ");
            
        }

        $hitung = $panjang*$lebar;
        return $hitung;
    }

    protected static function Lingkaran(int $diameter) {
        if ($diameter <= 0) {
            throw new Exception("angka input tidak boleh lebih kecil dari 1");
            
        }

        $jari = $diameter/2;
        $hitung1 = 3.14*($jari*$jari);
        return $hitung1;
    }

    protected static function Trapesium(int $sisi1, int $sisi2, int $tinggi) {
        if ($sisi1 <0 || $sisi2 <= 0 || $tinggi <= 0) {
            throw new Exception("nilai input tidak boleh kurang dari angka 1");
            
        }

        $hitung2 = 1/2*($sisi1+$sisi2)*$tinggi;
        return $hitung2;
    }

}

class tampilan extends bangun
{
    public function __construct() {
        echo "\n";
        echo "======================\n";
        echo "|      OPERATOR      |\n";
        echo "======================\n";
        echo "\n";
        echo "1) Perseegi Panjang\n";
        echo "1) Lingkaran\n";
        echo "1) Trapesium\n";
        echo "\n";
        echo "pilihan > ";
        $pilih = trim(fgets(STDIN));
        echo "\n";
        if ($pilih == 1) {
            echo "=======================\n";
            echo "|   PERSEGI PANJANG   |\n";
            echo "=======================\n";
            echo "\n";
            echo "masukkan nilai panjang : ";
            $Panjang = trim(fgets(STDIN));
            echo "masukkan nilai lebar : ";
            $Lebar = trim(fgets(STDIN));
            
            try {
                $persegipanjang = bangun::PersegiPanjang($Panjang, $Lebar);
                echo "$Panjang * $Lebar : ".$persegipanjang;
            } catch (Exception $ave) {
                echo "kesalahan ada pada folder ".$ave->getFile()." pesan ada dibaris ".$ave->getLine()."\n";
                echo $ave->getMessage()."\n";
            }
        } elseif ($pilih == 2) {
            echo "=================\n";
            echo "|     BULAT     |\n";
            echo "=================\n";
            echo "\n";
            echo "masukkan nilai diameter : ";
            $Diameter = trim(fgets(STDIN));
        
            try {
                $lingkaran = bangun::Lingkaran($Diameter);
                echo "hasilnya adalah : ".$lingkaran."\n";
            } catch (Exception $ave1) {
                echo "kesalahan ada pada folder ".$ave1->getFile()." pesan ada pada baris ".$ave1->getLine()."\n";
                echo $ave1->getMessage()."\n";
            }
        } elseif ($pilih == 3) {
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
                $trapesium = bangun::Trapesium($Sisi1, $Sisi2, $Tinggi);
                echo "hasil dar 1/2($Sisi1*$Sisi2)*$Tinggi : ".$trapesium."\n";
            } catch (Exception $ave2) {
                echo "kesalahan terletak pada folder ".$ave2->getFile()." pesan ada pada baris ".$ave2->getLine()."\n";
                echo $ave2->getMessage()."\n";
            }
        }else {
            echo "pilihan tidak ada !!!\n";
        }
    }
}

$Jumlah = new tampilan();



?>