<?php
/*
Template Name: Single-Thème5
*/
?>

<?php get_header(); ?>

<?php include('nav.php');?>

<?php if ( is_user_logged_in() ) { ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container cours_single">
        <div class="col-md-offset-1 col-md-7 left-col">
            <?php echo "<div class='iframe-cours'>";
            the_field('lien_video');
            echo "</div>"
            ?>
            <div class="col-md-12">
                <div class="row">
                    <div class="title">
                        <div class="text-center">
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 right-col">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="text-center">
                        <h3>Vidéos du même thème</h3>
                    </div>
                </div>
                <div class="row">
                    <?php $my_query = new WP_Query( array(
                        'post_type' => array(
                        'themeun',
                        'themetwo',
                        'themethree',
                        'themefour',
                        'themesix'),
                        'posts_per_page' => '1',
                        'post__not_in' => array($post->ID),
                        'orderby' => 'rand'
                    )); ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_field('lien_video'); ?>
                            <h4><?php the_title(); ?></h4>
                        </a>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <div class="row">
                    <hr>
                </div>
                <div class="row">
                    <?php $my_query = new WP_Query(array(
                        'post_type' => 'themefive',
                        'posts_per_page' => '-1',
                        'order' => 'ASC'
                    )); ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>
                        </a>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="col-md-10 col-centered">
            <div class="row">
                <div class="row bs-wizard" style="border-bottom:0;">
                    <div class="col-md-2 bs-wizard-step complete">
                        <div class="text-center bs-wizard-stepnum">T1</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="<?php bloginfo('url'); ?>/theme-1/" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-md-2 bs-wizard-step complete"><!-- complete -->
                        <div class="text-center bs-wizard-stepnum">T2</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="<?php bloginfo('url'); ?>/theme-2/" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-md-2 bs-wizard-step complete">
                        <div class="text-center bs-wizard-stepnum">T3</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="<?php bloginfo('url'); ?>/theme-3/" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-md-2 bs-wizard-step complete"><!-- complete -->
                        <div class="text-center bs-wizard-stepnum">T4</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="<?php bloginfo('url'); ?>/theme-4/" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-md-2 bs-wizard-step active"><!-- complete -->
                        <div class="text-center bs-wizard-stepnum">T5</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="<?php bloginfo('url'); ?>/theme-5/" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-md-2 bs-wizard-step disabled"><!-- complete -->
                        <div class="text-center bs-wizard-stepnum">T6</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="<?php bloginfo('url'); ?>/theme-6/" class="bs-wizard-dot"></a>
                    </div>


                </div>
            </div>
        </div>

        <?php
        if ( get_field('short_code_quizz') ) {
            ?>
            <div class="col-md-10 col-centered">
                <div class="row">
                    <div class="title">
                        <div class="text-center">
                            <h3>S'entraîner</h3>
                        </div>
                    </div>
                </div>
                <div class="quizz-item">
                    <div class="col-md-12 col-centered">
                        <div class="row">
                            <?php the_field('short_code_quizz'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        else {
            ?>
            <p class="text-center" style="padding: 40px;">
                <b>Pas de quizz disponible pour cette partie</b>
            </p>
            <?php
        }
        ?>

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
