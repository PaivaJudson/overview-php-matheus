<?php

class Pessoa
{
    public $nome = "Judson Paiva";
    public $idade = 29;
    public $sexo = "Masculino";
    public const OLHOS = 2;
    public const OUVIDOS = 2;


    public function falar(): string
    {
        return "Olá eu sou o ". $this->nome;;
    }

    public function alterarNome($nome)
    {
        $this->nome = $nome;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade()
    {
        return $this->idade;
    }
}

$judson = new Pessoa();

$judson->alterarNome("Quissanga Paiva");
echo $judson->falar() . "<br>";
echo $judson->idade . " anos de idade <br>";
echo "Tu tens ". $judson::OLHOS . " olhos e ". $judson::OUVIDOS . " ouvidos";

