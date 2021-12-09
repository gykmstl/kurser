<?php
include 'funclib.php';
?>

<!DOCTYPE html>
<html lang='sv'>

<head>
    <meta charset='utf-8'>
    <title>Funktioner</title>
</head>

<body>
    <h1>Funktioner</h1>

    <?php
    // Det, eller de, värden som skickas in i en funktion kallas argument.
    // Returvärdet från funktionen används här direkt i en utskrift.
    // Vanligt är annars att värdet sparas i en variabel.
    echo '<p>15 i kvadrat är: ', square(15), '</p>';

    $a = 20;
    $b = 10;
    $c = 24;
    $d = 7;

    $dist = 0;
    echo '<p>$dist före funktionsanrop: ', $dist, '</p>';

    // Argumenten kan vara direkta värden (literaler) eller, som här, variabelvärden.
    // Variabelnamnen på argumenten får, men behöver inte, överensstämma med variabelnamnen för parametrarna.
    echo "<p>Avståndet mellan punkterna ($a; $b) och ($c; $d) är ",
    distance($a, $b, $c, $d), ' le.</p>';

    // Variabeln $dist förändrar inte sitt värde på grund av funktionsanropet.
    // Detta eftersom $dist-variabeln inne i funktion är lokal om inget annat anges.
    echo '<p>$dist efter funktionsanrop: ', $dist, '</p>';

    // Om ett värde skickas till en parameter med standardvärde så används det skickade värdet,
    // om inget värde skickas så används standardvärdet.
    say_hello('World', 'en');
    say_hello('världen', 'sv');
    say_hello('World');

    // Deklarera variabler utanför funktion och använd dem inuti. (Använd sparsamt...)
    $name = 'World';
    $lang = 'en';
    say_hello_again();

    // Skapa två variabler och byt plats på värdena med hjälp av en funktion som hanterar referensanrop.
    $a = 3;
    $b = 5;
    echo '<p>$a, $b före funktionsanrop: ', $a, ', ', $b, '</p>';
    swap($a, $b);
    echo '<p>$a, $b efter funktionsanrop: ', $a, ', ', $b, '</p>';

    // Anropa en funktion upprepade gånger för att kontrollera att den lokala variabeln inuti funktionen kan behålla sina värden.
    counter_writer();
    counter_writer();
    counter_writer();

    // Anrop av en rekursiv funktion kan ge upphov till en stor mängd anrop - vilket kan blii ineffektivt.
    // Så undvik om det går att - som i detta fall - lösa på annat vis.
    // En del problem lämpar sig dock naturligt att lösa just med denna teknik.
    $n = 8;
    echo "<p>Fibonaccital $n är ", fib($n), '.</p>';

    // Gör en sidfot. Observera att de tomma parenteserna används då funktionen inte tar emot något argument.
    footer();
    ?>
</body>

</html>