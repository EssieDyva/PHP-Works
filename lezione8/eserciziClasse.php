<?php
include 'Person.php';
include 'Car.php';
include 'Calcoli.php';


$p = new Person('Carlo', 18);
$p->setName('Carlo');
$p->setAge(18);

echo $p->getData();
echo '<br>';

$c = new Car();
$c->setModel('500L');
$c->setManufacturer('Fiat');

echo $c->getData();
echo '<br>';

$operazioni = new Calcoli(3, 5);
echo 'il massimo è: ' . $operazioni->massimo();
echo '<br>';
echo 'il minimo è: ' . $operazioni->minimo();
echo '<br>';