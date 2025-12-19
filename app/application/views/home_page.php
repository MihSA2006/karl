<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href="<?php echo css_url('dashboard.css') ?>">
<div class="row">
<?php
	for($i = 0; $i < 20; $i++) {
?>
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="domain-card">
				<div class="domain-header">
					<div class="domain-icon stem">
						<i class="fas fa-atom"></i>
					</div>
					<div class="domain-title">
						<h5>STEM</h5>
						<p>Sciences, Technologie, Ingénierie, Mathématiques</p>
					</div>
				</div>
				<div class="domain-stats">
					<div class="stat-item">
						<div class="stat-number">5</div>
						<div class="stat-label">Cours</div>
					</div>
					<div class="stat-item">
						<div class="stat-number">18</div>
						<div class="stat-label">Modules</div>
					</div>
					<div class="stat-item">
						<div class="stat-number">75%</div>
						<div class="stat-label">Complété</div>
					</div>
				</div>
				<button class="btn btn-domain btn-stem">
					<i class="fas fa-arrow-right me-2"></i> Accéder aux cours
				</button>
			</div>
		</div>
<?php
	}
?>
</div>