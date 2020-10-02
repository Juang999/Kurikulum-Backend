<?php
session_start();

$_SESSION['username'] = "Juang666";
$_SESSION['password'] = "123";
if ($_SESSION['user'] != $_SESSION['username'] && $_SESSION['pass'] != $_SESSION['password']) {
    header("location: login.php");
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard admin</title>
</head>
<body>
<h1>hallo admin</h1>

<form action="" method="POST">
<input type="submit" value="logout" name="logout">
</form>

</body>
</html>