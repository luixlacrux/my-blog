<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8"/>
	<title><?php bloginfo("title");?></title/>
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
			start: 1,
			navigation:false,
			effect: {
			      slide: {
			        // Slide effect settings.
			        speed: 2000
			          // [number] Speed in milliseconds of the slide animation.
			      },
			      fade: {
			        speed: 2000,
			          // [number] Speed in milliseconds of the fade animation.
			        crossfade: false
			          // [boolean] Cross-fade the transition.
			      }
			    }
			
		});
	});
	</script>
	<?php wp_head();?>
</head>
<body>
	<header class="Header">
		<a class="Header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<p><?php bloginfo( 'name' ); ?></p><span><?php bloginfo( 'description' ); ?></span>
		</a>
		<nav>
			<?php wp_nav_menu(
				array(
				'container' => false,
				'items_wrap' => '<ul id="menu-top">%3$s</ul>',
				'themes_location' => 'menu'	
				)); ?>
			
		</nav>
	</header>