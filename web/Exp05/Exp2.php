<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Enter Animal Name: <input type="text" name="animal">
    <button type="submit">Show</button>
</form>

<?php  
if ($_POST) {

    class Animal {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function sound() {
            return "Animal makes a sound.";
        }
    }

    class Dog extends Animal {
        public function sound() {
            return "$this->name barks!";
        }
    }

    $animalName = $_POST['animal'];
    $dog = new Dog($animalName);

    echo "<h3>".$dog->sound()."</h3>";
}
?>

</body>
</html>
