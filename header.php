<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?>
    <!DOCTYPE html>
    <html class="no-js" <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( ! get_option( 'site_icon' ) ) : ?>
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <a id="skippy" class="sr-only sr-only-focusable" href="#content">
            <div class="container">
                <span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
            </div>
        </a>
        <header id="header" role="banner">
            <div class="container">
                <div class="row">
                    <div class="page-header hidden-xs col-xs-12">
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
						</a>
                        </div>
                    </div>
                    <!-- .page-header-->
                    <div id="main-navigation" class="navbar navbar-default col-xs-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                        </div>
                        <nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
                            <?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
                                <form method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
                                    <label for="navbar-search" class="sr-only">
							         <?php _e( 'Search:', 'odin' ); ?>
						        </label>
                                    <div class="form-group">
                                        <input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="navbar-search" />
                                    </div>
                                    <button type="submit" class="btn btn-default"><?php _e( 'Search', 'odin' ); ?></button>
                                </form>
                        </nav>
                        <!-- .navbar-collapse -->
                    </div>
                    <!-- #main-navigation-->
                </div>
            </div>
            <!-- .container-->
        </header>
        <!-- #header -->
        <?php if(!is_home() || !is_front_page()): ?>
        <section class="breadcrumb">
            <div class="container">
                <div class="row">
                    <?php get_template_part('core/mestre/breadcrumb' ); ?>
                </div>
            </div>
        </section>
        <?php endif; ?>
