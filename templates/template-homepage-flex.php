<?php
/**
 * Template Name: Homepage Flex Template
 * Template Type: ACF Flexible Content Layout
 *
 * @package WordPress
 * @subpackage Open_Web_Office
 * @since Open Web Office 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', 'global-flex' );
		}
	}

	?>

</main><!-- #site-content -->
<?php get_footer(); ?>