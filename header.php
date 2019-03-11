<!DOCTYPE HTML>



<html>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>


	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">

	
	<!-- animsition.css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/animsition.css">

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<!-- animsition.js -->
	<script src="<?php echo get_template_directory_uri(); ?>/dist/js/animsition.js"></script>


	<!-- Eczar font -->
	<link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">


	<!--<script src="https://use.typekit.net/inm5ttv.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>-->


	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-70298371-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<script type="text/javascript">

//	const aboutTagOne = document.querySelector(".about__headline--the-girl");

//	const loadHeadline = function() {
//		aboutTagOne.style.visibility = 'hidden';
//	}

//	document.addEventListener("load", function() {
//	  loadHeadline();
//	})


//	This works

//	window.addEventListener("load", function() {
//	  document.querySelector(".about__headline--the-girl").style.visibility = 'hidden';
//	})

	window.onload = function() {
	  document.querySelector(".about__headline--the-girl").classList.add('about__headline--appear');
	  document.querySelector(".about__headline--the-designer").classList.add('about__headline--appear');
	  document.querySelector(".about__headline--the-climber").classList.add('about__headline--appear');
	};


	</script>
	

<?php wp_head(); ?>

</head>





<body <?php body_class(); ?>>

	<div class="animsition-overlay">

		<header class="header" id="navbar">
			
			<span class="header__logo">

				<a href="<?php bloginfo('url'); ?>">

					<svg width="55px" height="29px" viewBox="0 0 55 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

					    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					        <g id="Desktop-HD-Copy-6" transform="translate(-97.000000, -99.000000)" fill="#FF2E12">
					            <g id="swan-design-logo" transform="translate(97.000000, 99.000000)">
					                <path d="M4.2,1.5 L7.4,4.6 L8.8,6 L-3.64153152e-13,12.1 L4.2,1.5 Z M12.3,9.4 L15.2,12.3 L13.3,25.3 L9.5,6.7 L12.3,9.4 Z M6.5,28.8 L10.7,15.1 L13,26.9 L8.8,28.1 L6.5,28.8 Z M17.7,26.1 L36.7,20.7 L54.6,15.6 L37.4,28.9 L7.9,28.9 L12.9,27.4 L13.6,27.3 L17.7,26.1 Z M36.5,20.3 L18.9,25.2 L19.2,25 L25.7,20.4 L42.5,8.4 L36.5,20.3 Z M13.7,26.7 L13.5,26.8 L14.2,22.4 L26.7,7.7 L25.5,20 L17.6,25.6 L13.7,26.7 Z M10.5,6.9 L9.3,5.8 L7.7,4.2 L4.6,1.2 L12.4,0 L15.1,11.5 L10.5,6.9 Z" id="Combined-Shape"></path>
					            </g>
					        </g>
					    </g>
					</svg>


				</a>

			</span>


			<nav class="header__nav">

				<!--<span class="header__nav__item"><a href="about.html" class="animsition-link" data-animsition-out-class="overlay-slide-out-right">About</a></span>
				<span class="header__nav__item"><a href="projects.html" class="animsition-link" data-animsition-out-class="overlay-slide-out-right">Projects</a></span>-->


				<!--<?php wp_nav_menu(); ?>-->

				<?php
					wp_nav_menu( array(
						'walker' => new animstion_primary_nav()
					 ) );
				?>


			</nav>

		</header>
