<?php

require 'Database.php';
require_once 'Room.php';
require_once 'Kitchen.php';
require_once 'Bathroom.php';
require_once 'Bedroom.php';
require_once 'House.php';

echo "<pre>";
echo "<h1>New Kitchen</h1><br>";
$kitchen = new Kitchen(4, 5, "Évier", "Micro-ondes", 2, 3);
$bathroom = new Bathroom(1, 3, "Douche", 2);
$bedroom[] = new Bedroom(1, 2, "Lit Simple", "Corsair", "Moderne", 5);
$bedroom[] = new Bedroom(2, 4, "Lit Double", "Asus", "Baroque", 10);
$house = new House($kitchen, $bathroom, $bedroom);
$bed1 = new Bedroom(8, 16, "Deux Lits", "Apple", "Classique", 15);
$bed2 = new Bedroom(8, 16, "Deux Lits", "Apple", "Classique", 15);
$room = new Room(1, 5);
$house->addBedroom($bed1)->addBedroom($bed2);
$room->addPorte(2)->addPorte(8);
$room->addFenetre(4)->addFenetre(16);
print_r($house);
