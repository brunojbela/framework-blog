<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
    <footer id="footer" role="contentinfo">
        <div class="container">
            <div class="col-xs-12 col-sm-4">
                <?php //listar_posts($nPosts, $postType, $listarPor, $class); ?>
            </div>
            <div class="col-xs-12 col-sm-4">
                <?php //listar_categorias($class); ?>
            </div>
            <div class="col-xs-12 col-sm-4">
                <?php //menu_personalizado($menu); ?>
            </div>
        </div>
        <!-- .container -->
        <div class="container">
            <div class="row">
                <p class="col-xs-12 col-sm-10">&copy;
                    <?php echo 'Copyright'; ?>
                    <?php echo date( 'Y' ); ?>
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </p>
                <a href="http://www.agenciamestre.com/" target="_blank" title="Agência Mestre - Marketing Digital: SEO, Links Patrocinados, Facebook Ads e outros" rel="nofollow">
                    <figure class="col-xs-12 col-sm-2">
                        <img src="<?php echo CONTENT_URI . '/assets/images/logomestre.png'; ?>" alt="Agência Mestre - Marketing Digital: SEO, Links Patrocinados, Facebook Ads e outros" title="Agência Mestre - Marketing Digital: SEO, Links Patrocinados, Facebook Ads e outros">
                    </figure>
                </a>
            </div>
        </div>
    </footer>
    <!-- #footer -->
    <?php wp_footer(); ?>
    </body>

    </html>
