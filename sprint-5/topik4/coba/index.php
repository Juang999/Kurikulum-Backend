<?php

require 'vendor/autoload.php';

if (isset($_POST['Hitung1'])) {
    $arr = new Coba\Lingkaran;
    $arr->HalloLingkaran($_POST);
} elseif (isset($_POST['hitung2'])) {
    $bar = new Coba\persegiPanjang;
    $bar->HalloPersegiPanjang($_POST);
} elseif (isset($_POST['hitung3'])) {
    $var = new Coba\Segitiga;
    $var->HalloSegitiga($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <center>
    <h1>Operasi Aritmetika</h1>
    </center>
    <br><br>
    <p><strong>Lingkaran</strong></p>
    <form action="" method="post">
    <label for="jari-jari">Jari-Jari : </label>
    <input type="text" name="jari" id="jari-jari"><br><br><br>
    <input type="submit" value="Hitung!" name="Hitung1">
    </form>
    <br><br><br><br>
    <p><strong>Persegi Panjang</strong></p>
    <form action="" method="post">
    <label for="Panjang">Panjang : </label>
    <input type="text" name="panjang" id="Panjang"><br><br>
    <label for="lebar">Lebar : </label>
    <input type="text" name="lebar" id="lebar"><br><br><br>
    <input type="submit" value="hitung!" name="hitung2">
    </form>
    <br><br><br><br>
    <p><strong>Segitiga </strong></p>
    <form action="" method="post">
    <label for="alas">Alas : </label>
    <input type="text" name="alas" id="alas"><br><br>
    <label for="tinggi">Tinggi : </label>
    <input type="text" name="tinggi" id="tinggi"><br><br><br>
    <input type="submit" value="Hitung!" name="hitung3">
    </form>
</body>
</html>