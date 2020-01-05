<?php
/*
 Template Name: Werkschau
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

									


								</header>

								<section class="entry-content cf" itemprop="articleBody">
								<?php
$args = array(
    'post_parent' => $post->ID,
    'post_type' => 'page',
    'orderby' => 'menu_order'
);

$child_query = new WP_Query( $args );
?>
<ul class="child-pages">
<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

    <li <?php post_class('m-all t-1of4 d-1of4 m-5em cf'); ?>>  
        <?php  
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('korb-thumb-300');
        }
        ?>
        <span><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></span>
    </li>
<?php endwhile; ?>
</ul>

<?php
wp_reset_postdata(); ?>
								<?php $page_query = new WP_Query();
								    $all_pages = $page_query->query( array('post_type' => 'page') );
								
								    $page_children = get_page_children( get_the_id(), $all_pages );
								    $current_page = $page_children;
								
								    
								    
										// the content (pretty self explanatory huh)
										echo '<div class="werk-content">';
										the_content();

										echo '</div>';
										



										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',

										) );
$kat_anzeigen = get_post_meta($post->ID, 'Kategorie', true);

if ($kat_anzeigen != 0) {

query_posts(array(
    'cat'  => $kat_anzeigen,
    'meta_key' => '_thumbnail_id',
    'posts_per_page' => 24));
if(have_posts()) : while(have_posts()) : the_post();

$event_date = date('d.m.Y', strtotime(get_post_meta($post->ID, 'event_begin', true)));


									?>
									
<article id="post-<?php the_ID(); ?>" <?php post_class( 'm-all t-1of3 d-1of4 m-5em cf' ); ?> role="article"><div class="abs"></div>
							
															<div class="article-header gallery-header">
																<?php
																
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
							
															</div></article>		
															
<?php endwhile;

									 bones_page_navi();

endif;
wp_reset_query();}?>																					
									
									
								</section>


								<footer class="article-footer">
<?php if($post->post_parent) {
    $parent_link = get_permalink($post->post_parent);?>
    <a class="button back-button" href="<?php echo $parent_link; ?>" title="zur&uuml;ck"><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo get_the_title( $post->post_parent ); ?></a>
<?php } ?>
                  
								</footer>


							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>


				</div>

			</div>


<?php get_footer(); ?>
