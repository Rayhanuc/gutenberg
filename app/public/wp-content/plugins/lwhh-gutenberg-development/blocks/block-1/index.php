<?php

defined ('ABSPATH') || exit;

/* Register block 1
*/




// add_action( 'enqueue_block_assets', 'lwhhgd_register_block_1', 10, 1 );

function lwhhgd_register_block_1() {
    wp_register_script(
        'lwhhgd-block-1',
        plugins_url('index-es5.js', __FILE__),
        array('wp-blocks','wp-i18n', 'wp-element' )
    );

    register_block_type(
    	'lwhhgd/block-1', 
    	array('editor_script' => 'lwhhgd-block-1')
    );

   /* wp_enqueue_script(
		'lwhhgd-block-1',
        plugins_url('index-es5.js', __FILE__),
        array('wp-blocks','wp-i18n', 'wp-element' )
	);*/

}

add_action('init', 'lwhhgd_register_block_1');