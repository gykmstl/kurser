<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index - Bloggen</title>
</head>
<body>

    <p><a href="login.php">Logga in</a></p>

    <h1>Bloggen</h1>

    <?php

    // Om det finns ett blogginlägg
    if (isset($_COOKIE['blog-header']) && isset($_COOKIE['blog-time']) && isset($_COOKIE['blog-content'])) {
        echo "<h2>", $_COOKIE['blog-header'], "</h2>";
        echo "<p>", $_COOKIE['blog-time'], "</p>";
        echo "<p>", $_COOKIE['blog-content'], "</h2>";
    } else {
        echo "<p>(Blogginlägg saknas)</p>";
    }

    ?>
    
</body>
</html>