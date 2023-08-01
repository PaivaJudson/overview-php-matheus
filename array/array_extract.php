<?php

$array = [
    'cor' => "vermelho",
    'forma' => 'retângulo',
    'material' => 'aço'
];


extract($array);

echo "a cor é = $cor; a Figura = $forma; o material = $material";