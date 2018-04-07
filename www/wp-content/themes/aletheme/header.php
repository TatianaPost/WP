<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body class="home page-template-default page">

<header>
    <div class="top-row shadow">
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

            <a href="#data" class="btn-default btn-order">Заказать</a>
        </div>
    </div>
    <div class="logo-row">
        <div class="container">
            <div class="flexbox">
                <div class="logo">
                    <?php if(ale_get_option('sitelogo')){ ?>
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo ale_get_option('sitelogo') ?>" alt="">
                        </a>
                    <?php }else{ ?>
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo_head.png" alt="">
                        </a>
                    <?php } ?>
                </div>
                <div class="options">
                    <a data-fancybox data-src="#callback" href="javascript:;" class="call zakaz">Заказать звонок</a>
                    <a href="" class="download">Скачать прайс-лист</a><br>
                    <a href="">Отдел клиентского сервиса</a>
                </div>
                <div class="contact">
                    <?php if(ale_get_option('tel1')){ ?>
                        <span class="ya-phone">
                            <a class="tel" href="tel:79050000000"><span><?php echo ale_get_option('tel1') ?></span></a>
                        </span>
                    <?php } ?>

                    <?php if(ale_get_option('tel2')){ ?>
                        <a class="tel" href="tel:79050000000"><span><?php echo ale_get_option('tel2') ?></span></a>
                    <?php } ?>

                    <?php if(ale_get_option('email')){ ?>
                        <a class="tel" href="mailto:<?php echo ale_get_option('email') ?>"><?php echo ale_get_option('email') ?></a>
                    <?php } ?>

                </div>
            </div>
        </div>

    </div>
    <div class="slider-box">
        <div class="container">
            <nav class="slider-footer">
                <ul id="menu-uslugi" class="slider-footer-ul">
                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali current-menu-item menu-item-has-children">
                        <a href="" class="menu-image-title-below menu-image-not-hovered">
                            <img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xmat1.jpg.pagespeed.ic.2jYbu8PVFM.webp" class="menu-image menu-image-title-below" />
                            <span class="menu-image-title">Песок</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children">
                                <a href="shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered">
                                    <img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" />
                                    <span class="menu-image-title">Гранитный щебень</span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="granitnyj-shheben-fr-3-10/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2694300626" /><span class="menu-image-title">Щебень гранитный 3-10</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="granitnyj-shheben-fr-5-20/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1673245179" /><span class="menu-image-title">Щебень гранитный 5-20</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="granitnyj-shheben-fr-20-40/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1075716412" /><span class="menu-image-title">Щебень гранитный 20-40</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="granitnyj-shheben-fr-40-70/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="88594103" /><span class="menu-image-title">Щебень гранитный 40-70</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children"><a href="shheben-gravijnyj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="4178056082" /><span class="menu-image-title">Гравийный щебень</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="gravijnyj-shheben-fr-5-20/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1863592775" /><span class="menu-image-title">Щебень гравийный 5-20</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="gravijnyj-shheben-fr-20-40/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="241447712" /><span class="menu-image-title">Щебень гравийный 20-40</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="gravijnyj-shheben-fr-40-70/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="3549292699" /><span class="menu-image-title">Щебень гравийный 40-70</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children"><a href="shheben-izvestnyakovyj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="4076584439" /><span class="menu-image-title">Известняковый щебень</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="izvestnyakovyj-shheben-fr-5-20/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1323726198" /><span class="menu-image-title">Щебень известняковый 5-20</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="izvestnyakovyj-shheben-fr-20-40/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2533370157" /><span class="menu-image-title">Щебень известняковый 20-40</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="shheben-vtorichnyj/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2046519831" /><span class="menu-image-title">Вторичный щебень</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2409336270" /><span class="menu-image-title">Гравий</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2093859548" /><span class="menu-image-title">Гранитный отсев</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="mramornaya-kroshka/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1353006813" /><span class="menu-image-title">Мраморная крошка</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children">
                        <a href="" class="menu-image-title-below menu-image-not-hovered">
                            <img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xmat2.jpg.pagespeed.ic.bHO-9kmLMS.webp" class="menu-image menu-image-title-below" />
                            <span class="menu-image-title">Щебень</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="pesok-karernyj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2192916764" /><span class="menu-image-title">Песок карьерный</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="pesok-karernyj-namyvnoj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1022987755" /><span class="menu-image-title">Карьерный мытый</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="pesok-seyanyj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2480956579" /><span class="menu-image-title">Карьерный сеяный</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="pesok-rechnoj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="3770912547" /><span class="menu-image-title">Речной песок</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1737251233" /><span class="menu-image-title">ПГС</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="4246350129" /><span class="menu-image-title">ОПГС</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children">
                        <a href="" class="menu-image-title-below menu-image-not-hovered">
                            <img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xmat2.jpg.pagespeed.ic.bHO-9kmLMS.webp" class="menu-image menu-image-title-below" />
                            <span class="menu-image-title">Грунт</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="keramzit-fr-5-10/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1807911547" /><span class="menu-image-title">Керамзит 5-10</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="keramzit-fr-10-20/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="3249690446" /><span class="menu-image-title">Керамзит 10-20</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="keramzit-fr-20-40/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="813374611" /><span class="menu-image-title">Керамзит 20-40</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children">
                        <a href="" class="menu-image-title-below menu-image-not-hovered">
                            <img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xmat2.jpg.pagespeed.ic.bHO-9kmLMS.webp" class="menu-image menu-image-title-below" />
                            <span class="menu-image-title">Асфальтная крошка</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2562321484" /><span class="menu-image-title">Почвогрунт</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="3837398290" /><span class="menu-image-title">Торф</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                        <a href="" class="menu-image-title-below menu-image-not-hovered">
                            <img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xmat2.jpg.pagespeed.ic.bHO-9kmLMS.webp" class="menu-image menu-image-title-below" />
                            <span class="menu-image-title">Вывоз мусора</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali">
                                <a href="sol-tehnicheskaya/" class="menu-image-title-below menu-image-not-hovered">
                                    <img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xsoltech_menu.jpg.pagespeed.ic.DWimU8kjvo.webp" class="menu-image menu-image-title-below" alt=""ata-pagespeed-url-hash="3450260759" /><span class="menu-image-title">Техническая соль</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="" class="menu-image-title-after"><span class="menu-image-title">Бетон</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali current-menu-item menu-item-has-children">
                        <a href="" class="menu-image-title-below menu-image-not-hovered">
                            <img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xmat2.jpg.pagespeed.ic.bHO-9kmLMS.webp" class="menu-image menu-image-title-below" />
                            <span class="menu-image-title">Аренда спецтехники</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header><!-- header -->