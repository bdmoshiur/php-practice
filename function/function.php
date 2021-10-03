<?php

$fnum = $_POST['fnum'];
$lnum = $_POST['lnum'];

function sumValue( $a = 5, $b = 6 ) {

    $c = $a + $b;
    return $c;
}

$test1 = sumValue($fnum, $lnum);


function sumTwoValue( $a, $b = 5 ) {

    $c = $a + $b;
    return $c;

}

$test2 = sumTwoValue(8);

echo "Two sum Function Added " . $test1 + $test2;