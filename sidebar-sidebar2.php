
					<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>
				<div id="sidebar2" class="sidebar" tabindex="-1" role="complementary">
					

						<?php dynamic_sidebar( 'sidebar2' ); ?>
				</div>

					<?php else : ?>

					<ul class="slideshow" role=”presentation” tabindex="-1">
					
							<?php
							
							
							$args = array( 'orderby' => 'rand', 'category' => 16 );
							
							$myposts = get_posts( $args );
							foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<li tabindex="-1">
								   <?php the_post_thumbnail('slides'); ?>
								   <span class="wir" role=”presentation” tabindex="-1"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></span>
								   <span class="was" role=”presentation” tabindex="-1"><?php the_title(); ?></span>
								   </li>
						<?php endforeach; 
						wp_reset_postdata();?>
						</ul>
						
						<script>
									jQuery(function(){
    jQuery('ul.slideshow li').hide();
    jQuery('ul.slideshow li').eq(0).fadeIn(4000).addClass('active');
	jQuery('ul.slideshow').click(function(){
		if(jQuery('ul.slideshow li.active').next().length == 0){
			
					jQuery('ul.slideshow li.active').removeClass('active').fadeOut(4000).parent().find('li').eq(0).fadeIn(4000).addClass('active');

			}else{
		
		jQuery('ul.slideshow li.active').removeClass('active').fadeOut(4000).next().fadeIn(4000).addClass('active');
	return false;
			}

	});
	
	
	
	var myTimer = setInterval(function startAni(){jQuery('ul.slideshow').trigger('click');		
					    },6000);
									});
									
	
    
   
									
    
								</script>


					<?php endif; ?>

