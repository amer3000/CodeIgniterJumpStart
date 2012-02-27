<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to CodeIgniter Jump Start</title>

		<!-- JS -->
		<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.7.1.min.js"></script>

		<!-- Don't forget to update the bookmark icons in the root: http://mathiasbynens.be/notes/touch-icons -->

		<!-- CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css?version=1" />

		<!-- JavaScript -->
		<!--[if IE]><![endif]-->
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="<?=base_url()?>assets/js/respond.min.js"></script>
		<style>
			#boxsize button, #boxsize input, #boxsize select, #boxsize textarea {
				width: 200px;
				border: 1px solid #333;
			}
		</style>

	</head>
	<body>

		<header>
			<h1>Welcome to CodeIgniter Jump Start!</h1>
		</header>
		<section>
			<?=$registerForm?>
		</section>
		<section>
			<?=$loginForm?>
		</section>

		<footer>Uncopyright.</footer>
	</body>
</html>
