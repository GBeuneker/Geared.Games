<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="banner" id="banner">
	<img id="banner-background" src="<?php echo base_url() . "application/assets/gearedletters.png" ?>" alt="gearedGames"/>
</div>

<div class="col-sm-12 home textField">
	<h1>Geert Beuneker - Game Programmer/Designer</h1>
	<p>Welcome to my Video and Video games portfolio.<br>
	Here you can browse through all the videos, video games and video game related content I have created. <br>
	Games shown on this site are the product of several game jams, game-a-week sessions and hobby projects on the side. <br>
	The videos here are mostly inspired by video games and game design.
	</p>

	<a href='<?php echo base_url(); ?>index.php/Games' class="category col-sm-4">
		<div class="category-icon">
			<img src="<?php echo base_url() . "application/assets/controller.png" ?>" alt="gearedGames"/>
		</div>
		<h1>Browse Games</h1>
	</a>

	<a href='<?php echo base_url(); ?>index.php/Videos' class="category col-sm-4">
		<div class="category-icon">
			<img src="<?php echo base_url() . "application/assets/camera.png" ?>" alt="gearedGames"/>
		</div>
		<h1>Browse Videos</h1>
	</a>

	<a href='<?php echo base_url(); ?>index.php/About' class="category col-sm-4">
		<div class="category-icon">
			<img src="<?php echo base_url() . "application/assets/skills.png" ?>" alt="gearedGames"/>
		</div>
		<h1>Skills & Experience</h1>
	</a>

</div>



<div id="pagefill"></div>