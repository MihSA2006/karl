<?php
	foreach($suggestions as $suggestion) {
	var_debug($suggestions);
?>
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="domain-card">
				<div class="domain-header">
					<div class="domain-icon stem">
						<i class="fas fa-atom"></i>
					</div>
					<div class="domain-title">
						<h5><?php echo $suggestion["domaine"] ?></h5>
						<p><?php echo $suggestion["description"] ?></p>
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