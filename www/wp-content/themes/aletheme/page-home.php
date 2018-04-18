<?php
/*
  * Template name: Home!
  * */
get_header();?>


<?php if(ale_get_option('about_header')){ ?>
    <section class="about">
        <div class="container">
            <h1><?php echo ale_get_option('about_header') ?></h1>
            <div class="about-text">

                <?php if(ale_get_option('about_attention')){ ?>
                    <div class="attention">
                        <p><?php echo ale_get_option('about_attention') ?></p>
                    </div>
                <?php }?>

                <?php if(ale_get_option('about_body')){ ?>
                    <p><?php echo ale_get_option('about_body') ?></p>
                <?php }?>
            </div>
        </div>
    </section>
<?php }?>


<main class="shadow" role="main">
    <section class="material">
        <div class="container">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; endif; ?>

        </div><!-- #primary -->
    </section>

    <section class="map">
        <h2>Ближайшие адреса погрузки к вашей стройплощадке</h2>
        <div id="map-field" class="shadow"></div>
    </section>

</main>

<!-- advantages -->
<section class="advantages">
    <div class="container">
        <?php if(ale_get_option('order_block_text')){ ?>
            <h2><?php echo ale_get_option('advantages_block') ?></h2>
        <?php } ?>

        <div class="flexbox">
            <?php global $query_string;
            query_posts('post_type=services'.'&posts_per_page=-1&order=ASC');?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="advant-item">
                    <div class="advant-icon">
                        <?php echo get_the_post_thumbnail( $post->ID, 'service-thumba' ) ?>
                    </div>
                    <div class="title"><?php the_title(); ?></div>
                    <div class="advant-text"><?php the_content(); ?></div>
                </div>
            <?php endwhile;  endif;  ?>
        </div>
    </div>
</section>
<!-- /advantages -->

<?php get_footer();

