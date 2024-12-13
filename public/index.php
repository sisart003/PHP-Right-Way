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

    $greet = new BankAccount(1000);
    echo $greet->greetings() . '<br>';

    $account = new SavingAccount(1000, 0.05);

    $account->deposit(100);

    # set interest rate
    $account->setInterestRate(0.05);
    $account->addInterest();
    echo $account->getBalance();
    echo '<br>';

    # check account balance
    $balance = new CheckingAccount(200, 0);

    $getBalance = $balance->withdraw(0);

    echo $getBalance;

 ?>

</body>
</html>