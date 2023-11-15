<?php

class Identity
{
    private string $first_name;
    private string $last_name;
    private string $birth_date;

    public function __construct(string $fn, string $ln, string $bd)
    {
        $this->first_name = $fn;
        $this->last_name = $ln;
        $this->birth_date = $bd;
    }

    public function setFirstName(string $fn): void
    {
        $this->first_name = $fn;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function setLastName(string $ln): void
    {
        $this->last_name = $ln;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function setBirthDate(string $bd): void
    {
        $this->birth_date = $bd;
    }

    public function getBirthDate(): string
    {
        return $this->birth_date;
    }
}
