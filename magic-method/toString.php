<?php
/**
 * Person class
 * 
 * is invoked when an object of a class is treated as a string.
 */
class Person {
    
    function __toString() {
        return "Hi Bangladesh <br>";
    }
}

$person = new Person();
echo $person;
