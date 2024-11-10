<?php

require_once __DIR__ . '/Person.php';

abstract class Employee extends Person {
    protected $companyName;

    public function __construct($name, $address, $age, $companyName) {
        parent::__construct($name, $address, $age);
        $this->companyName = $companyName;
    }

    abstract public function earnings();

    public function toString() {
        return $this->name . " works at " . $this->companyName;
    }
}
?>
