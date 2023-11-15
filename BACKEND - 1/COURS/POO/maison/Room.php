<?php

class Room
{
    public int $width;
    public int $height;
    private int $porte;
    private int $fenetre;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function addFenetre(int $fenetre)
    {
        $this->fenetre = $fenetre;
        echo " Dans la pièce, il y a " . $this->fenetre . " fenetre(s).<br>";
        return $this; // retourne l'objet en entier et permet le chainage
    }

    public function addPorte(int $porte)
    {
        $this->porte = $porte;
        echo " Dans la pièce, il y a " . $this->porte . " porte(s).<br>";
        return $this; // retourne l'objet en entier et permet le chainage
    }

    public function surface()
    {
        return $this->width * $this->height;
    }
}