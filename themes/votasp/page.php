<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content" tabindex="-1" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					$content_query = is_front_page() ? 'inicial' : get_post_type();
					$content_query = apply_filters( 'default_content_template', $content_query );
					get_template_part( 'content', $content_query );

				endwhile;
			?>

	</main><!-- #main -->

<?php
get_footer();
