<?php
session_start();

// * Extra (fanns ej med i uppgiften)
// Om 'Logga ut' så ta bort sessionsvariabeln
if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
}

// Om inte inloggad som admin
if (!isset($_SESSION['username']) || $_SESSION['username'] != 'admin') {
    
    // Så omdirigera till index-sidan
    header("location: .");
    exit;
}

// Om ett nytt inlägg har skickats till sidan 
// så spara det i en cookie (en vecka)

if (isset($_POST['save'])) {
    setcookie('blog-header', $_POST['header'], time() + 7 * 24 * 3600);
    setcookie('blog-time', $_POST['time'], time() + 7 * 24 * 3600);
    setcookie('blog-content', $_POST['content'], time() + 7 * 24 * 3600);

    $message = "Blogginlägget sparat";
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin - Bloggen</title>
</head>
<body>
    <form method='post'>
        <p>Rubrik:<br><input name='header'></p>      
        <p>Tidpunkt:<br><input name='time'></p>      
        <p>Innehåll:<br><textarea name='content'></textarea></p>      

        <p><button name="save">Spara</button></p>

        <!-- * Extra -->
        <p><button name="logout">Logga ut</button></p>
    </form>

    <?php
    if (isset($message)) {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>