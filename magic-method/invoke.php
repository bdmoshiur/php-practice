<?php
/**
 * MyClass class
 * 
 * is invoked when an object is called as a function
 */
class MyClass {
    
    public function __invoke( $arguments ) {
        echo "Called to the __invoke method { $arguments }";
    }
}

$instance = new MyClass;
$instance("Hello");