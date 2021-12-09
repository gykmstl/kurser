<?php
session_start();

// Om inloggning
if (isset($_POST['login'])) {

    // med admin-admin
    if ($_POST['username'] == "admin" && $_POST['password'] == "admin" ) {
        $_SESSION['username'] = 'admin';

        header("Location: admin.php");
        exit;
    } else {
        $message = "Fel användarnamn eller lösenord.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login - Bloggen</title>
</head>
<body>
    <form method='post'>
        <p>Användarnamn:<br><input name='username' value='admin'></p>
        <p>Lösenord:<br><input name='password' value='admin'></p>
        <p><button name='login'>Logga in</button></p>
    </form>

    <?php
    if (isset($message)) {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>