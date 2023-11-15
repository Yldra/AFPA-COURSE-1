<?php

require('html.php');

$table = new Html\Table();
$table->title = "Ma table";
$table->numRows = 5;
echo "<pre>"; 

$row = new Html\Row();
$row->numCells = 3;


$table->message(); 
echo "<br/><br/>";
$row->message(); 
?>