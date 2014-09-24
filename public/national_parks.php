<?php 

require_once '../dbconnect.php';

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

//variable $stmt queries the database with select everything from the nat'l parks
$stmt = $dbc->query("SELECT * 
                     FROM national_parks LIMIT 4 OFFSET $offset");

$row = $stmt->fetchall(PDO::FETCH_ASSOC);

//ADDING TO THE DATABASE
if (!empty($_POST)) {

    //capture the data from post array
    $new_park = $_POST;

    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
    VALUES (:name, :location, :date_established, :area_in_acres, :description)";

    $prepare_to_add = $dbc->prepare($query);
    $prepare_to_add->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $prepare_to_add->bindValue(':location', $_POST['location'], PDO::PARAM_STR);
    $prepare_to_add->bindValue(':date_established', $_POST['date_established'], PDO::PARAM_STR);
    $prepare_to_add->bindValue(':area_in_acres', $_POST['area_in_acres'], PDO::PARAM_INT);
    $prepare_to_add->bindValue(':description', $_POST['description'], PDO::PARAM_STR);


    $prepare_to_add->execute();
    //add it to the national_parks database
}



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>National Parks from DB</title>
        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/base-min.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    </head>
    <body>
        <div class="pure-u-1-1 container">
            <table class="pure-table pure-table-horizontal">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Date Established</th>
                    <th>Area (Acres)</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($row as $index => $details) : ?>
                <tr>
                    <td><?= $details['name']; ?></td>
                    <td><?= $details['location']; ?></td>
                    <td><?=  date("F j, Y", strtotime($details['date_established'])); ?></td>
                    <td><?= number_format($details['area_in_acres']); ?></td>
                    <td><?= $details['description']; ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        <!-- UGLY PAGINATOR -->
            <ul class="pagination">
                <? if ($offset > 0):
                    echo "<li><a class='prev' href='?offset=" . ($offset - 4) . "'>&#171;</a></li>";
                   else:
                    echo "<li><a class='prev disabled' href='#'>&#171;</a></li>";
                   endif;
                ?>
                <? if ($offset <= count($row)):
                    echo "<li><a class='next' href='?offset=" . ($offset + 4) . "'>&#187;</a></li>";
                   else:
                    echo "<li><a class='next disabled' href='#'>&#187;</a></li>";
                   endif;
                ?>
            </ul>

        <!-- FORM TO ADD NEW NATIONAL PARKS -->
            <form  method="POST" action="national_parks.php" class="pure-form pure-form-aligned">
                <fieldset>
                    <div class="pure-control-group">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" placeholder="Name" required>
                    </div>
                    <div class="pure-control-group">
                        <label for="location">Location</label>
                        <input id="location" name="location" type="text" placeholder="Location" required>
                    </div>
                    <div class="pure-control-group">
                        <label for="area">Area in Acres</label>
                        <input id="area" name="area_in_acres" type="number" placeholder="Area in Acres" required>
                    </div>
                    <div class="pure-control-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" type="text" placeholder="Description" required></textarea>
                    </div>
                    <div class="pure-control-group">
                        <label for="date">Date Established</label>
                        <input id="date" name="date_established" type="date" placeholder="Date Established" required>
                    </div>
                    <div class="pure-controls">
                        <button type="submit" class="pure-button pure-button-primary">Submit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>