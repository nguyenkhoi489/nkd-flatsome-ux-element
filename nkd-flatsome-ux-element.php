<?php

/**
 * Plugin Name: Flatsome Addon Element
 * Plugin URI: /plugin/nkd-flatsome-ux-element
 * Update URI: 
 * Description:  Add-on for Flatsome Element
 * Version: 1.0
 * Requires at least: 5.5
 * Requires PHP: 7.4
 * Author: Thái Nguyên Khôi
 * Author URI: https://www.facebook.com/nguyenkhoi489/
 * License: GPL
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: nkd-flatsome-ux-element
 */

include_once(ABSPATH . 'wp-admin/includes/plugin.php');

//details
define('Plugin_Path', plugin_dir_path(__FILE__));
define('Plugin_URI', plugin_dir_url(__FILE__));
define('SHORTCODE_PATH', plugin_dir_path(__FILE__ . '/inc/shortcode/'));
define('BUILDER_PATH', plugin_dir_path(__FILE__ . '/inc/shortcode/'));
define('Plugin_VERSION', '1.0');
define('Plugin_ITEM_NAME', 'Flatsome Addon Element');



//Load FUNC

require_once __DIR__ . '/core/function.php';

/*
* Active Plugin
*/

function plugin_active_loader()
{
    add_action('ux_builder_setup', function () {
        require_once __DIR__ . '/shortcodes.php';
    });
    add_action('after_setup_theme', function() {
        require_once __DIR__ . '/builder.php';
    });
    require_once __DIR__ . '/inc/init.php';
    require_once __DIR__ . '/inc/meta-box.php';

}
add_action('plugin_loaded','plugin_active_loader');