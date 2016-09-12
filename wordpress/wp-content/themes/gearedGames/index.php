<?php

get_header();
?>

<div class="banner" id="banner">
	<img id="banner-background" src="<?php echo get_template_directory_uri() . "/assets/gearedletters.png" ?>" alt="gearedGames"/>
</div>

<div class="col-sm-12 home textField">

	<?php 
	if (have_posts())	{
		 while ( have_posts() ) {
			the_post();
			the_content();
		 } 

	}
	else
		{ ?>
			<p>No content available.</p>
  <?php }?>

	<a href='<?php echo get_site_url(); ?>/games' class="category col-sm-4">
		<div class="category-icon">
			<img src="<?php echo get_template_directory_uri() . "/assets/controller.png" ?>" alt="gearedGames"/>
		</div>
		<h1>Browse Games</h1>
	</a>

	<a href='<?php echo get_site_url(); ?>/videos' class="category col-sm-4">
		<div class="category-icon">
			<img src="<?php echo get_template_directory_uri() . "/assets/camera.png" ?>" alt="gearedGames"/>
		</div>
		<h1>Browse Videos</h1>
	</a>

	<a href='<?php echo get_site_url(); ?>/about' class="category col-sm-4">
		<div class="category-icon">
			<img src="<?php echo get_template_directory_uri() . "/assets/skills.png" ?>" alt="gearedGames"/>
		</div>
		<h1>Skills & Experience</h1>
	</a>

</div>



<div id="pagefill"></div>
<?php
get_footer();
?>
