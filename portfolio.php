<?php
/*
Template Name: Portfolio Listing
*/
?>

<?php get_header(); ?>

<section class="grid-container projects wrapper">

			<div class="row">

				<?php 

				$args = array(

					'post_type' => 'portfolio_items',
					'orderby' => 'menu_order',
					'order' => 'DESC',
					'posts_per_page' => 20,
					
				);

				$query = new WP_Query( $args ); ?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

					<?php

					$count == 0;

					if ( $count == 0 ) { ?>

						<div class="portfolio-cards row">

							<div class="portfolio-card__item portfolio-card__item--1 col-s-10 col-m-5 col-l-4">


								<a href="<?php the_permalink(); ?>" class="animsition-link" data-animsition-out-class="overlay-slide-out-bottom">
										
									<div class="portfolio-card__img-wrap">
										<div class="portfolio-card__img" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')"></div>

									</div>
									

									<div class="portfolio-card__content">					
										<div class="portfolio-card__title"><h2 class="h2 h2--project-card"><?php the_title(); ?></h2></div>
										<div class="portfolio-card__meta"><?php the_field('what'); ?>—</div>
									</div>

								</a>

							</div>

						<?php $count++;

						if (($query->current_post +1) == ($query->post_count)) { ?>
							</div><?php	
						}

					}
					elseif ( $count == 1 ) { ?>
						
							<div class="portfolio-card__item portfolio-card__item--2 col-s-offset-2 col-s-10 col-m-offset-2 col-m-5 col-l-offset-4 col-l-4">


								<a href="<?php the_permalink(); ?>" class="animsition-link" data-animsition-out-class="overlay-slide-out-bottom">
										
									<div class="portfolio-card__img-wrap">
										<div class="portfolio-card__img" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')"></div>

									</div>
									

									<div class="portfolio-card__content">					
										<div class="portfolio-card__title"><h2 class="h2 h2--project-card"><?php the_title(); ?></h2></div>
										<div class="portfolio-card__meta"><?php the_field('what'); ?>—</div>
									</div>

								</a>

							</div>			

						</div>

						<?php $count++;


					}



					elseif ( $count == 2 ) { ?>
						
						<div class="portfolio-cards row">

							<div class="portfolio-card__item portfolio-card__item--3 col-s-10 col-l-offset-1 col-m-5 col-l-4">

								<a href="<?php the_permalink(); ?>" class="animsition-link" data-animsition-out-class="overlay-slide-out-bottom">
										
									<div class="portfolio-card__img-wrap">
										<div class="portfolio-card__img" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')"></div>

									</div>
									

									<div class="portfolio-card__content">					
										<div class="portfolio-card__title"><h2 class="h2 h2--project-card"><?php the_title(); ?></h2></div>
										<div class="portfolio-card__meta"><?php the_field('what'); ?>—</div>
									</div>

								</a>

							</div>

						<?php $count++;

						if (($query->current_post +1) == ($query->post_count)) { ?>
							</div><?php	
						}

					}
					elseif ( $count == 3 ) { ?>
						
							<div class="portfolio-card__item portfolio-card__item--4 col-s-offset-2 col-s-10 col-m-offset-2 col-ml-offset-2 col-m-5 col-l-4">

								<a href="<?php the_permalink(); ?>" class="animsition-link" data-animsition-out-class="overlay-slide-out-bottom">
										
									<div class="portfolio-card__img-wrap">
										<div class="portfolio-card__img" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')"></div>

									</div>
									

									<div class="portfolio-card__content">					
										<div class="portfolio-card__title"><h2 class="h2 h2--project-card"><?php the_title(); ?></h2></div>
										<div class="portfolio-card__meta"><?php the_field('what'); ?>—</div>
									</div>

								</a>

							</div>

						</div>

						<?php $count = 0;
					} 
					


					?>

					

				

				<?php endwhile; else: ?>


				<p><?php _e('Sorry, no content! :( '); ?></p>

				<?php endif; ?>

				<?php wp_reset_postdata(); ?>

			</div>





		<!-- <div class="portfolio-cards row">

			<div class="portfolio-card__item portfolio-card__item--1 col-s-10 col-m-5 col-l-4">


				<a href="riksrevisjonen.html" class="animsition-link" data-animsition-out-class="overlay-slide-out-bottom">
						
					<div class="portfolio-card__img-wrap">
						<div class="portfolio-card__img"></div>

					</div>
					

					<div class="portfolio-card__content">					
						<div class="portfolio-card__title"><h2 class="h2 h2--project-card">Riksrevisjonen</h2></div>
						<div class="portfolio-card__meta">Branding & UX / UI design—</div>
					</div>

				</a>

			</div>

			<div class="portfolio-card__item portfolio-card__item--2 col-s-offset-2 col-s-10 col-m-offset-2 col-m-5 col-l-offset-4 col-l-4">


				<a href="riksrevisjonen.html" class="animsition-link" data-animsition-out-class="overlay-slide-out-bottom">
						
					<div class="portfolio-card__img-wrap">
						<div class="portfolio-card__img"></div>

					</div>
					

					<div class="portfolio-card__content">					
						<div class="portfolio-card__title"><h2 class="h2 h2--project-card">Ruter</h2></div>
						<div class="portfolio-card__meta">UX / UI design—</div>
					</div>

				</a>

			</div>			

		</div>

		<div class="portfolio-cards row">

			<div class="portfolio-card__item portfolio-card__item--3 col-s-10 col-l-offset-1 col-m-5 col-l-4">

				<a href="riksrevisjonen.html" class="animsition-link" data-animsition-out-class="overlay-slide-out-bottom">
						
					<div class="portfolio-card__img-wrap">
						<div class="portfolio-card__img"></div>

					</div>
					

					<div class="portfolio-card__content">					
						<div class="portfolio-card__title"><h2 class="h2 h2--project-card">Nettbuss</h2></div>
						<div class="portfolio-card__meta">UI design—</div>
					</div>

				</a>

			</div>

			<div class="portfolio-card__item portfolio-card__item--4 col-s-offset-2 col-s-10 col-m-offset-2 col-ml-offset-2 col-m-5 col-l-4">

				<a href="riksrevisjonen.html" class="animsition-link" data-animsition-out-class="overlay-slide-out-bottom">
						
					<div class="portfolio-card__img-wrap">
						<div class="portfolio-card__img"></div>

					</div>
					

					<div class="portfolio-card__content">					
						<div class="portfolio-card__title"><h2 class="h2 h2--project-card">Handverkspartner</h2></div>
						<div class="portfolio-card__meta">Branding—</div>
					</div>

				</a>

			</div>

		</div> -->

</section>

<script>
  $(document).ready(function() {
    $('.animsition-overlay').animsition({
      inClass: 'overlay-slide-in-left',
      outClass: 'overlay-slide-out-right',
      inDuration            :    350,
      outDuration           :    350,
      overlay : true,
      overlayClass : 'animsition-overlay-slide',
      overlayParentElement : 'body'
    })
    .one('animsition.inStart',function(){

      $('body').removeClass('bg-init');

      $(this)
        .find('.item')
        .append('<h2 class="target">Callback: Start</h2>');

      console.log('event -> inStart');
    })
    .one('animsition.inEnd',function(){
      $('.target', this).html('Callback: End');
      console.log('event -> inEnd');
    })
    .one('animsition.outStart',function(){
      console.log('event -> outStart');
    })
    .one('animsition.outEnd',function(){
      $('.target', this).html('Callback: End');
      console.log('event -> outEnd');
    });

  });
</script>

<?php get_footer(); ?>