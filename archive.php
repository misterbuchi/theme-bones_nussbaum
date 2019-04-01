<?php get_header(); ?>

			

						<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						
						
						
						
						<h1 class="page-title entry-title"><?php single_cat_title( '', true ); ?></h1>
						

							<?php
							/*the_archive_title( '<h1 class="page-title">', '</h1>' );*/
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
							
							<?php if (have_posts()) : ?>
							<?php $count = 0; ?>
							
							<?php while (have_posts()) : the_post(); ?>
							<?php $count++; ?>
							
							<?php if ($count <= 1) : ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="entry-header article-header">

									<h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="byline entry-meta vcard">
										<?php printf( ' %1$s',
                  							     /* the time the post was published */
                  							     '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . the_date(get_option('date_format')) . '</time>'
                       								/* the author of the post */
                       								
                    							); ?>
									</p>

								</header>
								

								<section class="entry-content cf">


									<?php the_content(); ?>

								</section>

								<footer class="article-footer">

								</footer>

							</article>
							
							<?php else : ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
							
							<header class="entry-header article-header">
							
																<h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
																<p class="byline entry-meta vcard">
																	<?php printf( ' %1$s',
																			     /* the time the post was published */
																			     '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . the_date(get_option('date_format')) . '</time>'
																					/* the author of the post */
																					
																			); ?>
																</p>
							
															</header>
															</article>
							<?php endif; ?>
												
							

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

						</main>


				</div>

			</div>

<?php get_footer(); ?>
