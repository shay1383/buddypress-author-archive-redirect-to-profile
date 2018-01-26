<?php
/*
Plugin Name: BuddyPress Author Redirect to Profile
Description: Disables author archives and redirect to BuddyPress profile instead.
Version: 1.0
Author: Shay Seferstein <shay1383@gmail.com>
Author URI: https://shay.seferstein.com
Plugin URI: https://github.com/shay1383/buddypress-author-redirect-to-profile
*/

function buddydev_author_redirect_to_profile() {
 
    if ( is_author() && function_exists( 'bp_core_redirect' ) ) {
 
        $author_id = get_queried_object_id();
        bp_core_redirect( bp_core_get_user_domain( $author_id ) );
    }
}
add_action( 'template_redirect', 'buddydev_author_redirect_to_profile' );
