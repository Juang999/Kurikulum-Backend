 <?php

class register
{
    public static $DaftarSantri = [
        [
            'nama' => 'rahmat',
            'NIK' => 123123123
        ],[
            'nama' => 'arif',
            'NIK' => 456456456,
        ]
    ];
}

class cara extends register
{
    public function __construct(){
        echo "masukkan nama : ";
        $nama = trim(fgets(STDIN));
        echo "masukkan NIK : ";
        $NIK = trim(fgets(STDIN));

        $data = count(register::$DaftarSantri);

        register::$DaftarSantri[$data]['nama'] = $nama;
        register::$DaftarSantri[$data]['NIK'] = $NIK;

        print_r(register::$DaftarSantri);
    }
// 
        public static function Update(){
            print_r(register::$DaftarSantri);
            echo "pilih nama yang ingin di update : ";
            $ganti = trim(fgets(STDIN));
            foreach (register::$DaftarSantri as $key => $value) {
                if (register::$DaftarSantri[$key]['nama'] == $ganti) {
                    echo "masukkan nama : ";
                    register::$DaftarSantri[$key]['nama'] = trim(fgets(STDIN));
                    echo "masukkan NIK : ";
                    register::$DaftarSantri[$key]['NIK'] = trim(fgets(STDIN));

                }
            }
            print_r(register::$DaftarSantri);
        }

        public static function Delete(){
            print_r(register::$DaftarSantri);
            echo "masukkan nama yang ingin dihapus : ";
            $hapus = trim(fgets(STDIN));
            foreach (register::$DaftarSantri as $key => $value) {
                if (register::$DaftarSantri[$key]['nama'] == $hapus) {
                    unset(register::$DaftarSantri[$key]);
                }
            }
            sort(register::$DaftarSantri);
            print_r(register::$DaftarSantri);
        }
}

$kondisi =true;
while ($kondisi) {
    echo "================\n";
    echo "|  REGISTRASI  |\n";
    echo "================\n";
    echo "\n";
    print_r(register::$DaftarSantri);
    echo "\n";
    echo "1) tambah data\n";
    echo "2) update data\n";
    echo "3) delete data\n";
    echo "\n";
    echo "pilihan > ";
    $pilih = trim(fgets(STDIN));
    if ($pilih == 1) {
        $baru = new cara;
    } elseif ($pilih == 2) {
        cara::Update();
    } elseif ($pilih == 3) {
        cara::Delete();
    } else {
        echo "pilihan tidak ada !!!";
    }
    echo "apakah ingin diulangi [y/n] ? ";
    $berhenti = trim(fgets(STDIN));
    if ($berhenti == 'n') {
        $kondisi = false;
    }
}

 ?>