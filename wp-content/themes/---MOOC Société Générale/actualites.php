<?php
/*
Template Name: Actualités
*/
?>

<?php get_header(); ?>

<?php include('nav.php');?>

<?php if ( is_user_logged_in() ) { ?>

<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

    <div class="actualites">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-7">
                        <?php echo "<div class='iframe-cours2'>";
                        the_field('a_propos_video');
                        echo "</div>";
                        ?>
                        <p>Pour les dernières nouvelles sur le MOOC, veuillez contacter : <a href="mailto:stephane.salle@socgen.com">Stephane Sallé</a></p>
                    </div>
                    <div class="col-md-5 center-block">
                        <?php the_content('<p>','</p>'); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php endwhile; endif; ?>

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
