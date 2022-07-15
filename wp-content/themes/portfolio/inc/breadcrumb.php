<?php

function get_breadcrumb() {


echo '<a href="'.esc_url(get_permalink( get_page_by_title( 'Works' ) ) ).'" rel="nofollow">Works</a>';

    if (is_single()) {
        echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
        the_title();
    }
}
