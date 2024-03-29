<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  	<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/lanparty/images/favicon.ico"/>

		<link media="screen, handheld" href="<?php echo get_stylesheet_directory_uri(); ?>/lanparty/css/style.css" type="text/css" rel="stylesheet">
        <link media="screen  and (min-width: 40.5em)" href="<?php echo get_stylesheet_directory_uri(); ?>/lanparty/css/enhanced.css" type="text/css" rel="stylesheet">

		<!--[if lt IE 9 ]>
			<link media="screen" href="<?php echo get_stylesheet_directory_uri(); ?>/lanparty/css/enhanced.css" type="text/css" rel="stylesheet">
		<![endif]-->
		
		<link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
