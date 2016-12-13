<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- Navigation -->
            <nav class="navbar" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!--<div class="col-md-10 col-md-offset-2">-->
                    <ul class="nav navbar-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'TopMenu' ) ); ?>
                    </ul>
                    <ul id="menu-top-menu" class="menu navbar-right">
                        <?php
                        $items = wp_get_nav_menu_items('Users Menu');
                        foreach ($items as $it) {
                            if ($it->title == "Connexion"){
                                if (!is_user_logged_in()){
                                    ?>
                                    <li><a href="<?php echo $it->url; ?>"> <?php echo $it->title; ?></a></li>
                                    <?php
                                }
                            }
                            elseif ($it->title == "Inscription"){
                                if (!is_user_logged_in()){
                                    ?>
<!--                                    <li><a href="--><?php //echo $it->url; ?><!--"> --><?php //echo $it->title; ?><!--</a></li>-->
                                    <?php
                                }
                            }
                        }
                        if(is_user_logged_in()) { ?>

<!--                                <a class="pad-right10" href="--><?php //echo $it->url; ?><!--"> --><?php //echo $it->title; ?><!--</a>-->
<!--                                <a class="pad-right10" href="--><?php //echo $it->url; ?><!--">-->
<!--                                    --><?php //echo "Bonjour ".$current_user->user_login; ?>
<!--                                </a>-->
                            <li>
                                <?php echo "Bonjour ".$current_user->user_login; ?>
                            </li>
                            <li>
                                <a class="pad-right10" href="<?php echo wp_logout_url(home_url()); ?>"> Déconnexion </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

        </div>
    </div>
</div>