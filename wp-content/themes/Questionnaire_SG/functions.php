<?php

add_theme_support('post-thumbnails');

function register_my_menus()
{
	register_nav_menus(
			array(
					'header-menu' => __('Header Menu')
				)
		);
}
add_action('init', 'register_my_menus','wp_enqueue_scripts', 'register_login_script' );
function register_login_script() {
	wp_register_script( 'inscription-front', get_template_directory_uri() . '/js/inscription.js', array( 'jquery' ), '1.0', true );
	wp_register_script( 'message', get_template_directory_uri() . '/js/message.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'jquery' );

	// Ce script sera chargé sur toutes les pages du site, afin d'afficher les messages d'erreur
	wp_enqueue_script( 'message' );
}
// Formulaire d'inscription
function register_user_form() {
	echo '<form action="' . admin_url( 'admin-post.php?action=nouvel_utilisateur' ) . '" method="post" id="register-user">';

	// Les champs requis
	echo '<p><label for="nom-user">Nom</label><input type="text" name="username" id="nom-user" required></p>';
	echo '<p><label for="email-user">Email</label><input type="email" name="email" id="email-user" required></p>';
	echo '<p><label for="pass-user">Mot de passe</label><input type="password" name="pass" id="pass-user" required><br>';
	echo '<input type="checkbox" id="show-password"><label for="show-password">Voir le mot de passe</label></p>';

	// Nonce (pour vérifier plus tard que l'action a bien été initié par l'utilisateur)
	wp_nonce_field( 'create-' . $_SERVER['REMOTE_ADDR'], 'user-front', false );

	//Validation
	echo '<input type="submit" value="Créer mon compte">';
	echo '</form>';

	// Enqueue de scripts qui vont nous permettre de vérifier les champs
	wp_enqueue_script( 'inscription-front' );
}

// Enregistrement de l'utilisateur
add_action( 'admin_post_nopriv_nouvel_utilisateur', 'ajouter_utilisateur' );
function ajouter_utilisateur() {
	// Vérifier le nonce (et n'exécuter l'action que s'il est valide)
	if( isset( $_POST['user-front'] ) && wp_verify_nonce( $_POST['user-front'], 'create-' . $_SERVER['REMOTE_ADDR'] ) ) {

		// Vérifier les champs requis
		if ( ! isset( $_POST['username'] ) || ! isset( $_POST['email'] ) || ! isset( $_POST['pass'] ) ) {
			wp_redirect( site_url( '/inscription/?message=not-user' ) );
			exit();
		}

		$nom = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		// Vérifier que l'user (email ou nom) n'existe pas
		if ( is_email( $email ) && ! username_exists( $nom )  && ! email_exists( $email ) ) {
			// Création de l'utilisateur
			$user_id = wp_create_user( $nom, $pass, $email );
			$user = new WP_User( $user_id );
			// On lui attribue un rôle
			$user->set_role( 'subscriber' );
			// Envoie un mail de notification au nouvel utilisateur
			wp_new_user_notification( $user_id, $pass );
		} else {
			wp_redirect( site_url( '/inscription/?message=already-registered' ) );
			exit();
		}

		// Connecter automatiquement le nouvel utilisateur
		$creds = array();
		$creds['user_login'] = $nom;
		$creds['user_password'] = $pass;
		$creds['remember'] = false;
		$user = wp_signon( $creds, false );

		// Redirection
		wp_redirect( site_url( '/?message=welcome' ) );
		exit();
	}
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
//interdire l'accès aux non admins
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
		echo '<p><label for="pseudo-user">Username</label>';
		echo '<input type="text" name="username" id="pseudo-user" value="' . $userdata->user_login . '" disabled></p>';

		// Nom
		echo '<p><label for="nom-user">Nom</label>';
		echo '<input type="text" name="nom" id="nom-user" value="' . $userdata->last_name . '"></p>';

		// Prénom
		echo '<p><label for="prenom-user">Prénom</label>';
		echo '<input type="text" name="prenom" id="prenom-user" value="' . $userdata->first_name . '"></p>';

		// Nom d'affichage
		echo '<p><label for="display_name-user">Nom d\'affichage</label>';
		echo '<input type="text" name="display_name" id="display_name-user" value="' . $userdata->display_name . '" required></p>';

		// Biographie
		echo '<p><label for="nom-user">Description</label>';
		echo '<textarea name="bio" id="bio-user">' . $userdata->user_description . '</textarea></p>';

		// Site
		echo '<p><label for="site-user">Site web</label>';
		echo '<input type="text" name="site" id="site-user" value="' . $userdata->user_url . '"></p>';

		// Email
		echo '<p><label for="email-user">Email</label>';
		echo '<input type="email" name="email" id="email-user" value="' . $userdata->user_email . '" required></p>';

		// Mot de passe (Mis à jour uniquement si présent)
		echo '<p><label for="pass-user">Mot de passe</label>';
		echo '<input type="password" name="pass" id="pass-user"><br>';
		echo '<input type="checkbox" id="show-password"><label for="show-password">Voir le mot de passe</label></p>';

		// Nonce
		wp_nonce_field( 'update-' . get_current_user_id(), 'user-front' );

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
			'user_url' => sanitize_url( $_POST['url'] ),
		);

		// On ne met à jour le mot de passe que si un nouveau à été renseigné
		if ( isset( $_POST['pass'] ) && ! empty( $_POST['pass'] ) ) {
			$userdata[ 'user_pass' ] = trim( $_POST['pass'] );
		}

		// Mise à jour de l'utilisateur
		wp_update_user( $userdata );

		// Redirection
		wp_redirect( site_url( '/profile/?message=user-updated' ) );
		exit();
	}
}

// Vérouiller l'accès à un type de page
add_action( 'template_redirect', 'private_type_of_page' );
function private_type_of_page() {
	if ( is_page_template( 'test.php' ) && ! is_user_logged_in() ) {
		wp_redirect( 'http://localhost/moocsg/login/' );
		exit();
	}
}
?>

