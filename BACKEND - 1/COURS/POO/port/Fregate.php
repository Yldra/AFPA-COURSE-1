<?php 

Class Fregate extends Bateau implements Amarable {

public function nbcordes() {
    return $this->masse / 10 ;
}

public function fondnecessaire() {
    return 12 ; 
}

}

?>