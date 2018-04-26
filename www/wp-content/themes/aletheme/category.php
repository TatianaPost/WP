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