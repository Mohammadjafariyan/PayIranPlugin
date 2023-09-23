<?php
/**
 * Plugin Name:     MJ Iran Payment
 * Plugin URI:      https://plugins.wp-cli.org/demo-plugin
 * Description:     MJ Iran Payment
 * Author:          Mohammad Jafariyan
 * Author URI:      https://wp-cli.org
 * Text Domain:     mj-iran-payment
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Mj_Iran_Payment
 */

// Your code starts here.

define( 'MJ_PAYMENT_ROOT_PATH', __DIR__ );

require('post-types/gateway.php');
require('fields/gateway-fields.php');
require('api/create-new-order.php');



add_filter( 'page_template', 'mj_page_payment' );
function mj_page_payment( $page_template )
{
    if ( is_page( 'Payment' ) ) {
        $page_template = dirname( __FILE__ ) . '/page-templates/payment.php';
    }
    return $page_template;
}
