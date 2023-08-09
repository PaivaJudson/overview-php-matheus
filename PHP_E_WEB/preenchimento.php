<?php

$usuarios = [
    'nome'      => 'Judson Paiva',
    'idade'     => 29,
    'profissao' => 'Programador'
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <div>
            Nome: <input type="text" name="nome" value="<?=$usuarios['nome']?>">
        </div>
        <div>
            Idade: <input type="text" name="idade" value="<?= $usuarios['idade'] ?>">
        </div>
        <div>
            Profissao: <input type="text" name="" value="<?= $usuarios['profissao'] ?>">
        </div>
    </form>
</body>
</html>