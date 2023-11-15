<?php

abstract class Vehicule
{ // Vehicule est une idée, les classes qui héritent de ce vehicule sont concrète
    // et il faur définir les notions abstraites
    // ex : $vehicule = New Vehicule() ne fonctionne pas
    private $nom;

    abstract public function demarrer();
    abstract public function stop();
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    public function getNom()
    {
        return $this->nom;
    }
}

class Avion extends Vehicule
{ // Avion extends est une Sous-Classe de Vehicule
    public function demarrer()
    {
        echo "avion décolle\n";
    }
    public function stop()
    {
        echo "avion atteri\n";
    }
    public function specialAvion()
    {
        echo "special avion\n";
    }
}

class Moto extends Vehicule
{
    public function demarrer()
    {
        echo "moto -> vroummm\n";
    }
    public function stop()
    {
        echo "attention ça glisse\n";
    }
}

echo "<pre>";
$avion1 = new Avion();
$avion1->setNom('Airbus A320');
echo $avion1->getNom() . "<br>";

$moto1 = new Moto();
$avion1->demarrer();
$avion1->specialAvion();
$moto1->demarrer();

print_r($avion1);
print_r($moto1);
