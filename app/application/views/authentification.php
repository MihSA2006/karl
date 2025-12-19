<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title><?php echo get_app_name(); ?></title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo bootstrap_css('bootstrap.min.css'); ?>">

	<!-- Font-awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo font_awesome(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo boxicons(); ?>">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('authentification.css'); ?>">
</head>
<body class="container-fluid">
	<div class="row h-100">
		<div class="col-md-7 offset-5 h-100 right-side p-5">
			<div class="row justify-content-md-center mt-5">
				<!-- Log In Panel -->
				<div class="col-md-6 auth-box">
					<p class="auth-box-header">
						Welcome to Messagerie Test
					</p>
					<form action="<?= base_url() . 'Authentification/log'; ?>" autocomplete="off" method="POST">
						<div class="form-row mb-2">
							<div class="col-md-12">
								<label for="usernameInput_Log">Username</label>
								<input type="text" class="form-control form-outline form-outline-scale" id="usernameInput_Log" name="username" placeholder="..." autocomplete="username">
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
								<button class="btn btn-ph w-100">Log in</button>
							</div>
						</div>
						<div class="auth-box-footer mt-3">
							Don't have an account yet?
							<a href="javascript:void(0)" class="auth-box-link">Sign in</a>.
						</div>
					</form>
				</div>
				<!-- End Log In Panel -->

				<!-- Sign In Panel -->
				<div class="col-md-8 auth-box turn-display">
					<p class="auth-box-header">
						Create an account to join us
					</p>
					<form action="<?= base_url() . 'Authentification/sign'; ?>" autocomplete="off" method="POST">
						<div class="form-row mb-2">
							<div class="col-md-6">
								<label for="firstNameInput_Sign">First name</label>
								<input type="text" class="form-control form-outline form-outline-scale" id="firstNameInput_Sign" name="firstName" placeholder="Your beautiful name" value="Karl">
							</div>
							<div class="col-md-6">
								<label for="lastNameInput_Sign">Last name</label>
								<input type="text" class="form-control form-outline form-outline-scale" id="lastNameInput_Sign" name="lastName" placeholder="Your family name" value="Josvah">
							</div>
						</div>
						<div class="form-row mb-2">
							<div class="col-md-12">
								<label for="usernameInput_Sign">Username</label>
								<input type="text" class="form-control form-outline form-outline-scale" id="usernameInput_Sign" name="username" placeholder="Cool username" value="k_jsvh" autocomplete="username">
							</div>
						</div>
						<div class="form-row mb-2">
							<div class="col-md-12">
								<label for="emailInput_Sign">Email</label>
								<input type="email" class="form-control form-outline form-outline-scale" id="emailInput_Sign" name="email" placeholder="example@email.com" value="karljosvah@gmail.com">
							</div>
						</div>
						<div class="form-row mb-2">
							<div class="col-md-6">
								<label for="passwordInput_Sign">Password</label>
								<input type="password" class="form-control form-outline form-outline-scale" id="passwordInput_Sign" name="password" placeholder="********" value="test" autocomplete="current-password">
							</div>
							<div class="col-md-6">
								<label for="cPasswordInput_Sign_C">Confirm Password</label>
								<input type="password" class="form-control form-outline form-outline-scale" id="cPasswordInput_Sign_C" name="cPassword" placeholder="********" value="test" autocomplete="current-password">
							</div>
						</div>
						<div class="form-row mb-2">
							<div class="col-md-6">
								<label for="genderInput">Gender</label>
								<select class="form-control form-outline form-outline-scale" id="genderInput" name="gender">
									<option value="-1" selected disabled style="display: none;">Choose gender</option>
<?php
									foreach($genders as $gender) {
?>
										<option value="<?= $gender['idGender']; ?>"><?= $gender['gender']; ?></option>
<?php
									}
?>
								</select>
							</div>
							<div class="col-md-6">
								<label for="birthday_Sign">Birthday</label>
								<input type="date" class="form-control form-outline form-outline-scale" id="birthday_Sign" name="birthday" value="2002-03-15">
							</div>
						</div>
						<div class="form-row mt-4">
							<div class="col-md-8 m-auto">
								<button class="btn btn-ph w-100">Sign up</button>
							</div>
						</div>
						<div class="auth-box-footer mt-3">
							Already have an account?
							<a href="javascript:void(0)" class="auth-box-link">Log in</a>.
						</div>
					</form>
				</div>
				<!-- End Sign In Panel -->
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo jQuery() ?>"></script>
	<script src="<?php echo bootstrap_js("bootstrap.min.js") ?>"></script>

	<!-- Own JS -->
	<script src="<?php echo js_url('authentification.js'); ?>"></script>
</body>
</html>
