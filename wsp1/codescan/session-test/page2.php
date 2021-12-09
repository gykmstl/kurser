<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page 2</h1>
    <h2>Hämtar session-värdet</h2>

    <?php
    if (isset($username)) {
        echo "<p>Inloggad som: $username</p>";
    }
    ?>

    <p><a href=".">Inloggning</a></p>
</body>
</html>