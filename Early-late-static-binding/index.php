<?php

use Student as GlobalStudent;

class Student {

    static function echoName(){
        // early self / late static binding
        // echo self::getName();
        // echo "<br>";

        // late binding
        echo static::getName();
        echo "<br>";
    }

    // early binding call function
    static function getName() {
        return "Student";
    }
}

class Teacher extends Student {

    // late binding call function
    static function getName() {
        return "Teacher";
    }
}

Student::echoName();
Teacher::echoName();


