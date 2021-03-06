<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );


require_once('theme-init/plugin-update-checker.php');
$themeInit = Puc_v4_Factory::buildUpdateChecker(
	'https://raw.githubusercontent.com/mostak-shahid/update/master/designil-child.json',
	__FILE__,
	'designil-child'
);
/**
 * Enqueue styles
 */
function child_enqueue_styles() {
    wp_enqueue_script('jquery');
    wp_enqueue_style( 'fancybox', get_stylesheet_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.css' );
    wp_enqueue_script('fancybox', get_stylesheet_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.js', 'jquery');
    
    wp_enqueue_style( 'jarallax', get_stylesheet_directory_uri() . '/plugins/jarallax/jarallax.css' );
    wp_enqueue_script('jarallax', get_stylesheet_directory_uri() . '/plugins/jarallax/jarallax.js', 'jquery');
    wp_enqueue_script('jarallax-video', get_stylesheet_directory_uri() . '/plugins/jarallax/jarallax-video.js', 'jquery');
    
    //wp_enqueue_script('numscroller', get_stylesheet_directory_uri() . '/plugins/numscroller.js', 'jquery');
    wp_enqueue_script('jquery.waypoints.min', get_stylesheet_directory_uri() . '/plugins/jquery.counterup/jquery.waypoints.min.js', 'jquery');
    wp_enqueue_script('jquery.counterup', get_stylesheet_directory_uri() . '/plugins/jquery.counterup/jquery.counterup.js', 'jquery');
    
    wp_enqueue_style( 'font-awesome.min', get_stylesheet_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.min.css' );
    
	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/script.js', 'jquery');

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
require_once 'aq_resizer.php';
require_once 'breadcrumb.php';
//require_once 'astra-custom.php';
require_once 'hooks.php';
require_once 'shortcodes.php';
require_once 'carbon-fields.php';
//require_once 'widgets.php';


function mos_get_posts($post_type = 'post',$posts_per_page='-1', $post_status = array('publish')){
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $posts_per_page,
        'post_status' => $post_status,
    );
    $output = [];
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) { $query->the_post();
            $output[get_the_ID()] = get_the_title();
        }
    }
    wp_reset_postdata();    
    return $output;
}

function mos_get_terms ($taxonomy = 'category', $return='all') {
    global $wpdb;
    $output = array();
    $all_taxonomies = $wpdb->get_results( "SELECT {$wpdb->prefix}term_taxonomy.term_id, {$wpdb->prefix}term_taxonomy.taxonomy, {$wpdb->prefix}terms.name, {$wpdb->prefix}terms.slug, {$wpdb->prefix}term_taxonomy.description, {$wpdb->prefix}term_taxonomy.parent, {$wpdb->prefix}term_taxonomy.count, {$wpdb->prefix}terms.term_group FROM {$wpdb->prefix}term_taxonomy INNER JOIN {$wpdb->prefix}terms ON {$wpdb->prefix}term_taxonomy.term_id={$wpdb->prefix}terms.term_id", ARRAY_A);
    if ($return=='all'){
        foreach ($all_taxonomies as $key => $value) {
            if ($value["taxonomy"] == $taxonomy) {
                $output[] = $value;
            }
        }
    } else {        
        foreach ($all_taxonomies as $key => $value) {
            $output[$value['term_id']] = $value['name'];
        }
    }
    return $output;
}
//var_dump(mos_get_terms ('category', 'small'));