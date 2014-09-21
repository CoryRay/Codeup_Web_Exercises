<?php 

    require 'dbconnect.php';
    require_once 'AdManager.class.php';
    require_once 'Ad.class.php';

//if $_POST is not empty (since $_POST is always set, but not always with a value)
if (!empty($_POST)) {

    $ad = new Ad($dbc);

    $ad->title = $_POST['title'];
    $ad->body = $_POST['body'];
    $ad->contactName = $_POST['contactName'];
    $ad->contactEmail = $_POST['contactEmail'];

    $ad->save();

    //redirect to show the newly created ad
    header('location: ad_view.php?id=' . $ad->id);
    exit;
}

?>

<?php include 'header.php'; ?>

<div class="container">
    
    <h1 class="remove-bottom" style="margin-top: 40px">Coryslist</a><small> Create an Ad</small></h1>
    <br><a href="index.php">Back to Main</a>
    <hr/>

    <form method="POST">
        <label for="title">Title: </label>
        <input type="text" id="title" name="title"/>

        <label for="body">Body: </label>
        <textarea id="body" name="body"></textarea>

        <label for="contactName">Your Name: </label>
        <input type="text" id="contactName" name="contactName"/>

        <label for="contactEmail">Your Email: </label>
        <input type="email" id="contactEmail" name="contactEmail"/>

        <a href="index.php" class="button">Cancel</a>
        <button type="submit" class="button">Create Ad</button>
    </form>
</div>

<?php include 'footer.php'; ?>