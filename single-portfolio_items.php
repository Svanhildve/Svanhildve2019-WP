<?php get_header(); ?>
		


		<section class="grid-container wrapper case">

			<div class="row">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<section class="case__top">

						<?php

						$landscape = get_field('hero_format') == "landscape";
						$portrait = get_field('hero_format') == "portrait";

						if ( $landscape ) { ?>

				
							<div class="case__headline col-s-12">
								<span class="case__meta"><?php the_field('what'); ?>—</span>
								<h1 class="h1--project"><?php single_post_title(); ?></h1>
							</div>
							
							<div class="col-s-12 col-pm-offset-1 col-pm-10 col-m-offset-1 col-m-10 col-ml-offset-1 col-ml-10">
								<div class="case__hero-wrap case__hero-wrap--landscape">
									<div class="case__hero-img" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')"></div>
								</div>
							</div>

						<?php
						}

						if ( $portrait ) { ?>

							<div class="case__headline col-s-12">
								<span class="case__meta"><?php the_field('what'); ?>—</span>
								<h1 class="h1--project"><?php single_post_title(); ?></h1>
							</div>
							
							<div class="col-s-12 col-pm-offset-3 col-pm-6 col-m-offset-2 col-m-8 col-ml-offset-3 col-ml-6">
								<div class="case__hero-wrap case__hero-wrap--portrait">
									<div class="case__hero-img" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')"></div>
								</div>
							</div>

						<?php
						} ?>

					</section>

				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no content! :( '); ?></p>
				<?php endif; ?>

			</div>

			

			<div>
				<?php get_template_part( 'buildable' ); ?> 
			</div>	

			<?php $prev_post = get_previous_post();
				if (!empty( $prev_post )): ?>

				<div class="row">

					<div class="col-s-12 next-project">

			 			 <a class="next-project__link animsition-link" data-animsition-out-class="overlay-slide-out-bottom"href="<?php echo $prev_post->guid ?>">
			 			 	<div class="next-project__wrap">
								<h2>
									<span class="case__meta">Next project—</span>
									<span class="next-project__title"><?php echo $prev_post->post_title ?></span>
								</h2>
							</div>
			 			 </a>

				 	</div>

				</div>

			<?php endif ?>

		</section>
	
		
<script>
  $(document).ready(function() {
    $('.animsition-overlay').animsition({
      inClass: 'overlay-slide-in-top',
      outClass: 'overlay-slide-out-bottom',
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
