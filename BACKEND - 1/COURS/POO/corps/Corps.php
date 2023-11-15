<?php

class Corps
{
    private Head $head;
    private Jambe $jambe;
    private Tronc $tronc;

    public function __construct(Head $head, Jambe $jambe, Tronc $tronc)
    {
        $this->head = $head;
        $this->jambe = $jambe;
        $this->tronc = $tronc;
    }

    // GETTERS
    public function getHead(): Head
    {
        return $this->head;
    }

    public function getJambe(): Jambe
    {
        return $this->jambe;
    }

    public function getTronc(): Tronc
    {
        return $this->tronc;
    }

    // SETTERS
    public function setHead(Head $head): Corps
    {
        $this->head = $head;
        return $this;
    }

    public function setJambe(Jambe $jambe): Corps
    {
        $this->jambe = $jambe;
        return $this;
    }

    public function setTronc(Tronc $tronc): Corps
    {
        $this->tronc = $tronc;
        return $this;
    }
}
