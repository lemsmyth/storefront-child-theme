<?php
/**
 * ==================
 *    ENQUEQUES.PHP
 * ==================
 * @package storefront-child-theme
 */

/**
 * Assign the Storefront-Child Version to a var
 * @var $storefront_child_version
 */
  // Enqueue the parent theme stylesheet and the child theme stylesheet.
function my_theme_enqueue_styles() {

    $parent_style = 'storefront-style';
    $storefront_child_version = wp_get_theme()->get( 'Version' );
      // Enqueque parent stylesheet:
    wp_enqueue_style(
      $parent_style,
      get_template_directory_uri() . '/style.css',
      array()
    );
      // Enqueque child stylesheet:
    wp_enqueue_style(
      'storefront-child-theme-style',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style ),
      $storefront_child_version
    );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
