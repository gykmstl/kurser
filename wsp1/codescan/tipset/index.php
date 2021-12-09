<?php
session_start();

// Då 'Visa rätt rad'-knappen klickas 
// så slumpa en tipsrad
// och spara i en sessionsvariabel

if (isset($_POST['show'])) {
    $tipsrad = "";
    for ($i = 0; $i < 13; $i++) { 
        $tipsrad .= ["1", "x", "2"][random_int(0, 2)];
    }
    
    $_SESSION['tipsrad'] = $tipsrad;
}

// Då 'Logga in'-knappen klickas 
// så sätt en sessionsvariabel och 
// omdirigera till sidan 'mypage.php'

if (isset($_POST['login'])) {
    $_SESSION['login'] = TRUE;
    header("location: mypage.php");
    exit;    
}

// * Extra (fanns ej med i uppgiften)
// Då 'Ta bort rätt rad'-knappen klickas
// så ta bort sessionsvariabeln

if (isset($_POST['delete'])) {
    unset($_SESSION['tipsrad']);
}

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index - Tipsrad</title>
</head>
<body>

    <form method=post>
        <!-- 
            På denna sida ska det finnas en knapp med texten: 
            Visa rätt rad 
        -->
        <button name="show">Visa rätt rad</button>

        <!--         
            På sidan ska också finnas en knapp med texten: 
            Logga in 
        -->
        <button name="login">Logga in</button>
    </form>

    <?php

    // Om sessionsvariabeln för 'rätt rad' är satt 
    // så visa rätt rad

    if (isset($_SESSION['tipsrad'])) {
        echo "<p>Rätt rad:<br>", $_SESSION['tipsrad'], "</p>";
        
        // * Extra (fanns ej med i uppgiften)
        // Visa en 'Ta bort rätt rad'-knapp

        echo "<form method='post'>";
        echo "  <p><button name='delete'>Ta bort rätt rad</button></p>";
        echo "</form>";    
    }
    ?>
    
</body>
</html>