/*
ចូលទៅក្នុង Template( Theme )ណាមួយ ហើយស្វែងរកមើល File 'function.php' បន្ទាប់មក បន្ទាប់មកបញ្ចូល Code ខាងក្រោមទៅក្នុង File Function.php នោះ
នៅខាងក្រោមគេបំផុត 
eg: /wp-content/themes/Newpaper9/function.php

*/
function remove_menus(){
// get current login user's role
$roles = wp_get_current_user()->roles;
 
// test role
if( !in_array('editor',$roles)){
return;
}
 
//remove menu from site backend.
remove_menu_page( 'index.php' ); //Dashboard
remove_menu_page( 'edit.php' ); //Posts
remove_menu_page( 'upload.php' ); //Media
remove_menu_page( 'edit-comments.php' ); //Comments
remove_menu_page( 'themes.php' ); //Appearance
remove_menu_page( 'plugins.php' ); //Plugins
remove_menu_page( 'users.php' ); //Users
remove_menu_page( 'tools.php' ); //Tools
remove_menu_page( 'options-general.php' ); //Settings
remove_menu_page( 'edit.php?post_type=page' ); //Pages
remove_menu_page('edit.php?post_type=testimonial'); // Custom post type 1
remove_menu_page('edit.php?post_type=homeslider'); // Custom post type 2
}
add_action( 'admin_menu', 'remove_menus' , 100 );
