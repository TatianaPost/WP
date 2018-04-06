<!-- FOOTER -->
<footer class="shadow">
    <div class="top-row">
        <div class="container">
            <?php if( has_nav_menu('main_menu') ){
                wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'menu' => 'Main menu',
                    'menu_class' => 'nav-justified',
                    'menu_id' => 'topMenu',
                    'container' => 'nav',
                    'container_class' => 'menu-glavnoe-container',
                    'walker' => '',
                ]);
            }?>
            <a href="#data" class="btn-default btn-order btn-order-footer-nav">Заказать</a>
        </div>
    </div>
    <div class="footer-menu">
        <div class="container">
            <div class="flexbox">
                <nav class="footer-menu-item">
                    <ul id="menu-uslugi-2" class="">
                        <li class="menu-item menu-item-type-post_type menu-item-object-materiali current-menu-item menu-item-has-children menu-item-69">
                            <a href="http://granitstroi.ru/shheben/" class="menu-image-title-below menu-image-not-hovered">
                                <span class="menu-image-title">Сыпучие нерудные материалы</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children menu-item-117">
                                    <a href="http://granitstroi.ru/shheben/shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                        <span class="menu-image-title">Песок</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children menu-item-117">
                                    <a href="http://granitstroi.ru/shheben/shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                        <span class="menu-image-title">Щебень</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children menu-item-117">
                                    <a href="http://granitstroi.ru/shheben/shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                        <span class="menu-image-title">Гранитный отсев</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children menu-item-117">
                                    <a href="http://granitstroi.ru/shheben/shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                        <span class="menu-image-title">Булыжник</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children menu-item-117">
                                    <a href="http://granitstroi.ru/shheben/shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                        <span class="menu-image-title">Асфальтная крошка</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children menu-item-117">
                                    <a href="http://granitstroi.ru/shheben/shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                        <span class="menu-image-title">ПГС</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children menu-item-48">
                            <a href="http://granitstroi.ru/pesok/" class="menu-image-title-below menu-image-not-hovered">
                                <span class="menu-image-title">Плодородные почвы</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-materiali">
                                    <a href="http://granitstroi.ru/shheben/shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                        <span class="menu-image-title">Земля плодородная</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-materiali">
                                    <a href="http://granitstroi.ru/shheben/shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                        <span class="menu-image-title">Грунт плодородный</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-materiali">
                                    <a href="http://granitstroi.ru/shheben/shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                        <span class="menu-image-title">Торфогрунт</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children menu-item-76">
                            <a href="http://granitstroi.ru/pesok/" class="menu-image-title-below menu-image-not-hovered">
                                <span class="menu-image-title">Услуги</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-materiali">
                                    <a href="http://granitstroi.ru/shheben/shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                        <span class="menu-image-title">Вывоз мусора</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-materiali">
                                    <a href="http://granitstroi.ru/shheben/shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                        <span class="menu-image-title">Аренда спецтехники</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="footer-menu-address">
                    <div class="title">Контакты</div>
                    <div>
                        <?php if(ale_get_option('contact_footer')){ ?>
                            <?php echo ale_get_option('contact_footer') ?>
                        <?php } ?>
                        <br>
                        <?php if(ale_get_option('tel1')){ ?>
                            <span class="ya-phone"><a class="tel" href="tel:89050000000"><span><?php echo ale_get_option('tel1') ?></span></a></span><br>
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
                        <img src="<?php bloginfo('template_url'); ?>/images/logo_footer.png" alt="">
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


<div id="callback" class="shadow" style="display: inline-block;">
    <div role="form" class="wpcf7" id="wpcf7-f523-o2" lang="ru-RU" dir="ltr">
        <div class="screen-reader-response"></div>
        <?php
            echo do_shortcode( '[contact-form-7 id="35" title="Заказать звонок"]' );
        ?>
    </div>
    <button data-fancybox-close="" class="fancybox-close-small"></button>
</div>



<!-- SCRIPT -->
<?php wp_footer(); ?>


</body>
</html>
<?php /*
    <!-- Footer -->
    <nav class="footer-menu <?php if($post->post_type == "gallery" and !is_single()) { echo""; } elseif(is_page_template('template-contact.php') or is_page_template('template-about.php') or is_404() or is_page_template('template-award.php') or is_page_template('page-home.php')  or is_page_template('template-press.php')){  echo ""; } else { echo "no-fixed";}    ?>">

        <!-- Social -->
        <ul class="left">
            <?php if(ale_get_option('fb')){ echo '<li class="facebook"><a href="'.ale_get_option('fb').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('twi')){ echo '<li class="twitter"><a href="'.ale_get_option('twi').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('gog')){ echo '<li class="google"><a href="'.ale_get_option('gog').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('pint')){ echo '<li class="pinterest"><a href="'.ale_get_option('pint').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('flickr')){ echo '<li class="flickr"><a href="'.ale_get_option('flickr').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('linked')){ echo '<li class="linkedin"><a href="'.ale_get_option('linked').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('insta')){ echo '<li class="instagram"><a href="'.ale_get_option('insta').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('emailcont')){ echo '<li class="mail"><a href="mailto:'.ale_get_option('emailcont').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('rssicon')){?><li class="rss"><a href="<?php echo home_url(); ?>/feed" rel="external"></a></li><?php } ?>
        </ul>

        <?php if(is_page_template('page-home.php')){ ?>
        <!-- Footer Menu -->
        <div class="center">
            <ul class="nav">
                <li><span><?php echo ale_get_option('footermenutitle'); ?></span>
                    <?php
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        echo '<br>Footer menu';
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu'			=> 'Footer Menu',
                            'menu_class'	=> 'footermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                </li>
            </ul>
        </div>
        <?php } ?>

        <!-- Copy -->
        <?php if (ale_get_option('copyrights')) : ?>
            <p class="right"><?php echo ale_option('copyrights'); ?></p>
        <?php else: ?>
            <p class="right">&copy; <?php _e('2013 ALL RIGHTS RESERVED', 'aletheme')?></p>
        <?php endif; ?>

    </nav>
    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html> */?>