<!doctype html>
<html lang="en">
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
</head>
<body class="container-fluid" style="height: 100vh;">
	<header class="navbar navbar-expand-lg navbar-dark">
		<div class="row w-100 m-0">
			<div class="col-md-3 col-6 d-flex">
				<!-- <button class="navbar-toggler d-block" type="button" data-toggle="collapse" data-target="#left-navbar" aria-controls="left-navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button> -->
				<a class="navbar-brand ml-4" href="<?php echo base_url(); ?>"><> Bad Code</a>
			</div>
			<div class="col-md-1 col-6 d-flex offset-0 offset-md-8 dropdown user-dropdown">
				<span class="" data-toggle="dropdown" aria-expanded="false">
					<span class="header-user-pic bg-blur">
						<span class="fa fa-user"></span>
					</span>
				</span>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="javascript:void(0)">
						<i class="far fa-user dropdown-item-icon"></i>
						<span class="dropdown-item-label">
							Username
						</span>
					</a>
					<a class="dropdown-item" href="javascript:void(0)">
						<i class="fa fa-cog dropdown-item-icon"></i>
						<span class="dropdown-item-label">
							Settings
						</span>
					</a>
					<a class="dropdown-item" href="javascript:void(0)">
						<i class="far fa-clock dropdown-item-icon"></i>
						<span class="dropdown-item-label">
							Your activity
						</span>
					</a>
					<a class="dropdown-item" href="<?php echo base_url() . 'Country/logout' ?>">
						<i class="fa fa-sign-out-alt"></i>
						Log out
					</a>
				</div>
			</div>
		</div>
	</header>
	<div class="row" id="main-body">
		<nav class="col-md-2 pl-4" id="left-navbar">
				<div class="col-md-12 sidebar-button active <?php if(isset($isAdmin)) { ?>admin<?php } ?>">
					<a href="javascript:void(0)">
						<i class="far fa-user sidebar-button-icon"></i>
						<span class="sidebar-button-label">
							Username
						</span>
					</a>
				</div>
				<div class="col-md-12 sidebar-button">
					<a href="javascript:void(0)">
						<i class="fa fa-cog sidebar-button-icon"></i>
						<span class="sidebar-button-label">
							Settings
						</span>
					</a>
				</div>
				<div class="col-md-12 sidebar-button">
					<a href="javascript:void(0)">
						<i class="far fa-clock sidebar-button-icon"></i>
						<span class="sidebar-button-label">
							Your activity
						</span>
					</a>
				</div>
		</nav>
		<main class="col-md-10 bg-blur">
			<div class="row" id="main">
				<div class="col-md-12">
<?php
					foreach($view as $v) {
						include($v);
					}
?>
				</div>
			</div>
		</main>

	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo jQuery() ?>"></script>
	<script src="<?php echo bootstrap_js("bootstrap.min.js") ?>"></script>

	<!-- Own JS -->
	<script src="<?php echo js_url('script.js'); ?>"></script>
</body>
</html>