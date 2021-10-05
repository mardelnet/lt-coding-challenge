<?php
register_activation_hook( LT_PLUGIN_DIR . '/main.php', 'create_courses_programmatically'); 
 
function create_courses_programmatically(){

    $title = array(
        'Mauris cursus mattis molestie a iaculis at erat pellentesque',
        'Ut enim ad minim veniam, quis nostrud exercitation',
        'Pharetra sit amet aliquam id diam',
        'Auctor elit sed vulputate mi sit amet mauris commodo quis',
        'Commodo sed egestas egestas fringilla phasellus faucibus scelerisque',
        'Eros donec ac odio tempor orci dapibus ultrices in iaculis',
    );

    for ( $i=0; $i<6; $i++ ) {

        $new_course = array(
            'post_type'  => 'course',
            'post_status'   => 'publish',
            'post_title' => $title[$i],
            'post_author'   => 1,
            'meta_input'   => array(
                'extract' => 'Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at blanditiis et quo et molestiae.',
                'image_url' => LT_PLUGIN_BASE . '/templates/icon.png',
            ),
        );
        wp_insert_post( $new_course );  
    }
}