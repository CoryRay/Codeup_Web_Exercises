<?php 

    $dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'codeup', 'codeuprocks');
    
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

    //variable $stmt queries the database with select everything from the nat'l parks
    $stmt = $dbc->query("SELECT * 
                         FROM national_parks LIMIT 4 OFFSET $offset");

    $row = $stmt->fetchall(PDO::FETCH_ASSOC);

/*
    //shows the amount of columns in the table
    echo "Columns: " . $stmt->columnCount() . PHP_EOL;

    //fetch returns each item twice:
    //once with the indecies and another with associative keys
    while ($row = $stmt->fetch()) {
        print_r($row);
    }
*/

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>National Parks from DB</title>
        <style>
        table, td {
            border:1px black solid;
        }
        </style>
    </head>
    <body>

        <table>
            <tr>
                <td>name</td>
                <td>location</td>
                <td>date established</td>
                <td>area in acres</td>
            </tr>
            <?php foreach ($row as $index => $details) : ?>
            <tr>
                <?= "<td>$details[name]</td>"; ?>
                <?= "<td>$details[location]</td>"; ?>
                <?= "<td>$details[date_established]</td>"; ?>
                <?= "<td>$details[area_in_acres]</td>"; ?>
            </tr>
            <?php endforeach; ?>
        </table>


    </body>
</html>