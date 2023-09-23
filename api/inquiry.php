<?php

//http://localhost/payiran/wp-json/pay/v1/NewOrder/1
add_action( 'rest_api_init', function () {
  register_rest_route( 'pay/v1', '/Inquiry', array(
    'methods' => 'POST',
    'callback' => 'mj_Inquiry',
    'args' => array(
        'id' => array(
            'validate_callback' => function($param, $request, $key) {
              return $param ;
            }
          ),
          'order_id' => array(
            'validate_callback' => function($param, $request, $key) {
              return $param;
            }
          )
          
  ) ) );
} );



function mj_Inquiry(WP_REST_Request $request  ) {



    $parameters = $request->get_json_params();
    //return $request->get_header("X-API-KEY");
    //return $parameters;


    $data = array (
      'status' => '100',
      'track_id' => '10012',
      'id' => 'd2e353189823079e1e4181772cff5292',
      'order_id' => '101',
      'amount' => '10000',
      'wage' => 
      array (
        'by' => 'payee',
        'type' => 'percent',
        'amount' => '2500',
      ),
      'date' => '1546288200',
      'payer' => 
      array (
        'name' => 'قاسم رادمان',
        'phone' => '09382198592',
        'mail' => 'my@site.com',
        'desc' => 'توضیحات پرداخت کننده',
      ),
      'payment' => 
      array (
        'track_id' => '888001',
        'amount' => '10000',
        'card_no' => '123456******1234',
        'hashed_card_no' => 'E59FA6241C94B8836E3D03120DF33E80FD988888BBA0A122240C2E7D23B48295',
        'date' => '1546288500',
      ),
      'verify' => 
      array (
        'date' => '1546288800',
      ),
      'settlement' => 
      array (
        'track_id' => '12345678900',
        'amount' => '7500',
        'date' => '1546398000',
      ),
    )  //array( 'some', 'response', 'data' );



    return rest_ensure_response($data);;

    /*
{
  "error_code": 32,
  "error_message": "شماره سفارش `order_id` نباید خالی باشد."
}
    */

  }
