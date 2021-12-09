<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
else {
    header('Location: index.php');
    exit();
}
?>

<!doctype html>
<html lang='sv'>
<head>
    <meta charset='utf-8'>
    <title>Inloggad</title>
</head>
<body>
    <?php
    echo "<p>Inloggad som: $username</p>";
    ?>
    
    <h1>Hemlig information</h1>
    <p>Vi anfaller imorgon.</p>
</body>
</html>