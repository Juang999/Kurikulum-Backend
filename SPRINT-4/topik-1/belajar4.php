<?php

session_start();

if (isset($_POST["login"])) {
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['pass'] = $_POST['password'];
    $_SESSION['login'] = true;
    header("Location: index.php");
}

// if (!isset($_POST['logout'])) {
    // header("location: index.php");
// }
if (isset($_SESSION['login'])) {
    header("location: index.php");
    exit();
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
    <label>Username</label><br>
    <input type="text" name="username" id=""><br>
    <label>Password</label><br>
    <input type="password" name="password" id=" "><br><br>
    <input type="submit" value="login" name="login">
    </form>
</body>
</html>