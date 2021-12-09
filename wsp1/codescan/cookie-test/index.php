<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $_COOKIE['username'] = $username;

    setcookie('username', $username, time()+20);
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
    <?php

    if (isset($username)) {
        echo "<p>Inloggad som: $username</p>";
    }
    ?>

    <form method=post>
        <p>Användarnamn:<br>
            <input name="username">
        </p>
    </form>

    <p><a href="page2.php">Page 2</a></p>

</body>
</html>