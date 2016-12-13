<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php include('nav.php'); ?>

<?php if ( is_user_logged_in() ) { ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php the_title( '<h1 class="text-center">', '</h1>' ); ?>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <p><?php the_content();?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

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
