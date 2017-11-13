<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}


/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */
/*Remove search */
add_action( 'init', 'jk_remove_storefront_header_search' );
function jk_remove_storefront_header_search() {
remove_action( 'storefront_header', 'storefront_product_search', 	40 );
}

/*Remove copyright */
add_action( 'init', 'custom_remove_footer_credit', 10 );

function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
} 

function custom_storefront_credit() {
	?>
	<div class="site-info">
		&copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?>
	</div><!-- .site-info -->
	<?php
}
/* Remove jetpack custom logo 
add_action( 'init', 'storefront_custom_logo' );
function storefront_custom_logo() {
	remove_action( 'storefront_header', 'storefront_site_branding', 20 );
	add_action( 'storefront_header', 'storefront_display_custom_logo', 20 );
}

function storefront_display_custom_logo() {
?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-link" rel="home">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?php echo get_bloginfo( 'name' ); ?>" />
	</a>
<?php
}
*/



add_action( 'wp_enqueue_scripts', 'my_custom_script_load' );
function my_custom_script_load(){
  wp_enqueue_script( 'my-custom-script', get_stylesheet_directory_uri() . '/javascript_file', array( 'jquery' ) );
}

/* Google fonts */
add_action( 'storefront_header', 'jk_storefront_header_content', 40 );
	function jk_storefront_header_content() { ?>
		
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">

		<?php
	}
