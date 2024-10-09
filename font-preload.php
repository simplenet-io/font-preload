<?php
/**
 * Plugin Name: Font Preload
 * Plugin URI:  https://github.com/simplenet-io/font-preload/
 * Description: Preloads a custom font to improve website performance.
 * Version: 1.0
 * Author: Andrei Chira
 * Author URI: https://simplenet.io/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

// Define the font URL (replace with your actual font URL)
$font_url = 'https://simplenet.io/wp-content/themes/henry/assets/fonts/albert-sans/AlbertSans-VariableFont_wght.woff2';

/**
 * Add font preload to the header
 */
function add_font_preload() {
  global $font_url;
  echo '<link rel="preload" href="' . esc_url($font_url) . '" as="font" type="font/woff2" crossorigin>';
}

add_action('wp_head', 'add_font_preload');
