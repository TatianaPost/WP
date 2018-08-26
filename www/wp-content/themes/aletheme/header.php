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
                            <img src="<?php bloginfo('template_url'); ?>/wp-content/uploads/2018/06/stroy.png" alt="">
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
	
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49986043 = new Ya.Metrika2({
                    id:49986043,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49986043" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	
</header><!-- header -->