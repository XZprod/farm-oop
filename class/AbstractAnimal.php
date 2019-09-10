<?php

namespace App;

abstract class AbstractAnimal
{
    public static $makingProduct;
    public static $name;

    protected static $minProductAmount = 1;
    protected static $maxProductAmount = 10;
    protected $id;

    public function __construct()
    {
        $this->id = uniqid();
    }

    public function getProduct()
    {
        $productAmount = rand(static::$minProductAmount, static::$maxProductAmount);
        return $productAmount;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}