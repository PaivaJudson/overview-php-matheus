<?php

$pessoa = ["Judson Paiva", 29, "Programador", "Azul"];

list($nome, $idade, $profissao, $corFavorita) = $pessoa;

echo "<p>Nome = $nome </p>";
echo "<p>Idade = $idade </p>";
echo "<p>Profissão = $profissao </p>";
echo "<p>Cor Favorita = $corFavorita </p>";


$carro = ["Jaguar", 3.0, "Azul", 18, "Teto Solas", "Automático"];

[$marca, $motor, $cor, $aro, $opcional, $caixa] = $carro;

echo "<hr>";
echo "<p>Marca = $marca </p>";
echo "<p>Motor = $motor </p>";
echo "<p>Cor = $cor </p>";
echo "<p>Aro = $aro </p>";
echo "<p>Opcional = $opcional </p>";
echo "<p>Caixa = $caixa </p>";


// array_chunk -> reparte um array ... 


$frutas = array('maçã', 'banana', 'laranja', 'morango', 'abacaxi');
$removidos = array_splice($frutas, 2, 2, ['uva', 'pêssego']);
print_r($frutas);

// $frutas agora será: array('maçã', 'banana', 'uva', 'pêssego', 'abacaxi')
// $removidos será: array('laranja', 'morango')
