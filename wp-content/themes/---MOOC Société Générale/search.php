<?php
/**
 * The template for displaying Search Results pages.
 *
 */

get_header();
include('nav.php');?>

    <div class="search">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="row" style="margin-bottom:100px;">
                    <?php if (!is_user_logged_in()){ ?>
                    <div class="connect-wrapper">
                        <h3 class="text-center">Veuillez vous connecter pour accéder à la fonction recherche</h3>
                        <a href="<?php bloginfo('url'); ?>/connexion">
                            <button class="btn btn-1 btn-1c">Connection</button>
                        </a>
                    </div>
                    <?php }
                    else { ?>
                        <!--Title-->
                        <h1 class="text-center">Recherche</h1>
                        <p class="text-center" style="margin-bottom: 40px;">Voici le resultat de votre recherche</p>
                        <div class="row">
                        <?php
                        //vars
                        $search = array( 'post_type' => array(
                            'themeun',
                            'themetwo',
                            'themethree',
                            'themefour',
                            'themefive',
                            'themesix'),
                            'posts_per_page' => '-1',
                            's' => $_GET['s'] );
                        $the_query = new WP_Query( $search );
                        // QUERY
                        if($the_query->have_posts()) {
                            while ($the_query->have_posts()) {
                                $the_query->the_post();
                                // GET VID FIELD
                                $video = get_field('lien_video');
                                // Check if video or not
                                if ( $video ) {
                                    ?>
                                    <div class="col-md-4" style="margin-bottom: 30px;">
                                        <h5 style="height: 30px"><?php the_title(); ?></h5>
                                        <?php echo $video; ?>
                                        <div class="col-md-6 col-sm-8 col-xs-10 col-centered">
                                            <a href="<?php the_permalink(); ?>">
                                                <boutton class="btn btn-1 btn-1c">Acceder</boutton>
                                            </a>
                                        </div>
                                    </div>
                                <?php }
                                // Check Empty video file
                                elseif ( empty($video) ) {
                                    ?>
                                    <div class="col-md-4" style="margin-bottom: 30px;">
                                        <h5 style="height: 30px"><?php the_title(); ?></h5>
                                        <h6 class="text-center">( Quizz disponible mais pas de vidéo associée pour le moment )</h6>
                                        <div class="col-md-6 col-sm-8 col-xs-10 col-centered">
                                            <a href="<?php the_permalink(); ?>">
                                                <boutton class="btn btn-1 btn-1c">Acceder</boutton>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                // End elseif
                            }
                            ?>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-8 col-centered">
                                    <a href="<?php bloginfo('url'); ?>">
                                        <boutton class="btn btn-1 btn-1c">Faire une autre recherche</boutton>
                                    </a>
                                </div>
                            </div>
                            <?php
                            // End while
                        }
                        else {
                            ?>
                            <div class="row connect-wrapper">
                                <h6 class="text-center">Votre recherche n'a pas abouti</h6>
                                <div class="col-md-4 col-sm-6 col-xs-8 col-centered">
                                    <a href="<?php bloginfo('url'); ?>">
                                        <boutton class="btn btn-1 btn-1c">Faire une autre recherche</boutton>
                                    </a>
                                </div>
                            </div>
                        <?php }
                        // END ELSE
                        ?>
                        </div>
                    <?php } ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>