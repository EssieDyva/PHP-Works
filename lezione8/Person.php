<?php
class Person {
    private $name = '';
    private $age = 0;

    public function setName(string $string) {
        $this->name = $string;
    }

    public function setAge(int $int) {
        $this->age = $int;
    }

    public function getData() : string {
        return 'nome: ' . $this->name . ' ' . 'età: ' . $this->age;
    }

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
}