<?php

class tipe
{
    protected $fungsi = [
        [
            'nama' => 'juang',
            'alamat' => 'bogor',
            'umur' => '21'
        ],[
            'nama' => 'junaidi',
            'alamat' => 'jakarta',
            'umur' => '14'
        ],[
            'nama' => 'faiz',
            'alamat' => 'kalimantan',
            'umur' => '24'
        ]
        ];
}

class santri extends tipe
{
    public function tambah(){
        print_r($this->fungsi);
        echo "masukkan nama : ";
        $nama = trim(fgets(STDIN));
        echo "masukkan alamat : ";
        $alamat = trim(fgets(STDIN));
        echo "masukkan umur : ";
        $umur = trim(fgets(STDIN));

        $data = count($this->fungsi);

        $this->fungsi[$data]['nama'] = $nama;
        $this->fungsi[$data]['alamat'] = $alamat;
        $this->fungsi[$data]['umur'] = $umur;

        print_r($this->fungsi);
        
    }
// 
    public function update(){
        print_r($this->fungsi);     
        echo "masukkan nama yang ingin diganti : ";
        $ganti = trim(fgets(STDIN));
        foreach ($this->fungsi as $key => $value) {
            if ($this->fungsi[$key]['nama'] == $ganti) {
                echo "masukkan nama : ";
                $this->fungsi[$key]['nama'] = trim(fgets(STDIN));
                echo "masukkan alamat : ";
                $this->fungsi[$key]['alamat'] = trim(fgets(STDIN));
                echo "masukkan umur : ";
                $this->fungsi[$key]['umur'] = trim(fgets(STDIN));
            }
        }
        print_r($this->fungsi);
    }

    public function delete(){
        print_r($this->fungsi);
        echo "masukkan nama yang ingin dihapus : ";
        $hapus = trim(fgets(STDIN));
        foreach ($this->fungsi as $key => $value) {
            if ($this->fungsi[$key]['nama'] == $hapus) {
                unset($this->fungsi[$key]);
            }
        }
        print_r($this->fungsi);
    }
}

$data = new santri;
$data->tambah();
$data->delete();

?>