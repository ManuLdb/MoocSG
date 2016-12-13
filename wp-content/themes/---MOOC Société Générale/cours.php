<?php
/*
Template Name: Cours
*/
?>

<?php get_header(); ?>

<?php include('nav.php'); ?>

<?php if ( is_user_logged_in() ) { ?>

<div class="container all-cours">
    <div class="col-md-10 col-centered">
        <div class="row">
            <div class="col-md-4">
                <a href="<?php bloginfo('url'); ?>/theme-1">
                    <img src="<?php bloginfo('template_directory'); ?>/img/T1.png" alt="png">
                    <h1>T1 - Attentes du Groupe/Managers sur le Pilotage Finacier</h1>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php bloginfo('template_directory'); ?>/theme-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/T2.png" alt="png">
                    <h1>T2 - Du PNB au RNPG, Ratios de pilotage</h1>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php bloginfo('template_directory'); ?>/theme-3">
                    <img src="<?php bloginfo('template_directory'); ?>/img/T3.png" alt="png">
                    <h1>T3 - Pilotage des ressources rares</h1>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php bloginfo('template_directory'); ?>/theme-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/T4.png" alt="png">
                    <h1>T4 - Perscpective d'Analyse de la Performance</h1>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php bloginfo('template_directory'); ?>/theme-5">
                    <img src="<?php bloginfo('template_directory'); ?>/img/T5.png" alt="png">
                    <h1>T5 - Comptabilité Analytique et SI de Gestion</h1>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php bloginfo('template_directory'); ?>/theme-6">
                    <img src="<?php bloginfo('template_directory'); ?>/img/T6.png" alt="png">
                    <h1>T6 - Synthèse et remerciements</h1>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
}
else {
?>
    <div class="container connect-wrapper">
        <h3 class="text-center">Veuillez vous connecter pour accéder aux site !</h3>
        <div class="col-md-2 col-sm-4 col-xs-6 col-centered">
            <a href="<?php bloginfo('url'); ?>/connexion">
                <boutton class="btn btn-1 btn-1c">Connexion</boutton>
            </a>
        </div>
    </div>
<?php
}
?>

<?php get_footer(); ?>
