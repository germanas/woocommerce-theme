<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Hemp index page
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="big_image">
			<div class="site-message">
				
			<h1>Mes parduodame</h1><h2>Arbatą</h2>
			<a href="/produktai"><button type="button" >Check products</button></a>

			</div>
		</div>
		
		<div class="container-class">
		<div class="product-items" id="product-item-1">
			<div class="product-container" id ="product-container-1">
				<h1>This is title</h1>
				<p>This is description</p>
				<img src="https://i.imgur.com/KH7eDI4.jpg?1">
		</div>


		</div>

		<div class="product-items" id="product-item-2">Item 2</div>
		<div class="product-items" id="product-item-3">Item 3</div>
		<div class="product-items" id="product-item-4">Item 4</div>
		<div class="product-items" id="product-item-5">Item 5</div>
		<div class="product-items" id="product-item-6">Item 6</div>

		

		</div>
		<div class="about-us">
			<p>about us</p>
		</div>
		<div class="blog-posts-class"> 
		<?php if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>
		</div>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
