<?php
    // declare(strict_types=1);
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
    // function connect($host, $db, $user, $password)
    // {
    //     $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    //     try{
    //         $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    //         return new PDO($dsn, $user, $password, $options);
    //     }catch(PDOException $e){
    //         die($e->getMessage());
    //     }
    // }

    // return connect($host, $db, $user, $password);

    # class base
    class Connection
    {
        public static function make($host, $db, $user, $password)
        {
            $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

            try{
                $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
                return new PDO($dsn, $user, $password, $options);
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
    }

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

    # Insert table

    // $name = 'Sisart003';
    // $names = [
    //     'berry',
    //     'gem',
    //     'make'
    // ];
    // $pdo = connect($host, $db, $user, $password);
    // $pdo = Connection::make($host, $db, $user, $password);
    // $sql = 'INSERT INTO publishers(name) VALUES(:name)';

    // $statement = $pdo->prepare($sql);
    // $statement->execute([
    //     ':name' => $name
    // ]);

    // $publisher_id = $pdo->lastInsertId();

    // echo 'The publisher id ' . $publisher_id . ' was added.';

    // foreach($names as $name){
    //     $statement->execute([
    //         ':name' => $name
    //     ]);
    // }

    # LIKE % Operator
    # find publisher by title based on pattern
    // function find_publisher_by_title(\PDO $pdo, string $keyword) 
    // {
    //     $pattern = '%' . $keyword . '%';
    //     $sql = 'SELECT * FROM publishers WHERE name LIKE :pattern';
        
    //     $statement = $pdo->prepare($sql);
    //     $statement->execute([':pattern' => $pattern]);

    //     return $statement->fetchAll(PDO::FETCH_ASSOC);
    // }
    
    // find books wit hthe title matches 'es'
    // $publishers = find_publisher_by_title($pdo, 'e');

    // foreach($publishers as $publisher){
    //     echo $publisher['name'] . '<br>';
    // }

    # PDO IN
    // return an array of books with the book id in the list
    // function get_book_list(\PDO $pdo, array $list) : array
    // {
    //     $placeholder = str_repeat('?,', count($list) - 1) . '?';

    //     $sql = "SELECT book_id, title FROM books WHERE book_id IN ($placeholder)";

    //     $statement = $pdo->prepare($sql);
    //     $statement->execute($list);

    //     return $statement->fetchAll(PDO::FETCH_ASSOC);
    // }

    // $books = get_book_list($pdo, [1, 2, 3]);
    // print_r($books);

    # Insert Data
    // insert a single publisher
    // $name = "Gorgc";
    // $sql = 'INSERT INTO publishers(name) VALUES(:name)';
    // $statement = $pdo->prepare($sql);
    // $statement->execute([
    //     ':name' => $name
    // ]);

    // $publisher_id = $pdo->lastInsertId();
    // echo 'The publisher id ' . $publisher_id . ' was inserted';

    // Inserting multiple rows
    // $names = [
    //     'Penguin/Random House',
    //     'Hachette Book Group',
    //     'Harper Collins',
    //     'Simon and Schuster'
    // ];

    // $sql = 'INSERT INTO publishers(name) VALUES(:name)';

    // $statement = $pdo->prepare($sql);

    // foreach($names as $name){
    //     $statement->execute([
    //         ':name' => $name
    //     ]);
    // };

    