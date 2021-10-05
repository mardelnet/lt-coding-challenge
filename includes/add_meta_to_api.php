<?php
// This function adds ACF metadata to the courses API, for example, the feautured image or the extract
add_action( 'rest_api_init', 'add_meta_to_courses' );
 
function add_meta_to_courses() {
	register_rest_field( 'course', 'metadata', array(
        'get_callback' => function ( $data ) {
           return get_post_meta( $data['id'], '', '' );
        }
    ));
}


