<?php

    require 'dbconnect.php';
    require_once('Ad.class.php');

    $adId = $_GET['id'];
    $ad = new Ad($dbc, $adId);
     
?>

<?php include 'header.php'; ?>

<div class="container">
    
    <h1 class="remove-bottom" style="margin-top: 40px">Coryslist</a><small> Look at Ads</small></h1>
    <br><a href="index.php">Back to Main</a>
    <hr/>

    <h3><?= htmlspecialchars($ad->title);?></h3>
    <p>Posted on: <?= htmlspecialchars($ad->creationTime->format("F j, Y")); ?></p>
    <p><?= htmlspecialchars($ad->body); ?></p>
    <h4>Contact Info:</h4>
    <p>
        <?= htmlspecialchars($ad->sellerName); ?><br>
        <a href="mailto:<?= htmlspecialchars($ad->sellerEmail); ?>"><?= htmlspecialchars($ad->sellerEmail); ?></a>
    </p>
</div>

<?php include 'footer.php'; ?>