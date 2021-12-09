<?php
$lang = "";
if (isset($_POST['lang'])) {
    $lang = $_POST['lang'];

    // Uppgift:
    // Sätt kakan 'lang' till värdet $lang
    // så att värdet sparas både på datorn
    // och i $_COOKIE-varibeln
}

// Uppgift:
// Om kakan 'lang' finns så
// sätt $lang till det värde som kakan har

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Språkvalet</title>
</head>
<body>
    <form method='post'>
        <p>Språkval:
            <select name='lang' required onchange='this.form.submit()'>
                <option value='' disabled selected>(Välj språk)
                <option value='swe' <?= ($lang == 'swe') ? 'selected' : '' ?>>Svenska
                <option value='fin' <?= ($lang == 'fin') ? 'selected' : '' ?>>Finska
                <option value='eng' <?= ($lang == 'eng') ? 'selected' : '' ?>>Engelska
                <option value='ger' <?= ($lang == 'ger') ? 'selected' : '' ?>>Tyska
                <option value='spa' <?= ($lang == 'spa') ? 'selected' : '' ?>>Spanska
            </select>
        </p>
    </form>

    <p>
        <?php
        switch ($lang) {
            case 'swe':
                echo "Hej!"; break;

            case 'fin':
                echo "Hei!"; break;

            case 'eng':
                echo "Hello!"; break;

            case 'ger':
                echo "Hallo!"; break;

            case 'spa':
                echo "¡Hola!"; break;
        }
        ?>
    </p>
</body>
</html>