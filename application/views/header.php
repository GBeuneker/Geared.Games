<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
	<link rel="icon" href="<?=base_url()?>application/assets/gearedLogo.png" type="image/png">

	<!-- External -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/libraries/bootstrap/css/bootstrap.min.css">

	<script src="<?php echo base_url(); ?>application/libraries/jquery-1.12.1.min.js"></script>
	<script src="<?php echo base_url(); ?>application/libraries/bootstrap/js/bootstrap.min.js"></script>

	<!-- Internal -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/styles/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/styles/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/styles/gamepage.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/styles/sidebar.css">

	<script src="<?php echo base_url(); ?>application/scripts/youtubeLoader.js"></script>
	<script src="<?php echo base_url(); ?>application/scripts/eventLoader.js"></script>
	<script src="<?php echo base_url(); ?>application/scripts/tileManager.js"></script>
	<script src="<?php echo base_url(); ?>application/scripts/parallax.js"></script>


	<!--  Change site if we're on mobile -->
	<?php 

	if($this->agent->is_mobile())
	    { ?>

	<!-- Load mobile stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/styles/main_mobile.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/styles/sidebar_mobile.css">

  <?php } ?>

	
</head>

<body>
<body>
<div id="wrapper">

	<div id="page-content">


