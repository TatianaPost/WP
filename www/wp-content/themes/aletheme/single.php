<?php
get_header();?>

    <main class="shadow" role="main">
        <div class="container">

            <?php get_breadcrumbs(); ?>

            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>





        </div><!-- #primary -->


        <!--  ОФОРМИТЬ ЗАЯВКУ   -->
        <section class="order-block">
            <div class="container">
                <ul>
                    <li class="order-block-text">
                        <?php if(ale_get_option('order_block_text')){ ?>
                            <span><?php echo ale_get_option('order_block_text') ?></span>
                        <?php } ?>
                    </li>
                    <li class="order-block-tel">
                <span class="ya-phone">
                    <?php if(ale_get_option('order_block_phone')){ ?>
                        <a class="tel" href="tel:<?php echo ale_href_tel(ale_get_option('order_block_phone')); ?>">
                            <span><?php echo ale_get_option('order_block_phone') ?></span>
                        </a>
                    <?php } ?>
                </span>
                    </li>
                    <li class="order-block-btn">
                        <a data-fancybox data-src="#data" href="javascript:;" class="btn-default btn-order">Заказать</a>
                    </li>
                </ul>
            </div>
        </section>
        <!--  /ОФОРМИТЬ ЗАЯВКУ   -->


        <!-- advantages -->
        <section class="advantages">
            <div class="container">
                <?php if(ale_get_option('advantages_block')){ ?>
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

    </main>

<?php get_footer();?>


<?php /* get_header(); ?>
    <!-- Content -->
    <div class="blog-center-align">

    <!-- Blog Caption -->
    <div class="blog-single-caption">
        <a class="backblog" href="<?php echo home_url(); ?>/blog"><?php _e('&lt; Back to the Blog','aletheme'); ?></a>
    </div>

    <!-- Blog Line -->
    <div class="blog-line"></div>

    <!-- Blog Content -->
    <div class="blog-single">

        <!-- Right Menu -->
        <div class="right-side">
            <?php get_sidebar(); ?>
        </div>

        <!-- Left Content -->
        <div class="left-side">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                <?php

                    echo get_the_post_thumbnail($post->ID,'post-minibox');
                ?>





                <p class="info"><?php _e('in','aletheme'); ?> <?php the_category(', '); ?> <?php _e('by','aletheme'); ?> <?php echo the_author_posts_link(); ?>  <span>|</span> <?php comments_number( 'no comments', 'one comment', '% comments' ); ?></p>
                <h3 class="caption"><?php the_title(); ?></h3>
                <div class="text">
                    <?php ale_part('posthead');?>
                    <?php ale_part('postfull');?>
                    <div class="cf"></div>
                    <?php ale_part('postfooter');?>
                </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
            <!-- Line -->
            <div class="blog-line"></div>
            <?php comments_template(); ?>
        </div>
    </div>

    <!-- Blog Line -->
    <div class="blog-line"></div>

    <!-- Blog Nav  -->
    <div class="blog-single-footer">
        <div class="left"><?php if(get_previous_post_link()){ ?><span class="left"></span><?php } ?> <?php previous_post_link('%link'); ?> </div>
        <div class="right"><?php if(get_next_post_link()){ ?><span class="right"></span><?php } ?> <?php next_post_link('%link'); ?>  </div>
    </div>

    </div>
<?php get_footer(); */?>