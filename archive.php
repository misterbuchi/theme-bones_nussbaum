<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
<header class="archive-header">

									
							<h1 class="page-title"><?php
							single_term_title();
							?></h1>
							
<p><?php echo category_description(); ?></p></header>
			</header>
			<section class="kacheln">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'm-all t-1of3 d-1of3 m-5em cf' ); ?> role="article"><div class="abs"></div>
							
															<header class="article-header gallery-header">
																<?php
																$display_date = date('d.m.Y', strtotime(get_post_meta($post->ID, 'event_begin', true)));
																 if ( has_post_thumbnail() ) { the_post_thumbnail( 'korb-thumb-300' ); } else { printf('<div class="art-box"><p class="byline entry-meta vcard"><time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' ); 
																 if ( $display_date == '01.01.1970') { the_time('d.m.Y'); } else { echo $display_date;  } ;  
																    printf('</time></p><p class=" entry-title">');
																  the_title() . printf('</p></div>'); }; ?>
							<div class="cardtext">								
							<p class="byline entry-meta vcard">
							                                                                        <?php 
							                                                                                               								 
							
							                                                                        printf(
							                       								/* the time the post was published */
							                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' );
							                       								
							                       								                         if ( $display_date == '01.01.1970') { the_time('d.m.Y'); } else { echo $display_date;  } ;  
							                       								                         printf('</time>');
							                       								/* the author of the post */
							                       								
							                    							?>
																</p>
																<p class=" entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
																</div>
							
															</header></article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
							</section>

						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
