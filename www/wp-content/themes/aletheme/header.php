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

            <a data-fancybox data-src="#callback" href="javascript:;" class="btn-default btn-order">Заказать звонок</a>
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
                    <a data-fancybox data-src="#customerservice" href="javascript:;">Отдел клиентского сервиса</a>
                </div>
                <div class="contact">
                    <?php if(ale_get_option('tel1')){ ?>
                        <span class="ya-phone">
                            <a class="tel" href="tel:<?php echo ale_href_tel(ale_get_option('tel1')); ?>"><span><?php echo ale_get_option('tel1') ?></span></a>
                        </span>
                    <?php } ?>

                    <?php if(ale_get_option('tel2')){ ?>
                        <a class="tel" href="tel:<?php echo ale_href_tel(ale_get_option('tel2')); ?>"><span><?php echo ale_get_option('tel2') ?></span></a>
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

            <?php if( has_nav_menu('menu_uslugi') ){
                wp_nav_menu([
                    'theme_location' => 'menu_uslugi',
                    'menu' => 'Menu uslugi',
                    'menu_class' => 'slider-footer-ul',
                    'menu_id' => 'menu-uslugi',
                    'container' => 'nav',
                    'container_class' => 'slider-footer',
                    'walker' => '',
                ]);
            }?>

        </div>
    </div>
</header><!-- header -->