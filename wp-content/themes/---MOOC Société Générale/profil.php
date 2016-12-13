<?php
/*
Template Name: Profil
*/
?>

<?php if(is_user_logged_in()) { ?>

    <?php get_header(); ?>

    <?php include('nav.php'); ?>

    <div class="profil">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-sm-4">
                        <div class="background">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/profil.jpg" alt=""
                                         class="img-responsive img-circle">
                                </div>
                                <div class="col-md-6">
                                    <h6><?php echo $current_user->user_login; ?></h6>
                                    <h7><?php echo get_field("poste", "user_".$current_user->ID); ?></h7>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <p><?php echo get_field("description__", "user_".$current_user->ID); ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 text-center">
                                            <h6>Modifier le profil</h6>
                                        </div>
                                    </div>

                                    <?php
                                    edit_user_form();
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cours">
                        <div class="col-sm-8">
                            <h2>Mes cours</h2>
                            <div class="col-md-6">
                                <h3>Thème 1</h3>
                                <img src="<?php bloginfo('template_directory'); ?>/img/profil_cours.jpg" alt=""
                                     class="img-responsive center-block"><br>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        60%
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Thème 2</h3>
                                <img src="<?php bloginfo('template_directory'); ?>/img/profil_cours_2.jpg" alt=""
                                     class="img-responsive"><br>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                        90%
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Thème 3</h3>
                                <img src="<?php bloginfo('template_directory'); ?>/img/profil_cours_2.jpg" alt=""
                                     class="img-responsive"><br>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                        10%
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Thème 4</h3>
                                <img src="<?php bloginfo('template_directory'); ?>/img/profil_cours.jpg" alt=""
                                     class="img-responsive"><br>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                        50%
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Thème 5</h3>
                                <img src="<?php bloginfo('template_directory'); ?>/img/profil_cours.jpg" alt=""
                                     class="img-responsive"><br>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0"
                                         aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
                                        0%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <?php get_footer();
}
else {
    header("Location: http://localhost:8888/MOOC_PilotageFinancierSG/");
    ?>
    <h1>Veuillez vous connecter pour accèder à cette page !</h1>
    <?php
}
?>



    <!---->
<?php //get_header(); ?>
    <!---->
<?php
//edit_user_form();
//?>
    <!---->
<?php //get_footer(); ?>