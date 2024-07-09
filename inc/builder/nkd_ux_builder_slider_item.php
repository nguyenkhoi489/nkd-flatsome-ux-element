<?php
/*
* Author: Nguyên Khôi Dev
* Element: Slider Project Item
*/
add_ux_builder_shortcode('nkd_ux_builder_slider_item', array(
    'name' => __('Slider Project Item'),
    'category' => __('Nguyên Khôi Dev'),
    'template' => '',
    'thumbnail' =>  '',
    'options' => array(
        'limit' => array(
            'type' => 'scrubfield',
            'heading' => 'Số lượng Slider',
            'min' => 2,
            'max' => 4,
            'default' => 2,
            'step' => 1
        )
    )
));