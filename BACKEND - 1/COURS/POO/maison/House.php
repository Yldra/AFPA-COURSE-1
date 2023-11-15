<?php

class House
{
    private Kitchen $kitchen;
    private Bathroom $bathroom;
    private array $bedroom = [];

    public function __construct(Kitchen $kitchen, Bathroom $bathroom, array $bedroom)
    {
        $this->kitchen = $kitchen;
        $this->bathroom = $bathroom;
        $this->bedroom = $bedroom;
    }

    public function addBedroom($b)
    {
        $this->bedroom[] = $b;
        return $this; // return $this = ramener l'objet en entier
    }
}
