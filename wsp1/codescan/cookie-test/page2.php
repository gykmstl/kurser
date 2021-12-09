<?php
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
}

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page 2</h1>
    <h2>Hämtar cookie-värdet</h2>

    <?php
    if (isset($username)) {
        echo "<p>Inloggad som: $username</p>";
    }
    ?>

    <p><a href=".">Inloggning</a></p>

</body>
</html>