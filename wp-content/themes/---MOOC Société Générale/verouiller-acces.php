<?php

// Vérouiller l'accès à tout le site
// Utiliser une page de connexion en front
add_action( 'template_redirect', 'private_website' );
function private_website() {
    //si l'utilisateur n'est pas connecté, l'envoyer vers la page de connexion
    if ( ! is_user_logged_in() && ! is_page( 'login' ) ) {
        // Page de login custom
        wp_redirect( home_url( '/login/' ) );
        exit();
    }
    //interdire aux utilisateurs loggés d'aller sur la page de connexion
    elseif ( is_user_logged_in() && is_page( 'login' ) ) {
        wp_redirect( home_url( '/' ) );
        exit();
    }
}