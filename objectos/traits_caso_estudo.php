<?php
 
trait SomTrait
{
    public function emitirSom($som)
    {
        return $som;
    }
}

class Gato
{
    use SomTrait;
}

class Cachorro
{
    use SomTrait;
}

class Passaro
{
    use SomTrait;
}