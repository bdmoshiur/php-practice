<?php

class A {

    public $name;
}

class B {
    public $name;
}

$a = new A();

$b = new B();

if ( $a instanceof A ) {

    echo "true";
} else {

    echo "False";
}