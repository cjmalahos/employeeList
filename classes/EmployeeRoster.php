<?php

require_once __DIR__ . '/Employee.php';
require_once __DIR__ . '/CommissionWorker.php';
require_once __DIR__ . '/HourlyWorker.php';
require_once __DIR__ . '/PieceWorker.php';

class EmployeeRoster {
    private $roster;

    // Constructor to initialize the roster array
    public function __construct($rosterSize) {
        $this->roster = array_fill(0, $rosterSize, null);
    }

    // Add an employee to the roster
    public function addEmployee(Employee $employee) {
        for ($i = 0; $i < count($this->roster); $i++) {
            if ($this->roster[$i] === null) {
                $this->roster[$i] = $employee;
                return;
            }
        }
        echo "Roster is full, can't add more employees.\n";
    }

    // Display all employees in the roster
    public function displayAll() {
        echo "\nEmployee Roster:\n";
        foreach ($this->roster as $employee) {
            if ($employee !== null) {
                echo $employee->toString() . "\n";
            }
        }
    }

    // Payroll: display earnings for each employee
    public function payroll() {
        echo "\nPayroll:\n";
        foreach ($this->roster as $employee) {
            if ($employee !== null) {
                echo $employee->toString() . ", Earnings: " . $employee->earnings() . "\n";
            }
        }
    }

    // Count total number of employees
    public function count() {
        $count = 0;
        foreach ($this->roster as $employee) {
            if ($employee !== null) {
                $count++;
            }
        }
        return $count;
    }

    // Count commission employees
    public function countCE() {
        $count = 0;
        foreach ($this->roster as $employee) {
            if ($employee instanceof CommissionWorker) {
                $count++;
            }
        }
        return $count;
    }

    // Count hourly employees
    public function countHE() {
        $count = 0;
        foreach ($this->roster as $employee) {
            if ($employee instanceof HourlyWorker) {
                $count++;
            }
        }
        return $count;
    }

    // Count piece workers
    public function countPE() {
        $count = 0;
        foreach ($this->roster as $employee) {
            if ($employee instanceof PieceWorker) {
                $count++;
            }
        }
        return $count;
    }
}
?>
