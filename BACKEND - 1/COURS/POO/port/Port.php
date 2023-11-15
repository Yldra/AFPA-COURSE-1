<?php 

class Port {

    public $nomport; 

    public function __construct(string $np) {
        $this->nomport = $np ;
        echo "Ici c'est".$np ; 
    }

    public function accueilEngin(Amarable $a) {
        if ($a->fondnecessaire() > 10 ) {
            echo "PAS POSSIB !!!";
        } else {
            echo "OK, il faut ".$a->nbcordes()." bites d'amarrage" ;
        }
    }
}