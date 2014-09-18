<?php 

    // Get new instance of PDO object
    $dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'codeup', 'codeuprocks');

    // Tell PDO to throw exceptions on error
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the query and assign to var
    $query = 'CREATE TABLE national_parks (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(25) NOT NULL,
        location VARCHAR(50) NOT NULL,
        date_established INT NOT NULL,
        area_in_acres INT NOT NULL,
        PRIMARY KEY (id)
    )';

    // Run query, if there are errors they will be thrown as PDOExceptions
    $dbc->exec($query);


    // Create INSERT query
    $parks = [
        ['Acadia', 'Maine', '1919-02-26', 47390],
        ['Big Bend', 'Texas', '1955-06-12', 801163],
        ['Congaree', 'South Carolina', '2003-11-10', 26546],
        ['Death Valley', 'California, Nevada', '1994-10-31', 3372402],
        ['Everglades', 'Florida', '1934-05-30', 1508538],
        ['Glacier', 'Montana', '1910-05-11', 1013572],
        ['Hot Springs', 'Arkansas', '1921-03-04', 5550],
        ['Isle Royale', 'Michigan', '1931-03-03', 571790],
        ['Joshua Tree', 'California', '1994-10-31', 789745],
        ['Katmai', 'Alaska', '1980-12-02', 3674530]
    ];

    foreach ($parks as $park) {
        $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park[0]}', '{$park[1]}', '{$park[2]}', '{$park[3]}')";
var_dump($query);

        $dbc->exec($query);
        echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
    }
    // Execute Query
    $numRows = $dbc->exec($query);
    echo "Inserted $numRows row." . PHP_EOL;