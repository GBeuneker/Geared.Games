<?php

get_header();
?>

<?php 
	if (have_posts())	{
		 while ( have_posts() ) {
			the_post();
		 } ?>

		 <?php 
		 if(in_category('Game')) 
		 	{ ?>
			 <div class="banner" id="banner">

			 	<div class="banner-button">
			 		<a href="<?php echo get_field('link', false, false); ?>">
			 				<p>Download</p>
			 		</a>
			 	</div>
			 	<?php the_post_thumbnail('banner', array('id' => 'banner-background', 'alt' => 'bannerImage')); ?>
			 	<div class="banner-content strokeDark">
			 			<h1><?php echo the_title(); ?></h1>
			 	</div>
			 </div>
	  <?php } else { ?>
			  <div class="videobanner">
			  	<iframe src="<?php echo get_field('link', false, false);?>">
			  	</iframe>
			  </div>
	  <?php	} ?>

		 <div class="game-content col-sm-12">

		 	<div class="description col-sm-6">
		 		<p><?php echo the_content();?></p>
		 	</div>

		 	<div class="details col-sm-4">
		 		<h1>Details</h1>
		 		<div>
		 		<?php 
		 		if(in_category('Game')) 
		 			{?>
				 		<ul>
				 			<li><strong>Release Date: </strong><?php echo the_date(); ?></li>
				 			<li><strong>Engine: </strong><?php echo get_field('engine');?></li>
				 			<li><strong>Language: </strong><?php echo get_field('language');?></li>
				 			<li><strong>Download Link: </strong><a href="<?php echo get_field('link');?>">Download</a></li>
				 		</ul>
			  <?php } else { ?>
				 		<ul>
				 			<li><strong>Video Title: </strong><?php echo the_title(); ?></li>
				 			<li><strong>Release Date: </strong><?php echo get_field('engine');?></li>
				 			<li><strong>Video Link: </strong><a href="<?php echo "https://www.youtube.com/watch?v=" . substr(get_field('link'), strrpos(get_field('link'), '/') + 1) ;?>">Video</a></li>
				 		</ul>
			  <?php } ?>
		 		</div>
		 	</div>
		 </div>

  <?php }
	else
		{ ?>
			<p>No content available.</p>
  <?php }?>



<div id="pagefill"></div>
<?php
get_footer();
?>
