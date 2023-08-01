<?php

$frase = "O Rato roeu a roupa do Rei de Roma";
$count = 0;
for ($i = 0; $i < strlen($frase); $i++) {
    if ($frase[$i] == 'a') {
        $count++;
    }
}

echo "<p>A quantidade de letras a(s) é : $count</p>";