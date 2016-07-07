<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="tile-grid">

	<div class="tile-filters navbar" data-spy="" data-offset-top="0">
		<ul>
			<li class="active" id="designFilter" title="design">Design</li>
			<li class="active" id="trailerFilter" title="trailer">Trailer</li>
			<li class="active" id="miscFilter" title="misc">Miscellaneous</li>
		</ul>
	</div>

	<br>

	<div class="tiles" id="tiles">
		<?php 
		foreach ($videoInfo as $video) {
			$info = (array)$video;

			$class = str_replace(",", " ", (string)$info['tags']);
			$tags = explode(',', str_replace(" ", "", (string)$info['tags']));
		?>

		<a class="tile <?php echo $class ?>" href ="<?php echo(base_url() . 'index.php/Videos/Video/' . $info['id']) ?>">
			<div class='tile-image'> 
				<img src="http://img.youtube.com/vi/<?php echo $info['video_id'] ?>/0.jpg" />
			</div> 
			
			<div class='tile-title'> 
				<h1><?php echo $info['title'] ?></h1> 
				<h2><?php echo $info['subject'] ?></h2> 
			</div> 
			
			<div class='tile-content'>
				<hr> 
				<p><?php echo $info['description'] ?></p> 
			</div> 
			
			<div class='tile-tags'> 
				<ul>
				<?php
				foreach ($tags as $tag) 
				{ ?>
 					<li><?php echo $tag ?></li>

				<?php } ?>
				</ul> 
			</div> 
		</a>

		<?php } ?>
	</div>

</div>

</div>
</div>

</body>
</html>