<?php


namespace src;


class Customer
{
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString() {
        return $this->name . " is age " . $this->age;
    }
}