<?php

class santri
{
    public static $DaftarSantri = [
        [
            'nama' => 'juang',
            'NIK' => '123123123',
            'umur' => '21',
        ],[
            'nama' => 'nasrul',
            'NIK' => '456456456',
            'umur' => '17',
    
        ],[
            'nama' => 'ahmad',
            'NIK' => '789789789',
            'umur' => '20',
    
        ]
        ];
}

class cara extends santri
{
    public function __construct(){
        echo "nama : ";
        $nama = trim(fgets(STDIN));
        echo "NIK : ";
        $NIK = trim(fgets(STDIN));
        echo "umur : ";
        $umur = trim(fgets(STDIN));

        $tambah = count(santri::$DaftarSantri);

        santri::$DaftarSantri[$tambah]['nama'] = $nama;
        santri::$DaftarSantri[$tambah]['NIK'] = $NIK;
        santri::$DaftarSantri[$tambah]['umur'] = $umur;
        print_r(santri::$DaftarSantri);
    }
// 
    public static function Update(){
        print_r(santri::$DaftarSantri);
        echo "pilih nama yang ingin diubah datanya : ";
        $ubah = trim(fgets(STDIN));
        foreach (santri::$DaftarSantri as $key => $value) {
            if (santri::$DaftarSantri[$key]['nama'] == $ubah) {
                echo "masukkan nama : ";
                santri::$DaftarSantri[$key]['nama'] = trim(fgets(STDIN));
                echo "masukkan NIK : ";
                santri::$DaftarSantri[$key]['NIK'] = trim(fgets(STDIN));
                echo "masukkan umur : ";
                santri::$DaftarSantri[$key]['umur'] = trim(fgets(STDIN));
            }
        }
        print_r(santri::$DaftarSantri);

    }

        public static function Delete(){
            print_r(santri::$DaftarSantri);
            echo "masukkan nama yang ingin dihapus : ";
            $hapus = trim(fgets(STDIN));
            foreach (santri::$DaftarSantri as $key => $value) {
                if (santri::$DaftarSantri[$key]['nama'] == $hapus) {
                    unset(santri::$DaftarSantri[$key]);
                }
            }
            sort(santri::$DaftarSantri);
            print_r(santri::$DaftarSantri);
        }

}

$kondisi = true;
while ($kondisi) {
    echo "=================\n";
    echo "|  PENDAFTARAN  |\n";
    echo "=================\n";
    print_r(santri::$DaftarSantri);
    echo "\n";
    echo "1) tambah data\n";
    echo "2) update data\n";
    echo "3) delete data\n";
    echo "\n";
    echo "pilihan > ";
    $pilih = trim(fgets(STDIN));
    if ($pilih == 1) {
        $data = new cara;
    } elseif ($pilih == 2) {
        cara::Update();
    } elseif ($pilih == 3) {
        cara::Delete();
    } else {
        echo "pilihan tidak ada!!!";
    }
    echo "mau diulangi [y/n] ? ";
    $berhenti = trim(fgets(STDIN));
    if ($berhenti == 'n') {
        $kondisi = false;
    }
    
}


?>