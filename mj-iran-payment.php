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
	if ( is_page( 'paymenttest' ) ) {
        $page_template = dirname( __FILE__ ) . '/page-templates/payment-test.php';
    }
	if ( is_page( 'payment-callback' ) ) {
        $page_template = dirname( __FILE__ ) . '/page-templates/payment-callback.php';
    }
	if ( is_page( 'register' ) ) {
        $page_template = dirname( __FILE__ ) . '/page-templates/register.php';
    }
    return $page_template;
}



function mj_send_email_to_admin() {
	/**
	 * At this point, $_GET/$_POST variable are available
	 *
	 * We can do our normal processing here
	 */
	$order_id=$_POST["order_id"];
	$amount=$_POST["amount"];
	$name=$_POST["payer"];
	$phone=$_POST["phone"];
	$mail=$_POST["mail"];
	$desc=$_POST["desc"];
	$callback=$_POST["callback"];
	// Sanitize the POST field
	// Generate email content
	// Send to appropriate email

	wp_redirect(
		esc_url_raw(
			add_query_arg(
				$_POST ,
				home_url( '/payment' )
			)
		)
	);
}
add_action( 'admin_post_nopriv_Payment_form', 'mj_send_email_to_admin' );
add_action( 'admin_post_Payment_form', 'mj_send_email_to_admin');



//=================================================================

