<?php

$frase1 = "Amor";
$frase2 = "Roma";


if(strtolower($frase1) == strtolower(strrev($frase2)))
{
    echo "capicúa frase 1 = ". $frase1 . " e frase 2 = ". strtolower(strrev($frase2));
}
else
{
    echo "Não capicúa";
}