<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function soma($a, $b){
    return $a + $b;
}

$resultado = array_reduce($array, "soma");

echo "resultado = $resultado";