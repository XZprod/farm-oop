<?php

namespace App;

abstract class AbstractProduct
{
    public static $name;
    public static $amountTitle;

    public static function getClass()
    {
        return static::class;
    }
}