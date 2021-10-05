<?php 
add_action( 'admin_init', 'spp_plugin_has_parents' );

function spp_plugin_has_parents() {

    if ( is_admin() && current_user_can( 'activate_plugins') && !is_plugin_active( 'advanced-custom-fields/acf.php') ) {

        add_action( 'admin_notices', 'spp_plugin_notice' );
    
        deactivate_plugins( LT_PLUGIN_DIR . '/main.php' );
    
        if ( isset( $_GET['activate'] ) ) {
            unset( $_GET['activate'] );
        } 
    }
}
function spp_plugin_notice() { ?>
    <div class="error">
        <p>Sorry, Learning Tapestry Coding Challenge requires <a target='_blank' href='https://wordpress.org/plugins/advanced-custom-fields/'>Advanced Custom Fields</a> to be installed and activated.</p>
    </div>
<?php }