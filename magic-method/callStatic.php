<?php

use Person as GlobalPerson;

/**
 * Person class
 * 
 * is triggered when invoking an inaccessible static method
 */
class Person {

    public static function __callStatic( $name, $arguments ) {
        var_dump( $name, $arguments );
    }
}

Person::test('Hello');