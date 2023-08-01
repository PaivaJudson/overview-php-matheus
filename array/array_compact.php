<?php

$marca = "BMW";
$motor = "3.0";
$tetoSolar = true;
$portas = 5;

$carro = compact("marca", "motor", "tetoSolar", "portas");

echo "<pre>";
print_r($carro);