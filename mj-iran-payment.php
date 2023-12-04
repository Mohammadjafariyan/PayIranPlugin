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

// Include the necessary WordPress functions
require_once ABSPATH . WPINC . '/pluggable.php';


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
	if ( is_page( 'order' ) ) {
        $page_template = dirname( __FILE__ ) . '/page-templates/order.php';
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



//=================================================================REST API


require_once(MJ_PAYMENT_ROOT_PATH . '/client/vendor/autoload.php');




add_action( 'rest_api_init', function () {
	register_rest_route( 'bulupay_gen', '/token', array(
		'methods' => 'POST',
		'callback' => 'bulupay_gen_token_func',
		'args' => array(
			'bulupay_api_key' => array(
				'type'              => 'string',
				'required'          => true,
				'validate_callback' => function($param, $request, $key) {
					if($key == "bulupay_api_key")
					{

						$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer ' . $param);
						$config->setAccessToken('Bearer ' . $param);
						$apiInstance = new Swagger\Client\Api\ItemsProvinceApi(
						// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
						// This is optional, `GuzzleHttp\Client` will be used as default.
							new GuzzleHttp\Client(),
							$config
						);

						$fields = array("Name"); // string[] | Control what fields are being returned in the object.
						$limit = 56; // int | A limit on the number of objects that are returned.
						$meta = null; // string | What metadata to return in the response.
						$offset = 0; // int | How many items to skip when fetching data.
						$sort = null; // string[] | How to sort the returned items. `sort` is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (` - `) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a ` ? ` to sort randomly.
						$filter = '{"Name":{"_eq":"آذربایجان شرقی"}}'; // string[] | Select items in collection by given conditions.
						$search = null; // string | Filter by items that contain the given search query in one of their fields.

						try {
						$result = $apiInstance->readItemsProvince($fields, $limit, $meta, $offset, $sort, $filter, $search);

						$itemsProvinces = $result->getData();
						return true;

						} catch (Exception $e) {
						return  false;
						}
					}
				}
			),
		),
	) );
} );
function bulupay_gen_token_func( WP_REST_Request $request )
{
	// You can access parameters via direct array access on the object:
	//$param = $request['some_param'];

	// Or via the helper method:
//	$param = $request->get_param( 'some_param' );

	// You can get the combined, merged set of parameters:
	//$parameters = $request->get_params();

	// The individual sets of parameters are also available, if needed:
	//$parameters = $request->get_url_params();
	//$parameters = $request->get_query_params();
	$parameters = $request->get_body_params();
	//$parameters = $request->get_json_params();
	//$parameters = $request->get_default_params();

	// Uploads aren't merged in, but can be accessed separately:
	//$parameters = $request->get_file_params();




// Set the length of the random string
	$length = 12; // Adjust the length as needed

// Generate a random string using wp_generate_password
	$randomString = wp_generate_password($length, false);


// Sign the datetime string using SHA-256
	$signature = $parameters['bulupay_api_key'] ;


// Set the encrypted datetime in the cache for a specified duration (e.g., 1 hour)
	$cacheKey = hash('sha256', $randomString);
	$cacheGroup = 'bulupay_cache_group';
	$expiration = 60; // 3600 seconds = 1 hour

	wp_cache_set($cacheKey, $signature, $cacheGroup, $expiration);


	$data = array( 'temp_api_key'=> $cacheKey );

// Create the response object
	$response = new WP_REST_Response( $data );

// Add a custom status code
	$response->set_status( 201 );

// Add a custom header
	//$response->header( 'Location', 'http://example.com/' );



	/*if ( empty( $posts ) ) {
		return new WP_Error( 'no_author', 'Invalid author', array( 'status' => 404 ) );
	}*/
	return $response;

}


//=================================================================

