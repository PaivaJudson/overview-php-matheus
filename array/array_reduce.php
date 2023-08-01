<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function soma($a, $b){
    return $a + $b;
}

$resultado = array_reduce($array, "soma");

echo "resultado = $resultado";

// para ordenar basta usar o sort ou o rsort... 

// para ordenar arrays associativos temos outras funcoes

//Nota: Há diferença nos modos de ordenação quando se trata de um array associativo ou nao... 

