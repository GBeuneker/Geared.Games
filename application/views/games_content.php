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
	</ul>
</div>

<br>

<div class="tiles" id="tiles">
	<script type="text/javascript">
	loadAllCards();
	</script>
</div>

</div>