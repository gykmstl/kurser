<?php
session_start();

// * Extra (fanns ej med i uppgiften)
// Om 'Logga ut'-knappen klickats 
// så ta bort sessionsvariabeln 'login'

if (isset($_POST['logout'])) {
    unset($_SESSION['login']);
}

// Om användaren inte är inloggad
// så omdirigera till index-sidan

if (!isset($_SESSION['login'])) {
    header("location: .");
    exit;
}

// Om ny tipsrad har skickats till sidan 
// så spara den i en cookie (en vecka)

if (isset($_POST['tipsrad'])) {
    setcookie('tipsrad', $_POST['tipsrad'], time() + 7 * 24 * 3600);
    $_COOKIE['tipsrad'] = $_POST['tipsrad'];
}

// Om den egna raden ska tas bort 
if (isset($_POST['deletemy'])) {
    setcookie('tipsrad', "", time() - 1);
    unset($_COOKIE['tipsrad']);
}

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mypage - Tipsrad</title>
</head>
<body>

    <?php
    // Om den finns en sparad rad
    if (isset($_COOKIE['tipsrad'])) {
        // så visa den
        echo "<p>Tippad rad:<br>", $_COOKIE['tipsrad'], "</p>";
    }  

    // Om det inte finns någon rätt rad
    if (!isset($_SESSION['tipsrad'])) {
        // så ge möjligheten att spara en tipsrad
        echo "<form method=post>";
        echo "<p>Din tipsrad: ", "<input name='tipsrad' placeholder='111xxx2221x1x' minlength='13' maxlength='13'>";
        echo "</form>";
    } else {
        // Annars - Visa den rätta 
        echo "<p>Rätt rad:<br>", $_SESSION['tipsrad'], "</p>";

        // Om den finns en sparad rad
        if (isset($_COOKIE['tipsrad'])) {

            // så räkna antalet rätt
            $antal = 0;
            for ($i = 0; $i < 13; $i++) { 
                if ($_COOKIE['tipsrad'][$i] == $_SESSION['tipsrad'][$i]) {
                    $antal++;
                }
            }
            
            // och visa det
            echo "<p>Antal rätt: $antal</p>";
        }
    }

    ?>

    <!-- 
        * Extra (fanns ej med i uppgiften)
    -->
    <form method='post'>
        <p><button name="logout">Logga ut</button></p>
        <p><button name="deletemy">Ta bort min tipsrad</button></p>
    </form>

</body>
</html>