<?php
/**
 * Template Name: With Sidebar
 *
 * The template for displaying pages with sidebar.
 *
 * @package Race Chrome
 * @since 2.2.0
 */

get_header();
?>

	<main id="content" class="<?php echo race_chrome_classes_page_sidebar(); ?>" tabindex="-1" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
