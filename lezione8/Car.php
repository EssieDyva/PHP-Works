<?php
/* include 'Person.php';

$p = new Person('Carlo', 18);
$p->setName('Carlo');
$p->setAge(18);
echo $p->getData(); */

class Car {
    private $manufacturer = '';
    private $model = '';

    public function setModel(string $string) {
        $this->model = $string;
    }
    public function setManufacturer(string $string) {
        $this->manufacturer = $string;
    }
    public function getData() : string {
        return 'marca: ' . $this->manufacturer . ' ' . 'modello: ' . $this->model;
    }
}