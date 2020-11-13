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
     ADD COLUMN `age` SMALLINT(11)  NOT NULL
    ");
}
register_activation_hook( __FILE__, 'add_age_to_users' );
?>

}
