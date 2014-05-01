<?php
	if(!empty($_GET["page"]) ) {
		$page = "home";
	}
?>


<!doctype html>

<html lang="fr">
	<head>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
		<meta content="yes" name="apple-mobile-web-app-capable">
		<meta content="black" name="apple-mobile-web-app-status-bar-style">
		<meta content="fr" name="Content-language">
		<meta charset="utf-8">
		<title></title>
		<meta content="" name="Description">
		<meta content="" name="Keywords">
		<meta content="USER STUDIO" name="Author">
		<meta content="USER STUDIO" name="Publisher">
		<meta content="USER STUDIO © 2013" name="Copyright">
		<meta content="index,follow,all" name="robots">
		<meta content="no" http-equiv="imagetoolbar">
		
		<! -- Favicons -->
		<link href="assets/images/favicon-retina.png" rel="apple-touch-icon">
		<link href="assets/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
		
		<! -- Stylesheets -->
		<link media="all" title="melo.io" href="assets/css/styles.css?v=<?php time() ?>" type="text/css" rel="stylesheet">
		<link media="all" title="melo.io" href="assets/fonts/melo-io/style.css?v=<?php time() ?>" type="text/css" rel="stylesheet">
		
		<! -- Jquery -->
		<script src="assets/js/jquery-min.js" type="text/javascript"></script>
		<script src="assets/js/common.min.js" type="text/javascript"></script>
		
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=
			Droid+Sans:400,700
			|Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic
			|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600
			|Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
		
	</head>
	
	<body>
		<header>
		
			<div id="header-logo">
<!-- 				<img class="fleche" src="assets/img/logo_mini.png"/> -->
				<img class="melo" src="assets/img/logo_melo_io_white.png" alt="logo melo.io" />
			</div>
			
			<div id="hamburger" class="icon-menu"></div>
			
			<nav id="main-menu">
				<ul>
					<li>Works</li>
					<li>Skills</li>
					<li>About</li>
				</ul>
				<ul>
					<li>
						<a class="icon-uniE001"></a>
					</li>
					<li>
						<a class="icon-uniE002"></a>
					</li>
					<li>
						<a class="icon-linkedin"></a>
					</li>
				</ul>
			</nav>
			
		</header>
	
		<div id="page-wrapper">
			<?php
				include ("pages/".$_GET["page"].".inc");
			?>
		</div>
		
		<footer class="full-height" id="footer">
			<div class="contact">
				<h2>Contact</h2>
				<p class="mail">
					<a href="mailto:hello@melo.io">hello@melo.io</a>
				</p>
				<ul class="social-list">
					<li>
						<a class="icon-uniE001"></a>
					</li>
					<li>
						<a class="icon-uniE002"></a>
					</li>
					<li>
						<a class="icon-linkedin"></a>
					</li>
				</ul>
			</div>
			
			<div id="with-love">
				<p>
					Hand-coded, with love, on the road.
				</p>
			</div>
		</footer>
		
	</body>
</html>