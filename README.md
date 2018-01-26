BuddyPress Author Redirect to Profile

Credit: Brajesh Singh https://buddydev.com/

Disables author archives and redirects to BuddyPress profile instead

If you are familiar with functions.php I suggest to use the following code instead of using the plugin:
```
function buddydev_author_redirect_to_profile() {
 
    if ( is_author() && function_exists( 'bp_core_redirect' ) ) {
 
        $author_id = get_queried_object_id();
        bp_core_redirect( bp_core_get_user_domain( $author_id ) );
    }
}
add_action( 'template_redirect', 'buddydev_author_redirect_to_profile' );
```
If you are not familiar with functions.php, simply go to your WordPress Dashboard >> Plugins >> Add New >> Upload and then upload, install and activate the .zip file.
