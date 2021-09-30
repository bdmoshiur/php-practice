<?php

use Person as GlobalPerson;

class Person {

    function __construct() {
        echo "Start Your Program <br>";
    }

    public function display() {
        echo "Your Code Write Here <br>";
    }

    public function display1() {
        echo "Your Code Write Here <br>";
    }
    public function display2() {
        echo "Your Code Write Here <br>";
    }

    function __destruct() {
        echo "End Your Program<br>";
    }
}

$person = new Person();

$person->display();
$person->display1();
$person->display2();