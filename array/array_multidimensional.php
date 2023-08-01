<?php

$array = [
    [1, 3, 5],
    [2, 4, 6]
];


echo "<pre>";
print_r($array);

// exercicio 46 

$array = [
    ['Angola', 'Portugal', 'Brasil', 'Cabo-Verde'],
    ['Banana', 'Maçã', 'Goiaba', 'Ananás'],
    [1, 2, 3, 4]
];

for($i=0; $i<count($array); $i++) 
{ 
    echo "<p>Array ". ($i + 1) . "<p> [";
    for($j=0; $j<count($array[$i]); $j++) 
    { 
        echo " ". $array[$i][$j];
    }
    echo " ]";
}