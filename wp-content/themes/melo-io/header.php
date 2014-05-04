<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Melo-io_Theme
 * @since Twenty Fourteen 1.0
 */
?>

<html <?php language_attributes(); ?>>
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
		
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
		
		<! -- Favicons -->
		<link href="<?php echo get_stylesheet_directory_uri();?>/img/favicon-retina.png" rel="apple-touch-icon">
		<link href="<?php echo get_stylesheet_directory_uri();?>/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
		
		<! -- Stylesheets -->		
		<link type="text/css" rel="stylesheet" media="all" title="melo.io" href="<?php echo get_stylesheet_directory_uri();?>/style.css<?php time() ?>">
		<link media="all" title="melo.io" href="<?php echo get_stylesheet_directory_uri();?>/fonts/melo-io/style.css?v=<?php time() ?>" type="text/css" rel="stylesheet">
		
		<! -- Jquery -->
		<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo get_stylesheet_directory_uri();?>/js/common.min.js" type="text/javascript"></script>
		<?php if ( is_page('home') ) : ?>
			<script src="<?php echo get_stylesheet_directory_uri();?>/js/home.min.js" type="text/javascript"></script>
		<?php endif; ?>
		
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
				<img class="melo" src="<?php echo get_stylesheet_directory_uri();?>/img/logo_melo_io_white.png" alt="logo melo.io" />
			</div>
			
			<div id="hamburger" class="icon-menu"></div>
			
			<nav id="main-menu">
				<ul id="social-networks">
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
				<ul id="site-menu">
					<li><a href="<?= home_url(); ?>">Welcome</a></li>
					<li><a href="<?= get_page_link( get_page_by_title('Works') ); ?>">Works</a></li>
					<li><a href="#go-to-footer">Contact</a></li>
				</ul>
			</nav>
			
		</header>
		
		<div id="main">