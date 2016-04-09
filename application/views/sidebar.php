<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="sidebar">
	<ul class="sidebar-nav">
		<li id="home"><a href="<?php echo base_url(); ?>Home">Home</a></li>
		<li id="hobbyGames"><a href='<?php echo base_url(); ?>Hobby'>Hobby Games</a></li>
		<li id="assignments"><a href='<?php echo base_url(); ?>Assignments'>Assignment Games</a></li>
		<li id="other"><a href='<?php echo base_url(); ?>Other'>Other Projects</a></li>
		<li id="videos"><a href='<?php echo base_url(); ?>Videos'>Videos</a></li>
		<li id="aboutme"><a href='<?php echo base_url(); ?>About'>About Me</a></li>
	</ul>

	<script type="text/javascript">
	    var activePage = location.pathname.split('/').slice(-1)[0];
	    switch(activePage)
	    {
	      case "index.html":
	      document.getElementById("index").className = "active";
	      break;
	      case "hobbygames.html":
	      document.getElementById("hobbyGames").className = "active";
	      break;
	      case "assignments.html":
	      document.getElementById("assignments").className = "active";
	      break;
	      case "other.html":
	      document.getElementById("other").className = "active";
	      break;
	      case "videos.html":
	      document.getElementById("videos").className = "active";
	      break;
	      case "aboutme.html":
	      document.getElementById("aboutme").className = "active";
	      break;
	      default:
	      break;
	    }
 	 </script>
</div>