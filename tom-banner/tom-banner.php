<?php
/**
 * Plugin Name: Tom Banner
 * Plugin URI: https://thomasvitale.com/tom-banner
 * Description: Show a fixed banner to promote your brand new e-book.
 * Version: 3.9.4
 * Author: Thomas Vitale
 * Author URI: https://thomasvitale.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: thomas
 * Domain Path: /languages
 *
 * @package TomBanner
 */

/**
 * Print an html banner with the promotional message.
 *
 * @since 1.0
 */
function tom_banner_html() {
?>
	 <div class="book-banner">
	 	<p>
			Do you like reading?
			<a href="#">Download</a> my new free e-book!
		</p>
	 </div>
<?php }
add_action( 'wp_footer', 'tom_banner_html', 1 );

/**
 * Load the css to add some style to the html banner.
 *
 * @since 1.0
 */
function tom_load_css() {
	wp_enqueue_style( 'tom-banner', plugins_url( 'css/style.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'tom_load_css' );
