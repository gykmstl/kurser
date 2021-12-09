$sql = "SELECT * FROM user
        WHERE username=:username AND password=:password";

$ps = $db->prepare($sql);
$ps->bindValue(':username', $username);
$ps->bindValue(':password', $password);
$ps->execute();

if ($ps->fetch()) {
    $_SESSION['user'] = $username;

    if ($username == "admin") {
        header('Location: admin.php');
    }
    else {
        header('Location: user.php');
    }
    exit;
}