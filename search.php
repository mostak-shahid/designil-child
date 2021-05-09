<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>



	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_archive_header(); ?>
        
        <?php get_search_form(); ?>
        
		<?php astra_content_loop(); ?>		

		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->



<?php get_footer(); ?>
