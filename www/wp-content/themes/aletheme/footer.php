<!-- FOOTER -->
<footer class="shadow">
    <div class="top-row">
        <div class="container">
            <?php if( has_nav_menu('main_menu') ){
                wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'menu' => 'Main menu',
                    'menu_class' => 'nav-justified',
                    'menu_id' => 'menu-glavnoe',
                    'container' => 'nav',
                    'container_class' => 'menu-glavnoe-container',
                    'walker' => '',
                ]);
            }?>
            <a data-fancybox data-src="#data" href="javascript:;"  class="btn-default btn-order btn-order-footer-nav">Заказать</a>
        </div>
    </div>
    <div class="footer-menu">
        <div class="container">
            <div class="flexbox">

                <?php
                    if( has_nav_menu('footer_menu_bottom')){
                        wp_nav_menu([
                            'theme_location' => 'footer_menu_bottom',
                            'menu' => 'Bottom footer menu',
                            'menu_class' => '',
                            'menu_id' => 'menu-uslugi-2',
                            'container' => 'nav',
                            'container_class' => 'footer-menu-item',
                            'walker' => new Aletheme_Nav_Walker,
                            'depth' => '2',
                        ]);
                    }
                ?>

                <div class="footer-menu-address">
                    <div class="title">Контакты</div>
                    <div>
                        <?php if(ale_get_option('contact_footer')){ ?>
                            <?php echo ale_get_option('contact_footer') ?>
                        <?php } ?>
                        <br>
                        <?php if(ale_get_option('tel1')){ ?>
                            <span class="ya-phone"><a class="tel" href="tel:<?php echo ale_href_tel(ale_get_option('tel1')); ?>"><span><?php echo ale_get_option('tel1') ?></span></a></span><br>
                        <?php } ?>

                        <?php if(ale_get_option('email')){ ?>
                            <a href="mailto:<?php echo ale_get_option('email') ?>"><?php echo ale_get_option('email') ?></a>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-row">
        <div class="container">
            <div class="flexbox">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                    <?php if(ale_get_option('sitelogofooter')){ ?>
                        <img src="<?php echo ale_get_option('sitelogofooter') ?>"></a>
                    <?php }else{ ?>
                        <img src="<?php bloginfo('template_url'); ?>/" alt="">
                    <?php } ?>
                    </a>
                </div>

                <div class="dev">
                    © <?php echo get_bloginfo('name');?>, <?php echo date('Y');?>
                    <?php if(ale_get_option('copyrights')){ ?>
                        <br> <?php echo ale_get_option('copyrights') ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</footer>


<div style="display: none;" id="callback" class="shadow">
    <?php echo do_shortcode( '[contact-form-7 id="35" title="Заказать звонок"]' );  ?>
</div>

<div style="display: none;" id="customerservice" class="shadow">
    <?php echo do_shortcode( '[contact-form-7 id="101" title="Отдел клиентского сервиса"]' );  ?>
</div>

<div style="display: none;" id="data" class="shadow">
    <?php echo do_shortcode( '[contact-form-7 id="102" title="Заказать"]' );  ?>
</div>



<!-- SCRIPT -->
<?php wp_footer(); ?>

</body>
</html>