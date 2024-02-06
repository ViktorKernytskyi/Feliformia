<?php

require_once('Felidae.php');
class Lynx extends Felidae
{
    public function __construct($weight) {
        parent::__construct("полосата", "Зайці", $weight);
    }
    public function makeSound() {
        return "ріііі-рііі";
    }

    public function interactWithHuman() {
        return "надеру їбальник якщо підійдеш";
    }
}
$lynx = new Lynx(15);
echo "Рись:". '<br>';
echo "Тип шкіри: " . $lynx->skinType . '<br>';
echo "Здобич: " . $lynx->prey . '<br>';
echo "Вага: " . $lynx->weight . " кг" . '<br>';
echo "Звук: " . $lynx->makeSound() . '<br>';
echo "Взаємодія з людиною: " . $lynx->interactWithHuman() . "\n\n";
