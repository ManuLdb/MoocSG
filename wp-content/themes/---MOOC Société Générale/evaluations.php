<?php
/*
Template Name: Evaluations
*/
?>

<?php get_header(); ?>

<?php include('nav.php');?>

<?php if ( is_user_logged_in() ) { ?>

<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

    <div class="bibliotheque connect-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <p class="text-center"><?php the_content(); ?></p>
                    <br>

                    <!-- Bibli Docs-->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Evaluation des connaissances
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">

                                    <ul class="list-group">
                                        <?php $my_query = new WP_Query(array(
                                            'post_type' => 'evalconnaissances',
                                            'order' => 'ACS',
                                            'posts_per_page' => '-1')); ?>
                                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                            <li class="list-group-item theme">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <?php the_title(); ?>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="<?php the_field('lien_eval_connaissances'); ?>" class="pull-right" target="_blank">
                                                            Accéder
                                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>

                                        <?php endwhile; ?>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Bibli links-->

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Evaluation des compétences
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">

                                    <ul class="list-group">
                                        <?php $my_query = new WP_Query(array(
                                            'post_type' => 'evalcomp',
                                            'order' => 'ACS',
                                            'posts_per_page' => '-1')); ?>
                                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                            <li class="list-group-item theme">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <?php the_title(); ?>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="<?php the_field('lien_eval_competences'); ?>" class="pull-right" target="_blank">
                                                            Accéder
                                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>

                                        <?php endwhile; ?>
                                    </ul>

                                </div>
                            </div>
                        </div>
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