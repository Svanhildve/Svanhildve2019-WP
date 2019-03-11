<?php
/*
Template Name: About
*/
?>



<?php get_header(); ?>

	<section class="grid-container about wrapper">

		<div class="row about__top">

			<div class="col-s-12 col-pm-8 col-l-6 col-ml-offset-1 about__title">

				<h1 class="h1 h1--about">
					<span class="about__headline about__headline--the-girl">The girl,</span>
					<span class="about__headline about__headline--the-designer">designer</span>
					<span class="about__headline about__headling--the-climber">and climber</span>
				</h1>

			</div>

			<div class="col-s-offset-2 col-s-10 col-m-8 col-m-offset-4 col-ml-offset-0 col-l-9 col-l-offset-0 about__image-wrap full-width">
				<div class="about__image" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')"></div>
				<!--<img src="images/about2.png" class="about__image">-->
			</div>

		</div>

		<div class="row">

			<div class="about__text col-s-11 col-m-8 col-m-offset-2 col-l-6 col-s-offset-1 col-l-offset-3">
					

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<?php the_content(); ?>

				<?php endwhile; else: ?>
					
					<p><?php _e('Sorry, no content! :( '); ?></p>
				
				<?php endif; ?>
				
			</div>

		</div>

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