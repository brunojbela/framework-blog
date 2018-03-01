<?php
/**
 * Template Name: With Sidebar
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

    <main id="content" class="page" tabindex="-1" role="main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
				endwhile;
			?>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </main>
    <!-- #main -->

    <?php
get_footer();
