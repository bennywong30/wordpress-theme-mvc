<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<?php get_template_part( 'views/404', 'view' ); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
