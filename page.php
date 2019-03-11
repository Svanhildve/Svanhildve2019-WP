<?php get_header(); ?>
		
		<section id="content">
		
			<article id="page">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<?php the_content('Read more'); ?>

				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no content! :( '); ?></p>
				<?php endif; ?>
			</article>
			
			
			<br class="clear" />
			
		</section>
<?php get_footer(); ?>
