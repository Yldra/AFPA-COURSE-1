<?php

require_once "Animal.php"; 

class Felin extends Animal {

    public function makeNoise()
    {
        echo "ronronne<br>";
    }
    public function inconvenient() {
        echo "perd ses poils<br>";
    }

}


?>