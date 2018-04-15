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



<?php /* get_header(); ?>
    <!-- Content -->
    <div class="blog-center-align">

        <!-- Blog Caption -->
        <div class="blog-caption">
            <div class="blogtitle"><?php echo single_cat_title("", false); ?></div>
        </div>

        <!-- Blog Line -->
        <div class="blog-line"></div>

        <!-- Filters Here -->
        <ul class="blog-filter-line">
            <li><?php _e('Filter By','aletheme'); ?>:</li>
            <li>
                <a class="filter-caption"><p><?php _e('Author','aletheme'); ?></p><span></span></a>
                <ul>

                    <?php
                    $args = array(
                        'orderby'       => 'name',
                        'order'         => 'ASC',
                        'number'        => null,
                        'optioncount'   => false,
                        'exclude_admin' => false,
                        'show_fullname' => false,
                        'hide_empty'    => true,
                        'echo'          => true,
                        'style'         => 'list',
                        'html'          => true );

                    wp_list_authors($args); ?>
                </ul>

            </li>

            <li>
                <a class="filter-caption"><p><?php _e('Category','aletheme'); ?></p><span></span></a>
                <ul>
                    <?php
                    $args = array(
                        'show_option_all'    => '',
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'style'              => 'list',
                        'show_count'         => 0,
                        'hide_empty'         => 1,
                        'use_desc_for_title' => 1,
                        'child_of'           => 0,
                        'feed'               => '',
                        'feed_type'          => '',
                        'feed_image'         => '',
                        'exclude'            => '',
                        'exclude_tree'       => '',
                        'include'            => '',
                        'hierarchical'       => 1,
                        'title_li'           => '',
                        'show_option_none'   => __('No categories','aletheme'),
                        'number'             => null,
                        'echo'               => 1,
                        'depth'              => 0,
                        'current_category'   => 0,
                        'pad_counts'         => 0,
                        'taxonomy'           => 'category',
                        'walker'             => null
                    );
                    wp_list_categories($args); ?>
                </ul>
            </li>

            <li>
                <a class="filter-caption"><p><?php _e('Tags','aletheme'); ?></p><span></span></a>
                <?php
                $tags = get_tags();
                $html = '<ul>';
                foreach ( $tags as $tag ) {
                    $tag_link = get_tag_link( $tag->term_id );

                    $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                    $html .= "{$tag->name}</a></li>";
                }
                $html .= '</ul>';
                echo $html;
                ?>
            </li>

            <li class="search">
                <form role="search" method="get" id="searchform" action="<?php echo site_url()?>" >
                    <input type="search" class="searchinput" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e('SEARCH', 'aletheme')?>" />
                    <button type="submit" id="searchsubmit"></button>
                </form>
            </li>
        </ul>

        <!-- Blog Content -->
        <div class="blog-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php ale_part('postpreview' );?>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>

        <!-- Blog Nav  -->
        <div class="blog-nav">
            <span class="left"><?php echo get_previous_posts_link(__('&lt; Newer Posts','aletheme')); ?></span>
            <span class="right"><?php echo get_next_posts_link(__('Older Posts &gt;','aletheme')); ?></span>
            <div class="center"><?php _e('page','aletheme'); ?> <?php echo $paged; ?> <?php _e('of','aletheme'); ?> <?php echo $wp_query->max_num_pages; ?></div>
        </div>

        <!-- Blog Nav -->
        <div class="blog-line"></div>

        <!-- Blog Footer  -->
        <div class="blog-footer">
            <?php ale_part('archives'); ?>
        </div>

    </div>
<?php get_footer(); */?>