<?php 

class Animal {
 private string $picture ;
 private string $food ;
 private bool $etat=false;


 public function __construct($pic,$food)
 {
    $this->picture = $pic ;
    $this->food = $food ;

 }

 public function makeNoise(){
    echo "l'animal fait du bruit<br>";
}

public function eat(){
   echo "l\"animal mange<br>" ; 
}

public function sleep(){
    echo "l'animal dort"; 
}

}

?>