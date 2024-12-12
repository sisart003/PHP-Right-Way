<?php

    # Define a class
    class BankAccount
    {   
        #properties
        private int $accountNumber;
        public float $balance;

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

        public function setAccountNumber($accountNumber){
            $this->accountNumber = $accountNumber;
        }
    }