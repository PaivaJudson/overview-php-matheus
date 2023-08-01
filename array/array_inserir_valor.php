<?php

$array = [
    1, 2, 3, 4
];

print("<pre>");
var_dump($array);

$array[] = 20;

print("<pre>");
var_dump($array);

$arrayAssoc = [];

$arrayAssoc['a'] = 29;
$arrayAssoc['b'] = 12;

print("<pre>");
var_dump($arrayAssoc);

$arrayAssoc[] = 20;

print("<pre>");
var_dump($arrayAssoc);

$array['z'] = 40;
var_dump($array);


// tambem se pode inserir valores usando range

$array = range(0, 10);
print_r($array);

$array = range(0, 10, (1 / 2));

print_r($array);