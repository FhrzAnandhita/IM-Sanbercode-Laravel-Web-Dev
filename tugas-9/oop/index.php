<?php

require_once "animal.php";
require_once "frog.php";
require_once "ape.php";

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs . "<br>";
echo "cold blooded : " . $sheep->cold_blooded . "<br><br>";

$frog = new Frog("buduk");

echo "Name : " . $frog->name . "<br>";
echo "legs : " . $frog->legs . "<br>";
echo "cold blooded : " . $frog->cold_blooded . "<br>";
echo "Jump : " . $frog->jump() . "<br><br>";

$ape = new Ape("kera sakti");

echo "Name : " . $ape->name . "<br>";
echo "legs : " . $ape->legs . "<br>";
echo "cold blooded : " . $ape->cold_blooded . "<br>";
echo "Yell : " . $ape->yell();