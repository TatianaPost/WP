<?php 
/**
 * Template Name: Contact Page
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>

<main class="shadow" role="main">
    <div class="container">

        <?php get_breadcrumbs(); ?>

        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <div id="map_contact" style="width:100%; height:400px"></div>

    </div><!-- #primary -->
</main>

<?php get_footer(); ?>