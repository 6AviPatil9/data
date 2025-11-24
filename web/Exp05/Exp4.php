<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Name: <input type="text" name="name">
    Salary: <input type="number" name="salary">
    <button type="submit">Create Employee</button>
</form>

<?php
if ($_POST) {

    interface Work {
        public function showDetails();
    }

    trait Company {
        public function companyName() {
            return "ABC Technologies Pvt. Ltd.";
        }
    }

    class Employee implements Work {
        use Company;

        private $name;
        private $salary;

        public function __construct($name, $salary) {
            $this->name = $name;
            $this->salary = $salary;
            echo "Employee object created.<br>";
        }

        public function showDetails() {
            return "Name: $this->name <br> Salary: ₹$this->salary <br> Company: ".$this->companyName();
        }

        public function __destruct() {
            echo "<br>Employee object destroyed.";
        }
    }

    $emp = new Employee($_POST['name'], $_POST['salary']);
    echo "<h3>".$emp->showDetails()."</h3>";
}
?>

</body>
</html>
