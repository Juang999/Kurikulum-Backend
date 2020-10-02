<?php
session_start();

if (isset($_POST["login"])) {
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['pass'] = $_POST['password'];
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
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
    <label for="username">username</label><br>
    <input type="text" name="username" id="username"><br>
    <label for="password">password</label><br>
    <input type="password" name="password" id="password"><br><br>
    <input type="submit" value="login" name="login">
    </form>
</body>
</html>