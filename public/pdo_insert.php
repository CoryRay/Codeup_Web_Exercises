
<?php 

    // Get new instance of PDO object
    $dbc = new PDO('mysql:host=127.0.0.1;dbname=todo_db', 'codeup', 'codeuprocks');

    // Tell PDO to throw exceptions on error
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the query and assign to var
    $query = 'CREATE TABLE todo_list (
              id INT UNSIGNED NOT NULL AUTO_INCREMENT,
              todo_item VARCHAR(240) NOT NULL,
              PRIMARY KEY (id)
              )';

    // Run query, if there are errors they will be thrown as PDOExceptions
    $dbc->exec($query);

/*
    // Create INSERT query
    $parks = [
        ['Acadia', 'Maine', '1919-02-26', 47390, 'description'],
        ['Big Bend', 'Texas', '1955-06-12', 801163, 'description'],
        ['Congaree', 'South Carolina', '2003-11-10', 26546, 'description'],
        ['Death Valley', 'California, Nevada', '1994-10-31', 3372402, 'description'],
        ['Everglades', 'Florida', '1934-05-30', 1508538, 'description'],
        ['Glacier', 'Montana', '1910-05-11', 1013572, 'description'],
        ['Hot Springs', 'Arkansas', '1921-03-04', 5550, 'description'],
        ['Isle Royale', 'Michigan', '1931-03-03', 571790, 'description'],
        ['Joshua Tree', 'California', '1994-10-31', 789745, 'description'],
        ['Katmai', 'Alaska', '1980-12-02', 3674530, 'description']
    ];

    foreach ($parks as $park) {
        $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
                  VALUES ('{$park[0]}', '{$park[1]}', '{$park[2]}', '{$park[3]}', '{$park[4]}')";

var_dump($query);

        $dbc->exec($query);
        echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
    }
    // Execute Query
    $numRows = $dbc->exec($query);
    echo "Inserted $numRows row." . PHP_EOL;
*/