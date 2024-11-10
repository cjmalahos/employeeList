<?php

class Worker {
    protected $name;
    protected $address;
    protected $age;
    protected $organization;

    public function __construct($name, $address, $age, $organization) {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
        $this->organization = $organization;
    }

    // Define the __toString() method
    public function __toString() {
        return "Name: " . $this->name . ", Organization: " . $this->organization;
    }
}
?>
