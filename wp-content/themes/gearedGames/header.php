<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title>Geared Games</title>
		<?php wp_head(); ?>
	</head>

<body>


<div id="wrapper">
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class=""><a href='<?php echo get_site_url(); ?>'>Home</a></li>
			<li class=""><a href='<?php echo get_site_url(); ?>/games'>Games</a></li>
			<li class=""><a href='<?php echo get_site_url(); ?>/videos'>Videos</a></li>
			<li class=""><a href='<?php echo get_site_url(); ?>/about'>About Me</a></li>
		</ul>
	</div>

	<div id="sideButton">
		<a href="#" id="menu-toggle">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/avatarTop.png" alt="Geared Logo Top" id="topLogo"/>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/avatarBottom.png" alt="Geared Logo Bottom" id="bottomLogo"/>
		</a>
	</div>
	<div id="page-content">




