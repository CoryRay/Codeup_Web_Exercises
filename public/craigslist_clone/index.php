<?php 

require_once('AdManager.class.php');
require_once('Ad.class.php');
 
$adManager = new AdManager();
$ads = $adManager->loadAds();

 ?>

<?php include 'header.php'; ?>

	<div class="container">
			<h1 class="remove-bottom" style="margin-top: 40px">Coryslist</a><small> A  Place to Sell Your Stuff</small></h1>
			<br><a href="ad_creation.php">Sell Something</a>
			<hr/>

			<table class="table table-striped">
            <?php foreach ($ads as $index => $ad) : ?>
            <tr>
                <td><a href="ad_view.php?id=<?= $index; ?>"><?= $ad->title; ?></a></td>
                <td><?= $ad->sellerName; ?></td>
                <td><?= $ad->creationTime; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
	</div><!-- container -->
    
<?php include 'footer.php'; ?>