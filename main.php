<?php

// Include all necessary classes
require_once __DIR__ . '/classes/Person.php';
require_once __DIR__ . '/classes/Employee.php';
require_once __DIR__ . '/classes/CommissionWorker.php';
require_once __DIR__ . '/classes/HourlyWorker.php';
require_once __DIR__ . '/classes/PieceWorker.php';
require_once __DIR__ . '/classes/EmployeeRoster.php';

// Function to handle user input
function getInput($prompt) {
    echo $prompt . ": ";
    return trim(fgets(STDIN));
}

// Initialize the employee roster
$roster = new EmployeeRoster(10); // Initialize with a roster size of 10

// Main menu loop
while (true) {
    echo "\n1. Add Commission Employee\n";
    echo "2. Add Hourly Employee\n";
    echo "3. Add Piece Worker\n";
    echo "4. Display All Employees\n";
    echo "5. Display Payroll\n";
    echo "6. Exit\n";
    echo "Choose an option: ";
    
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            echo "\nEnter details for Commission Employee\n";
            $name = getInput("Full Name");
            $address = getInput("Address");
            $age = getInput("Age");
            $company = getInput("Company Name");
            $salary = getInput("Regular Salary");
            $itemsSold = getInput("Items Sold");
            $rate = getInput("Commission Rate");
            $employee = new CommissionWorker($name, $address, $age, $company, $salary, $itemsSold, $rate);
            $roster->addEmployee($employee);
            echo "Commission Employee added!\n";
            break;

        case 2:
            echo "\nEnter details for Hourly Employee\n";
            $name = getInput("Full Name");
            $address = getInput("Address");
            $age = getInput("Age");
            $company = getInput("Company Name");
            $hoursWorked = getInput("Hours Worked");
            $rate = getInput("Hourly Rate");
            $employee = new HourlyWorker($name, $address, $age, $company, $hoursWorked, $rate);
            $roster->addEmployee($employee);
            echo "Hourly Employee added!\n";
            break;

        case 3:
            echo "\nEnter details for Piece Worker\n";
            $name = getInput("Full Name");
            $address = getInput("Address");
            $age = getInput("Age");
            $company = getInput("Company Name");
            $items = getInput("Items Produced");
            $wage = getInput("Wage per Item");
            $employee = new PieceWorker($name, $address, $age, $company, $items, $wage);
            $roster->addEmployee($employee);
            echo "Piece Worker added!\n";
            break;

        case 4:
            $roster->displayAll();
            break;

        case 5:
            $roster->payroll();
            break;

        case 6:
            echo "Exiting...\n";
            exit;

        default:
            echo "Invalid option, please try again.\n";
    }
}
?>
