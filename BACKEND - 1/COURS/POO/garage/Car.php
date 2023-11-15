<?php

class Car
{
    private string $model;
    private string $color;
    private string $energy;

    public function __construct(string $m, string $c, string $e)
    {
        $this->model = $m;
        $this->color = $c;
        $this->energy = $e;
    }

    public function setModel(string $m): void
    {
        $this->model = $m;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setColor(string $c): void
    {
        $this->color = $c;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setEnergy(string $e): void
    {
        $this->energy = $e;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

}
