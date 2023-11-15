<?php
define('BASE','http://localhost/cinema');
// url de base : http://localhost/cinema/index.php?execution=ActorController/afficheOne/1

$action = $_GET['execution']; // je récupère 'acteur/afficheOne/1'
// echo $action;
$tab = explode('/', $action); // dans tab[0] => 'acteur', dans tab[1] => 'afficheOne', dans tab[2] => '1'
// print_r($tab);

// Prise en compte du cas où l'url se limiterait à ...acteur/afficheOne (au lieu de ...acteur/afficheOne/1) :
$arg = null;
$controller = $tab[0];
$fonction = $tab[1];
if (isset($tab[2])) {
    $arg = $tab[2];
}

// On va faire appel à des fonctions dont les noms vont être générés grâce aux noms récupérés dans les variables ci-dessus :
require 'controllers/' . $controller . '.php';

if (isset($arg)) {
    $fonction($arg);
} else {
    $fonction();
}
