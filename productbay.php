<?php
/**
 * Plugin Name: ProductBay
 * Description: Advanced WooCommerce Product Tables with React Admin.
 * Version: 1.0.0
 * Plugin URI: https://wpanchorbay.com/
 * Author: WPAnchorBay
 * Author URI: https://wpanchorbay.com/
 * Text Domain: productbay
 * Domain Path: /languages
 */

namespace ProductBay;

if ( ! defined( 'ABSPATH' ) ) exit;

// Constants
define( 'PRODUCTBAY_VERSION', '1.0.0' );
define( 'PRODUCTBAY_PATH', plugin_dir_path( __FILE__ ) );
define( 'PRODUCTBAY_URL', plugin_dir_url( __FILE__ ) );


// Autoloader (Composer)
require_once __DIR__ . '/vendor/autoload.php';

// Boot Plugin
function run_productbay() {
    $plugin = new Core\Plugin();
    $plugin->run();
}
run_productbay();