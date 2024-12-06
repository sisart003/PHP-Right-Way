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
    echo "Hello, World!";
    echo '<br><hr>';
    
    #variables
    echo '<h2>Variables</h2>';
    $name = 'Chrishart';

    # Constants
    
    define('STATUS_PAID', 'paid');
    const STATUS_PAID2 = 'paid';
    echo STATUS_PAID2;
    echo '<br>';
    echo STATUS_PAID;
    echo '<br>';
    echo PHP_VERSION;
    echo '<br>';

    # Variables Variables
    $foo = 'bzzz';
    $$foo = 'buzz';
    echo $foo, $bzzz;
    echo '<br>';

    echo '<hr>';

    # Data Types & Type Casting
    
    echo '<h2>Data Types & Type Casting</h2>';

    #scallable
    $code = 123;
    echo gettype($code);
    echo '<br>';
    var_dump($code);
    echo '<br>';

    #array
    $pogChamp = ['Pog', 'KEKW', 'MONKA'];
    var_dump($pogChamp);

    echo '<br>';

    #Integers
    $x = PHP_INT_MAX;
    echo $x;
    echo '<br>';

    # Floats
    $fx = 13.5e-3;
    $fx_max = PHP_FLOAT_MAX;
    var_dump($fx);
    echo '<br>';
    echo $fx_max;
    echo '<br>';

    # Strings - Heredoc & Nowdoc
    $text_heredoc = <<<TEXT
    heredoc way
    Line 1 $fx
    Line 2 $x
    Line 3
    TEXT;

    echo nl2br($text_heredoc);
    echo '<br>';
    echo '<br>';

    $text_nowdoc = <<<'TEXT'
    nowdoc way
    Line 1
    Line 2
    Line 3
    TEXT;
    echo nl2br($text_nowdoc);
    echo '<br>';

    # Array
    echo "<p>Array</p>";

    # associative array
    $common_pw = ['123', 'qwerty', '213456789', 'admin123'];
    array_push($common_pw, '123456');

    echo '<pre>';
    var_dump($common_pw);
    echo '</pre>';

    echo '<br>';

    echo $common_pw[2];
    echo '<br>';

    # Key Value pair
    $common_names = [
        'Danica' => 32,
        'Janica' => 16,
        'Hannah' => 29
    ];

    echo '<pre>';
    var_dump($common_names);
    echo '</pre>';

    echo '<hr>';

    # Expressions & Operators
    echo "<h1>Expressions & Operators</h1>";
    echo "<br>";

    #Operators

    # arithmetic
    # +-*/
    echo 'Arithmetic Operators | +, -, *, /';
    echo "<br>";

    # Assignment
    # = += -= *= /= %= **=
    echo 'Assignment Operators | = += -= *= /= %= **=';
    echo "<br>";

    # String
    # . .=
    echo 'String | . .=';
    echo "<br>";

    # Comparison Operators
    # == === != <> !== < > <= >= <=> ?? ?:
    echo 'Comparison Operators | == === != <> !== < > <= >= <=> ?? ?:';
    echo "<br>";

    # Error Control Operators
    # @
    echo 'Error Control Operator | @';
    echo "<br>";

    # Increment / Decrement Operators
    # ++ --
    echo 'Increment / Decrement Operators | ++ --';
    echo "<br>";

    # Logical Operators
    # && || ! AND OR XOR
    echo "Logical Operators | && || ! AND OR XOR";
    echo "<br>";

    # Bitwise Operators
    # & | ^ ~ << >>
    echo "Bitwise Operators | & | ^ ~ << >>";
    echo "<br>";

    # Array Operators 
    # + == === != <> !==
    echo "Array Operators | + == === != <> !==";
    echo "<br>";

    # Execution Operators
    # ``
    echo "Execution Operators | ``";
    echo "<br>";

    # Type Operators
    # instanceof
    echo 'Type Operator | instanceof';
    echo "<br>";

    # Nullsafe Operator
    echo 'Nullsafe Operator';
    echo '<br>';

?>

</body>
</html>