<?php
/*
  * Template name: Home
  * это базовый шаблон
  * */
get_header();?>

    <main class="shadow" role="main">
        <div class="container">

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

        </div><!-- #primary -->

        <!-- order-block -->
        <section class="order-block">
            <div class="container">
                <ul>
                    <?php
                    if(ale_get_option('order_block_text')){ ?>
                        <li class="order-block-text">
                            <span><?php echo ale_get_option('order_block_text') ?></span>
                        </li>
                    <?php } ?>

                    <?php if(ale_get_option('order_block_phone')){ ?>
                        <li class="order-block-tel">
                            <span class="ya-phone">
                                <a class="tel" href="tel:<?php echo ale_href_tel(ale_get_option('order_block_phone')); ?>"><span><?php echo ale_get_option('order_block_phone') ?></span></a>
                            </span>
                        </li>
                    <?php } ?>

                    <li class="order-block-btn">
                        <a data-fancybox data-src="#data" href="javascript:;" class="btn-default btn-order">Заказать</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- /order-block -->

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

    </main>

<?php get_footer();?>