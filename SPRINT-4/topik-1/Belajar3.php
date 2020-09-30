<?php
// echo $_COOKIE["username"];
// if ($_COOKIE['username'] != NULL) {
//     echo "test";
//     header("Location: Belajar2.php");
// }
if (count($_COOKIE)>1) {
    header("Location: Belajar2.php");
}

$username = $_POST['username'];
$password = $_POST['password'];
if (isset($_POST['submit'])) {
    setcookie('username', $username, time() + (3600));
    setcookie('password', $password, time() + (3600));
    header("Location: Belajar2.php");

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

<form action="" method="POST">
<table>username</table>
<input type="text" name="username" id="username" placeholder="Nama"><br>
<table>password</table>
<input type="password" name="password" id="password"><br><br>
<input type="submit" name="submit" value="submit">


</form>
</body>
</html>
