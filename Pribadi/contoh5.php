<?php

class daftar
{
    public static $DaftarSantri = [
        [
            'nama' => 'juang',
            'NIK' => 123123123
        ],[
            'nama' => 'nasrul',
            'NIK' => 456456456
        ],[
            'nama' => 'bagus',
            'NIK' => 789789789
        ]
        ];
}

class cara extends daftar
{
    public function __construct(){
        echo "masukkan nama : ";
        $nama = trim(fgets(STDIN));
        echo "masukkan NIK : ";
        $NIK = trim(fgets(STDIN));

        $data = count(daftar::$DaftarSantri);

        daftar::$DaftarSantri[$data]['nama'] = $nama;
        daftar::$DaftarSantri[$data]['NIK'] = $NIK;
        
        print_r(daftar::$DaftarSantri);
    }

    public static function Update()

}


?>





