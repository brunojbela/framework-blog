<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
    <main id="content" class="post" tabindex="-1" role="main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			?>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-xs-12 posts-relacionados">
                    <div class="row">
                        <?php // posts_realcionados($nPosts, $class); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- #main -->
    <?php
get_footer();
