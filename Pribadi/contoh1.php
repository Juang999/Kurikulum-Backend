<?php

$buku = [[
    'Buku' => 'Sejarah',
    'ISBN' => '123123123'
],[
    'Buku' => 'Kimia',
    'ISBN' => '456456456'
],[
    'Buku' => 'Fisika',
    'ISBN' => '789789789'
]
];
$kondisi = true;
while($kondisi){
    echo "==================\n";
    echo "|  PERPUSTAKAAN  |\n";
    echo "==================\n";
    echo "\n";
    foreach($buku as $key => $value){
        echo $key.". ".$value['Buku']."\n";
    }
    echo "\n";
    echo "buku yang ingin dipinjam : ";
    $pinjam = trim(fgets(STDIN));
    unset($buku[$pinjam]);
    print_r($buku);

    echo "Ingin ulangi lagi : ";
    $pilih = trim(fgets(STDIN));

    if($pilih == 'y'){
        $kondisi = true;
    }else{
        $kondisi = false;
    }
}
?>