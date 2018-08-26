<?php
/**
 * Template Name: Template Certificates
 */
get_header(); ?>

    <main class="shadow" role="main">
        <div class="container">

            <?php get_breadcrumbs(); ?>

            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>


            <!--   Сертификаты   -->
            <div class="review-block">
            <?php
                $args = array(
                    'post_type' => 'certificates',
                    'posts_per_page' => -1,
                    'meta_query'  => array(
                        array(
                            'key' => 'pfdFile'
                        )
                    )

                );
                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();
                    $pfdFile = get_post_meta( $post->ID, 'pfdFile');
                ?>

                    <?php if ($pfdFile[0]): ?>
                    <a href="<?php echo $pfdFile[0]; ?>" title="<?php echo get_the_title(); ?>" target="_blank">
                        <?php echo get_the_post_thumbnail( $post->ID, 'certificate-thumba' ); ?>
                    </a>
                    <?php endif; ?>

                <? endwhile; ?>
            </div>
            <!--  /Сертификаты   -->


        </div><!-- #primary -->
    </main>

<?php get_footer(); ?>