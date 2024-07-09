<?php
/*
* Author: Nguyên Khôi Dev
* Element: Slider Project Container
*/
function nkd_ux_builder_slider_cointainer_att_func($atts,$content = null)
{
    extract(shortcode_atts(array(), $atts));
    ob_start();
    echo $content;
    $content = ob_get_contents();
    ob_end_clean();

    return do_shortcode($content);
}

add_shortcode('nkd_ux_builder_slider_container','nkd_ux_builder_slider_cointainer_att_func');