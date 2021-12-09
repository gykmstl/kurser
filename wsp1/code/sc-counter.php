<?php
session_start();

if (isset($_SESSION['c'])) {
    // Öka sessionsvariabeln med ett
}
else {
    $_SESSION['c'] = 1;
}

if (isset($_COOKIE['c'])) {
    // Öka kakan med ett
}
else {
    $_COOKIE['c'] = 1;
    setcookie("c", 1, time() + 3600 * 24 * 365 * 10);
}

echo "<p>Visningar under sessionen: {$_SESSION['c']}</p>";
echo "<p>Visningar totalt: {$_COOKIE['c']}</p>";