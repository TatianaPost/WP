<!-- Blog Item -->
<div class="blog-item">
    <a href="<?php the_permalink(); ?>" class="img-post">
        <p><?php _e('open post','aletheme'); ?></p>
        <span class="darken"></span>
        <span class="border"></span>
        <?php echo get_the_post_thumbnail($post->ID,'post-blogsize') ?>
    </a>
    <div class="item-content">
        <h2><a href="<?php the_permalink(); ?>" class="caption"><?php the_title(); ?></a></h2>
        <p class="info">in <?php the_category(', '); ?> by <?php echo the_author_posts_link(); ?> <span>|</span> <?php comments_number( 'no comments', 'one comment', '% comments' ); ?></p>
        <div class="text"><?php echo ale_trim_excerpt('22'); ?></div>
        <div>Date: <?php
           echo get_the_date('d-m-Y');
            ?></div>
        <a class="href" href="<?php the_permalink(); ?>"><?php _e('take a look','aletheme'); ?></a>
    </div>
    <hr>
</div>