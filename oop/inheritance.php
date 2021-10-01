
<?php

class Vehicle {

    public $name = "Moshiur Rahman";

    public function display() {
        echo "This is a Vehicle";
    }
}

class Car extends Vehicle {

}

$car = new Car();

echo $car->name . "<br>";
$car->display();