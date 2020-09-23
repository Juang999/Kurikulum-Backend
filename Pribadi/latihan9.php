<?php

class santri
{
    public static $data = [[
        'nama' => 'juang',
        'NIK' => 'T-001',
        'umur' => '21',
    ],[
        'nama' => 'ahmad',
        'NIK' => 'T-002',
        'umur' => '17',

    ],[
        'nama' => 'khalid',
        'NIK' => 'T-003',
        'umur' => '19',

    ]]; 
}

class cara extends santri
{
    public function __construct(){
        echo "masukkan nama : ";
        $nama = trim(fgets(STDIN));
        echo "masukkan NIK : ";
        $NIK = trim(fgets(STDIN));
        echo "masukkan umur : ";
        $umur = trim(fgets(STDIN));

        $hasil = count(santri::$data);

        santri::$data[$hasil]['nama'] = $nama;
        santri::$data[$hasil]['NIK'] = $NIK;
        santri::$data[$hasil]['umur'] = $umur;

        print_r(santri::$data);

    }
// 
    public static function update(){
        print_r(santri::$data);
        echo "masukkan nama yang ingin di update : ";
        $up = trim(fgets(STDIN));
        foreach (santri::$data as $key => $value) {
            if (santri::$data[$key]['nama'] == $up) {
                echo "masukkan nama : ";
                santri::$data[$key]['nama'] = trim(fgets(STDIN));
                echo "masukkan NIK : ";
                santri::$data[$key]['NIK'] = trim(fgets(STDIN));
                echo "masukkan umur : ";
                santri::$data[$key]['umur'] = trim(fgets(STDIN));
            }
        }
        print_r(santri::$data);
    }

        public static function hapus(){
            print_r(santri::$data);
            echo "pilih nama yang ingin dihapus : ";
            $del = trim(fgets(STDIN));
            foreach (santri::$data as $key => $value) {
                if (santri::$data[$key]['nama'] == $del) {
                    unset(santri::$data[$key]);
                }
            }
            sort(santri::$data);
            print_r(santri::$data);
        }
}

$kondisi = true;
while($kondisi){
    echo "===================\n";
    echo "|   DATA SANTRI   |\n";
    echo "===================\n";
    echo "\n";
    print_r(santri::$data);
    echo "\n";
    echo "1) tambah data\n";
    echo "2) update data\n";
    echo "3) delete data\n";
    echo"\n";
    echo "pilih > ";
    $choose = trim(fgets(STDIN));
    if ($choose == 1) {
        $baru = new cara;
    } elseif ($choose == 2) {
        cara::update();
    } elseif ($choose == 3) {
        cara::hapus();
    } else {
        echo "pilihan tidak ada!!!";
    }
    echo "apakah ingin diulangi [y/n] ? ";
    $choice = trim(fgets(STDIN));
    if ($choice == 'n') {
        $kondisi = false;
    }
}

?>