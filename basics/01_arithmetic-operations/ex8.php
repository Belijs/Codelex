<?php
//An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
//For every hour over 40, they get overtime = (base pay) × 1.5.
//The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
//If the number of hours is greater than 60, print an error message.

//Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an error.
// Write a main method that calls this method for each of these employees:

class Employee
{
    public $name;
    public $basePay;
    public $hours;

    public function __construct(string $name, float $basePay, int $hours)
    {
        $this->name = $name;
        $this->basePay = $basePay;
        $this->hours = $hours;
    }

    public function calculateSalary()
    {
        if ($this->basePay < 8 || $this->hours > 60) {
            return 'error';
        } elseif ($this->hours > 40) {
            return (($this->hours - 40) * 1.5) + $this->basePay * 40;
        } else {
            return $this->basePay * 40;
        }
    }
}

$employees = [
    new employee('Sara', 7.5, 35),
    new employee('Mike', 8.2, 47),
    new employee('Joe', 10, 73)
];

foreach ($employees as $employee) {
    echo $employee->name . ' salary is: ' . $employee->calculateSalary() . ' USD' . PHP_EOL;
}