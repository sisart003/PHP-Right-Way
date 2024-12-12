<?php  declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | The Right Way</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/736x/26/ce/c1/26cec153ed87b564bdf180b232a949b3.jpg" type="image/x-icon">
</head>
<body>
    

<h1>PHP The Right Way</h1>
 
 <?php

    require_once '../the_oop.php';

    $account = new BankAccount(273897232423894, 200);

    # Access Modifiers
    // $account->setAccountNumber();

    $account->balance = 100;
    $account->receipt = 20;
    $account->setUsername('Sisart003');

    # Method Chaining
    $account->deposit(100)->deposit(200)->deposit(300);

    echo $account->balance . '<br>';
    echo $account->getAccountNumber();
    echo '<br>';
    var_dump($account->receipt);
    echo '<br>' . $account->getUsername();

 ?>

</body>
</html>