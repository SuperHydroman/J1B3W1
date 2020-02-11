<?php

define("choice1", "Schaken");
define("choice2", false);
define("choice3", 1);


# Yathzee
if (choice1 === "Yathzee") {
    echo "Je kiest het spel <b>" . choice1 . "</b> !";
    if (choice2) {
        echo "<br>" . "Het antwoord was <b>ja</b>!";
        if (choice3 > 15 && choice3 < 30) {
            echo "<br>"."<h3>Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd</h3>";
        }
        else if (choice3 < 15 || choice3 > 30) {
            echo "<br>"."<h3>Je wilt Yathzee spelen want dat vind je gewoon leuk</h3>";
        }
    }
    else if (choice2 == false) {
        echo "<br>" . "Het antwoord was <b>nee</b>!";
        if (choice3 > 100) {
            echo "<br>"."<h3>Je wilt geen ".choice1." spelen want je wilt meer dan 100x met een dobbelsteen gooien</h3>";
        }
        else if (choice3 <= 100) {
            echo "<br>"."<h3>Je wilt geen ".choice1." spelen want je wilt minder dan 100 punten halen</h3>";
        }
    }
}

# Monopoly
else if (choice1 === "Monopoly") {
    echo "Je kiest het spel <b>" . choice1 . "</b> !";
    if (choice2) {
        echo "<br>" . "Het antwoord was <b>ja</b>!";
        if (choice3 == 1) {
            echo "<br>"."<h3>Je wilt ".choice1." spelen want je hebt aan 1 spelletje genoeg</h3>";
        }
        else if (choice3 > 1) {
            echo "<br>"."<h3>Je wilt ".choice1." spelen want je houdt ervan iedereen blut te maken</h3>";
        }
    }
    else if (choice2 == false) {
        echo "<br>" . "Het antwoord was <b>nee</b>!";
        if (choice3 == 2 || choice3 > 120) {
            echo "<br>"."<h3>Je wilt ".choice1." niet spelen want je hebt geen zin in een spel van 2 uur</h3>";
        }
        else {
            echo "<br>"."<h3>Je wilt ".choice1." niet spelen want je houd niet van hotels</h3>";
        }
    }
}

# Schaken
else {
    echo "Je kiest het spel <b>" . choice1 . "</b> !";
    if (choice2) {
        echo "<br>" . "Het antwoord was <b>ja</b>!";
        if (choice3 == 2) {
            echo "<br>"."<h3>Je wilt ".choice1." want je vindt zwart en wit leuk</h3>";
        }
        else if (choice3 <> 2) {
            echo "<br>"."<h3>Je wilt ".choice1." spelen want je denkt slimmer dan mij te zijn</h3>";
        }
    }
    else if (choice2 == false) {
        echo "<br>" . "Het antwoord was <b>nee</b>!";
        if (choice3 ==- 1) {
            echo "<br>"."<h3>Je wilt echt niet ".choice1."</h3>";
        }
        else {
            echo "<br>"."<h3>Je wilt gewoon niet ".choice1."</h3>";
        }
    }
}

/* Het kan makkelijker en sneller door dit allemaal in een functie te zetten en de 3 waardes mee te geven als parameters. */

?>