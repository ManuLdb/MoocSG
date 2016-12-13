<?php
/*
Template Name: Inscription
*/


register_user_form();

// Il faut register les scripts que notre formualire utilise
add_action( 'wp_enqueue_scripts', 'register_login_script' );
function register_login_script() {
    wp_register_script( 'inscription-front', get_template_directory_uri() . 'inscription.js', array( 'jquery' ), '1.0', true );
    wp_register_script( 'message', get_template_directory_uri() . 'message.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'jquery' );

    // Ce script sera chargé sur toutes les pages du site, afin d'afficher les messages d'erreur
    wp_enqueue_script( 'message' );
}

add_action( 'wp_footer', 'show_user_registration_message' );
function show_user_registration_message() {
    if ( isset( $_GET['message'] ) ) {
        $wrapper = '<div class="message">%s</div>';
        switch ( $_GET['message'] ) {
            case 'already-registred':
                echo wp_sprintf( $wrapper, 'Un utilisateur possède la même adresse.' );
                break;
            case 'not-user':
                echo wp_sprintf( $wrapper, 'Votre inscription a échouée.' );
                break;
            case 'user-updated':
                echo wp_sprintf( $wrapper, 'Votre profil a été mis à jour.' );
                break;
            case 'need-email':
                echo wp_sprintf( $wrapper, 'Votre profil \'a pas été mis à jour. L\'email doit être renseignée.' );
                break;
            case 'email-exist':
                echo wp_sprintf( $wrapper, 'Votre profil \'a pas été mis à jour. L\'adresse email est déjà utilisée.' );
                break;
            case 'welcome':
                echo wp_sprintf( $wrapper, 'Votre compte a été créé. Vous allez recevoir un email de confirmation.' );
                break;
            default :
        }
    }
}