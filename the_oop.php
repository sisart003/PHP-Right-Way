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
    // interface Logger
    // {
    //     public function log($message);
    // }

    // class FileLogger implements Logger
    // {
    //     private $handle;
    //     private $logFile;

    //     public function __construct($filename, $mode = 'a')
    //     {
    //         $this->logFile = $filename;

            // open log file for append
    //         $this->handle = fopen($filename, $mode) or die('Could not open a file');
    //     }

    //     public function log($message)
    //     {
    //         $message = date('F j, Y, g:i a') . ': ' . $message . "\n";
    //         fwrite($this->handle, $message);
    //     }

    //     public function __destruct()
    //     {
    //         if($this->handle){
    //             fclose($this->handle);
    //         }
    //     }

    // }

    // class DatabaseLogger implements Logger
    // {
    //     public function log($message)
    //     {
    //         echo sprintf("Log %s to the database\n", $message);
    //     }
    // }

    // $logger = new FileLogger('./log.txt', 'w');
    // $logger->log('PHP interface is awesome');

    // $loggers = [
    //     new FileLogger('./log.txt'),
    //     new DatabaseLogger()
    // ];

    // foreach($loggers as $logger){
    //     $logger->log('Log message');
    // }

    # Polymorphism
    // abstract class Person
    // {
    //     abstract public function greet();
    // }

    // class English extends Person
    // {
    //     public function greet()
    //     {
    //         return 'Hello!';
    //     }
    // }

    // class German extends Person
    // {
    //     public function greet()
    //     {
    //         return 'Hallo!';
    //     }
    // }

    // class French extends Person
    // {
    //     public function greet()
    //     {
    //         return 'Bonjour!';
    //     }
    // }

    // class American extends Person
    // {
    //     public function greet()
    //     {
    //         return 'Hi!';
    //     }
    // }

    # Polymorphism but Interfaces

    // interface Greeting
    // {
    //     public function greet();
    // }
    // class English implements Greeting
    // {
    //     public function greet()
    //     {
    //         return 'Hello!';
    //     }
    // }

    // class German implements Greeting
    // {
    //     public function greet()
    //     {
    //         return 'Hallo!';
    //     }
    // }

    // class French implements Greeting
    // {
    //     public function greet()
    //     {
    //         return 'Bonjour!';
    //     }
    // }

    // $people = [
    //     new English(),
    //     new German(),
    //     new French()
    // ];

    // function greeting($people)
    // {
    //     foreach($people as $person)
    //     {
    //         echo $person->greet() . '<br>';
    //     }
    // }

    // greeting($people);

    # Traits
    // trait Logger
    // {
    //     public function log($msg)
    //     {
    //         echo '<pre>';
    //         echo date('Y-m-d h:i:s'). ':' . '(' . __CLASS__ . ') ' . $msg . '<br>';
    //         echo '</pre>';
    //     }
    // }

    // class BacnkAccount
    // {
    //     use Logger;

    //     private $accountNumber;

    //     public function __construct($accountNumber)
    //     {
    //         $this->accountNumber = $accountNumber;
    //         $this->log("A new $accountNumber bank account created");
    //     }

    // }

    // class User
    // {
    //     use Logger;

    //     public function __construct()
    //     {
    //         $this->log("A new user created");
    //     }
    // }

    # Using Multiple Traits
    // trait Preprocessor
    // {
    //     public function preprocess()
    //     {
    //         echo "Preprocess.... done" . '<br>';
    //     }
    // }

    // trait Compiler
    // {
    //     public function compile()
    //     {
    //         echo 'Compile code... done' . '<br>';
    //     }
    // }

    // trait Assembler
    // {
    //     public function createObjCode()
    //     {
    //         echo 'Create the object code files... done' . '<br>';
    //     }
    // }

    // trait Linker
    // {
    //     public function createExec()
    //     {
    //         echo 'Create the executable file... done' . '<br>';
    //     }
    // }

    // class IDE
    // {
    //     use Preprocessor, Compiler, Assembler, Linker;

    //     public function run()
    //     {
    //         $this->preprocess();
    //         $this->compile();
    //         $this->createObjCode();
    //         $this->createExec();

    //         echo 'Execute the file... done' . '<br>';
    //     }
    // }

    // $ide = new IDE();
    // $ide->run();

    # Composing multiple traits
    // trait Reader
    // {
    //     public function read($source)
    //     {
    //         echo sprintf('Read from %s <br>', $source);
    //     }
        
    // }

    // trait Writer
    // {
    //     public function write($destination)
    //     {
    //         echo sprintf('Write to $s <br>', $destination);
    //     }
    // }

    // trait Copier
    // {
    //     use Reader, Writer;

    //     public function copy($source, $destination)
    //     {
    //         $this->read($source);
    //         $this->write($destination);
    //     }
    // }

    // class FileUtil
    // {
    //     use Copier;

    //     public function copyFile($source, $destination)
    //     {
    //         $this->copy($source, $destination);
    //     }
    // }

    # Overriding trait method
    // trait FileLogger
    // {
    //     public function log($msg)
    //     {
    //         echo 'File Logger ' . date('Y-m-d h:i:s') . ':' . $msg . '<br>';
    //     }
    // }

    // trait DatabaseLogger
    // {
    //     public function log($msg)
    //     {
    //         echo 'Database Logger ' . date('Y-m-d h:i:s') . ':' . $msg . '<br>';
    //     }
    // }

    // class Logger
    // {
    //     use FileLogger, DatabaseLogger{
    //         # Aliasing trait method
    //         DatabaseLogger::log as logToDatabase;
    //         FileLogger::log insteadof DatabaseLogger;
    //     }
    // }

    // $logger = new Logger();
    // $logger->log('this is a test message #1');
    // $logger->logToDatabase('this is a test message #2');

    # Static Methods and Properties
        //     class App
        //     {
        //         private static $app = null;

        //         private function __construct()
        //         {

        //         }

        //         public static function get() : App
        //         {
        //                 if(!self::$app){
        //                         self::$app = new App();
        //                 }

        //                 return self::$app;
        //         }

        //         public function bootstrap(): void
        //         {
        //                 echo 'App is bootstrapping....';
        //         }

        //     }


        # PHP Class constants
        // class Circle
        // {
        //         const PI = M_PI;

        //         private $radius;

        //         public function __construct(float $radius)
        //         {
        //                 $this->radius = $radius;
        //         }

        //         public function area(): float
        //         {
        //                 return self::PI * $this->radius ** 2;
        //         }
        // }

        // echo M_PI . '<br>';
        // echo Circle::PI . '<br>';
        // $circol = new Circle( Circle::PI);
    
        // echo $circol->area();

        # Late Static Binding
        // class Model
        // {
        //         protected static $tableName = 'Model';

        //         public static function getTableName()
        //         {
        //                 return static::$tableName;
        //         }
        // }

        // class User extends Model
        // {
        //         protected static $tableName = 'User';
        // }

        // echo User::getTableName();

        # Magic Methods

        # __set() and __get() methods
        // class HtmlElement
        // {
        //         private $attributes = [];
        //         private $tag;

        //         public function __construct($tag)
        //         {
        //                 $this->tag = $tag;
        //         }

        //         public function __set($name, $value)
        //         {
        //                 $this->attributes[$name] = $value;
        //         }

        //         public function __get($name)
        //         {
        //                 if(array_key_exists($name, $this->attributes)){
        //                         return $this->attributes[$name];
        //                 }
        //         }

        //         public function html($innerHTML = '')
        //         {
        //                 $html = "<{$this->tag}";
        //                 foreach ($this->attributes as $key => $value) {
        //                         $html .= ' ' . $key . '="' . $value . '"';
        //                 }

        //                 $html .= '>';
        //                 $html .= $innerHTML;
        //                 $html .= "</$this->tag>";

        //                 return $html;
        //         }
        // }

        // $article = new HtmlElement('article');

        // $article->id = 'main';
        // $article->class = 'light';

        // // show the attributes
        // echo $article->class; // light
        // echo $article->id; // main

        # __toString()
        // class BankAccount
        // {
        //     private $accountNumber;
        //     private $balance;

        //     public function __construct(
        //         $accountNumber,
        //         $balance
        //     ){
        //         $this->accountNumber = $accountNumber;
        //         $this->balance = $balance;
        //     }

        //     public function __toString()
        //     {
        //         return "Bank Account: $this->accountNumber. Balance : $$this->balance";
        //     }
        // }

        // $account = new BankAccount('1233544534', 200);
        // echo $account;

        # __call
        // class Str
        // {

        //     private $s = '';

        //     private $functions = [
        //         'length' => 'strlen',
        //         'upper' => 'strtoupper',
        //         'lower' => 'strtolower'
        //         // map more method to functions
        //     ];

        //     public function __construct(string $s)
        //     {
        //         $this->s = $s;
        //     }

        //     public function __call($method, $args)
        //     {
        //         if(!in_array($method, array_keys($this->functions))){
        //             throw new BadMethodCallException();
        //         }

        //         array_unshift($args, $this->s);

        //         return call_user_func_array($this->functions[$method], $args);
        //     }

        // }

        // $s = new Str('Hello, World!');
        // echo $s->upper() . '<br>';
        // echo $s->lower() . '<br>';
        // echo $s->length() . '<br>';

        # __callStatic()
        // class Str
        // {
        //     private static $methods = [
        //         'upper' => 'strtoupper',
        //         'lower' => 'strtolower',
        //         'len' => 'strlen'
        //     ];

        //     public static function __callStatic(string $method, array $parameters)
        //     {
        //         if(!array_key_exists($method, self::$methods)){
        //             throw new Exception('The ' . $method . ' is not supported');
        //         }

        //         return call_user_func_array(self::$methods[$method], $parameters);
        //     }
        // }

        // echo Str::lower('Hello') . '<br>';
        // echo Str::upper('Hello') . '<br>';
        // echo Str::len('Hello') . '<br>';

        # __invoke()
        // class Comparator
        // {
        //     private $key;

        //     public function __construct(string $key)
        //     {
        //         $this->key = $key;
        //     }

        //     public function __invoke($a, $b)
        //     {
        //         return $a[$this->key] <=> $b[$this->key];
        //     }
        // }

        // $customers = [
        //     ['id' => 1, 'name' => 'Jhon', 'credit' => 2000],
        //     ['id' => 2, 'name' => 'Jane', 'credit' => 4220],
        //     ['id' => 3, 'name' => 'Jah', 'credit' => 6310],
        // ];

        // // sort customers by names
        // usort($customers, new Comparator('name'));
        // print_r($customers);
        // echo '<br>';

        // // sort customers by credit
        // usort($customers, new Comparator('credit'));
        // print_r($customers);

        # Working with Objects
        # serialize()
        // class Customer
        // {
        //     private $id;
        //     private $name;
        //     private $email;

        //     public function __construct(int $id, string $name, string $email)
        //     {
        //         $this->id = $id;
        //         $this->name = $name;
        //         $this->email = $email;
        //     }

        //     public function getInitial()
        //     {
        //         if($this->name !== ''){
        //             return strtoupper(substr($this->name, 0, 1));
        //         }
        //     }

        //     // __sleep()
        //     // public function __sleep(): array
        //     // {
        //     //     return ['id', 'name'];
        //     // }

        //     // __serialize()
        //     public function __serialize(): array
        //     {
        //         return [
        //             'id' => $this->id,
        //             'name' => $this->name
        //         ];
        //     }

        // }

        // $customer = new Customer(10, 'Jhon doe', 'jon.doe@example.com');
        // $str = serialize($customer);
        // echo '<pre>';
        // var_dump($str);
        // echo '</pre>';

        # unserialize()
        // class Customer
        // {
        //     public function __construct(
        //         private int $id,
        //         private string $name,
        //         private string $email
        //     ){

        //     }

        //     public function getInitial()
        //     {
        //         if($this->name !== ''){
        //             return strtoupper(substr($this->name, 0, 1));
        //         }
        //     }
        // }

        // $customer = new Customer(10, 'John Doe', 'john.doe@example.com');

        // # serialize
        // // $str = serialize($customer);
        // // file_put_contents('customer.dat', $str);

        // # unserialize
        // $str = file_get_contents('customer.dat');
        // $customer = unserialize($str);

        // var_dump($customer);

        # __unserialize()
        // class FileReader
        // {


        //     private $filehandle;

        //     private $filename;


        //     public function __construct(string $filename)
        //     {
        //         $this->filename = $filename;
        //         $this->open();
        //     }

        //     private function open()

        //     {
        //         $this->filehandle = fopen($this->filename, 'r');

        //         return $this;
        //     }

        //     public function read()
        //     {
        //         $contents = fread($this->filehandle, filesize($this->filename));

        //         return nl2br($contents);
        //     }

        //     public function close()
        //     {
        //         if ($this->filehandle) {
        //             fclose($this->filehandle);
        //         }
        //     }


        //     public function __sleep(): array
        //     {
        //         $this->close();

        //         return array('filename');
        //     }

        //     public function __unserialize(): void
        //     {
        //         $this->open();
        //     }
        // }

        // $filename = 'customer.dat';
    
        // // serialize the $fileReader
        // file_put_contents(
        //     $filename,
        //     serialize(new FileReader('readme.txt'))
        // );
    
        // // unserialized the file reader
        // $file_reader = unserialize(file_get_contents($filename));
    
        // echo $file_reader->read();
    
        // $file_reader->close();

        # clone object
        // class Person
        // {
        //     public $name;

        //     public function __construct($name)
        //     {
        //         $this->name = $name;
        //     }
        // }

        // $bob = new Person('Bob');

        // // assign bob to alex and change the name
        // // $alex = $bob;
        // // $alex->name = 'Alex';

        // // clone an object
        // $alex = clone $bob;
        // $alex->name = 'Alex';

        // // show both objects
        // var_dump($bob);
        // var_dump($alex);

        // class Address
        // {
        //     public $street;
        //     public $city;
        // }

        // class Person
        // {
        //     public $name;
        //     public $address;

        //     public function __construct($name)
        //     {
        //         $this->name = $name;
        //         $this->address = new Address();
        //     }

        //     public function __clone()
        //     {
        //         $this->address = clone $this->address;
        //     }
        // }

        // $bob = new Person('Bob');
        // $bob->address->street = 'North 1st Street';
        // $bob->address->city = 'San Jose';

        // $alex = clone $bob;
        // $alex->name = 'Alex';
        // $alex->address->street = '1 Rizal Park';
        // $alex->address->city = 'Northern';

        // var_dump($bob);

        # Compare Objects
        // class Point
        // {
        //     private $x;
        //     private $y;

        //     public function __construct($x, $y)
        //     {
        //         $this->x = $x;
        //         $this->y = $y;
        //     }
        // }

        // $p1 = new Point(10, 20);
        // $p2 = new Point(10, 20);

        // if($p1 === $p2){
        //     echo 'p1 and p2 are equal.';
        // }else{
        //     echo 'p1 and p2 are not equal';
        // }

        // $p3 = $p2;

        // if($p2 == $p3){
        //     echo 'p2 and p3 are equal.';
        // }else{
        //     echo 'p2 and p3 are not equal.';
        // }

        // $p4 = new Point(20, 10);

        // if($p3 == $p4){
        //     echo 'p3 and p4 are equal';
        // }else{
        //     echo 'p3 and p4 are not equal';
        // }

        