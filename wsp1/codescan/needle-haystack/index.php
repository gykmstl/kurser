<?php

// Om sidan skickats hit via "Skicka"-knappen
if (isset($_GET['submit'])) {

    // Hämta indata och ändra "specialtecken" 
    // (De som kan ge html-injektioner på sidan)
    $haystack = htmlspecialchars( $_GET['haystack'], ENT_QUOTES);
    $needle = htmlspecialchars($_GET['needle'], ENT_QUOTES);

    // På vilken position hittas nålen i höstacken?
    $pos = strpos($haystack, $needle);
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In- och utmatningar på samma sida</title>
</head>
<body>
    <form>
        <p>Höstack: <input name="haystack"></p>
        <p>Nål: <input name="needle"></p>

        <button name='submit'>Skicka</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        echo "<p>Höstack: $haystack</p>";
        echo "<p>Nål: $needle</p>";

        // Testa om det nålen hittades
        // (=== krävs, eftersom 0 == false)
        if ($pos === false) {
            echo "<p>Nej, nålen fanns inte i höstacken.</p>";
        } else {
            echo "<p>Ja, nålen fanns i höstacken! (På position $pos.)</p>";
        }
    }
    ?>
</body>
</html>