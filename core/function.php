<?php

if (!function_exists('get_shortcode_path')) {
    function get_shortcode_path($fileName = '')
    {
        if (file_exists(SHORTCODE_PATH . $fileName . '.php')) {
            return SHORTCODE_PATH. $fileName . '.php';
        }
        return false;
    }
}
if (!function_exists('get_builder_path')) {
    function get_builder_path($fileName = '')
    {
        if (file_exists(BUILDER_PATH . $fileName . '.php')) {
            return BUILDER_PATH . $fileName . '.php';
        }
        return false;
    }
}
