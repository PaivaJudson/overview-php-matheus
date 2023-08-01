<?php

$arr = [
    'porta' => 100,
    'macaneta' => 5,
    'motor' => 2000,
    'retrovisor' => 8
];

function itensCaros($arr){
    $listaItensCaros = [];
    foreach ($arr as $item => $preco) {
        if($preco > 10)
        {
            array_push($listaItensCaros, $item);
        }
    }
    return $listaItensCaros;
}

$novoArr = itensCaros($arr);
echo "<pre>";
print_r($novoArr);