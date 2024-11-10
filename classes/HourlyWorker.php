<?php

require_once __DIR__ . '/Employee.php';

class HourlyWorker extends Employee {
    private $hoursWorked;
    private $rate;

    public function __construct($name, $address, $age, $companyName, $hoursWorked, $rate) {
        parent::__construct($name, $address, $age, $companyName);
        $this->hoursWorked = $hoursWorked;
        $this->rate = $rate;
    }

    public function earnings() {
        if ($this->hoursWorked > 40) {
            $regularHours = 40;
            $overtimeHours = $this->hoursWorked - 40;
            return ($regularHours * $this->rate) + ($overtimeHours * $this->rate * 1.5);
        }
        return $this->hoursWorked * $this->rate;
    }

    public function toString() {
        return "Hourly Employee: $this->name, $this->companyName, Earnings: " . $this->earnings();
    }
}
?>
