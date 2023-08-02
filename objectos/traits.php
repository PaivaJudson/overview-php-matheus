<?php

class Objecto {


    public function teste(){
        echo "Testando trait de ojecto <br>";
    }
}

class Central
{

    use Objecto;
}