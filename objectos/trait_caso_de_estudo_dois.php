<?php

trait LogTrait
{
    public function registarAcao($acao)
    {
        return "Ação registada: " . $acao . "<br>";
    }
}

class Animal
{
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }
}


class Cachorro extends Animal
{
    use LogTrait;

    public function latir()
    {
        $msg = $this->nome . " está latindo <br>";
        $msg .= $this->registarAcao("Cachorro latindo");
        return $msg;
    }
}



$cachorro = new Cachorro("Noque", 7);
echo $cachorro->latir();