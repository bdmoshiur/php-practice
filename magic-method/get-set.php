<?php
/**
 * Person class
 * 
 * is triggered when invoking an inaccessible static method
 */
class Person {

    public $name;
    public $age;
    public $roll;

    public function __get( $prop ) {
       echo "$prop Property Dose not Exits";
    }

    public function __set( $prop, $value ) {
        echo "You set undefined property value:  $prop->$value";
    }

}

$person = new Person();

echo $person->phone;
echo "<br>";
echo $person->address = 'dhaka';