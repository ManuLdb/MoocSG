<?php
/*
Template Name: Connexion
*/
?>

<?php get_header(); ?>

<?php include('nav.php'); ?>

<div class="container connect-wrapper">
    <div class="col-md-10 col-centered">
        <?php
        if ( ! is_user_logged_in() ) {
            wp_login_form( array(
                'redirect'       => site_url( '/' ),
                'label_username' => 'Login',
                'label_password' => 'Mot de passe',
                'label_remember' => 'Se souvenir de moi',
                'label_log_in'   => 'Se connecter',
                'form_id'        => 'login-form',
                'id_username'    => 'user-login',
                'id_password'    => 'user-pass',
                'id_remember'    => 'rememberme',
                'id_submit'      => 'wp-submit',
                'remember'       => true,
                'value_remember' => false
            ) );
        } else {
            echo '<a href="' . admin_url( 'user-edit.php?user_id='. get_current_user_id() ) .'">Accès au profil</a>';
            echo '<a href="' . wp_logout_url( site_url( '/' ) ) .'">Se déconnecter</a>';
        }

        ?>
    </div>
</div>

<?php get_footer(); ?>
