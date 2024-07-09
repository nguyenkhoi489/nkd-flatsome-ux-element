<?php
/*
* Author: Nguyên Khôi Dev
* Element: Slider Project Item
*/

function nkd_ux_builder_slider_item_att_func($atts)
{
    extract(shortcode_atts(array(
        'limit' => 2
    ),$atts));
    ob_start();
    
    return ob_get_clean();
}
add_shortcode('nkd_ux_builder_slider_item','nkd_ux_builder_slider_item_att_func');