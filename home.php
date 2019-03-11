<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

		
		<section class="grid-container wrapper cover">

			<div class="row cover__section">

				<div class="col-s-12 col-m-10 col-ml-10 col-l-8 cover__text">

					<h1><span class="cover__text-large">Hi there 👋🏻</span>
					
					<span>I’m <a class="cover__text-img-link">Svanhild Egge<div class="cover__text-img svanhild"  id="showimage"></div></a>, an <a class="cover__text-img-link">Oslo<div class="cover__text-img oslo"></div></a>-based digital designer working at <a class="cover__text-img-link">Making Waves<div class="cover__text-img mw"></div></a> and managing <a class="cover__text-img-link">CreativeMornings Oslo<div class="cover__text-img cm"></div></a>. You might be able to find me nerding over some really good typography or well thought through micro interactions.
					</span></h1>

				</div>
				
			</div>


			<script>
			  $(document).ready(function() {
			    $('.animsition-overlay').animsition({
			      inClass: 'overlay-slide-in-left',
			      outClass: 'overlay-slide-out-right',
			      inDuration            :    0,
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
				
			<script type="text/javascript">
				

				$(document).mousemove(function(e){
				    if (parseInt($(window).width()) > 1024) {
				        $(".cover__text-img").css({left:e.clientX + 30, top:e.clientY - 220});
				    }
				});
				

			</script>

		</section>
		

<?php get_footer(); ?>