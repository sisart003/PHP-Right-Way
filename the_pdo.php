<?php

    # Connect to MySQL Database
    $host = 'localhost';
    $db = 'bookdb';
    $user = 'root';
    $password = '';

    # common
    // $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    // try {
    //     $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    //     $conn = new PDO($dsn, $user, $password, $options);

    //     if ($conn) {
    //         echo "Connected to the $db database successfully!";
    //     }
    // } catch (PDOException $e) {
    //     echo $e->getMessage();
    // }

    # function base
    function connect($host, $db, $user, $password)
    {
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

        try{
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            return new PDO($dsn, $user, $password, $options);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    // return connect($host, $db, $user, $password);

    # class base
    // class Connection
    // {
    //     public static function make($host, $db, $user, $password)
    //     {
    //         $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    //         try{
    //             $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    //             return new PDO($dsn, $user, $password, $options);
    //         }catch(PDOException $e){
    //             die($e->getMessage());
    //         }
    //     }
    // }

    // return Connection::make($host, $db, $user, $password);

    # Create new table using pdo
    // $statements = [
    //     'CREATE TABLE authors(
    //         author_id INT AUTO_INCREMENT,
    //         first_name VARCHAR(100) NOT NULL,
    //         middle_name VARCHAR(50) NULL,
    //         last_name VARCHAR(100) NULL,
    //         PRIMARY KEY(author_id)
    //     );',
    //     'CREATE TABLE book_authors(
    //         book_id INT NOT NULL,
    //         author_id INT NOT NULL,
    //         PRIMARY KEY(book_id, author_id),
    //         CONSTRAINT fk_book
    //             FOREIGN KEY(book_id)
    //             REFERENCES books(book_id)
    //             ON DELETE CASCADE,
    //             CONSTRAINT fk_author
    //                 FOREIGN KEY(author_id)
    //                 REFERENCES authors(author_id)
    //                 ON DELETE CASCADE
    //     )'
    // ];

    // $conn = connect($host, $db, $user, $password);

    // // execute SQL statements
    // foreach($statements as $statement){
    //     $conn->exec($statement);
    // }