<?php

    # OOP Basics
    # Define a class
    // class BankAccount
    // {   
        #properties
        // public int $accountNumber;
        // public float $balance;
        // public int $receipt;

        #readonly property
        // public readonly string $username;

        # Constructor / Destructor
        # Type Hinting
        // public function __construct(public int $accountNumber, public float | int $balance)
        // {
        //     $this->accountNumber = $accountNumber;
        //     $this->balance = $balance;
        // }

        #methods
        // public function deposit($amount){
        //     if($amount > 0){
        //         $this->balance += $amount;
        //     }

        //     return $this;
        // }

        // public function withdraw($amount){
        //     if($amount <= $this->balance){
        //         $this->balance -= $amount;
        //         return true;
        //     }

        //     return false;
        // }

        # Access Modifiers
    //     public function getAccountNumber(){
    //         return $this->accountNumber;
    //     }

    //     public function setUsername(string $username){
    //         $this->username = $username;
    //     }

    //     public function getUsername(){
    //         return $this->username;
    //     }
    // }



    // $account = new BankAccount(273897232423894, 200);

    # Access Modifiers
    // $account->setAccountNumber();

    // $account->balance = 100;
    // $account->receipt = 20;
    // $account->setUsername('Sisart003');

    # Method Chaining
    // $account->deposit(100)->deposit(200)->deposit(300);

    // echo $account->balance . '<br>';
    // echo $account->getAccountNumber();
    // echo '<br>';
    // var_dump($account->receipt);
    // echo '<br>' . $account->getUsername();


    # Inheritance
    // class BankAccount
    // {
    //     private $balance;

    //     public function __construct($balance)
    //     {
    //         $this->balance = $balance;
    //     }

    //     public function getBalance()
    //     {
    //         return $this->balance;
    //     }

    //     public function deposit($amount)
    //     {
    //         if($amount > 0){
    //             $this->balance += $amount;
    //         }

    //         return $this;
    //     }

    //     public function withdraw($amount)
    //     {
    //         if($amount > 0 && $amount <= $this->balance){
    //             $this->balance -= $amount;
    //             return true;
    //         }

    //         return false;
    //     }

    //     public final function greetings()
    //     {
    //         return 'Hello, World!';
    //     }
    // }

    // class SavingAccount extends BankAccount
    // {
    //     private $interestRate;

    //     public function __construct($balance, $interestRate)
    //     {
    //         parent::__construct($balance);
    //         $this->interestRate = $interestRate;
    //     }

    //     public function setInterestRate($interestRate)
    //     {
    //         $this->interestRate = $interestRate;
    //     }

    //     public function addInterest()
    //     {
            // calculate interest
            // $interest = $this->interestRate * $this->getBalance();

            // deposite interest to the balance
    //         $this->deposit($interest);
    //     }

    // }

    // class CheckingAccount extends BankAccount
    // {
    //     private $minBalance;

    //     public function __construct($amount, $minBalance)
    //     {
    //         if($amount > 0 && $amount >= $minBalance){
    //             parent::__construct($amount);
    //             $this->minBalance;
    //         }else{
    //             throw new InvalidArgumentException('amount must be more than zero and higher than the minimum balance');
    //         }
    //     }

    //     public function withdraw($amount)
    //     {
    //         $canWithdraw = $amount > 0 && $this->getBalance() - $amount > $this->minBalance;

    //         if($canWithdraw){
    //             parent::withdraw($amount);

    //             return true;
    //         }

    //         return false;
    //     }
    // }

    // $greet = new BankAccount(1000);
    // echo $greet->greetings() . '<br>';

    // $account = new SavingAccount(1000, 0.05);

    // $account->deposit(100);

    # set interest rate
    // $account->setInterestRate(0.05);
    // $account->addInterest();
    // echo $account->getBalance();
    // echo '<br>';

    # check account balance
    // $balance = new CheckingAccount(200, 0);

    // $getBalance = $balance->withdraw(0);

    // echo $getBalance;


    # Abstract
    // abstract class Dumper{
        
    //     abstract public function dump($data);

    // }

    // class WebDumper extends Dumper
    // {
    //     public function dump($data)
    //     {
    //         echo '<pre>';
    //         var_dump($data);
    //         echo '</pre>';
    //     }
    // }

    // $greet = new WebDumper();

    // $greet->dump('PHP abstract class is awesome!');

    # Interfaces
    