<link rel="stylesheet" type="text/css" href="<?php echo css_url("suggestion.css") ?>">
<div class="row pl-5 pr-5 pt-2">
	<div class="col-12 col-md-12 country-name">
		<?php echo $country["countryName"]; ?>
	</div>
</div>
<div id="suggestion-content">
<?php
	foreach($domains as $domain) {
		break;
?>
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="domain-card">
				<div class="domain-header">
					<div class="domain-icon stem">
						<i class="fas fa-atom"></i>
					</div>
					<div class="domain-title">
						<h5><?php echo $domain["domain"] ?></h5>
						<p><?php echo $domain["description"] ?></p>
					</div>
				</div>
				<button class="btn btn-domain btn-stem">
					<i class="fas fa-arrow-right me-2"></i>
					Généré Cours
				</button>
			</div>
		</div>
<?php
	}
?>
</div>

<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
<input type="hidden" id="idCountry" value="<?php echo $country["idCountry"] ?>">
<script src="<?php echo jQuery() ?>"></script>
<!-- <script src="<?php echo js_url('suggestion.js') ?>"></script> -->