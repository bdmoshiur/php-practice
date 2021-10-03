<?php

session_start();

if ( ! isset($_SESSION['admin_name']) ) {

    header('location: main.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis vitae harum porro similique? Porro earum vero beatae quasi aliquid corporis ut, quidem excepturi cum aut sint at dolorum expedita reiciendis.</p>
</body>
</html>


