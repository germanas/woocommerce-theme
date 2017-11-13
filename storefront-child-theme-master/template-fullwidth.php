<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Full width
 *
 * @package storefront
 */

get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="pages-container">


			
	<?php if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
