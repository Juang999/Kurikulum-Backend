<?php
require 'functions.php';
$result = mysqli_query($dbconn, "SELECT * FROM info");
// while ($tampil = mysqli_fetch_assoc($result)) {
// var_dump($tampil    );
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Database</title>
</head>
<body>

<h1>NAMA SANTRI</h1>
<br>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
    <th>No</th>
    <th>Edit/Hapus</th>
    <th>Nama Depan</th>
    <th>Nama Belakang</th>
    <th>Umur</th>
    <th>Alamat</th>
    <th>Hobby</th>
    <th>Agama</th>
    </tr>   


<?php while($baru = mysqli_fetch_assoc($result) ) : ?>
    <tr>
    <center>
    <td><?= $baru['id'];?></td>
    <td>
    <a href="">Edit</a>
    <a href="">Delete</a>
    </td>
    <td><?= $baru['firstname'];?></td>
    <td><?= $baru['lastname'];?></td>
    <td><?= $baru['Age']; ?></td>
    <td><?= $baru['Alamat'];?></td>
    <td><?= $baru['hobby'];?></td>
    <td><?= $baru['agama']?></td>
    </center>
    </tr> 
<?php endwhile; ?>  


    </table>
</body>
</html>