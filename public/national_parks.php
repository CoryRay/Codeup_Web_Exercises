<?php 

    $dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'codeup', 'codeuprocks');
    
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //variable $stmt queries the database with select everything from the nat'l parks
    $stmt = $dbc->query('SELECT * FROM national_parks');

    //shows the amount of columns in the table
    echo "Columns: " . $stmt->columnCount() . PHP_EOL;

    //fetch returns each item twice:
    //once with the indecies and another with associative keys
    while ($row = $stmt->fetch()) {
        print_r($row);
    }

