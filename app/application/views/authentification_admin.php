<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo bootstrap_css('bootstrap.min.css'); ?>">

	<!-- Font-awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo font_awesome(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo boxicons(); ?>">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap.modification.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('authentification_admin.css'); ?>">
</head>
<body class="container-fluid">
	<div class="row h-100">
		<div class="col-md-6 offset-3 h-100 right-side p-5">
			<div class="row justify-content-md-center mt-5">
				<!-- Log In Panel -->
				<div class="col-md-6 auth-box">
					<form action="<?= base_url() . 'Admin/log'; ?>" autocomplete="off" method="POST">
						<div class="form-row mb-2">
							<div class="col-md-12">
								<label for="adminNameInput_Log">Admin Name</label>
								<input type="text" class="form-control form-outline form-outline-scale" id="adminNameInput_Log" name="adminName" placeholder="..." autocomplete="adminName">
							</div>
						</div>
						<div class="form-row mb-2">
							<div class="col-md-12">
								<label for="passwordInput_Log">Password</label>
								<input type="password" class="form-control form-outline form-outline-scale" id="passwordInput_Log" name="password" placeholder="********" autocomplete="current-password">
							</div>
						</div>
						<div class="form-row mt-4">
							<div class="col-md-8 m-auto">
								<button class="btn btn-ph w-100">Log as Administrator</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo jQuery() ?>"></script>
	<script src="<?php echo bootstrap_js("bootstrap.min.js") ?>"></script>

	<!-- Own JS -->
	<script src="<?php echo js_url('script.js'); ?>"></script>
</body>

</html>