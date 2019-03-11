		<?php
		 if ( have_posts() ) { the_post(); rewind_posts(); }
		 if ( in_category(4) ) {
		 include(TEMPLATEPATH . '/single-work.php');
		 } else {
		 include(TEMPLATEPATH . '/single-default.php');
		 }
		 ?>
