<?php

$str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($str, "strpos");

echo "$testeEncontrar <br>";
echo substr($str, $testeEncontrar, 6);


// Podemos tambem encontrar a ultima ocorrencia com funcao "strrpos()";

