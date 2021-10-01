<?php

use Person as GlobalPerson;

class User {

    public static $message = "Hello Bangladesh <br>";
}

echo User::$message;

// $user = new User();
// echo $user->message;


class ClassName {
    static $my_var = 10;  /* defaults to public unless otherwise specified */
    const MY_CONST = 5;
}
echo ClassName::$my_var . "<br>";   // returns 10
echo ClassName::MY_CONST . "<br>";  // returns 5
ClassName::$my_var = 20;   // now equals 20
// ClassName::MY_CONST = 20;  // error! won't work



class Person {

    public static $name1 = "Moshiur Rahan upgrade_101()";
    public  $name2 = "Moshiur Rahan 2";

    public static function display() {
        echo "This is static property call static methods " . Person::$name1 . "<br>";
    }

    public static function display2() {
        $person = new Person;
        echo "This is non sattic variable call static function" . $person->name2 . "<br>";
    }
}

Person::$name1;
Person::display();