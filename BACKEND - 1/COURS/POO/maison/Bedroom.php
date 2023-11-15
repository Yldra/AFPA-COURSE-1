<?php

class Bedroom extends Room
{
    private string $bed;
    private string $computer;
    private string $design;
    private int $electricity;

    public function __construct(int $width, int $height, string $bed, string $computer, string $design, int $elec)
    {
        parent::__construct($width, $height);
        $this->bed = $bed;
        $this->computer = $computer;
        $this->design = $design;
        $this->electricity = $elec;
    }

    public function setBed(string $bed)
    {
        $this->bed = $bed;
    }

    public function getBed()
    {
        return $this->bed;
    }

    public function energy()
    {
        return $this->electricity;
    }

    public function showEnergy()
    {
        echo "La consommation d'electricité est de : " . $this->electricity . "MWh ce qui correspond à la moyenne nationale.";
    }

    public function surfaceBedroom()
    {
        echo "La Chambre a une surface égale à : " . $this->width * $this->height . "m².<br>";
    }
    // public function turnOnNightMode()
    // {
    //     $this->computer->turnOnNightMode();
    //     echo "On est à Tomorrowland ou quoi";
    // }

    // public function turnOffNightMode()
    // {
    //     $this->computer->turnOffNightMode();
    //     echo "C'est pas Versailles ici!";
    // }

    // public function pcLight()
    // {
    //     $current_time = date("H:i");
    //     $night_start_time = "20:00";
    //     $night_end_time = "06:00";

    //     if ($current_time >= $night_start_time || $current_time < $night_end_time) {
    //         $this->turnOnNightMode();
    //         return true;
    //     } else {
    //         $this->turnOffNightMode();
    //         return false;
    //     }
    // }
}
