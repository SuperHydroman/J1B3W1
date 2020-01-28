<?php

echo "<h1>Hello world!</h1>";

define("helloWorldTXT", "<h1>Hello world!</h1>");
echo helloWorldTXT;

$helloWorldTXT2 = "<h1>Learning PHP!</h1>";
$helloWorldTXT2 = "<h1>Hello world!</h1>";

$hello = "<h1>Hello";
$world = " world!</h1>";
$hello .= $world;
echo $hello;

$array = array("Hello", "world!");
echo "<h1>".implode(" ", $array)."</h1>";