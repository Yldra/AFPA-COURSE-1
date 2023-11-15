<?php
// require_once('Car.php');
// require_once('Identity.php');
// require_once('Address.php');
// require_once('Contact.php');
// require_once('Person.php');

//? Execute la fonction chargerClasse(nom_de_la_classe) dès que l'interprêteur PHP
// ? rencontre l'opératuer new nom_de_classe.
function loadClass($className) {
    require_once($className.".php");
}
spl_autoload_register('loadClass'); 


echo "<pre>";
// ! IDENTITY
$id_brian = new Identity('Brian', 'KERGUTUL', '03/09/1994');
// ! CONTACT
$contact_brian = new Contact("34344555", "toto@gmail.com", "linkedin");
// ! ADDRESS
$address1_brian = new Address(1, 'Rue Gabriel Péri', '29200', 'BREST');
$address2_brian = new Address(2, 'Rue du Port', '35400', 'ST MALO');
// ! CAR
$car1_brian = new Car('Hyundai', 'Black', 'Diesel');
$car2_brian = new Car('Ferrari', 'Red', 'Essence');
$car3_brian = new Car('Peugeot', 'White', 'Ethanol');
// ! PERSON
$brian = new Person($id_brian,$contact_brian,$address1_brian,$car1_brian);

// Ajout des adresses et des voitures
$brian->addCar($car2_brian);
$brian->addCar($car1_brian);
$brian->addCar($car2_brian);

$brian->addAddress($address1_brian)->addAddress($address2_brian);

print_r($brian);


// Affichage des voitures de Brian
// echo "Brian's Collection : ";
// foreach ($brian->getCar() as $car) {
//     echo "<h3>{$car->getModel()}'s color is {$car->getColor()}</h3>";
// }
