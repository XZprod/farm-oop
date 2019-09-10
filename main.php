<?php

require __DIR__ . '/vendor/autoload.php';

$farm = new \App\Farm();

for ($i = 0; $i < 10; $i++) {
    $farm->addAnimal(new \App\Cow());
}

for ($i = 0; $i < 20; $i++) {
    $farm->addAnimal(new \App\Chicken());
}

$products = $farm->harvest();

echo 'Собрано:<br>';
/** @var \App\AbstractProduct $product */
foreach ($products as $product => $amount) {
    echo $product::$name . ': ' . $amount . ' ' . $product::$amountTitle . '<br>';
}