<?php

    /* Template Name: Api Template */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


if(!isset($_GET["order_id"])) {
	echo 'order_id is not set ';
	die();
};
if(!isset($_GET["amount"])) {
	echo 'amount is not set ';
	die();
};
/*if(!isset($_GET["payer"]) ){
	echo 'name is not set ';
	die();
};
if(!isset($_GET["phone"]) ){
	echo 'phone is not set ';
	die();
};
if(!isset($_GET["mail"]) ){
	echo 'mail is not set ';
	die();
};*/
if(!isset($_GET["desc"])) {
	echo 'desc is not set ';
	die();
};
if(!isset($_GET["callback"])) {
	echo 'callback is not set ';
	die();
};
if(!isset($_GET["access_token"]) ){
	echo 'access_token is not set ';
	die();
};

if(!isset($_GET["gateway_token"]) ){
	echo 'gateway_token is not set ';
	die();
};

function get_transient_timeout( $transient ) {
	global $wpdb;
	$transient_timeout = $wpdb->get_col( "
      SELECT option_value
      FROM $wpdb->options
      WHERE option_name
      LIKE '%_transient_timeout_$transient%'
    " );
	return $transient_timeout[0];
}


// Retrieve the encrypted datetime from the cache
$cacheKey = $_GET["access_token"];
$cacheGroup = 'bulupay_cache_group';

//$cache_data = wp_cache_get($cacheKey, $cacheGroup);
$cache_data = get_transient($cacheKey);

if ($cache_data === false) {
	// Cache miss, handle accordingly
	echo 'your token is expired please try again ';
	die();
}

    $order_id=$_GET["order_id"];
    $amount=$_GET["amount"];
    $name=$_GET["payer"];
    $phone=$_GET["phone"];
    $mail=$_GET["mail"];
    $desc=$_GET["desc"];
    $callback=$_GET["callback"];
    $gateway_token=$_GET["gateway_token"];
	//$access_token=$cache_data;
	$access_token=$_GET["access_token"];


?>


<!--<form method="post" target="_blank" action="<?php /*echo esc_url( admin_url('admin-post.php') ); */?>" class="form form-inline" style="display: table-caption">
-->	<form method="post" target="_blank" action="/payiran/payment" class="form form-inline" style="display: table-caption">

	<label>order_id <input value="<?php echo $order_id ?>" class="form-control" name="order_id" /></label>
	<label>amount <input value="<?php echo $amount ?>" class="form-control" name="amount" /></label>
	<label>name <input value="<?php echo $name ?>" class="form-control" name="payer" /></label>
	<label>phone <input value="<?php echo $phone ?>" class="form-control" name="phone" /></label>
	<label>mail <input value="<?php echo $mail ?>" class="form-control" name="mail" /></label>
	<label>desc <input value="<?php echo $desc ?>" class="form-control" name="desc" /></label>
	<label>callback <input value="<?php echo $callback ?>" class="form-control" name="callback" /></label>
	<label>access_token <input value="<?php echo $access_token ?>" class="form-control" name="access_token" /></label>
<!--	<label>access_token <input value="8D1Fec4cAKD7N1ftmoSqa1YmgBw1IhET" class="form-control" name="access_token" /></label>
-->	<label>gateway token <input value="<?php echo $gateway_token ?>" class="form-control" name="gateway_token" /></label>
	<input type="hidden" name="action" value="Payment_form">
	<input type="hidden" name="temporary" value="true">


	<input class="form-control"  type="submit"/>

</form>
