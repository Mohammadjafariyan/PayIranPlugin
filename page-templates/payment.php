<?php

/* Template Name: Api Template */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();


$order_id = $_POST["order_id"];
$amount = $_POST["amount"];
$name = $_POST["payer"];
$phone = $_POST["phone"];
$mail = $_POST["mail"];
$desc = $_POST["desc"];
$callback = $_POST["callback"];
$access_token = $_POST["access_token"];
$gateway_token = $_POST["gateway_token"];



if(isset($_POST["temporary"])){

	$cacheKey = $_POST["access_token"];

	$cache_data = get_transient($cacheKey);


	if ($cache_data === false) {
		// Cache miss, handle accordingly
		echo 'your token is expired please try again ';
		die();
	}

	$access_token = $cache_data;

}

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


require_once(MJ_PAYMENT_ROOT_PATH . '/client/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer ' . $access_token);
$config->setAccessToken('Bearer ' . $access_token);



$apiInstance = new Swagger\Client\Api\ItemsGatewayApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
	new GuzzleHttp\Client(),
	$config
);
$fields = array('id');// array("ID","Title"); // string[] | Control what fields are being returned in the object.
$limit = 56; // int | A limit on the number of objects that are returned.
$meta = null; //""; // string | What metadata to return in the response.
$offset = null; // 0; // int | How many items to skip when fetching data.
$sort = null; // array(""); // string[] | How to sort the returned items. `sort` is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (` - `) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a ` ? ` to sort randomly.
$filter = '{"user_created":{"_eq":"$CURRENT_USER"}}'; // string[] | Select items in collection by given conditions.
//$filter = array('user_created','$CURRENT_USER'); // string[] | Select items in collection by given conditions.
$search = null; //""; // string | Filter by items that contain the given search query in one of their fields.

try {
	$result = $apiInstance->readItemsGateway($fields, $limit, $meta, $offset, $sort, $filter, $search);
	$itemsGateways = $result->getData();
	$gatewayId = $itemsGateways[0]->getId();


	foreach ($itemsGateways as $gateway) {
		echo '<p>gateway id : ' . $gateway->getId() . '</p>';
	}


	$ItemsInvoiceApi = new Swagger\Client\Api\ItemsInvoiceApi(
	// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
	// This is optional, `GuzzleHttp\Client` will be used as default.
		new GuzzleHttp\Client(),
		$config
	);
	//$body = new \Swagger\Client\Model\ItemsInvoiceBody(); // \Swagger\Client\Model\ItemsInvoiceBody |

	$clientInfo='';
	foreach($_SERVER as $key => $value){
		$clientInfo .= '$_SERVER["'.$key.'"] = '.$value."<br />";
	}

	$clientInfo=base64_encode($clientInfo);
	/*$clientInfo = trim(preg_replace('/\s\s+/', ' ', $clientInfo));
	$clientInfo = str_replace('"', '`', $clientInfo);
	$clientInfo = str_replace("\n", "", $clientInfo);*/



	$body = '
	{
"status":"' . 'published' . '",
"Gateway":"' . $gatewayId . '",
"InvoiceType":"' . '33d5fc87-12d9-44ab-9582-8de192a9e170' . '",
"Title":"' . $name . '",
"order_id":"' . $order_id . '",
"Amount":' . $amount . ',
"phone":"' . $phone . '",
"mail":"' . $mail . '",
"desc":"' . $desc . '",
"callback":"' . $callback . '",
"gateway_token":"' . $gateway_token . '",
"access_token":"' . $access_token . '",
"requesterInfo":"' . $clientInfo . '"
}
	';

	//$body->id = '';
	//$body->sort = '';
	//$body->user_created = '';
	//$body->date_created = '';
	//$body->user_updated = '';
	//$body->date_updated = '';
	/*$body->status = '1';
	$body->gateway = $gatewayId;
	$body->invoice_type = 'درگاه';
	$body->title = $name;
	$body->order_id = $order_id;
	$body->amount = $amount;
	$body->phone = $phone;
	$body->mail = $mail;
	$body->desc = $desc;
	$body->callback = $callback;
	$body->access_token = $access_token;
	$body->gateway_token = $gateway_token;*/

	/*	$clientInfo='';
		foreach($_SERVER as $key => $value){
			$clientInfo .= '$_SERVER["'.$key.'"] = '.$value."<br />";
		}

		$body->requester_info = $clientInfo;*/
	$meta = null; // string | What metadata to return in the response.


	try {
		$result = $ItemsInvoiceApi->createItemsInvoice($body, $meta);
		print_r($result);
	} catch (Exception $e) {
		echo 'Exception when calling ItemsInvoiceApi->createItemsInvoice: ', $e->getMessage(), PHP_EOL;
	}

} catch (Exception $e) {
	echo 'Exception when calling ItemsGatewayApi->readItemsGateway: ', $e->getMessage(), PHP_EOL;
}


/*

$apiInstance = new Swagger\Client\Api\ItemsApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
	new GuzzleHttp\Client(),
	$config
);
$body = new \Swagger\Client\Model\ItemsInvoiceBody(); // \Swagger\Client\Model\ItemsInvoiceBody |

$body->gateway ='';
$body->invoice_type ='';
$body->title ='';
$body->order_id ='';
$body->amount ='';
$body->phone ='';
$body->mail ='';
$body->desc ='';
$body->callback ='';
$body->access_token ='';
$body->gateway_token ='';
$body->requester_info ='';
$meta = ""; // string | What metadata to return in the response.

try {
	$result = $apiInstance->createItemsInvoice($body, $meta);
	print_r($result);
} catch (Exception $e) {
	echo 'Exception when calling ItemsApi->createItemsInvoice: ', $e->getMessage(), PHP_EOL;
}*/


?>
<hr/> <?php

//----------------------------------------------------------------------------------------------------------------

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
$filter = '{"Name":{"_eq":"آذربایجان شرقی"}}'; // string[] | Select items in collection by given conditions.
$search = null; // string | Filter by items that contain the given search query in one of their fields.

try {
$result = $apiInstance->readItemsProvince($fields, $limit, $meta, $offset, $sort, $filter, $search);

$itemsProvinces = $result->getData();
foreach ($itemsProvinces

as  $el){

?><!--  <br/> --><?php print_r($el->getName());

}
//print_r($result->getData()[0]->getName());


} catch (Exception $e) {
	echo 'Exception when calling ItemsProvinceApi->readItemsProvince: ', $e->getMessage(), PHP_EOL;
}
?>
