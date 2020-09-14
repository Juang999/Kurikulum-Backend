<?php
// 
// echo "1) \n";
// 
// for ($i=0; $i < 9; $i++) { 
    // for ($j=0; $j < 9; $j++) { 
        // if ($j == 0 || $j == 2 || $j == 4 || $j == 6 || $j == 8) {
            // echo "+";
        // }else {
            // echo "-";
        // }
    // }
    // echo "\n";
// }
// echo "\n";
// echo "\n";
// 
// for ($i=0; $i < 9; $i++) { 
    // for ($j=0; $j < 9; $j++) { 
        // if ($i ==1 || $i == 3 || $i == 5 || $i == 7) {
            // echo "+";
        // }else {
            // echo "-";
        // }
    // }
    // echo "\n";
// }
// echo "\n";
// echo "\n";
// echo "2)";
// echo "\n";
// $angka = 5956560159466056;
// 
// $explode = explode("0", $angka);
// 
// foreach ($explode as $key => $value) {
    // $split[] = str_split($explode[$key]);
    // sort($split);
    // 
// }
// $result = array_merge(...$split);
// echo "urutannya adalah :";
// foreach ($result as $key) {
    // echo $key;
// }
// echo "\n";
// echo "\n";
// echo "\n";
// echo "3)";
// echo "\n";
echo "===============================\n";
echo "| FORMULIR PENDAFTARAN SANTRI |\n";
echo "===============================";
echo "\n";
echo "\n";
echo "masukkan jumlah formulir yang ingin anda ulang : ";
$jumlah = trim(fgets(STDIN));
echo "\n";
echo "\n";
for ($i=1; $i <= $jumlah; $i++) { 
    echo "masukkan data ".$i."\n";
    echo "Nama : ";
    $data['Nama'] = trim(fgets(STDIN));
    echo "NIK : ";
    $data['NIK'] = trim(fgets(STDIN));
    echo "Jurusan : ";
    $data['Jurusan'] = trim(fgets(STDIN));
    echo "Divisi : ";
    $data['Divisi'] = trim(fgets(STDIN));
    echo "Usia : ";
    $data['Usia'] = trim(fgets(STDIN));
    echo "\n";
    echo "\n";
}
?>