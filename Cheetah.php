<?php

require_once('Felidae.php');

class Cheetah extends Felidae
{
    public function __construct($weight)
    {
        parent::__construct("плямиста", "Газелі", $weight);
    }
    public function makeSound() {
        return "рааррараррр гарчу";
    }

    public function interactWithHuman() {
        return "біжи не біжи а станеш хорошим руським";
    }

}
$cheetah = new Cheetah(60);
echo "Гепард:" . '<br>';
echo "Тип шкіри: " . $cheetah->skinType .  '<br>';
echo "Здобич: " . $cheetah->prey .  '<br>';
echo "Вага: " . $cheetah->weight . " кг". '<br>';
echo "Звук: " . $cheetah->makeSound() .  '<br>';
echo "Взаємодія з людиною: " . $cheetah->interactWithHuman() . "\n\n";