<?php

// customize wordpress logo
function my_login_logo_one() { 
?> 
<style type="text/css"> 
    body.login div#login h1 a {
        display: none;
    } 
    #nav{
        display: none;
    }
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

// Customize Wordpress
add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {

    global $user_ID;

    if ( current_user_can( 'shop_manager' ) ) {
        remove_menu_page( 'jetpack' );                    //Jetpack* 
        remove_menu_page( 'upload.php' );                 //Media
        remove_menu_page( 'edit.php?post_type=page' );    //Pages
        remove_menu_page( 'edit-comments.php' );          //Comments
        remove_menu_page( 'themes.php' );                 //Appearance
        remove_menu_page( 'plugins.php' );                //Plugins
        remove_menu_page( 'tools.php' );                  //Tools
        remove_menu_page( 'options-general.php' );        //Settings
    }
}

add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );
function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
    $wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
    $wp_admin_bar->remove_menu('view-site');        // Remove the view site link
    $wp_admin_bar->remove_menu('updates');          // Remove the updates link
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
    $wp_admin_bar->remove_menu('new-content');      // Remove the content link
    $wp_admin_bar->remove_menu('w3tc');             // If you use w3 total cache remove the performance link
}

function hide_admin_bar() { ?>
<style type="text/css">
    #wp-admin-bar-archive{ display: none; }
    #woocommerce-product-images{ display: none; }
    .woocommerce-message{ display: none; }
</style>
<?php }
add_action( 'admin_head', 'hide_admin_bar' );
add_action( 'wp_head', 'hide_admin_bar' );

// Remove Dashboard
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
function remove_dashboard_widgets() {
    global $wp_meta_boxes;

    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

}

// Remove Help Button
add_filter( 'contextual_help', 'mycontext_remove_help', 999, 3 );
function mycontext_remove_help($old_help, $screen_id, $screen){
    $screen->remove_help_tabs();
    return $old_help;
}

// Remove Screen Options
add_filter('screen_options_show_screen', 'remove_screen_options');
function remove_screen_options(){
    return false;
}

// Remove Sub menus
add_action('admin_menu', 'my_remove_sub_menus');
function my_remove_sub_menus() {
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
}

// Disable WordPress Admin Bar for all users but admins. /
show_admin_bar(false);

// Add Fancybox
add_filter( 'wp_get_attachment_link', 'ccd_fancybox_gallery_attribute', 10, 4 );
function ccd_fancybox_gallery_attribute( $content, $id ) {
    $title = get_the_title( $id );
    return str_replace('<a', '<a data-type="image" data-fancybox="gallery" title="' . esc_attr( $title ) . '" ', $content);
}
add_filter( 'the_content', 'ccd_fancybox_image_attribute' );
function ccd_fancybox_image_attribute( $content ) {
    global $post;
    $pattern = "/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
    $replace = '<a$1href=$2$3.$4$5 data-type="image" data-fancybox="image">';
    $content = preg_replace( $pattern, $replace, $content );
    return $content;
}

/* feature image */
add_theme_support( 'post-thumbnails' );


?>