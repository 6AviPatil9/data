<!DOCTYPE html>
<html>
<head>
<title>Employee Test Application</title>
<style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    table { border-collapse: collapse; margin-top: 10px; }
    th, td { border: 1px solid #000; padding: 8px 12px; text-align: center; }
    th { background-color: #f2f2f2; }
</style>
</head>

<body>
<h2>Employee Test Application</h2>

<?php
// Employee Class
class Employee {
    public $firstName;
    public $lastName;
    public $monthlySalary;
    // Constructor to initialize employee details
    public function __construct($firstName, $lastName, $monthlySalary){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->monthlySalary = max(0, $monthlySalary);
    }
    // Method to calculate yearly salary
    public function yearlySalary(){
        return $this->monthlySalary * 12;
    }
    // Method to give a raise by a percentage
    public function giveRaise($percent){
        $this->monthlySalary += $this->monthlySalary * ($percent / 100);
    }
}

// Employee Test
$emp1 = new Employee("John", "Doe", 3000);
$emp2 = new Employee("Jane", "Smith", 4000);
echo "<h3>Yearly Salary Before Raise</h3>";
echo "<table>";
    echo "<tr><th>Employee</th><th>Yearly Salary</th></tr>";
    echo "<tr><td>{$emp1->firstName} {$emp1->lastName}</td><td>{$emp1->yearlySalary()}</td></tr>";
    echo "<tr><td>{$emp2->firstName} {$emp2->lastName}</td><td>{$emp2->yearlySalary()}</td></tr>";
echo "</table>";
// Apply 10% raise
$emp1->giveRaise(10);
$emp2->giveRaise(10);
echo "<h3>Yearly Salary After 10% Raise</h3>";
echo "<table>";
    echo "<tr><th>Employee</th><th>Yearly Salary</th></tr>";
    echo "<tr><td>{$emp1->firstName} {$emp1->lastName}</td><td>{$emp1->yearlySalary()}</td></tr>";
    echo "<tr><td>{$emp2->firstName} {$emp2->lastName}</td><td>{$emp2->yearlySalary()}</td></tr>";
echo "</table>";
?>
</body>
</html>