<?php

$username = "";
$password = "";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inloggning - Användare</title>
</head>
<body>
    <h1>Inloggningssida</h1>

    <form method='post'>
        <p>
            Användarnamn:<br>
            <input name='username' value='<?= $username ?>'>
        </p>
        <p>
            Lösenord:<br>
            <input type='password' name='password' value='<?= $password ?>'>
        </p>
        <p><button name='login'>Logga in</button></p>
    </form>
</body>
</html>