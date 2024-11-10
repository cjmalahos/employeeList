<?php

require_once __DIR__ . '/Employee.php';

class CommissionWorker extends Employee {
    private $regularSalary;
    private $itemsSold;
    private $commissionRate;

    public function __construct($name, $address, $age, $companyName, $regularSalary, $itemsSold, $commissionRate) {
        parent::__construct($name, $address, $age, $companyName);
        $this->regularSalary = $regularSalary;
        $this->itemsSold = $itemsSold;
        $this->commissionRate = $commissionRate;
    }

    public function earnings() {
        return $this->regularSalary + ($this->itemsSold * $this->commissionRate);
    }

    public function toString() {
        return "Commission Employee: $this->name, $this->companyName, Earnings: " . $this->earnings();
    }
}
?>
