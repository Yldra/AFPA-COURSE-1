<?php

class Person
{
    private Identity $identity;
    private Contact $contact;
    private array $carData = [];
    private array $addressData = [];

    public function __construct(Identity $identity, Contact $contact)
    {
        $this->identity = $identity;
        $this->contact = $contact;
    }

    // SETTERS
    public function setIdentity(Identity $identity): void
    {
        $this->identity = $identity;
    }

    public function setContact(Contact $contact): void
    {
        $this->contact = $contact;
    }

    // GETTERS
    public function getIdentity(): Identity
    {
        return $this->identity;
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function getAddressData(): array
    {
        return $this->addressData;
    }

    public function getCarData(): array
    {
        return $this->carData;
    }

    // ADDERS
    public function addCar(Car $car): Person
    {
        $this->carData[] = $car;
        return $this;
    }

    public function addAddress(Address $address): Person
    {
        $this->addressData[] = $address;
        return $this;
    }

}