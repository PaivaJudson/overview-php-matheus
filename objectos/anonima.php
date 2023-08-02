<?php

$pessoa = new class()
{
    private $nome = "Judson Paiva";

    public function dizerNome()
    {
        echo "Meu nome é = ". $this->nome . "<br>";
    }

    public function getNome()
    {
        return $this->nome;
    }
};

$pessoa->dizerNome();
