<?php

    # Classes & Objects
    // class Transaction
    // {
        # properties
        // private float $amount;
        // private string $description;

        # Constructors & Desctructors
        // public function __construct(float $amount, string $description)
        // {
        //     $this->amount = $amount;
        //     $this->description = $description;
        // }

        # Methods
        // public function addTax(float $rate): Transaction
        // {
        //     $this->amount += $this->amount * $rate / 100;

        //     return $this;
        // }

        // public function applyDiscount(float $rate): Transaction
        // {
        //     $this->amount -= $this->amount * $rate / 100;

        //     return $this;
        // }

        // public function getAmount() : float
        // {
        //     return $this->amount;
        // }

        # Destructor
        // public function __desctruct()
        // {
        //     echo 'Destruct ' . $this->description . '<br>';
        // }

    // }

    // $transaction = new Transaction(100, 'Mang Kanor');
    // $transaction->addTax(8)->applyDiscount(10);

    # Objects using variables
    // $class = 'Transaction';
    // $amount = (new $class(100, 'Mang Kanor'))->addTax(8)->applyDiscount(10);

    // echo '<pre>';
    // var_dump($amount->getAmount());
    // echo '</pre>';

    # stdClass & object casting
    // $transaction = new Transaction(100, 'Mang Kanor');
    // $transaction->addTax(8)->applyDiscount(10);

    # Objects using variables
    // $str = '{"a" : 1, "b" : 2, "c" : 3}';
    // $arr = json_decode($str);
    // var_dump($arr->a);

    // $obj = new \stdClass();
    // $obj->a = 1;
    // $obj->b = 2;
    // var_dump($obj);

    // $arr = [1, 2, 3];
    // $obj = (object) $arr;
    // var_dump((object) $arr);
    // var_dump($obj->{1});

    # Constructor Property Promotion - Nullsafe Operator 
    // class Transaction
    // {
    //     public function __construct(
    //         private float $amount, 
    //         private string $description
    //     ){
    //         echo $this->amount;
    //     }

    // }

    echo $transaction->customer?->paymentProfile->id;