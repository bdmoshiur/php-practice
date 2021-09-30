<?php
/**
 * Person class
 * 
 * is triggered when invoking an inaccessible instance method
 */
class Person {

    function __call( $name, $arguments ) {
        var_dump( $name, $arguments );
    }
}

$person = new Person();
$person->height('432', 783,65324,4646,);