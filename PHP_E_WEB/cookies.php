<?php

setcookie("nome", "Judson Paiva", time() + 3600);

if(isset($_COOKIE['nome']))
{
    $nome = $_COOKIE['nome'];
}

print_r($_COOKIE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá mundo!</h1>

    <?php if($nome != ""): ?>
        <p>Seja bem-vindo <?=$nome ?></p>
    <?php endif; ?>
</body>
</html>