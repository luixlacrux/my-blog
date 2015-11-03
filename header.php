<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<title>My Blog</title/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/normalize.css"/>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,500,300,700' rel='stylesheet' type='text/css'/>
	<script src="<?php bloginfo('template_url')?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
	<script>
	$(function(){
		$("#slideshow").slidesjs({
			height: 250,
			navigation:false
		});
	});
	</script>
</head>
<body>
	<header class="Header">
	
		<div class="Header-logo">
			<p>My Blog</p><span>by Calos Arturo</span>
		</div>
		<nav>
			<?php wp_nav_menu(
				array(
				'container' => false,
				'items_wrap' => '<ul id="menu-top">%3$s</ul>',
				'themes_location' => 'menu'	
				)); ?>
		</nav>
	</header>