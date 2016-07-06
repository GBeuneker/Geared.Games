<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
	// Save the game info.
	$videoInfo = get_object_vars($videoInfo);
?>

<div class="videobanner">
	<iframe src="http://www.youtube.com/embed/<?php echo $videoInfo['video_id']?>">
	</iframe>
</div>

<div class="game-content col-sm-12">

	<div class="description col-sm-6">
		<h1>Description</h1>
		<p><?php echo $videoInfo['description']?></p>
	</div>

	<div class="details col-sm-4">
		<h1>Details</h1>
		<div>
	<ul>
		<li><strong>Video Title: </strong><?php echo $videoInfo['title'] ?></li>
		<li><strong>Video Subject: </strong><?php echo $videoInfo['subject'] ?></li>
		<li><strong>Release Date: </strong><?php echo $videoInfo['release_date'] ?></li>
			<li><strong>Youtube Channel: </strong><a href="<?php echo $videoInfo['channel_link'] ?>"><?php $videoInfo['channel_name'] ?><?php echo $videoInfo['channel_name'] ?></a></li>
		</ul>
		</div>
	</div>

</div>

<div id="pagefill"></div>