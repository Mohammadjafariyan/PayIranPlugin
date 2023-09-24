<?php

    /* Template Name: Api Template */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();



    $order_id=$_POST["order_id"];
    $amount=$_POST["amount"];
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $mail=$_POST["mail"];
    $desc=$_POST["desc"];
    $callback=$_POST["callback"];
	$access_token=$_POST["access_token"];
	$gateway_token=$_POST["gateway_token"];



?>

<ul>
	<li>$order_id: <?php echo $order_id ?> </li>
	<li>$amount: <?php echo $amount ?> </li>
	<li>$name: <?php echo $name ?> </li>
	<li>$phone: <?php echo $phone ?> </li>
	<li>$mail: <?php echo $mail ?> </li>
	<li>$desc: <?php echo $desc ?> </li>
	<li>$callback: <?php echo $callback ?> </li>
	<li>$access_token: <?php echo $access_token ?> </li>
	<li>$gateway_token: <?php echo $gateway_token ?> </li>

</ul>


<?php


require_once( MJ_PAYMENT_ROOT_PATH . '/client/vendor/autoload.php');

/*

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
	new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\AuthLoginBody(); // \Swagger\Client\Model\AuthLoginBody |
$body->setEmail("business.jafariyan@gmail.com");
$body->setPassword("21430037");


try {
	$result = $apiInstance->login($body);
	print_r($result);
} catch (Exception $e) {
	echo 'Exception when calling AuthenticationApi->login: ', $e->getMessage(), PHP_EOL;
}*/



// Configure API key authorization: Auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer '.$access_token);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

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
$filter = null; // string[] | Select items in collection by given conditions.
$search = null; // string | Filter by items that contain the given search query in one of their fields.

try {
    $result = $apiInstance->readItemsProvince($fields, $limit, $meta, $offset, $sort, $filter, $search);

	$itemsProvinces = $result->getData();
	foreach ($itemsProvinces as  $el){

		 ?><!--  <br/> --><?php print_r($el->getName());

	}
    //print_r($result->getData()[0]->getName());



} catch (Exception $e) {
    echo 'Exception when calling ItemsProvinceApi->readItemsProvince: ', $e->getMessage(), PHP_EOL;
}
?>
