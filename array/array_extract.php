<?php

$array = [
    'cor' => "vermelho",
    'forma' => 'retângulo',
    'material' => 'aço'
];


extract($array);

echo "a Cor é = $cor; a Figura = $forma; o Material = $material";