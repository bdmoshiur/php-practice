<?php


class Foo {

    public $color = "Red";
    public function display() {
        echo "Hello Bangladsh";
    }
}

$obj = new Foo();

echo $obj->color . "<br>";
$obj->display();



class Vehicale {


    public $name;
    public $color;
}

$vechicale = new Vehicale();

$test1 = $vechicale->name = "moshiur  Rahman";
$test2 = $vechicale->color = "red";

echo $test1;
echo "<br>";
echo $test2;

