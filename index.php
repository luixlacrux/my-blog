<?php get_header();?>
<section id="main">
		<div id="no-slide">
			<?php include(TEMPLATEPATH. '/slideshow.php'); ?>
		</div>
		<section id="articles_list">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				
				<img class="thumb" src="http://www.lorempixel.com/300/200">
				
				<hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2></hgroup>
				<div class="date"><?php the_date();?> en <?php the_category();?> </div>
				<div class="extract"><?php the_excerpt();?> </div>
			</article>
			
		
		<?php endwhile; else: ?>

		<h1>No se encontraron posts </h1>

		<?php endif;?>
			
		<div id="pagination">
			<p><a href="#"><- Post Siguientes</a> 
				<a href="#">Post Anteriores -></a></p>
		</div>
		</section>

<?php get_sidebar();?>
	
	</section>

<?php get_footer();?>