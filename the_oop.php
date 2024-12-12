<?php

    # Define a class
    class BankAccount
    {   
        #properties
        // public int $accountNumber;
        // public float $balance;
        public int $receipt;

        #readonly property
        public readonly string $username;

        # Constructor / Destructor
        # Type Hinting
        public function __construct(public int $accountNumber, public float | int $balance)
        {
            $this->accountNumber = $accountNumber;
            $this->balance = $balance;
        }

        #methods
        public function deposit($amount){
            if($amount > 0){
                $this->balance += $amount;
            }

            return $this;
        }

        public function withdraw($amount){
            if($amount <= $this->balance){
                $this->balance -= $amount;
                return true;
            }

            return false;
        }

        # Access Modifiers
        public function getAccountNumber(){
            return $this->accountNumber;
        }

        public function setUsername(string $username){
            $this->username = $username;
        }

        public function getUsername(){
            return $this->username;
        }
    }