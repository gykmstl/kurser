<?php

// Funktion som returnerar något
// Nyckelordet 'function' används för att skapa en egen funktion.
// Funktioner kan använda noll, en eller flera parametrar. Dessa skrivs inom parenteser.
function square($x)
{
    // Nyckelordet 'return' avslutar funktionen och skickar tillbaka ett värde till den anropande koden.
    return $x * $x;
}

// Anropsexempel:
// echo "<p>5 i kvadrat: ", square(5), "</p>";
// $y = square(10);

// Funktion som gör något (kallas också procedur)
// Parenteserna efter funktionsnamnet måste vara med även om parametrar saknas.
// Funktioner i matematisk mening returnerar alltid ett värde.
// I programmering så används ordet funktion också för ett delprogram som gör något, till exempel producerar en utskrift.
function footer()
{
    echo '<footer>&copy; Mattias Steinwall, 2021</footer>';
}

// Anropsexempel:
// footer();

// Funktion som anropar andra funktioner (inbyggda och/eller egna)
// Vid fler är en parameter så separeras de med ett kommatecken (,).
function distance($x1, $y1, $x2, $y2)
{
    // Egna och inbyggda funktioner anropas på samma sätt;
    // skriv funktionsnamnet följt av en parameterlista inom parenteser.
    $dist = sqrt(square($x2 - $x1) + square($y2 - $y1));

    return $dist;
}

// Anropsexempel:
// $d = distance(10, 10, 50, 40);

// Funktion med standardvärden för parametrar
// En, eller flera, parametrar kan ges standardvärden som används om inget annat värde skickas in.
// Dessa måste placeras sist i parameterlistan.
function say_hello($name, $lang = 'en')
{
    switch ($lang) {
        case 'en':
            echo "<p>Hello $name!</p>";
            break;
        case 'sv':
            echo "<p>Hej $name!</p>";
            break;
    }
}

// Anropsexempel:
// say_hello("Adam");
// say_hello("Eva", "sv");

// Funktion som använder globala variabler
function say_hello_again()
{
    // Nyckelordet 'global' gör globala variabler tillgängliga inne i funktionen.
    global $lang, $name;

    switch ($lang) {
        case 'en':
            echo "<p>Hello again $name!</p>";
            break;
        case 'sv':
            echo "<p>Hej igen $name!</p>";
            break;
    }
}

// Anropsexempel:
// say_hello_again();

// Funktion med referensparametrar
// Parametrar med och-tecknet (&) framför refererar tillbaka till den anropade variabeln.
function swap(&$x, &$y)
{
    $temp = $x;
    $x = $y;
    $y = $temp;
}

// Anropsexempel:
// $a = 1;
// $b = 2;
// swap($a, $b);

// Funktion som sparar lokala variabelvärden
function counter_writer()
{
    // En 'static'-deklarerad variabel behåller sitt värde mellan varje anrop.
    static $counter;

    if (!isset($counter)) {
        $counter = 0;
    }

    ++$counter;

    echo "<p>Funktionen anropad för $counter:a gången.</p>";
}

// Funktion som anropar sig själv (rekursion)
function fib($n)
{
    if ($n == 1 || $n == 2) {
        // En funktion kan innehålla fler än en return-sats.
        return 1;
    }

    // En funktion kan anropa sig själv, detta kallas rekursion.
    return fib($n - 1) + fib($n - 2);
}