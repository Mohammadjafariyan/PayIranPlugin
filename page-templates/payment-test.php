<?php

    /* Template Name: Api Template */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;




/*
    $order_id=$_POST["order_id"];
    $amount=$_POST["amount"];
    $name=$_POST["payer"];
    $phone=$_POST["phone"];
    $mail=$_POST["mail"];
    $desc=$_POST["desc"];
    $callback=$_POST["callback"];*/



?>


<!--<form method="post" target="_blank" action="<?php /*echo esc_url( admin_url('admin-post.php') ); */?>" class="form form-inline" style="display: table-caption">
-->	<form method="post" target="_blank" action="/payiran/payment" class="form form-inline" style="display: table-caption">


	<label>order_id <input value="<?php echo rand() ?>" class="form-control" name="order_id" /></label>
	<label>amount <input value="<?php echo rand(10000000,180000000) ?>" class="form-control" name="amount" /></label>
	<label>name <input value="سعید اسد زاده" class="form-control" name="payer" /></label>
	<label>phone <input value="+989010409293" class="form-control" name="phone" /></label>
	<label>mail <input value="said.asdZade23@gmail.com" class="form-control" name="mail" /></label>
	<label>desc <input value="" class="form-control" name="desc" /></label>
	<label>callback <input value="http://localhost/payiran/payment-callback" class="form-control" name="callback" /></label>
	<label>access_token <input value="8D1Fec4cAKD7N1ftmoSqa1YmgBw1IhET" class="form-control" name="access_token" /></label>
	<label>gateway token <input value="86cf1aec-9741-45c3-b7ce-408e0b2b6fc7" class="form-control" name="gateway_token" /></label>
	<input type="hidden" name="action" value="Payment_form">


	<input class="form-control"  type="submit"/>

</form>
