<?php
/**
 * ProductBay
 *
 * @package           productbay
 * @author            WPAnchorBay
 * @copyright         2026 WPAnchorBay
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       ProductBay
 * Plugin URI:        https://wpanchorbay.com/productbay
 * Description:       A WooCommerce Product Table plugin to create, save, and manage responsive product lists and order forms.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            WPAnchorBay
 * Author URI:        https://wpanchorbay.com/
 * Text Domain:       productbay
 * Domain Path:       /languages
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.txt
 * Requires Plugins:  woocommerce
 */


// Namespace - ProductBay
namespace ProductBay;

/**
 * SECURITY: Prevent Direct File Access
 * * If this file is called directly, abort. This prevents hackers from
 * executing your PHP scripts outside of the WordPress environment.
 * * Reference: https://developer.wordpress.org/plugins/wordpress-org/detailed-plugin-guidelines/#5-trialware-is-not-permitted
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * GLOBAL CONSTANTS
 * * We prefix every constant with PRODUCTBAY_ to comply with Guideline #17.
 */
define( 'PRODUCTBAY_VERSION', '1.0.0' );
define( 'PRODUCTBAY_PATH', plugin_dir_path( __FILE__ ) );
define( 'PRODUCTBAY_URL', plugin_dir_url( __FILE__ ) );

// Autoloader (Composer)
require_once __DIR__ . '/vendor/autoload.php';

/**
 * INITIALIZATION
 * * We use a unique function name to avoid global namespace pollution.
 */
function productbay_init() {
    $plugin = new Core\Plugin();
    $plugin->run();
}
add_action( 'plugins_loaded', __NAMESPACE__ . '\\productbay_init' );