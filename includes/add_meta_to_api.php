<?php
add_action( 'rest_api_init', 'add_meta_to_courses' );
 
function add_meta_to_courses() {
	register_rest_field( 'course', 'metadata', array(
        'get_callback' => function ( $data ) {
           return get_post_meta( $data['id'], '', '' );
        }
    ));
}


