<?php if ( function_exists('yoast_breadcrumb') ) {
    echo '<section class="breadcrumb">
            <div class="container">
                <div class="row">'.
                    yoast_breadcrumb('<p id="breadcrumbs">','</p>').
                '</div>
            </div>
        </section>';
}?>
