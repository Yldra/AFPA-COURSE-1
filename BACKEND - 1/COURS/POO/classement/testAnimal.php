<?php

require_once 'Chien.php';
require_once 'Loup.php';

// $animal = new Chat("chat.jpg","croquettes");
// echo "<pre>";
// print_r($animal);
// echo "</pre>"; 
// $animal->makeNoise();
// $animal->inconvenient();

$tigre = new Loup("loup.jpg","moutons");
echo "<pre>" ;
print_r($tigre) ;
echo "</pre>" ; 
$tigre->makeNoise() ;
$tigre->inconvenient();

?>