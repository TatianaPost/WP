<?php
/**
 * Template Name: Price
 */
get_header(); ?>

    <main class="shadow" role="main">
        <div class="container">

            <?php get_breadcrumbs(); ?>

            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>

        </div><!-- #primary -->
    </main>

<?php get_footer(); ?>