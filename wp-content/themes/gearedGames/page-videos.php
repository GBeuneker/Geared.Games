<?php

get_header();
?>

<div class="tile-grid">

	<div class="tile-filters navbar" data-spy="" data-offset-top="0">
		<ul>
			<li class="active" id="hobbyFilter" title="design">Design</li>
			<li class="active" id="jamFilter" title="trailer">Trailer</li>
			<li class="active" id="workFilter" title="misc">Miscellaneous</li>
		</ul>
	</div>

	<br>

	<div class="tiles" id="tiles">

	<?php 
	$temp = $wp_query; $wp_query= null;
	$wp_query = new WP_Query(); $wp_query->query('category_name=video');
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
			<a class="tile video <?php echo $tagClass ?>" href = "<?php the_permalink(); ?>">

				<div class='tile-image'> 
					<img src="http://img.youtube.com/vi/<?php echo substr(get_field('link'), strrpos(get_field('link'), '/') + 1) ?>/0.jpg" />
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
