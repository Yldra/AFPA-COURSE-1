<?php

class Bathroom extends Room
{
    private string $shower;
    private int $water;

    public function __construct(int $width, int $height, string $shower, int $w)
    {
        parent::__construct($width, $height);
        $this->shower = $shower;
        $this->water = $w;
    }

    public function energy()
    {
        return $this->water;
    }

    public function showEnergy()
    {
        echo "La consommation d'eau est de : " . $this->water . "m3 ce qui correspond à la moyenne nationale.";
    }

    public function surfaceBathroom()
    {
        echo "La Salle de Bain a une surface égale à : " . $this->width * $this->height . "m².<br>";
    }
}
