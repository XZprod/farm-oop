<?php

namespace App;

class Farm
{
    protected $animals;

    public function addAnimal(AbstractAnimal $animal)
    {
        $this->animals[] = $animal;
    }

    public function harvest()
    {
        $result = [];
        /** @var AbstractAnimal $animal */
        foreach ($this->animals as $animal) {
            $product = $animal::$makingProduct::getClass();
            if (!$result[$product]) {
                $result[$product] = 0;
            }
            $result[$product] += $animal->getProduct();
        }
        return $result;
    }
}