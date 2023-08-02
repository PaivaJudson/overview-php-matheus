<?php

class Pessoa
{
    public $nome = "Judson Paiva";
    public $idade = 29;
    public $sexo = "Masculino";
    public const OLHOS = 2;
    public const OUVIDOS = 2;


    function falar(): string
    {
        return "Olá eu sou o ". $this->nome;;
    }

    function alterarNome($nome)
    {
        $this->nome = $nome;
    }
}

$judson = new Pessoa();

$judson->alterarNome("Quissanga Paiva");
echo $judson->falar() . "<br>";
echo $judson->idade . " anos de idade <br>";
echo "Tu tens ". $judson::OLHOS . " olhos e ". $judson::OUVIDOS . " ouvidos";
