if (isset($_POST['insert'])) {
    $sql = "INSERT INTO user VALUES (:username, :password)";

    $ps = $db->prepare($sql);
    $ps->bindValue(':username', $_POST['username']);
    $ps->bindValue(':password', $_POST['password']);
    $ps->execute();
}

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM user WHERE username=:username";

    $ps = $db->prepare($sql);
    $ps->bindValue(':username', $_POST['username']);
    $ps->execute();
}

if (isset($_POST['update'])) {
    $sql = "UPDATE user SET password=:password
        WHERE username=:username";

    $ps = $db->prepare($sql);
    $ps->bindValue(':username', $_POST['username']);
    $ps->bindValue(':password', $_POST['password']);
    $ps->execute();
}