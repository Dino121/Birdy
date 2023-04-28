<?php
require 'vendor/autoload.php';

use Dino121\Birdy\BirdCounter;
use Perasser\BirdCounting\Counting;

$counting = new BirdCounter();

$bird1 = new Bird(5,'Meisen');
$counting->addBird($bird1);

$bird2 = new Bird(5,'Meisen');
$counting->addBird($bird2);

foreach ($counting->getBirds() as $bird) {
    echo $bird->getName() . "<br/>";
}

echo "Es gibt " . $counting->getSum() . "Vögel.<br/>";