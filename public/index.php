<?php  declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | The Right Way</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/736x/2a/bf/3c/2abf3c5185c890866176965c7a01d925.jpg" type="image/x-icon">
</head>
<body>
    

<h1>PHP The Right Way</h1>
 
 <?php

    // require_once '../the_oop.php';
    // require './app/bootstrap.php';
    require_once '../the_pdo.php';
    $pdo = Connection::make($host, $db, $user, $password);
    // var_dump($pdo);

   

 ?>

</body>
</html>