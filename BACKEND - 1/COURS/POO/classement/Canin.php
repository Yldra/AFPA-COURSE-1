<?php

require_once "Animal.php"; 

class Canin extends Animal {

    public function makeNoise()
    {
        echo "ouaf<br>";
    }
    public function inconvenient() {
        echo "mord<br>";
    }

    public function changeetat(){
        // $parent = get_parent_class($this);
        // $root= get_parent_class($parent);
        // $root->etat = true ;
    }

}


?>