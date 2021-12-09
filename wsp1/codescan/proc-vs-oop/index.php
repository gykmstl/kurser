<?php
//
// Procedurerell programmering
//

// Funktion, som givet namn, längd och vikt presenterar personen.
function present($name, $height, $weight)
{
    echo "<p>Hello, my name is {$name}.<br>";
    echo "Height (m): {$height}<br>";
    echo "Weight (kg): {$weight}</p>";
}

// Funktion, som givet vikt och längd, beräknar BMI (Body Mass Index)
function getBMI($height, $weight)
{
    return $weight / ($height * $height);
}

//
// Objektorienterad programmering
//

class Person
{
    // Instansvariabler (egenskaper)
    // Varje objekt ur klassen har sin uppsättning av dessa
    public $name;
    public $height;
    public $weight;

    // Konstruktor. Används då objekt skapas för att
    // sätta instansvariablernas värden
    public function __construct($name, $height, $weight)
    {
        // Instansvariablerna kommer man - inifrån klassen - åt
        // med skrivsättet '$this->...'
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // Instansmetod för att presentera personen
    // Observera att metoden inte tar några argument -
    // data tas från instansvariablerna
    public function present()
    {
        echo "<p>Hello, my name is {$this->name}.<br>";
        echo "Height (m): {$this->height}<br>";
        echo "Weight (kg): {$this->weight}</p>";
    }

    // Instansmetod för att presentera personen
    // Samma här - inga argument -
    // data tas från instansvariablerna
    public function getBMI()
    {
        return $this->weight / ($this->height * $this->height);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Person</title>
</head>

<body>
    <?php
    echo '<h1>Procedurell programmering</h1>';

    // Anropa funktioner. Skicka med argument.
    present('Mattias', 2.02, 86);
    echo '<p>BMI: ', getBMI(2.02, 86), '</p>';
    present('Donald', 1.88, 114);
    echo '<p>BMI: ', getBMI(1.88, 114), '</p>';

    //
    // Objektorienterad programmering
    //

    echo '<h1>Objektorienterad programmering</h1>';

    // Skapa objekt. Skicka argument till konstruktorn.
    $p1 = new Person('Mattias', 2.02, 86);
    $p2 = new Person('Donald', 1.88, 114);

    // Anropa metoder
    // Syntax: objektreferens -> metodnamn()
    $p1->present();
    echo '<p>BMI: ', $p1->getBMI(), '</p>';
    $p2->present();
    echo '<p>BMI: ', $p2->getBMI(), '</p>';
    ?>
</body>

</html>