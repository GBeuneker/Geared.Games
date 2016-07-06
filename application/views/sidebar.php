<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="sidebar">
	<ul class="sidebar-nav">

		<?php 
			$currentPage = $this->router->class; 
			$index = "" 
		?>
		<li class="<?php if($currentPage == "Games") echo "active"; ?>"><a href='<?php echo base_url() . $index; ?>Games'>Games</a></li>
		<li class="<?php if($currentPage == "Videos") echo "active"; ?>"><a href='<?php echo base_url() . $index; ?>Videos'>Videos</a></li>
		<li class="<?php if($currentPage == "About") echo "active"; ?>"><a href='<?php echo base_url() . $index; ?>About'>About Me</a></li>
	</ul>
</div>

<div id="sideButton">
	<a href="#" id="menu-toggle">
		<img src="<?php echo base_url(); ?>application/assets/avatarTop.png" alt="Geared Logo Top" id="topLogo"/>
		<img src="<?php echo base_url(); ?>application/assets/avatarBottom.png" alt="Geared Logo Bottom" id="bottomLogo"/>
	</a>
</div>