<?php

class Address
{
    private int $street_number;
    private string $street;
    private string $address_code;
    private string $city;

    public function __construct(int $sn, string $st, string $ac, string $c)
    {
        $this->street_number = $sn;
        $this->street = $st;
        $this->address_code = $ac;
        $this->city = $c;
    }

    public function getStreetNumber(): int
    {
        return $this->street_number;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getAddressCode(): string
    {
        return $this->address_code;
    }

    public function getCity(): string
    {
        return $this->city;
    }
}

