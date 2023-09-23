<?php

if( function_exists('acf_add_local_field_group') ):

	$checkbox_is_default=	array (
		'key' => __( 'Gateways_is_default', 'mj-iran-payment' ),
		'name' => __( 'Gateways_is_default', 'mj-iran-payment' ),
		'type'=>'checkbox',
		/* (array) Array of choices where the key ('red') is used as value and the value ('Red') is used as label */
		'choices' => array(
			'is_default'   => 'درگاه پیش فرض',
		),
		/* (string) Specify the layout of the checkbox inputs. Defaults to 'vertical'.
		Choices of 'vertical' or 'horizontal' */
		'layout' => 'vertical',

		/* (bool) Whether to allow custom options to be added by the user. Default false. */
		'allow_custom' => false,

		/* (bool) Whether to allow custom options to be saved to the field choices. Default false. */
		'save_custom' => false,

		/* (bool) Adds a "Toggle all" checkbox to the list. Default false. */
		'toggle' => false,

		/* (string) Specify how the value is formatted when loaded. Default 'value'.
		Choices of 'value', 'label' or 'array' */
		'return_format' => 'value',
	);
	$textarea_description =	array (
		'key' => __( 'Gateway_description', 'mj-iran-payment' ),
		'label' => __( 'توضیحات درگاه', 'mj-iran-payment' ),
		'name' => __( 'Gateway_description', 'mj-iran-payment' ),
		/* ... Insert generic settings here ... */

		/* (string) Appears within the input. Defaults to '' */
		'type' => 'textarea',
		'placeholder' => '',

		/* (string) Restricts the character limit. Defaults to '' */
		'maxlength' => '',

		/* (int) Restricts the number of rows and height. Defaults to '' */
		'rows' => '',

		/* (new_lines) Decides how to render new lines. Detauls to 'wpautop'.
		Choices of 'wpautop' (Automatically add paragraphs), 'br' (Automatically add <br>) or '' (No Formatting) */
		'new_lines' => '',

		/* (bool) Makes the input readonly. Defaults to 0 */
		'readonly' => 0,

		/* (bool) Makes the input disabled. Defaults to 0 */
		'disabled' => 0,

	);
$gateway_account=	array (
	'key' => 'group_1',
	'title' => __( 'اطلاعات درگاه', 'mj-iran-payment' ),
	'fields' => array (
		array (
			'key' => __( 'Gateways_account', 'mj-iran-payment' ),
			'label' => __( 'حساب بانکی متصل به این درگاه (ضروری)', 'mj-iran-payment' ),
			'name' => __( 'Gateways_account', 'mj-iran-payment' ),
			/* (array) Array of choices where the key ('red') is used as value and the value ('Red') is used as label */
			'choices' => array(
				'red'   => 'Red'
			),

			/* (bool) Allow a null (blank) value to be selected. Defaults to 0 */
			'allow_null' => 0,

			/* (bool) Allow mulitple choices to be selected. Defaults to 0 */
			'multiple' => 0,

			/* (bool) Use the select2 interfacte. Defaults to 0 */
			'ui' => 0,

			/* (bool) Load choices via AJAX. The ui setting must also be true for this to work. Defaults to 0 */
			'ajax' => 0,

			/* (string) Appears within the select2 input. Defaults to '' */
			'type' => 'select',
			'prefix' => '',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		) ,
		$checkbox_is_default,
		$textarea_description
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'gateway',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'top',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
);

	acf_add_local_field_group(
		$gateway_account,

	);







endif;
