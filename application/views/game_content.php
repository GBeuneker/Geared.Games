<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
	// Save the game info.
	$gameInfo = get_object_vars($gameInfo);
?>

<div class="banner" id="banner">
	<img id="banner-background" src="<?php echo (base_url() . "application/assets/" . $gameInfo['image']) ?>"/>
	<div class="banner-button">
		<a href="<?php echo $gameInfo['download_link'] ?>"><button type="button">Download</button></a>
	</div>
	<div class="banner-content">
			<h1><?php echo $gameInfo['title'];?></h1>
	</div>
</div>

<div class="game-content col-sm-12">

	<div class="description col-sm-6">
		<h1>Description</h1>
		<p><?php echo $gameInfo['description_long']?></p>
	</div>

	<div class="details col-sm-4">
		<h1>Details</h1>
		<div>
		<ul>
			<li><strong>Release Date: </strong><?php echo $gameInfo['release_date'] ?></li>
			<li><strong>Engine: </strong><?php echo $gameInfo['engine'] ?> </li>
			<li><strong>Language: </strong><?php echo $gameInfo['language'] ?> </li>
			<li><strong>Download Link: </strong><a href="<?php echo $gameInfo['download_link'] ?>">Download</a></li>
		</ul>
		</div>
	</div>

	<div class="description col-sm-6">
		<h1>Motivation</h1>
		<p><?php echo $gameInfo['motivation']?></p>
	</div>

</div>

<div id="pagefill"></div>