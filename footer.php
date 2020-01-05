			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

<p class="source-org copyright"><a href="#container" title="Nach oben scrollen"><i class="fa fa-arrow-up" aria-hidden="true"></i></a> <?php bloginfo( 'name' ); ?> <a href="tel:+41629231452" title:"062-923 14 52 anrufen">062-923 14 52</a> - <a href="javascript:DeCryptX('1c2w2e0h2g1m2k0@2m2q1s2d1v3q1e0s1u3x0h3o0.1d3k')" title="Mail senden!"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> - &copy; <?php echo date('Y'); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
