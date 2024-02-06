<?php


class Felidae
{
    public $skinType; // - тип шкіри (плямиста, полосата, однокольорова)
    public $prey; //- здобич (тварини на котрих вони полюють)
    public $weight; //- вага (кг)



    public function __construct($skinType, $prey, $weight)
    {
        $this->skinType = $skinType;
        $this->prey = $prey;
        $this->weight = $weight;
    }
    public function makeSound() {
        return "Undefined sound";
    }

    public function interactWithHuman() {
        return "Undefined interaction";
    }
}
