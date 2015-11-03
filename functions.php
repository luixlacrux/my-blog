<?php 
register_nav_menus( array(
	 'menu' => "Menu Principal",
	 ));
?>

<?php 
add_theme_support('posts_thumbails');
add_image_size('slide_thumbils', 470, 300, true);
add_image_size('list_articles__sizze', 450, 370, true);
?>