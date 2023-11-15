<?php 
interface Animal {
    public function makeSound() ;
    public function mange();
}

interface Parcourable {
    public function parcours();
}

class Chat implements Animal, Parcourable  {

    public function makeSound(){
        echo "miaou";
    }
    public function mange(){
        echo "chat mange";
    }

    public function parcours() {
        echo "100km ";
    }
}

?>