/**
 * Plugin Name: user age
 * Description: to add age to wordpress user.
 * Author: Hager
 *version:1.0
 */

 <?php
 
 function add_age_to_users(){

 global $wpdb;
 $table_name = $wpdb->prefix . "users"; 
 require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

 $wpdb->query(
   "ALTER TABLE wp_users
     ADD COLUMN `age` SMALLINT(11) UNSIGNED NOT NULL
    ");
}
register_activation_hook( __FILE__, 'add_age_to_users' );
?>


<?php

add_action( 'show_user_profile', 'add_age_field' );
add_action( 'edit_user_profile', 'add_age_field' );
add_action( "user_new_form", "add_age_field" );
function add_age_field( $user ) { 
  if(is_object($user))
        $age =esc_attr( get_user_meta( $user->ID , 'age' , true ));
    else
        $age = null;
 ?>
 <table class="form-table">
 <tr>
 <th><?php esc_html_e('Age', 'mytheme'); ?></th>
			<td>
      <input type="number" name="age" id="age" class="regular-text" 
            value="<?php echo $age; ?>" />
			</td>
    </tr>
  </table>
<?php
}

function save_custom_user_profile_fields( $user_id ) {
  if(!current_user_can('manage_options')){
    return false;}
  else{
    update_user_meta($user_id, 'age', $_POST['age']);
  }
}
add_action('user_register', 'save_custom_user_profile_fields');
add_action( 'personal_options_update', 'save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_custom_user_profile_fields' );





