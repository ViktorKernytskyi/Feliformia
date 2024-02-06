<?php

require_once('Felidae.php');
class Cat extends Felidae
{
    public function __construct($weight) {
        parent::__construct("онокольорова", "пацюки", $weight);
    }
    public function makeSound() {
        return "Мур-мяу";
    }

    public function interactWithHuman() {
        return "Підлабузник під рукою";
    }
}

$Cat = new Cat(3);
echo "Кіт:" . '<br>';
echo "Тип шкіри: " . $Cat->skinType .  '<br>';
echo "Здобич: " . $Cat->prey .  '<br>';
echo "Вага: " . $Cat->weight . " кг". '<br>';
echo "Звук: " . $Cat->makeSound() .  '<br>';
echo "Взаємодія з людиною: " . $Cat->interactWithHuman() . "\n\n";

