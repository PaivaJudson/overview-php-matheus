<?php

$nome = $_GET['nome'];
$idade = $_GET['idade'];
print_r($_GET);
echo "<br> ". $nome . "<br>";


?>

<h1>Você enviou a expressao: <?=$nome?> e idade = <?=$idade ?></h1>