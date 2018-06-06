<?php

$numUm = $_POST["numeroUm"];
$numDois = $_POST["numeroDois"];
$numTres = $_POST["numeroTres"];
$numQuatro = $_POST["numeroQuatro"];
$numCinco = $_POST["numeroCinco"];

if ($numUm >= $numDois && $numUm >= $numTres && $numUm >= $numQuatro && $numUm >= $numCinco) {
    echo "$numUm";
} else if ($numDois >= $numUm && $numDois >= $numTres && $numDois >= $numQuatro && $numDois >= $numCinco) {
    echo "$numDois";
} else if ($numTres >= $numUm && $numTres >= $numDois && $numTres >= $numQuatro && $numTres >= $numCinco) {
    echo "$numTres";
} else if ($numQuatro >= $numUm && $numQuatro >= $numDois && $numQuatro >= $numTres && $numQuatro >= $numCinco) {
    echo "$numQuatro";
} else {
    echo "$numCinco";
}