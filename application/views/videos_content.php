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
	<script type="text/javascript">
	loadAllVideoCards();
	</script>
</div>

</div>