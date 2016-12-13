<?php
/*
Template Name: Thème 3
*/
?>

<?php get_header(); ?>

<?php include('nav.php'); ?>

<div class="container T3">
    <div class="row">
        <div class="col-md-10 col-centered">
            <?php $my_query = new WP_Query(array(
                'post_type' => 'themethree', 'posts_per_page' => '-1',
                'order' => 'ASC')); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="col-md-6 themes">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
                        <?php endif; ?>
                        <h1><?php the_title(); ?></h1>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
        <?php ?>
    </div>
</div>

<?php get_footer(); ?>
