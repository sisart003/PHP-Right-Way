<?php  declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | The Right Way</title>
</head>
<body>
    
<h1>PHP The Right Way</h1>
<!-- Basics -->
 <?php 
    # Output
    // echo "Hello, World!";
    // echo '<br><hr>';
    
    #variables
    // echo '<h2>Variables</h2>';
    // $name = 'Chrishart';

    # Constants
    
    // define('STATUS_PAID', 'paid');
    // const STATUS_PAID2 = 'paid';
    // echo STATUS_PAID2;
    // echo '<br>';
    // echo STATUS_PAID;
    // echo '<br>';
    // echo PHP_VERSION;
    // echo '<br>';

    # Variables Variables
    // $foo = 'bzzz';
    // $$foo = 'buzz';
    // echo $foo, $bzzz;
    // echo '<br>';

    // echo '<hr>';

    # Data Types & Type Casting
    
    // echo '<h2>Data Types & Type Casting</h2>';

    #scallable
    // $code = 123;
    // echo gettype($code);
    // echo '<br>';
    // var_dump($code);
    // echo '<br>';

    #array
    // $pogChamp = ['Pog', 'KEKW', 'MONKA'];
    // var_dump($pogChamp);

    // echo '<br>';

    #Integers
    // $x = PHP_INT_MAX;
    // echo $x;
    // echo '<br>';

    # Floats
    // $fx = 13.5e-3;
    // $fx_max = PHP_FLOAT_MAX;
    // var_dump($fx);
    // echo '<br>';
    // echo $fx_max;
    // echo '<br>';

    # Strings - Heredoc & Nowdoc
    // $text_heredoc = <<<TEXT
    // heredoc way
    // Line 1 $fx
    // Line 2 $x
    // Line 3
    // TEXT;

    // echo nl2br($text_heredoc);
    // echo '<br>';
    // echo '<br>';

    // $text_nowdoc = <<<'TEXT'
    // nowdoc way
    // Line 1
    // Line 2
    // Line 3
    // TEXT;
    // echo nl2br($text_nowdoc);
    // echo '<br>';

    # Array
    // echo "<p>Array</p>";

    # associative array
    // $common_pw = ['123', 'qwerty', '213456789', 'admin123'];
    // array_push($common_pw, '123456');

    // echo '<pre>';
    // var_dump($common_pw);
    // echo '</pre>';

    // echo '<br>';

    // echo $common_pw[2];
    // echo '<br>';

    # Key Value pair
    // $common_names = [
    //     'Danica' => 32,
    //     'Janica' => 16,
    //     'Hannah' => 29
    // ];

    // echo '<pre>';
    // var_dump($common_names);
    // echo '</pre>';

    // echo '<hr>';

    # Expressions & Operators
    // echo "<h1>Expressions & Operators</h1>";
    // echo "<br>";

    #Operators

    # arithmetic
    # +-*/
    // echo 'Arithmetic Operators | +, -, *, /';
    // echo "<br>";

    # Assignment
    # = += -= *= /= %= **=
    // echo 'Assignment Operators | = += -= *= /= %= **=';
    // echo "<br>";

    # String
    # . .=
    // echo 'String | . .=';
    // echo "<br>";

    # Comparison Operators
    # == === != <> !== < > <= >= <=> ?? ?:
    // echo 'Comparison Operators | == === != <> !== < > <= >= <=> ?? ?:';
    // echo "<br>";

    # Error Control Operators
    # @
    // echo 'Error Control Operator | @';
    // echo "<br>";

    # Increment / Decrement Operators
    # ++ --
    // echo 'Increment / Decrement Operators | ++ --';
    // echo "<br>";

    # Logical Operators
    # && || ! AND OR XOR
    // echo "Logical Operators | && || ! AND OR XOR";
    // echo "<br>";

    # Bitwise Operators
    # & | ^ ~ << >>
    // echo "Bitwise Operators | & | ^ ~ << >>";
    // echo "<br>";

    # Array Operators 
    # + == === != <> !==
    // echo "Array Operators | + == === != <> !==";
    // echo "<br>";

    # Execution Operators
    # ``
    // echo "Execution Operators | ``";
    // echo "<br>";

    # Type Operators
    # instanceof
    // echo 'Type Operator | instanceof';
    // echo "<br>";

    # Nullsafe Operator
    // echo 'Nullsafe Operator';
    // echo '<br>';
    // echo '<hr>';

    # Operator Precedence & Associativity
    // echo '<h1>Operator Precedence & Associativity</h1>';
    // echo '<h3><a href="https://www.php.net/manual/en/language.operators.precedence.php" target="_blank">Source here</a></h3>';
    // echo '<br>';

    // echo '<hr>';

    // # Conditionals
    // echo '<h1>Conditionals</h1>';
    // echo 'if / else / elseif / else if' . '<br>';

    # if / else / elseif / else if

    // $points = 100;
    // if($points >= 90){
    //     echo 'A';
    // }elseif($points >= 110){
    //     echo 'B';
    // }else{
    //     echo 'C';
    // }

    // echo '<br>';

    # Loops
    // echo '<h1>Loops</h1>';
    // echo 'while do-while for foreach';

    // $while_level = 0;
    // $do_while_level = 0;

    # While
    // echo '<p>While Loop</p>';
    // while($while_level <= 10){
    //     echo $while_level++ . '<br>';
    // }

    # Do While
    // echo '<p>Do While Loop</p>';
    // do{
    //     echo $do_while_level. '<br>';
    //     $do_while_level++;
    // }while($do_while_level <= 10);

    // echo '<p>For Loop</p>';
    // for($for_level = 0; $for_level <= 10; $for_level++){
    //     echo $for_level . '<br>';
    // }

    # foreach
    // echo '<p>Foreach Loop</p>';

    // $foreach_level = ['Easy', 'Intermediate', 'Hard', 'Expert', 'Philippines'];
    // foreach ($foreach_level as $key => $levels) {
    //     echo ++$key . ' : ' . $levels . '<br>';
    // }

    // echo '<br>';

    # Switch Statements
    // echo '<h1>Switch Statement</h1>';

    // $legal_age = 'IDK';

    // switch ($legal_age) {
    //     case 18:
    //         echo 'Yes' . '<br>';
    //         break;
    //     case 17:
    //         echo 'No' . '<br>';
    //         break;
    //     default:
    //         echo 'Go to PSA' . '<br>';
    //         break;
    // }

    // echo '<br>';

    # Match
    // echo '<h1>Match</h1>';

    // $available = 1;

    // match($available){
    //     1 => print 'Yes',
    //     2 => print 'No',
    //     3 => print 'Not Sure'
    // };

    // echo '<br>';

    # Return, Declare & Tickable Statements
    // echo '<h1>Return, Declare & Tickable Statements</h1>';

    // function sum(int $x, int $y){
    //     return $x + $y;
    // }

    // echo sum(5, 5);

    # declare - ticks
    // function onTick(){
    //     echo 'Tick <br>';
    // }

    // register_tick_function('onTick');
    // declare(ticks=3);

    // $a = 0;
    // $lint = 10;

    // while($a < $lint){
    //     echo $a++ . '<br>';
    // }

    # declare - strick
    #declare(strict_types=1);

    // function multi(int $x, int $y){
    //     return $x * $y;
    // }

    // echo multi(4, 4);
    
    // echo '<br>';

    # Include Files - include and Require
    // echo '<h1>Include Files - include and Require</h1>';
    // include 'extend.php';

    // echo '<br>';
    // echo '<hr>';

    # Functions
    echo '<h1>Functions</h1>';

    function foo(){
        return 'Hello, World!';
    }

    echo foo();

    echo '<br>';
    echo '<hr>';

?>

</body>
</html>