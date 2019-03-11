<?php get_header(); ?>
		
		<section id="content">
		
			<section id="welcome_text">
				<h1>This is a cliche text <br />saying something <span class="h1_color">cool</span> about me</h1>
			</section>
		
			<section id="latest_works">
				<h2>latest<br/>works</h2>	
				<?php 
				$style_classes = array('thumbnail','thumbnail','thumbnail2');
				$styles_count = count($style_classes);
				$style_index = 0;
				?>
				<?php query_posts('category_name=work&showposts=3'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>				
				<article class="<?php $k = $style_index % $styles_count; echo "$style_classes[$k]"; $style_index++; ?>">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</article>
				
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no content! :( '); ?></p>
			<?php endif; ?>
			
			<a href="http://www.superswan.net/portfolio/category/work/" class="more">See more</a>
				
			<br class="clear" />
			</section>
			
			
			
			
			
			<section id="latest_blogs">
				<h2>latest<br/>blogs</h2>	
				<?php 
				$style_classes = array('blog_excerpt','blog_excerpt2');
				$styles_count = count($style_classes);
				$style_index = 0;
				?>
				<?php query_posts('category_name=blog&showposts=2'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="<?php $k = $style_index % $styles_count; echo "$style_classes[$k]"; $style_index++; ?>">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
					<div class="date"><?php get_the_date('d/m/Y'); ?></div><div class="comment"><?php comments_popup_link( 'no comments', 'one comment', '% comments' ); ?></div>
					
					<div class="entry">
						<?php the_excerpt(); ?>
						<a href="<?php echo get_permalink(); ?>"> Read More...</a>
					</div>
				</article>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no content! :( '); ?></p>
			<?php endif; ?>
			
			<a href="http://www.superswan.net/portfolio/category/blog/" class="more">See more</a>
			
			<br class="clear" />
			</section>
			
			
			
		</section>
<?php get_footer(); ?>
