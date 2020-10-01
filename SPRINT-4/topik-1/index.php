<?php
session_start();

$_SESSION['username'] = "Juang666";
$_SESSION['password'] = "123";
if ($_SESSION['user'] != $_SESSION['username'] && $_SESSION['pass'] != $_SESSION['password']) {
    header("location: belajar4.php");
}

if (!isset($_SESSION['login'])) {
    header("location: belajar4.php");
    exit();
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("location: belajar4.php");
}
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>hallo admin</h1><br><br>
    <form action="" method="post">
    <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>