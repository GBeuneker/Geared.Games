<?php

get_header();
?>

<div class="tile-grid">

	<div class="tile-filters navbar" data-spy="" data-offset-top="0">
		<ul>
			<li class="active" id="hobbyFilter" title="hobby">Hobby</li>
			<li class="active" id="jamFilter" title="jam">Jam</li>
			<li class="active" id="workFilter" title="work">Work</li>
			<li class="active" id="gawFilter" title="gaw">Game a Week</li>
			<li class="active" id="modFilter" title="mod">Mod</li>
		</ul>
	</div>

	<br>

	<div class="tiles" id="tiles">

	<?php 
	$temp = $wp_query; $wp_query= null;
	$wp_query = new WP_Query(); $wp_query->query('category_name=game');
	if ( $wp_query->have_posts() ) {
		while ( $wp_query->have_posts() ) {
			$wp_query->the_post(); 
			$tags = get_the_tags();

			$tagClass = "";
			if($tags)
				foreach ($tags as $tag) 
				{
					$tagClass .= strtolower($tag->name) . " ";
				}
			?> 
			<a class="tile <?php echo $tagClass ?>" href = "#">
				<div class='tile-image'> 
					<?php the_post_thumbnail(); ?>
				</div> 
				
				<div class='tile-title'> 
					<h1><?php echo the_title(); ?></h1> 
					<h2><?php echo the_title(); ?></h2> 
				</div> 
				
				<div class='tile-content'>
					<p class=""><?php echo get_post_meta(get_the_ID(), 'summary')[0]; ?></p> 
				</div> 
				
				<div class='tile-tags'> 
					<ul>
					<?php
					if($tags)
						foreach ($tags as $tag) 
						{ ?>
		 					<li><?php echo $tag->name ?></li>

				  <?php }?>
					</ul> 
				</div> 
			</a>

			<?php
		}
	}
	?>
	</div>


</div>

</div>
</div>

</body>
</html>


<?php
get_footer();
?>
