<?php

namespace App;

class Chicken extends AbstractAnimal
{
    public static $name = 'Курица';
    public static $makingProduct = Egg::class;

    static $minProductAmount = 0;
    static $maxProductAmount = 1;
}