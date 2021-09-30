<?php

interface BaseStudent {
    function displayName();
}

class Student implements BaseStudent {
    public $name;

    function __construct( $name ) {
        $this->name = $name;
    }

    function displayName() {
        echo "Hello from $this->name <br>";
    }
}

class ImproveStudent implements BaseStudent {
    public $name;
    public $title;

    function __construct( $name, $title ) {
        $this->name = $name;
        $this->title = $title;
    }

    function displayName() {
        echo "Hello from $this->title and $this->name <br>";
    }
}

//tightly coupled dependancy injection 
class ManageStudent {
    function intoStudent( $name ) {
        $student1 = new Student( $name );
        $student1->displayName();
    }
}

//loosely coupled dependancy injection
class ManageStudent1 {
    function intoStudent1( BaseStudent $student ) {
      $student->displayName();
    }
}

//tightly coupled dependancy injection Object
$manageStudent = new ManageStudent();
$manageStudent->intoStudent('Jamil Hasan');


//loosely coupled dependancy injection Object
$student = new Student('Moshiur Rahman');
$improvestudent = new ImproveStudent('Moshiur Rahman', 'Laravel Developer');
$manageStudent = new ManageStudent1();
$manageStudent->intoStudent1( $improvestudent );

