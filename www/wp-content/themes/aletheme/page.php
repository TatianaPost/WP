<?php
/*
  * Template name: Home
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
    </main>

<?php get_footer();?>