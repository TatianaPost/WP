<?php
/**
 * Template Name: Review
 */
// send contact
if (isset($_POST['contact'])) {
    $error = ale_send_contact($_POST['contact']);
}
get_header(); ?>

    <main class="shadow" role="main">
        <div class="container">

            <?php get_breadcrumbs(); ?>

            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>

            <!--   Форма добавления отзыва и вывода списка отзывов  -->
            <?php comments_template( '/comments.php' ); ?>

        </div><!-- #primary -->
    </main>

<?php get_footer(); ?>