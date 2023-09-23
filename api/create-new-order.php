<?php

//http://localhost/payiran/wp-json/pay/v1/NewOrder/1
add_action( 'rest_api_init', function () {
  register_rest_route( 'pay/v1', '/NewOrder', array(
    'methods' => 'POST',
    'callback' => 'mj_create_new_order',
    'args' => array(
        'order_id' => array(
            'validate_callback' => function($param, $request, $key) {
              return is_numeric( $param );
            }
          ),
          'amount' => array(
            'validate_callback' => function($param, $request, $key) {
              return is_numeric( $param );
            }
          )
          
  ) ) );
} );



function mj_create_new_order(WP_REST_Request $request  ) {



    $parameters = $request->get_json_params();
    //return $request->get_header("X-API-KEY");
    //return $parameters;


    $data =  array(
        "id"=> "d2e353189823079e1e4181772cff5292",
        "link"=> "https://idpay.ir/p/ws-sandbox/d2e353189823079e1e4181772cff5292"
    );  //array( 'some', 'response', 'data' );



    return rest_ensure_response($data);;

    /*

{
  "error_code": 32,
  "error_message": "شماره سفارش `order_id` نباید خالی باشد."
}
    */

  }
