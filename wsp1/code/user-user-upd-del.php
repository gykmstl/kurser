if (isset($_POST['delete'])) {
    $sql = "DELETE FROM user WHERE username=:username";

    $ps = $db->prepare($sql);
    $ps->bindValue(':username', $username);
    $ps->execute();

    unset($_SESSION['user']);
    header('Location: index.php');
    exit;
}

if (isset($_POST['update'])) {
    $sql = "UPDATE user SET password=:password
            WHERE username=:username";

    $ps = $db->prepare($sql);
    $ps->bindValue(':username', $username);
    $ps->bindValue(':password', $_POST['password']);
    $ps->execute();
}