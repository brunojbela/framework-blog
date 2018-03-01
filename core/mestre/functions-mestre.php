<?php 
    function listar_posts($nPosts, $postType, $listarPor, $class) {
        if($listarPor != 'views'): $order = "'orderby'=>".$listarPor; else: $order = "v_sortby=views"; endif;
        $args = array (
            'showposts' => $nPosts,
            $order,
            'order' => 'ASC',
            'exclude' => $post->ID,
            'post_type' => $postType
        );
        $lposts = new wp_query($args);
        echo '<ul class="'. $class .'">';
        while($lposts->have_posts()): $lposts->the_post();
            echo '<li>';
            echo '<figure class="col-xs-12 col-sm-3">';
            echo '<a href="'.echo esc_url( get_permalink() ).' ">';
            echo  get_the_post_thumbnail( $post->ID, 'blog-thumbnail' );
            echo  '</a></figure>';
            the_title( '<span class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></spa>' );
            echo '</li>';
        endwhile;
        echo '</ul>'
    }

    function listar_categorias($class) {
        echo '<ul class="'. $class .'">';
        $args=array(
            'orderby' => 'name',
            'order' => 'ASC',
            'exclude' => array( 1)
        );
        $categories=get_categories($args);
        foreach($categories as $category) {
            echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "%s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';
        }
        echo '</ul>';                          
}

    function menu_personalizado($menu) {
        register_nav_menus(
            array(
				$menu => __( $menu, 'odin' )
			)
		);
        wp_nav_menu(
            array(
                'theme_location' => $menu,
                'depth'          => 2,
                'container'      => false,
                'menu_class'     => 'nav footer-nav',
                'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
                'walker'         => new Odin_Bootstrap_Nav_Walker()
            )
        );
    }

    function posts_realcionados($nPosts, $class) {
        $categories = get_the_category();
        $cat = $categories['0']->cat_ID;
        
        $query_relacionados = new WP_Query(array( 
        'cat' => $cat,
        'posts_per_page' => $nPosts, 
        'post__not_in' => array( $post->ID ),
        ));

        while($query_relacionados->have_posts()):$query_relacionados->the_post();        
        
        echo '<div class="'.$class.'">';
        echo '<figure><a href="'.the_permalink().'"><img src="'.get_the_post_thumbnail_url().'" alt="'.the_title().'" title="'.the_title().'"></a></figure>';
        echo '<h3><a href="'.the_permalink().'">'.the_title().'</a></h3>';
        echo '</div>';
        endwhile; wp_reset_query();
    }
