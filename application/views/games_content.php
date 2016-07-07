<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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

	<?php 
	foreach ($gameInfo as $game) {
		$info = (array)$game;

		$class = str_replace(",", " ", (string)$info['tags']);
		$tags = explode(',', str_replace(" ", "", (string)$info['tags']));
	?>

	<div class="tiles" id="tiles">

		<a class="tile <?php echo $class ?>" href = "<?php echo(base_url() . 'index.php/Games/Game/' . $info['id']) ?>">
			<div class='tile-image'> 
				<img src=" <?php echo (base_url() . "/application/assets/" . $info['image']) ?>" />
			</div> 
			
			<div class='tile-title'> 
				<h1><?php echo $info['title'] ?></h1> 
				<h2><?php echo $info['engine'] ?></h2> 
			</div> 
			
			<div class='tile-content'>
				<hr> 
				<p><?php echo $info['description_short'] ?></p> 
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
	</div>

	<?php } ?>

</div>

</div>
</div>

</body>
</html>