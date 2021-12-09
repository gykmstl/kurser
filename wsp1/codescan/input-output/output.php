<?php
// I den associativa vektorn $_GET så ligger de namn-värde-par som skickades med formuläret.
$message = $_GET['message'];
?>

<!DOCTYPE html>
<html lang='sv'>

<head>
    <meta charset='utf-8'>
    <title>Utmatning</title>
</head>

<body>
    <h1>Utmatning</h1>

    <?php
    echo "<p>Meddelande: $message</p>";
    ?>
</body>

</html>