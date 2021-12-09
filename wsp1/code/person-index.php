<?php
include '../config.php';
$db = new PDO("mysql:host=localhost;dbname={$dbprefix}persondb;charset=utf8",
    $username, $password);

if (isset($_POST['insert'])) {
    // 1) Skapa en SQL-fråga med platshållare (:xxx)
    // för värden från användaren
    $sql = "INSERT INTO person (name, age) VALUES (:name, :age)";

    // 2) Skapa ett 'prepared statement'
    $ps = $db->prepare($sql);

    // 3) Knyt värden till platshållarna
    $ps->bindValue(':name', $_POST['name']);
    $ps->bindValue(':age', $_POST['age']);

    // 4) Kör frågan och testa om den kunde köras
    $ok = $ps->execute();
    
    if (!$ok) {
        $message = "Fel vid INSERT.";
    }
}

if (isset($_POST['update'])) {
    $sql = "UPDATE person SET age=age+1 WHERE id=:id";
    $ps = $db->prepare($sql);
    $ps->bindValue(':id', $_POST['id']);
    $ok = $ps->execute();

    if (!$ok) {
        $message = "Fel vid UPDATE.";
    }
}

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM person WHERE id=:id";
    $ps = $db->prepare($sql);
    $ps->bindValue(':id', $_POST['id']);
    $ok = $ps->execute();

    if (!$ok) {
        $message = "Fel vid DELETE.";
    }
}

?>

<!DOCTYPE html>
<html lang='sv'>

<head>
    <meta charset='utf-8'>
    <title>Person-databas</title>
</head>

<body>
    <form method='post'>
        <p>Namn:<input name='name'></p>
        <p>Ålder:<input name='age'></p>
        <p><button name='insert'>Infoga (ange namn och ålder)</button></p>

        <p>ID:<input name='id'></p>
        <p>
            <button name='update'>Fyll år (ange id)</button>
            <button name='delete'>Ta bort (ange id)</button>
        </p>
    </form>

    <?php
    if (isset($message)) {
        echo "<p><b>$message</b></p>";
    }

    $sql = "SELECT * FROM person";
    $ps = $db->prepare($sql);
    $ps->execute();

    // Hämta rad-för-rad så länge det finns
    // någon rad att hämta
    while ($row = $ps->fetch()) {
        $id = $row['id'];
        $name = $row['name'];
        $age = $row['age'];

        echo "<p>Person #$id heter $name och är $age år.</p>";
    }
    ?>
</body>

</html>