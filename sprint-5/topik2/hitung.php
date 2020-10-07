
<?php 

function panggilPersegiPanjang($class){
    $file = "persegiPanjang/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

function panggilLingkaran($class){
    $file = "lingkaran/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

function panggilSegitiga($class){
    $file = "segitiga/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

spl_autoload_register("panggilPersegiPanjang");
spl_autoload_register("panggilLingkaran");
spl_autoload_register("panggilSegitiga");


if (isset($_POST['PersegiPanjang'])) {
    $baru = new persegiPanjang;
    $baru->show($_POST);
} elseif (isset($_POST['Lingkaran'])) {
    $baru = new lingkaran;
    $baru->show($_POST);
} elseif (isset($_POST['Segitiga'])) {
    $baru = new segitiga;
    $baru->show($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="panjang">Panjang</label><br>
    <input type="text" name="panjang" id="panjang"><br>
    <label for="lebar">Lebar</label><br>
    <input type="text" name="lebar" id="lebar"><br><br>
    <input type="submit" value="hitung!" name="PersegiPanjang">
    </form>
    <br><br>
    <form action="" method="post">
    <label for="jari">Jari-Jari</label><br>
    <input type="text" name="jari" id="jari"><br><br>
    <input type="submit" value="hitung!" name="Lingkaran">
    </form>
    <br><br>
    <form action="" method="post">
    <label for="alas">Alas</label><br>
    <input type="text" name="alas" id="alas"><br>
    <label for="tinggi">Tinggi</label><br>
    <input type="text" name="tinggi" id="tinggi"><br><br>
    <input type="submit" value="hitung!" name="Segitiga">
    </form>
</body>
</html>