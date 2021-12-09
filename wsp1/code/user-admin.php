<?php
include '../config.php';
$db = new PDO("mysql:host=localhost;dbname={$dbprefix}userdb;charset=utf8",
    $username, $password);
?>

<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Användare</title>
</head>
<body>
    <h1>Admin-sida</h1>
</body>
</html>