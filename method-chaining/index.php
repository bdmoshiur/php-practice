<?php

//method call serialy - method chaining
class ABC {

    public function first() {
        echo " This is First Function <br>";
        return $this;
    }

    public function second() {
        echo " This is Second Function <br>";
        return $this;
    }

    public function third() {
        echo " This is Third Function <br>";
        return $this;
    }
    public function four() {
        echo "This is a Four Function \n";
    }
}

$abc = new ABC();

$abc->first()->second()->third()->four();




// Method call randomly - method chaining

class Programing {

    public function php() {
        echo "Hello PHP <br>";
        return $this;
    }

    public function laravel() {
        echo "Hello Laravel <br>";
        return $this;
    }
    public function javascript() {
        echo "Hello Javascript <br>";
        return $this;
    }

    public function jquery() {
        echo "Hello Jquery <br>";
        return $this;
    }

    public function bootstrap() {
        echo "Hello Bootstrap <br>";
        return $this;
    }
}

$obj = new Programing();

$obj->php()->laravel()->bootstrap()->jquery()->javascript();