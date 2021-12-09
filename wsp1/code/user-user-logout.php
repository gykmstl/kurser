if (isset($_POST['logout'])) {
    unset($_SESSION['user']);
}

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}