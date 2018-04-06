<?php
/*
  * Template name: Home
  * */
get_header();?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="h2" ><?php the_title(); ?></div>
    <div class="contact-content">
        <?php ale_part('pagehead');?>
        <?php the_content(); ?>
        <?php ale_part('pagefooter');?>
    </div>
<?php endwhile; else: ?>
    <?php ale_part('notfound')?>
<?php endif; ?>


<?php get_footer();

