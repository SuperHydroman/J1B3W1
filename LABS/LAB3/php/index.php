<?php

$numberOne = rand(1,10);
$numberTwo = rand(1,10);

echo "<h1>Opdracht 3A:</h1>";
echo "<p>Number one: ".$numberOne."</p>",
     "<p>Number two: ".$numberTwo."</p>";

echo $numberOne." * ".$numberTwo." = ".($numberOne*$numberTwo)."<br>",
     $numberOne." + ".$numberTwo." = ".($numberOne+$numberTwo)."<br>",
     $numberOne." - ".$numberTwo." = ".($numberOne-$numberTwo)."<br>",
     $numberOne." / ".$numberTwo." = ".($numberOne/$numberTwo)."<br>";

echo "<h1>Opdracht 3B:</h1>";

$number = 6;

for ($startValue = 1; $startValue <= 10; $startValue++) {
    echo $startValue." * ".$number." = ".($startValue*$number)."<br>";
}

echo "<br>";

function autoTable($chosenNumber) {
    for ($startValue = 1; $startValue <= 10; $startValue++) {
        echo $startValue." * ".$chosenNumber." = ".($startValue*$chosenNumber)."<br>";
    }
}

autoTable(6);

$arr = array(3, 5, 8, 12);

$kanker = 1;
foreach ($arr as $value) {
    echo "<br><b>Tafel van ".$value.":</b><br><br>";
    for ($kanker = 1; $kanker <= 10; $kanker++) {
        echo $kanker." * ".$value." = ".($kanker*$value)."<br>";
    }
    echo "<br>";
}



/*

    Lab 3b - Loops & functions
    1. Maak een PHP applicatie die met een for loopje de tafel van 6 laat zien.
    2. Zorg er nu voor dat de for loop in een functie staat die de waarde 6 mee krijgt als parameter.
    3. Maak een array met de waardes 3, 5, 8 & 12 en loop hier doorheen met een foreach en laat zo voor ieder cijfer de tafel zien.

*/

?>