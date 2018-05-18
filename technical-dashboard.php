<?php
/**
 * Plugin Name: Technical Dashboard
 * Description:
 * Author: Benjamin Heller
 * Author URI: https://benjaminheller.net
 */

Namespace TechnicalDashboard;

use TechnicalDashboard\Admin\Admin;

require_once plugin_dir_path(__FILE__ ) . '/includes/class-admin.php';

$admin = new Admin();
$admin->run();
