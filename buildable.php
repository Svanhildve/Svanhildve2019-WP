<?php

// check if the flexible content field has rows of data
if( have_rows('flexible_content') ):

	// loop through the rows of data
	while ( have_rows('flexible_content') ) : the_row();

		if( get_row_layout() == 'content_area' ): 

			$content = get_sub_field( 'content_area_field' ); 

			$contentleft = get_sub_field('content_area_alignment') == "left_column";
			$contentright = get_sub_field('content_area_alignment') == "right_column";

			if ( $content && $contentleft ) { ?>

				<div class="row case__text case__text--left">
					<div class="col-s-12 col-pm-offset-1 col-pm-10 col-l-offset-0 col-l-6">
						<div>
						<?php echo $content; ?>
						</div>
					</div>
				</div>

			<?php
			}  // End if $image


			if ( $content && $contentright ) { ?>

				<div class="row case__text case__text--right">
					<div class="col-s-12 col-pm-offset-1 col-pm-10 col-l-offset-6 col-l-6">
						<div>
						<?php echo $content; ?>
						</div>
					</div>
				</div>

			<?php
			} ; // End if $image

		elseif( get_row_layout() == 'wide_image' ): 

			$imagewide = get_sub_field( 'wide_image_field' ); 

			if ( $imagewide ) { ?>

				<div class="row case__wide-image">
					<div class="col-s-12">
						<img src="<?php echo esc_url( $imagewide ); ?>" class="case__wide-image-img">
					</div>
				</div>

			<?php
			} ; // End if $image


		elseif( get_row_layout() == 'two_images_wide' ): 

			$imageonewide = get_sub_field( 'image_one_wide' ); 
			$imagetwowide = get_sub_field( 'image_two_wide' ); 


			if ( $imageonewide && $imagetwowide ) { ?>

				<div class="row case__two-images">
					<div class="col-s-12">
						<img src="<?php echo esc_url($imageonewide );?>" class="full-width-image-2"><img src="<?php echo esc_url($imagetwowide); ?>" class="full-width-image-2">
					</div>
				</div>

			<?php
			} ; // End if $image


		elseif( get_row_layout() == 'video_block' ): 

			$video = get_sub_field( 'video' ); 


			if ( $video ) { ?>

				<div class="row case__video">
					<div class="col-s-12">
						<video class="case__video-file" autoplay loop>
						  <source src="<?php echo esc_url($video);?>" type="video/mp4">
						</video>
					</div>
				</div>

			<?php
			} ; // End if $image


		elseif( get_row_layout() == 'image_+_text' ): 

			$imagealternating = get_sub_field( 'image_alternating' ); 
			$textalternating = get_sub_field( 'text_alternating' ); 
			$imageleft = get_sub_field('alternating') == "image_left";
			$imageright = get_sub_field('alternating') == "image_right";
			$overlapping = get_sub_field('overlapping');

			if ( $overlapping ) {

				if( in_array('overlap_bottom', $overlapping) ) {

					$overlappingclass = "overlapping";
				
				}

			}


			if ( $imagealternating && $textalternating && $imageleft ) { ?>

				<div class="row wrapper base-spacing-overall-x2">
					<div class="col-s-12 col-m-6 <?php echo $overlappingclass; ?> alternating-image">
						<img src="<?php echo esc_url( $imagealternating ); ?>">
					</div>
					<div class="col-m-1"></div>
					<div class="col-s-12 col-m-5">
						<div class="alternating-text"><?php echo $textalternating; ?></div>
					</div>
				</div>

			<?php
			}  // End if $image

			elseif ( $imagealternating && $textalternating && $imageright ) { ?>

				<div class="row wrapper base-spacing-overall-x2 <?php echo $overlappingclass; ?>">
					
					<div class="col-s-12 col-m-5 <?php echo $overlappingclass; ?>">
						<div class="alternating-text"><?php echo $textalternating; ?></div>
					</div>
					<div class="col-m-1"></div>
					<div class="col-s-12 col-m-6 <?php echo $overlappingclass; ?> alternating-image" style="background-image:url('<?php echo esc_url( $imagealternating ); ?>')">
						<!--<img src="<?php echo esc_url( $imagealternating ); ?>">-->
					</div>
				</div>

			<?php
			} ; // End if $image

			


		endif;

	endwhile;

else :

// no layouts found

endif;

?>