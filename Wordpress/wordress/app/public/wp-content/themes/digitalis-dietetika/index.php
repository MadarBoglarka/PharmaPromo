<?php get_header(); ?>

<?php
function enqueue_custom_styles() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/styles.scss' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );

$current_user = wp_get_current_user();
if ( ! $current_user->ID ) { 
    if( isset( $_POST['log'] ) && isset( $_POST['pwd'] ) ) {
        $user = wp_signon( array(
            'user_login'    => $_POST['log'],
            'user_password' => $_POST['pwd'],
        ) );

        if ( is_wp_error( $user ) ) {
          echo '<script>alert("Hibás felhasználónév vagy jelszó. Kérjük, próbáld újra.");</script>';
      } else {
          
            wp_redirect( home_url() );
            exit;
        }
    }
?>