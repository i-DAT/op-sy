<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en" dir="ltr"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en" dir="ltr"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en" dir="ltr"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en" dir="ltr"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/components/magnific-popup/dist/magnific-popup.css"> 
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
		<?php if (WP_DEBUG): ?>
		<script src="<?php echo get_template_directory_uri(); ?>/components/modernizr/modernizr.js"></script>
		<?php else: ?>
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.min.js"></script>
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
