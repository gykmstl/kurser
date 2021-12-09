<?php

// En PHP-sida är som en HTML-sida men med ett eller flera PHP-block.

// Text (string)
$namn = 'Mattias';	// Alla variabler inleds med dollartecken ($).
                    // Citattecken, eller apostrofer, runt texten

// Heltal (integer)
$födelseår = 1967;	// Det är ok att använda svenska tecken (åäö) i variabelnamn.

// Decimaltal (float)
$längd = 2.02;		// Decimaltecknet är punkt (inte komma).

// Sanningsvärde (boolean)
$gift = true;		// Det finns bara två sanningsvärden, true och false.
                    // De kan skrivas både med stora och små bokstäver
                    // så ibland kan du se TRUE och FALSE istället.

// Vektor (array)
$barn = ['Uno', 'Elof', 'Inez'];

// Associativ vektor (associative array)
// Man kan ange ett nyckel-värde-par då en vektor skapas.
$info = ['namn' => 'Mattias', 'födelseår' => 1967, 'längd' => 2.02];

?>

<!DOCTYPE html>
<html lang='sv'>

<head>
    <meta charset='utf-8'>
    <title>Tilldelning och utskrifter</title>
</head>

<body>
    <h1>Tilldelning och utskrifter</h1>

    <?php
    // Kommandot 'echo' skriver HTML-kod. Parenteser behövs ej.
    // Du kan välja antingen citattecken ("") eller apostrofer ('') runtom texten.

    // Varje sats avslutas med semikolon (;).

    // I en echo-sats med citattecken så känner php-tolken igen variabler,
    // eftersom de alltid inleds med $ och ersätter dessa med motsvarande värden.

    echo '<h2>Enkla variabler</h2>';
    echo "<p>Namn: $namn</p>";	// Namn: Mattias
    echo "<p>Födelseår: $födelseår</p>";	// Födelseår: 1967
    echo "<p>Längd: $längd</p>";	        // Längd: 2.02
    echo "<p>Gift: $gift</p>"; 		        // Gift: 1
    // Observera att utskriften av "true" blir "1".
    // Ännu konstigare är att "false" skrivs ur som "".

    // Man ska skriva ut en hel vektor med funktionen print_r.
    // Observera att vektorn är nollindexerad (första elementet har index noll).
    echo '<h2>Array</h2>';
    print_r($barn); // Array ( [0] => Uno [1] => Elof [2] => Inez )

    // I echo kan flera delar i en utskrift sättas samman med kommatecken (,).
    echo '<h2>Element ur en array</h2>';
    echo '<p>Barn 1: ', $barn[0], '</p>';	// Barn 1: Uno
    echo '<p>Barn 2: ', $barn[1], '</p>';	// Barn 2: Elof
    echo '<p>Barn 3: ', $barn[2], '</p>';	// Barn 3: Inez

    echo '<h2>En associativ array</h2>';
    print_r($info); // Array ( [namn] => Mattias [födelseår] => 1967 [längd] => 2.02 )

    // För att komma åt värdet i en vektor så indexerar man med nyckeln.
    echo '<h2>Element ur en associativ array</h2>';
    echo '<p>Namn: ', $info['namn'], '</p>';	            // Namn: Mattias
    echo '<p>Födelseår: ', $info['födelseår'], '</p>';	    // Födelseår: 1967
    echo '<p>Längd: ', $info['längd'], '</p>';	            // Längd: 2.02
    ?>
</body>

</html>