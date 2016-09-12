<?php

get_header();
?>

<div class="banner" id="banner">
	<img id="banner-background" src="<?php echo get_template_directory_uri() . "/assets/gearedletters.png" ?>" alt="gearedGames"/>
</div>

<div class="col-sm-12 textField">
	<?php 
	if (have_posts())	{
		 while ( have_posts() ) {
			the_post();
		 } 
		 the_content();
	}
	else
		{ ?>
			<p>No content available.</p>
  <?php }?>
</div>



<div id="pagefill"></div>
<?php
get_footer();
?>
