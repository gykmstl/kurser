<?php
$sql = "SELECT * FROM user";
$ps = $db->prepare($sql);
$ps->execute();

while ($row = $ps->fetch()) {
    echo "<p>{$row['username']} : {$row['password']}</p>";
}
?>