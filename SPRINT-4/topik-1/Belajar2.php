<?php

if ($_COOKIE == NULL ) {
    header("Location: Belajar3.php");
}

if (isset($_POST['logout'])) {
    setcookie('username', $username, time() - (3600));
    setcookie('password', $password, time() - (3600));
    header("Location: Belajar3.php");

}  


class Koneksi
{
    protected $servername = "localhost",
              $username = "Juang666",
              $password = "Juang666";

    public function __construct(){
        $this->connection = new PDO("mysql:host=$this->servername; dbname=LatihanSprint4", $this->username, $this->password);
        
    }

    public function getData(){
        $perintah = "SELECT * FROM dashboard ";
        $lihat = $this->connection->prepare($perintah);
        $lihat->execute();
        $result = $lihat->fetchAll(pdo::FETCH_ASSOC);
        return $result;
    }

    public function Tambah($Nama, $Harga){
        $query = "INSERT INTO dashboard(Nama_Barang,Harga) VALUES('$Nama',$Harga);";
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
    <form action="" method="post">
    <label>Nama Barang</label><br>
        <input type="text" name="barang" id="barang"><br>
    <label>Harga</label><br>
        <input type="text" name="harga" id="harga"><br><br>
        <input type="submit" name="submit" value="submit"><br>
<?php if (isset ($_POST['submit'])) {
    $Nama=$_POST['barang'];
    $Harga=$_POST['harga'];

    $arr->Tambah($Nama,$Harga);

}?>

<?php echo $_COOKIES["username"]; ?>
<table border="1">
<thead>
    <tr>
        <th>ID.</th>
        <th>Nama Barang</th>
        <th>Harga</th>
    </tr>
</thead>
    <?php 
        $data=$arr->getData();
        foreach($data as $key => $value) : ?>
                <tr>
                    <th><?= $value["id"]; ?></th>
                    <th><?= $value["Nama_Barang"] ?> </th>
                    <th><?= $value["Harga"] ?> </th>
                </tr>
        <?php endforeach; ?>
        </table>


    <form action="" method="POST">
    <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>