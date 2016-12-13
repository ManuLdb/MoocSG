<?php

// ajouter une image à la une sur les articles
add_theme_support('post-thumbnails');

// Ajouter un menu
register_nav_menus( array(
    'TopMenu' => 'Navigation principale',
    'UsersMenu' => 'Navigation Users',
) );

// Créer Custom Post Type
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type('apropos',
        array(
            'labels' => array(
                'name' => 'À propos',
                'singular_name' => 'À propos'
            ),
            'public' => true,
            'supports' => array('title')
        )
    );
    register_post_type('actualites',
        array(
            'labels' => array(
                'name' => 'Actualités',
                'singular_name' => 'Actualités'
            ),
            'public' => true,
            'supports' => array('title')
        )
    );
    register_post_type('bibliothequedocsfr',
        array(
            'labels' => array(
                'name' => 'Bibliothèque - Documents FR',
                'singular_name' => 'BibliothèqueFR'
            ),
            'public' => true,
            'supports' => array('title')
        )
    );
    register_post_type('bibliothequedocsen',
        array(
            'labels' => array(
                'name' => 'Bibliothèque - Documents EN',
                'singular_name' => 'BibliothèqueEN'
            ),
            'public' => true,
            'supports' => array('title')
        )
    );
    register_post_type('bibliothequelinks',
        array(
            'labels' => array(
                'name' => 'Bibliothèque - Liens',
                'singular_name' => 'Bibliothèque'
            ),
            'public' => true,
            'supports' => array('title')
        )
    );
    register_post_type('evalcomp',
        array(
            'labels' => array(
                'name' => 'Eval - Compétences',
                'singular_name' => 'Evalcomp'
            ),
            'public' => true,
            'supports' => array('title')
        )
    );
    register_post_type('evalconnaissances',
        array(
            'labels' => array(
                'name' => 'Eval - Connaissances',
                'singular_name' => 'Evalconnaissances'
            ),
            'public' => true,
            'supports' => array('title')
        )
    );
    register_post_type('news',
        array(
            'labels' => array(
                'name' => 'News',
                'singular_name' => 'News'
            ),
            'public' => true,
            'supports' => array('title', 'editor')
        )
    );
    register_post_type('themeun',
        array(
            'labels' => array(
                'name' => 'Thème 1',
                'singular_name' => 'Thème 1'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
    register_post_type('themetwo',
        array(
            'labels' => array(
                'name' => 'Thème 2',
                'singular_name' => 'Thème 2'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
    register_post_type('themethree',
        array(
            'labels' => array(
                'name' => 'Thème 3',
                'singular_name' => 'Thème 3'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
    register_post_type('themefour',
        array(
            'labels' => array(
                'name' => 'Thème 4',
                'singular_name' => 'Thème 4'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
    register_post_type('themefive',
        array(
            'labels' => array(
                'name' => 'Thème 5',
                'singular_name' => 'Thème 5'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
    register_post_type('themesix',
        array(
            'labels' => array(
                'name' => 'Thème 6',
                'singular_name' => 'Thème 6'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
}

// Ajouter le lien pour récupérer le mot de passe, si l'utilisateur ne s'en souvient plus
add_filter( 'login_form_bottom', 'lien_mot_de_passe_perdu' );
function lien_mot_de_passe_perdu( $formbottom ) {
    $formbottom .= '
    <div class="col-md-6 col-centered">
        <a class="reset-mdp" href="' . wp_lostpassword_url() . '">
            <p class="text-center">Mot de passe perdu ?</p>
        </a>
    </div>
    ';
    return $formbottom;
}


function register_user_form() {
    echo '<form action="' . admin_url( 'admin-post.php?action=nouvel_utilisateur' ) . '" method="post" id="register-user">';


    echo '<p><label for="nom-user">Nom</label><input type="text" name="username" id="nom-user" required></p>';
    echo '<p><label for="email-user">Email</label><input type="email" name="email" id="email-user" required></p>';
    echo '<p><label for="pass-user">Mot de passe</label><input type="password" name="pass" id="pass-user" required><br>';
    echo '<input type="checkbox" id="show-password"><label for="show-password">Voir le mot de passe</label></p>';


    wp_nonce_field( 'create-' . $_SERVER['REMOTE_ADDR'], 'user-front', false );


    echo '<input type="submit" value="Créer mon compte">';
    echo '</form>';


    wp_enqueue_script( 'inscription-front' );
}


add_action( 'admin_post_nopriv_nouvel_utilisateur', 'ajouter_utilisateur' );
function ajouter_utilisateur() {

    if( isset( $_POST['user-front'] ) && wp_verify_nonce( $_POST['user-front'], 'create-' . $_SERVER['REMOTE_ADDR'] ) ) {


        if ( ! isset( $_POST['username'] ) || ! isset( $_POST['email'] ) || ! isset( $_POST['pass'] ) ) {
            wp_redirect( site_url( '/inscription/?message=not-user' ) );
            exit();
        }

        $nom = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];


        if ( is_email( $email ) && ! username_exists( $nom )  && ! email_exists( $email ) ) {

            $user_id = wp_create_user( $nom, $pass, $email );
            $user = new WP_User( $user_id );

            $user->set_role( 'subscriber' );

            wp_new_user_notification( $user_id, $pass );
        } else {
            wp_redirect( site_url( '/inscription/?message=already-registered' ) );
            exit();
        }


        $creds = array();
        $creds['user_login'] = $nom;
        $creds['user_password'] = $pass;
        $creds['remember'] = false;
        $user = wp_signon( $creds, false );


        wp_redirect( site_url( '/?message=welcome' ) );
        exit();
    }
}

add_action( 'current_screen', 'redirect_non_authorized_user' );
function redirect_non_authorized_user() {
    // Si t'es pas admin, tu vires
    if ( is_user_logged_in() && ! current_user_can( 'manage_options' ) ) {
        wp_redirect( home_url( '/' ) );
        exit();
    }
}

function edit_user_form() {
    if ( is_user_logged_in() ) {
        $userdata = get_userdata( get_current_user_id() );
        echo '<form action="' . admin_url( 'admin-post.php?action=update_utilisateur' ) . '" method="post" id="update-utilisateur">';

        // Pseudo (ne peut pas être changé)
        echo '<p><label for="pseudo-user">Username</label><br>';
        echo '<input type="text" name="username" id="pseudo-user" value="' . $userdata->user_login . '" disabled></p>';


        // Nom d'affichage
        echo '<p><label for="display_name-user">Nom d\'affichage</label>';
        echo '<input type="text" name="display_name" id="display_name-user" value="' . $userdata->display_name . '" required></p>';

        // Poste
        echo '<p><label for="poste_user">Poste</label><br>';
        echo '<input type="text" name="poste" id="poste-user" value="' . get_field("poste", "user_". get_current_user_id() ) . '" ></p>';

        // Biographie
        echo '<p><label for="nom-user">Description</label><br>';
        echo '<textarea name="bio" id="bio-user">' . $userdata->user_description . '</textarea></p>';

        // Email
        echo '<p><label for="email-user">Email</label><br>';
        echo '<input type="email" name="email" id="email-user" value="' . $userdata->user_email . '" required></p>';


        // Nonce
        wp_nonce_field( 'update-' . get_current_user_id(), 'user-front' );

        echo '<a href="' . wp_lostpassword_url(get_bloginfo('url')) . '">Modifier le mot de passe</a></br></br>';

        //Validation
        echo '<input type="submit" value="Mettre à jour">';

        echo '</form>';

// Enqueue de scripts qui vont nous permettre de vérifier les champs
        wp_enqueue_script( 'inscription-front' );
    }
}

// Enregistrement de l'utilisateur
add_action( 'admin_post_update_utilisateur', 'update_utilisateur' );
function update_utilisateur() {
// Vérifier le nonce
    if( isset( $_POST['user-front'] ) && wp_verify_nonce( $_POST['user-front'], 'update-' . get_current_user_id() ) ) {

// Vérifier les champs requis
        if ( ! isset( $_POST['email'] ) || ! is_email( $_POST['email'] ) ) {
            wp_redirect( site_url( '/profile/?message=need-email' ) );
            exit();
        }



// Si l'email change, alors on vérfie qu'elle n'est pas déjà utilisée
        if ( ( $emailuser = email_exists( $_POST['email'] ) ) && get_current_user_id() != $emailuser ) {
            wp_redirect( site_url( '/profile/?message=email-exist' ) );
            exit();
        }

// Nouvelles valeurs
        $userdata = array(
            'ID' => get_current_user_id(),
            'first_name' => sanitize_text_field( $_POST['prenom'] ),
            'last_name' => sanitize_text_field( $_POST['nom'] ),
            'display_name' => sanitize_text_field( $_POST['display_name'] ),
            'description' => esc_textarea( $_POST['bio'] ),
            'user_email' => sanitize_email( $_POST['email'] ),
            'poste_user' => sanitize_text_field($_POST['poste'])
        );

// On ne met à jour le mot de passe que si un nouveau à été renseigné
        if ( isset( $_POST['pass'] ) && ! empty( $_POST['pass'] ) ) {
            $userdata[ 'user_pass' ] = trim( $_POST['pass'] );
        }

// Mise à jour de l'utilisateur
        wp_update_user( $userdata );

        // modification du poste de l'employé
        if (isset($_POST["poste"])){
            update_field("field_5751a8da97056", htmlspecialchars($_POST["poste"]), "user_".get_current_user_id());
        }
        if (isset($_POST["bio"])){
            update_field("field_5751a8f397057", htmlspecialchars($_POST["bio"]), "user_".get_current_user_id());
        }
// Redirection
        wp_redirect( site_url( '/profil/?message=user-updated' ) );
        exit();
    }
}