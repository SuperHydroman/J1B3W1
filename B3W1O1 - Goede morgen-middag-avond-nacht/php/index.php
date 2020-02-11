<?php
date_default_timezone_set('Europe/Amsterdam');
//date_default_timezone_set('America/Los_Angeles');
//date_default_timezone_set('Antarctica/Troll');
//date_default_timezone_set('Indian/Maldives');

function test() {
    if (strtotime(date('H:i')) >= strtotime('06:00') && strtotime(date('H:i')) <= strtotime('12:00')) {
        echo "<h1>Goede morgen!<br><br>Het is nu ".date("H:i")."</h1>";
    }
    else if (strtotime(date('H:i')) >= strtotime('12:00') && strtotime(date('H:i')) <= strtotime('18:00')) {
        echo "<h1>Goede middag!<br><br>Het is nu ".date("H:i")."</h1>";
    }
    else if (strtotime(date('H:i')) >= strtotime('18:00') && strtotime(date('H:i')) <= strtotime('00:00')) {
        echo "<h1>Goede avond!<br><br>Het is nu ".date("H:i")."</h1>";
    }
    else if (strtotime(date('H:i')) >= strtotime('00:00') && strtotime(date('H:i')) <= strtotime('06:00')) {
        echo "<h1>Goede nacht!<br><br>Het is nu ".date("H:i")."</h1>";
    }
}
test();

function backgroundChanger() {
    $chosenBackground = '';

    if (strtotime(date('H:i')) >= strtotime('06:00') && strtotime(date('H:i')) <= strtotime('12:00')) {
        $chosenBackground = "url('../img/morning.png')";
    }
    else if (strtotime(date('H:i')) >= strtotime('12:00') && strtotime(date('H:i')) <= strtotime('18:00')) {
        $chosenBackground = "url('../img/afternoon.png')";
    }
    else if (strtotime(date('H:i')) >= strtotime('18:00') && strtotime(date('H:i')) <= strtotime('00:00')) {
        $chosenBackground = "url('../img/evening.png')";
    }
    else if (strtotime(date('H:i')) >= strtotime('00:00') && strtotime(date('H:i')) <= strtotime('06:00')) {
        $chosenBackground = "url('../img/night.png')";
    }
    return $chosenBackground;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>J1B3W1 - Opdracht</title>
    <link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        body {
            background-image: <?=backgroundChanger()?>;
            color: white;
        }
        h1 {
            position: absolute;
            display: inline;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 300%;
            text-align: center;
            font-family: 'Merienda One', cursive;
        }
    </style>
</body>
</html>
