<?php

namespace App;

class Cow extends AbstractAnimal
{
    public static $name = 'Корова';
    public static $makingProduct = Milk::class;

    static $minProductAmount = 8;
    static $maxProductAmount = 12;



}