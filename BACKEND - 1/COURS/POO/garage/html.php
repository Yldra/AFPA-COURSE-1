<?php 
namespace Html;

class Table {
    // attributs 
      public $title = "";
      public $numRows = 0;
    // méthodes
      public function message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
       }
    }

class Row {
        public $numCells = 0;
        public function message() {
          echo "<p>The row has {$this->numCells} cells.</p>";
        }
} 
?>

    
