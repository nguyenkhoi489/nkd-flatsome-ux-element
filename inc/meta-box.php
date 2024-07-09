<?php

function plugin_loaded_meta_box_with_project()
{
    add_meta_box(
        'Location',
        'Location',
        'func_callback_location',
        'project'
    );
    add_meta_box(
        'Year',
        'Year',
        'func_callback_year',
        'project'
    );
    add_meta_box(
        'Acreage',
        'Acreage (M2)',
        'func_callback_acreage',
        'project'
    );

    add_meta_box(
        'Gallery',
        'Gallery',
        'func_callback_gallery',
        'project'
    );
}

add_action('add_meta_boxes', 'plugin_loaded_meta_box_with_project');


require_once __DIR__ . '/callback/func_callback_acreage.php';
require_once __DIR__ . '/callback/func_callback_location.php';
require_once __DIR__ . '/callback/func_callback_year.php';
require_once __DIR__ . '/callback/func_callback_gallery.php';

