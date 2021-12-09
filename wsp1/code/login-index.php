<?php
session_start();

if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    if ($username == "mattias" && $password == "hemligt") {
        $_SESSION['username'] = $username;

        header('Location: loggedin.php');
        exit();
    }
    else {
        $info = "Felaktigt användarnamn eller lösenord.";
    }
}
?>

<!doctype html>
<html lang='sv'>
<head>
    <meta charset='utf-8'>
    <title>Inloggning</title>
</head>
<body>
    <form method='post'>
        <p>Användarnamn:<br>
        <input name='username'>
        <p>Lösenord:<br>
        <input type='password' name='password'>
            
        <p><input type='submit' name='login' value='Logga in'>
    </form>

    <?php
    if (isset($info))
        echo "<p>$info</p>";
    ?>
</body>
</html>