<?php

abstract class Forme
{
    private string $color;
    private string $nom;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract public function surface();
}

class Rectangle extends Forme
{
    private $largeur;
    private $hauteur;

    public function __construct($color, $largeur, $hauteur)
    {
        parent::__construct($color);
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function surface()
    {
        return $this->largeur * $this->hauteur;
    }

    public function affiche()
    {
        echo "Le rectangle a une surface qui est égale à : " . $this->largeur * $this->hauteur . ".<br>";
    }
}

class Carre extends Forme
{
    private $cote;

    public function __construct($color, $cote)
    {
        parent::__construct($color);
        $this->cote = $cote;
    }

    public function surface()
    {
        return pow($this->cote, 2);
    }

    public function affiche()
    {
        echo "Le carre possède une surface de " . pow($this->cote, 2) . "m². <br>";
    }
}

class Cercle extends Forme
{
    private $rayon;

    public function __construct($color, $rayon)
    {
        parent::__construct($color);
        $this->rayon = $rayon;
    }

    public function surface()
    {
        return pi() * pow($this->rayon, 2);
    }

    public function affiche()
    {
        echo "Le rayon du cercle est de " . pi() * pow($this->rayon, 2) . ".<br>";
    }
}

echo "<pre>";
$r1 = new Rectangle('red', 5, 5);
echo "<pre>";
$r1->setColor('Blue');
$r1->affiche();
// echo "Le rectangle a une surface égale à : " . $r1->surface() . ".<br>";
print_r($r1);

$c1 = new Carre('red', 5);
$c1->surface();
$c1->setColor('Rouge');
$c1->affiche();
// echo "Le carre possède des côtés de " . $this->cote . " soit une surface de " . $this->cote * $this->cote . "m². <br>";
print_r($c1);

$cl1 = new Cercle('red', 5);
$cl1->surface();
$cl1->setColor('Jaune');
$cl1->affiche();
// echo "Le rayon du cercle est de " . pi() * pow($this->rayon, 2) . ".<br>";
print_r($cl1);
