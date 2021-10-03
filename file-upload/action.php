<?php
$name =  $_POST['name'];
$image =  $_FILES['image']['name'];
$form = $_FILES['image']['tmp_name'];
$to = './images/'.rand(1, 999) . $name . '.' . pathinfo( $image, PATHINFO_EXTENSION );

echo $name;
echo "<br>";
echo $to;
echo "<br>";

if(move_uploaded_file( $form, $to)){
    echo "seccessully uplod image";
} else {
    echo "image uploaded Failed";
}



