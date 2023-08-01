<?php

$array = [1, 2, 3, 5, 'Luanda'];
$arrayAssoc = ['nome'=>'Judson Paiva', 'idade'=>29, "profissao"=>"Engenheiro Informático"];

echo "array 1 = " . count($array) . "<br>";
echo "array 2 = " . count($arrayAssoc). "<br>";

echo "<pre>";

print_r($array);
print_r($arrayAssoc);
