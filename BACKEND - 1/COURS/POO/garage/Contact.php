<?php

class Contact
{
    private string $phone;
    private string $email;
    private string $socials;

    public function __construct(string $ph, string $eml, string $sn)
    {
        $this->phone = $ph;
        $this->email = $eml;
        $this->socials = $sn;
    }

    public function setPhone(string $ph): void
    {
        $this->phone = $ph;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setEmail(string $eml): void
    {
        $this->email = $eml;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setSocials(string $sn): void
    {
        $this->socials = $sn;
    }

    public function getSocials(): string
    {
        return $this->socials;
    }
}
