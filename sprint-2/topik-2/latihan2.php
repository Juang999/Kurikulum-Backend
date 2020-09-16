<?php 

//rumus
class Rumus
{
    //PersegiPanjang
    protected static function PersegiPanjang($panjang, $lebar) {
        $hitung = $panjang*$lebar;
        echo "hasilnya : ".$hitung."\n";
    }
    //Lingkaran
    protected static function Lingkaran($diameter) {
        $Jari = $diameter/2;
        $hasil = 3.14*($Jari*$Jari);
        echo "hasilnya : ".$hasil."\n";
    }
    //Trapesium
    protected static function Trapesium($Sisi1, $Sisi2, $Tinggi){
        $Hasil = 1/2*($Sisi1+$Sisi2)*$Tinggi;
        echo "hasilnya : ".$Hasil."\n";
    }

}

//Tampilan

class Tampilan extends Rumus
{
    public function __construct(){
        echo "=====================\n";
        echo "|       RUMUS       |\n";
        echo "=====================\n";
        echo "\n";
        echo "1) Persegi Panjang\n";
        echo "2) Lingkaran\n";
        echo "3) Trapesium\n";
        echo "\n";
        echo "pilihan > ";
        $pilih = trim(fgets(STDIN));
        echo "\n";
        if ($pilih == 1) {
            echo "masukkan nilai panjang : ";
            $Panjang = trim(fgets(STDIN));
            echo "masukkan nilai lebar : ";
            $Lebar = trim(fgets(STDIN));
            Rumus::PersegiPanjang($Panjang, $Lebar);
        }elseif ($pilih == 2) {
            echo "masukkan nilai diameter : ";
            $Diameter = trim(fgets(STDIN));
            Rumus::Lingkaran($Diameter);
        }elseif ($pilih == 3) {
            echo "masukkan nilai sisi 1 : ";
            $sisi1 = trim(fgets(STDIN));
            echo "masukkan nilai sisi 2 : ";
            $sisi2 = trim(fgets(STDIN));
            echo "masukkan nilai tinggi : ";
            $tinggi = trim(fgets(STDIN));
            Rumus::Trapesium($sisi1, $sisi2, $tinggi);
        }else {
            echo "pilihan tidak ada!!!\n";
        }

    }
}
$tampilan = new Tampilan();
?>