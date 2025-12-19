<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
	#text {
		text-align: center;
		font-size: 150%;
		margin-top: 25%;
	}
	#text i {
		color: #BBB;
		font-size: 200%;
	}
	#name {
		color: #008457;
	}
	.back-link {
		/*font-size: 75%;*/
		color: #008457;
	}
	.back-link:hover {
		color: #008457;
		text-decoration: underline;
	}
</style>
<div class="row">
	<div class="col col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12" style="margin: 0 auto;">
		<p id="text">
			<i class="fa fa-lock"></i>
			<br>
			<br>
			<br>
			Vous n'êtes pas autoriser à faire cette action.<br>
			Si vous pensez que ceci est une erreur, veuillez contacter la Direction Informatique<br><br>
<?php
			if(isset($_SERVER['HTTP_REFERER'])) {
?>
				<a class="back-link" href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Revenir en arrière</a>
<?php
			} else {
?>
				<a class="back-link" href="<?php echo base_url(); ?>">Revenir à la page d'accueil</a>
<?php
			}
?>
		</p>
	</div>
</div>

<!-- 

			Oops!! ☹<br>
			<i id="name"><?php echo $user['NomPrenom']; ?></i>, vous n'êtes pas autoriser à faire cette action.<br>
 -->