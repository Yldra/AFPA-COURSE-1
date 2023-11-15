<?php 

class Bateau {
    protected $masse ;

    public function __construct($masse) {
        $this->masse  = $masse ; 

    }

   

    public function getMasse() {
        return$this->masse ;
    }
}