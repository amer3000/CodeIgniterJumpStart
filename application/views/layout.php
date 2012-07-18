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
		<p>
			Be sure to change your encryption key, enable Database access, and create basic tables.
			Also remove "CodeIgniterJumpStart/" from .htaccess file.

		</p>
		<h3>SQL for Tables</h3>
		<p>SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

			-- --------------------------------------------------------

			--
			-- Table structure for table `ci_sessions`
			--

			CREATE TABLE IF NOT EXISTS `ci_sessions` (
			`session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
			`ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
			`user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
			`last_activity` int(10) unsigned NOT NULL DEFAULT '0',
			`user_data` text COLLATE utf8_bin NOT NULL,
			PRIMARY KEY (`session_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

			-- --------------------------------------------------------

			--
			-- Table structure for table `login_attempts`
			--

			CREATE TABLE IF NOT EXISTS `login_attempts` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
			`login` varchar(50) COLLATE utf8_bin NOT NULL,
			`time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

			-- --------------------------------------------------------

			--
			-- Table structure for table `user_autologin`
			--

			CREATE TABLE IF NOT EXISTS `user_autologin` (
			`key_id` char(32) COLLATE utf8_bin NOT NULL,
			`user_id` int(11) NOT NULL DEFAULT '0',
			`user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
			`last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
			`last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			PRIMARY KEY (`key_id`,`user_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

			-- --------------------------------------------------------

			--
			-- Table structure for table `user_profiles`
			--

			CREATE TABLE IF NOT EXISTS `user_profiles` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`user_id` int(11) NOT NULL,
			`country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
			`website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
			`facebook_id` varchar(255) COLLATE utf8_bin DEFAULT NULL,
			`twitter_id` varchar(255) COLLATE utf8_bin DEFAULT NULL,
			`gfc_id` varchar(255) COLLATE utf8_bin DEFAULT NULL,
			`google_open_id` varchar(255) COLLATE utf8_bin DEFAULT NULL,
			`yahoo_open_id` varchar(255) COLLATE utf8_bin DEFAULT NULL,
			PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

			-- --------------------------------------------------------

			--
			-- Table structure for table `users`
			--

			CREATE TABLE IF NOT EXISTS `users` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`username` varchar(50) COLLATE utf8_bin NOT NULL,
			`password` varchar(255) COLLATE utf8_bin NOT NULL,
			`email` varchar(100) COLLATE utf8_bin NOT NULL,
			`activated` tinyint(1) NOT NULL DEFAULT '1',
			`banned` tinyint(1) NOT NULL DEFAULT '0',
			`ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
			`new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
			`new_password_requested` datetime DEFAULT NULL,
			`new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
			`new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
			`last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
			`last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
			`created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
			`modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
		</p>
		<section>
			<?=$registerForm?>
		</section>
		<section>
			<?=$loginForm?>
		</section>

		<footer>Uncopyright.</footer>
	</body>
</html>
