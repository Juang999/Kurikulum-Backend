<?php

class Koneksi
{
    protected $servername = "localhost",
              $username = "Juang666",
              $password = "Juang666";

    public function __construct(){
        $this->connection = new PDO("mysql:host=$this->servername; dbname=LatihanSprint4", $this->username, $this->password);
        
    }

    public function getData(){
        $perintah = "SELECT * FROM LatihanGET";
        $lihat = $this->connection->prepare($perintah);
        $lihat->execute();
        $result = $lihat->fetchAll(pdo::FETCH_ASSOC);
        return $result;
    }

    public function Tambah($Nama, $Harga){
        $query = "INSERT INTO LatihanGET(Nama_Barang,Harga) VALUES('$Nama',$Harga);";
        $show = $this->connection->prepare($query);
        $show->execute();
    }
}

$arr = new Koneksi;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="barang" id="barang"><br>
        <input type="text" name="harga" id="harga"><br>
        <input type="submit" name="submit" value="submit"><br>
<?php if (isset ($_GET['submit'])) {
    $Nama=$_GET['barang'];
    $Harga=$_GET['harga'];

    $arr->Tambah($Nama,$Harga);

    if (isset($_GET['update'])) {
        header("Location: belajar6.php");
    }

}?>

<table border="1" cellpadding="10">
<thead>
    <tr>
        <th>ID.</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>pilihan</th>
    </tr>
</thead>
    <?php 
        $data=$arr->getData();
        foreach($data as $key => $value) : ?>
                <tr>
                    <th><?= $value["id"]; ?></th>
                    <th><?= $value["Nama_Barang"] ?> </th>
                    <th><?= $value["Harga"] ?> </th>
                    <td>
                    <a href="belajar6.php?id=<?= $value["id"]; ?>">update</a>
                    <a href="">delete</a>
                    </td>
                </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>