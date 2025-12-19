<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="stylesheet" type="text/css" href="<?php echo css_url('interactive_map.css') ?>">
<div class="map-container">
	<div class="col-12 col-md-3">
		<h5 class="">
			<center id="country_name">
				Madagascar
			</center>
		</h5>
	</div>
	<svg id="africa-map" xmlns="http://www.w3.org/2000/svg">
		<g transform="translate(-600, -350)">
<?php
			foreach($countries as $country) {
?>
				<path
					id="<?php echo $country['idCountry'] ?>"
					data-name="<?php echo $country['countryName'] ?>"
					d="<?php echo $country['path'] ?>"
				/>
<?php
			}
?>
		</g>
	</svg>
</div>
<input type="hidden" id="next_link" value="<?php echo $next_link; ?>">
<div id="tooltip" class="tooltip"></div>
<script src="<?php echo jQuery(); ?>"></script>
<script src="<?php echo js_url('interactive_map.js'); ?>"></script>
