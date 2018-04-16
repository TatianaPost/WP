<?php
/*
  * Template name: Home
  * это базовый шаблон
  * */
get_header();?>

    <main class="shadow" role="main">
        <div class="container with-sidebar">

            <?php get_breadcrumbs(); ?>

            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>




            <div class="items-list clearfix items-view-grid img-or-3x2 products_list">
                <div class="item">
                    <div class="item-in">
                        <div class="item-img img-middle ">
                            <a class="item-img-in img-middle-in" href="#">
                                <img class="img-responsive" title="Песок карьерный" src="/wp-content/uploads/2018/04/karernyiy-pesok.jpg" alt="Песок карьерный" />
                            </a>
                        </div>
                        <div class="item-content clearfix">
                            <div class="item-title">

                                <span class="item_data">Растительный грунт (Почвогрунт)</span>

                                <span class="label label-success" style="line-height: 25px;">В наличии</span>

                                <span class="label label-info" style="line-height: 25px;">Цена с доставкой</span>

                                <span  class="item_price"  style="line-height: 25px;">от 420 руб./м³</span>

                                <button class="btn btn-xs btn-primary order_catalog">Купить</button>

                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="item-in">
                        <div class="item-img img-middle "><a class="item-img-in img-middle-in" href="#">
                                <img class="img-responsive" title="Песок намывной (мытый)" src="/wp-content/uploads/2018/04/karernyiy-pesok.jpg" alt="Песок намывной (мытый)" /></a>
                            <div class="img-hover-overlay"></div>
                        </div>
                        <div class="item-content clearfix">
                            <div class="item-title">

                                <span class="item_data">Песок намывной (мытый)</span>

                                <span class="label label-success" style="line-height: 25px;">В наличии</span>

                                <span class="label label-info" style="line-height: 25px;">Цена с доставкой</span>

                                <span  class="item_price"  style="line-height: 25px;">от 510 руб./м³</span>

                                <button class="btn btn-xs btn-primary order_catalog">Купить</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-in">
                        <div class="item-img img-middle "><a class="item-img-in img-middle-in" href="#">
                                <img class="img-responsive" title="Песок сеяный" src="/wp-content/uploads/2018/04/karernyiy-pesok.jpg" alt="Песок сеяный" /></a>
                            <div class="img-hover-overlay"></div>
                        </div>
                        <div class="item-content clearfix">
                            <div class="item-title">

                                <span class="item_data">Песок сеяный</span>

                                <span class="label label-success" style="line-height: 25px;">В наличии</span>

                                <span class="label label-info" style="line-height: 25px;">Цена с доставкой</span>

                                <span  class="item_price"  style="line-height: 25px;">от 530 руб./м³</span>

                                <button class="btn btn-xs btn-primary order_catalog">Купить</button>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="item-in">
                        <div class="item-img img-middle "><a class="item-img-in img-middle-in" href="#">
                                <img class="img-responsive" title="Песок карьерный" src="/wp-content/uploads/2018/04/karernyiy-pesok.jpg" alt="Песок карьерный" /></a>
                            <div class="img-hover-overlay"></div>
                        </div>
                        <div class="item-content clearfix">
                            <div class="item-title">

                                <span class="item_data">Песок карьерный</span>

                                <span class="label label-success" style="line-height: 25px;">В наличии</span>

                                <span class="label label-info" style="line-height: 25px;">Цена с доставкой</span>

                                <span  class="item_price" style="line-height: 25px;">от 420 руб./м³</span>

                                <button class="btn btn-xs btn-primary order_catalog">Купить</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-in">
                        <div class="item-img img-middle "><a class="item-img-in img-middle-in" href="#">
                                <img class="img-responsive" title="Песок намывной (мытый)" src="/wp-content/uploads/2018/04/karernyiy-pesok.jpg" alt="Песок намывной (мытый)" /></a>
                            <div class="img-hover-overlay"></div>
                        </div>
                        <div class="item-content clearfix">
                            <div class="item-title">

                                <span class="item_data">Песок намывной (мытый)</span>

                                <span class="label label-success" style="line-height: 25px;">В наличии</span>

                                <span class="label label-info" style="line-height: 25px;">Цена с доставкой</span>

                                <span   class="item_price"  style="line-height: 25px;">от 510 руб./м³</span>

                                <button class="btn btn-xs btn-primary order_catalog">Купить</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-in">
                        <div class="item-img img-middle "><a class="item-img-in img-middle-in" href="#">
                                <img class="img-responsive" title="Песок сеяный" src="/wp-content/uploads/2018/04/karernyiy-pesok.jpg" alt="Песок сеяный" /></a>
                            <div class="img-hover-overlay"></div>
                        </div>
                        <div class="item-content clearfix">
                            <div class="item-title">

                                <span class="item_data">Песок сеяный</span>

                                <span class="label label-success" style="line-height: 25px;">В наличии</span>

                                <span class="label label-info" style="line-height: 25px;">Цена с доставкой</span>

                                <span   class="item_price"  style="line-height: 25px;">от 530 руб./м³</span>

                                <button class="btn btn-xs btn-primary order_catalog">Купить</button>

                            </div>
                        </div>
                    </div>
                </div>
                </div><?php /**/?>



        </div><!-- #primary -->
    </main>

<?php get_footer();?>