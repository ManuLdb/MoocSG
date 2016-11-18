<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <meta name="description" content="Questionnaire de la SG">
	    <meta name="keywords" content="Accueil, SG, Questionnaire">
	    <meta name="author" content="">
	    <meta name="robots" content="Accueil">
	    <title>Société Générale</title>
	    <link rel="icon" type="image/png" href="#" />
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
<body>
<!--<script src="<?php bloginfo('url'); ?>/wp-content/themes/our_theme/js/wow.js"></script>
              <script>
              new WOW().init();
              </script> -->
<div class="col-md-12" id="container">
	<nav class="navbar navbar-default">
	  <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".Navigation_mobile_tablette" aria-expanded="false">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	   </div>
	   <div class="collapse navbar-collapse Navigation_mobile_tablette">
	<?php $defaults = array(
		'theme_location' == '',
		'menu' == 'menu_SG',
		'container' == '',
		'container_class' == "navbar navbar-default",
		'container_id' == '',
		'menu_class' == 'menu',
		'menu_id' == '',
		'echo' == true,
		'fallback_cb' == 'wp_page_menu',
		'before' == '',
		'after' == '',
		'link_before' == '',
		'link_after' == '',
		'items_wrap' == '<ul class="nav navbar-nav">%3$s</ul>',
		'depth' == '',
		'walker' == ''
		);
		wp_nav_menu($defaults);
	?>
	</div>
	</nav>