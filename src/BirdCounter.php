<?php
namespace Dino121\Birdy;

use Perasser\BirdCounting\Counting;

class BirdCounter extends Counting
{
    public function getSum()
    {
        foreach ($this->getBirds() as $bird) {
            $sum = $sum + $bird->getAmount();
        }
    }
}