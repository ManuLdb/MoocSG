<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

<?php include('nav.php');?>

<?php if ( is_user_logged_in() ) { ?>

<div class="index">

    <div class="container-fluid" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/index.jpg');">
        <div class="col-md-4 col-md-offset-4 ">
            <?php get_sidebar(); ?>
            <div class="text-center fleche" id="fleche">
                <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="text-center">Pour plus d'information sur le MOOC veuillez cliquer sur la page
                    <br>
                    <br>
                    <a href="<?php bloginfo('url'); ?>/a-propos" style="color: red;">À propos</a>
                    <br>
                </h3>
                <h1 class="text-center" id="test">Planning Général</h1>
                <div class="row">
                    <?php for($i=1;$i<=6;$i++):
                    $Themes = array(
                    '',
                    'Les attentes des clients du pilotage financier',
                    'Du PNB au RNPG. Ratios de pilotage',
                    'Ressources rares et pilotage intégré',
                    'Perspectives d\'analyse de la performance',
                    'Comptabilité analytique et SI de gestion',
                    'Synthèse et remerciements',
                    );
                    ?>
                    <h2 class="col-md-11 home-title">Thème <?php echo $i.' : '.$Themes[$i]; ?></h2>
                    <div class="theme col-md-12">
                        <?php $myquery = new WP_Query(array(
                        'post_type' => 'news',
                        'posts_per_page' => '-1',
                        'order' => 'ASC')); ?>
                        <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
                            <?php   $field = get_field_object('choix_theme');
                            $value = get_field('choix_theme');
                            $label = $field['choices'][$value];
                            if ($label == 'Thème '.$i): ?>
                                <h3 class="col-md-10 col-centered modules"><?php the_title(); ?></h3>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                    <?php endfor; ?>
                </div>
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


