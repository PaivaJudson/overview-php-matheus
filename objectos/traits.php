<?php

trait Objecto 
{
    public function teste(){
        echo "Testando trait de objecto <br>";
    }
}

trait Testando
{
    public $idade = 10;
    
    public function traitTestando()
    {
        echo "Testando traitTestando " . $this->idade ." idade<br>";
    }

    public function modificarIdade($idade)
    {
        $this->idade = $idade;
    }
}

class Central
{
    use Objecto;
    use Testando;
}


$x = new Central();
$x->teste();
$x->traitTestando();
$x->modificarIdade(29);
echo $x->traitTestando();

