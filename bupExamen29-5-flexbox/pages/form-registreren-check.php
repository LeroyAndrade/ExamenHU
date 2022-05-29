<?php
session_start();


$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];



 if ( isset( $email ) && is_string( $email ) ) {
  $user_login = wp_unslash( $email );
 }

 if ( isset( $wachtwoord ) && is_string( $wachtwoord ) ) {
  $user_email = wp_unslash( $wachtwoord );
 }

 $errors = register_new_user( $user_login, $user_email );

 if ( ! is_wp_error( $errors ) ) {
  $redirect_to = ! empty( $_POST['redirect_to'] ) ? $_POST['redirect_to'] : 'wp-login.php?checkemail=registered';
  wp_safe_redirect( $redirect_to );
  exit;
 }

$registration_redirect = ! empty( $_REQUEST['redirect_to'] ) ? $_REQUEST['redirect_to'] : '';