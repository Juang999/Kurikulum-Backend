<?php

class santri
{
    public static $biodata = [
        ['nama' => 'juang',
        'NIK' => 'T-001',
        'umur' => '21'
        ],['nama' => 'rahmat',
        'NIK' => 'T-002',
        'umur' => '26'
        ],['nama' => 'fadhil',
        'NIK' => 'T-003',
        'umur' => '28']
    ];
}

class daftar extends santri
{
    public function __construct(){
        echo "Nama : ";
        $nama = trim(fgets(STDIN));
        echo "NIK : ";
        $NIK = trim(fgets(STDIN));
        echo "Umur : ";
        $umur = trim(fgets(STDIN));

        $data = count(parent::$biodata);

        parent::$biodata[$data]['nama'] = $nama;
        parent::$biodata[$data]['NIK'] = $NIK;
        parent::$biodata[$data]['umur'] = $umur;

        print_r(parent::$biodata);
    }

  public static function update(){
      print_r(parent::$biodata);
      echo "masukkan nama yang ingin di update : ";
      $ubah = trim(fgets(STDIN));
      foreach (parent::$biodata as $key => $value) {
          if (parent::$biodata[$key]['nama'] == $ubah) {
              echo "masukkan nama : ";
              parent::$biodata[$key]['nama'] = trim(fgets(STDIN));
              echo "masukkan NIK : ";
              parent::$biodata[$key]['NIK'] = trim(fgets(STDIN));
              echo "masukkan umur : ";
              parent::$biodata[$key]['umur'] = trim(fgets(STDIN));
          }
      }
      print_r(parent::$biodata);
  } 

    public static function hapus(){
        print_r(parent::$biodata);
        echo "masukkan nama yang ingin dihapus : ";
        $del = trim(fgets(STDIN));
        foreach (parent::$biodata as $key => $value) {
            if (parent::$biodata[$key]['nama'] == $del) {
                unset(parent::$biodata[$key]);
            }
        }
        sort(parent::$biodata);
        print_r(parent::$biodata);
    }
}
$kondisi = true;
while ($kondisi) {
    echo "=====================\n";
    echo "|   DAFTAR SANTRI   |\n";
    echo "=====================\n";
    echo "\n";
    print_r(santri::$biodata);
    echo "\n";
    echo "1) tambah data\n";
    echo "2) update data\n";
    echo "3) delete data\n";
    echo "\n";
    echo "pilihan > ";
    $pilih = trim(fgets(STDIN));
    echo "\n";
    if ($pilih == 1) {
        $baru = new daftar;
    } elseif ($pilih == 2) {
        daftar::update();
    } elseif ($pilih == 3) {
        daftar::hapus();
    } else {
        echo "pilihan tidak ada!!!";
    }
    echo "ingin diulangi [y/n] ? ";
    $pilihan = trim(fgets(STDIN));
    if ($pilihan == 'n') {
        $kondisi = false;
    }
}



?>