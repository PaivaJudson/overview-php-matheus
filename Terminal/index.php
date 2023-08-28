<?php

$idade = 29;

$text = <<<TEXT
        Está é uma mensagem
        de varias linhas
        aqui voce pode usar a idade $idade anos
    TEXT;

echo nl2br($text);

echo "<br>";

$text = <<<'TEXT'
        Está é uma mensagem
        de varias linhas
        aqui voce pode usar a idade anos
    TEXT;

echo nl2br($text);

echo nl2br($text);


$text = <<<TEXT
    <div>
        <h1>Hello World</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aperiam unde fugiat provident ad laborum earum, sit rem nostrum illo quo nobis delectus alias perspiciatis distinctio aut. Autem, odio a?
        </p>
    </div>
    TEXT;

    
