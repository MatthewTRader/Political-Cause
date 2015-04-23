<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php get_template_directory_uri(); ?>/wp-content/themes/Political%20Cause/js/jquery.min.js"></script>
		<script src="<?php get_template_directory_uri(); ?>/wp-content/themes/Political%20Cause/js/jquery.scrolly.min.js"></script>
		<script src="<?php get_template_directory_uri(); ?>/wp-content/themes/Political%20Cause/js/jquery.dropotron.min.js"></script>
		<script src="<?php get_template_directory_uri(); ?>/wp-content/themes/Political%20Cause/js/jquery.scrollex.min.js"></script>
		<script src="<?php get_template_directory_uri(); ?>/wp-content/themes/Political%20Cause/js/skel.min.js"></script>
		<script src="<?php get_template_directory_uri(); ?>/wp-content/themes/Political%20Cause/js/skel-layers.min.js"></script>
		<script src="<?php get_template_directory_uri(); ?>/wp-content/themes/Political%20Cause/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/wp-content/themes/Political%20Cause/css/skel.css" />
			<link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/wp-content/themes/Political%20Cause/css/style.css" />
			<link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/wp-content/themes/Political%20Cause/css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
		<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1 id="logo"><a href="/">Faces of Debt</a></h1>
                <div class="clear"></div>
			</header>

