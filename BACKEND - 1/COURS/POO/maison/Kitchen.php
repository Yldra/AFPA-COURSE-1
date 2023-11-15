<?php

class Kitchen extends Room
{
    private string $sink;
    private string $microwave;
    private int $water;
    private int $electricity;

    public function __construct(int $width, int $height, string $s, string $mw, int $w, int $elec)
    {
        parent::__construct($width, $height);
        $this->sink = $s;
        $this->microwave = $mw;
        $this->water = $w;
        $this->electricity = $elec;
    }

    public function setSink($s)
    {
        $this->sink = $s;
    }

    public function typeSink()
    {
        return $this->sink;
    }

    public function microwaveON()
    {
        $this->microwave = "ON";
        echo "Microwave is ON";
    }

    public function microwaveOFF()
    {
        $this->microwave = "OFF";
        echo "Microwave is OFF";
    }

    public function energy()
    {
        return $this->water + $this->electricity;
    }

    public function showEnergy()
    {
        echo "Si le prix de l'eau et de l'électricité est de " . $this->water + $this->electricity . "€ alors Bruno Lemaire est un incompétent";
    }

    public function surfaceKitchen()
    {
        echo "La cuisine a une surface égale à : " . $this->width * $this->height . "m².<br>";
    }
}
