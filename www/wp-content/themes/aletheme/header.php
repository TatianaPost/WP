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

            <nav class="menu-glavnoe-container">
                <ul id="topMenu" class="nav-justified">
                    <li  class="menu-item_type menu-item-object-page">
                        <a href='' class="menu-image-title-after"><span class="menu-image-title">О компании</span></a>
                    </li>
                    <li  class="menu-item_type menu-item-object-page">
                        <a href='' class="menu-image-title-after"><span class="menu-image-title">Сертификаты</span></a>
                    </li>
                    <li  class="menu-item_type menu-item-object-page">
                        <a href='' class="menu-image-title-after"><span class="menu-image-title">Доставка и Оплата</span></a>
                    </li>
                    <li  class="menu-item_type menu-item-object-page">
                        <a href='' class="menu-image-title-after"><span class="menu-image-title">Цены</span></a>
                    </li>
                    <li  class="menu-item_type menu-item-object-page">
                        <a href='' class="menu-image-title-after"><span class="menu-image-title">Акции</span></a>
                    </li>
                    <li  class="menu-item_type menu-item-object-page">
                        <a href='' class="menu-image-title-after"><span class="menu-image-title">Отзывы</span></a>
                    </li>
                    <li  class="menu-item_type menu-item-object-page">
                        <a href='' class="menu-image-title-after"><span class="menu-image-title">Контакты</span></a>
                    </li>
                </ul>
            </nav>

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
                    <a href="#callback" class="call zakaz">Заказать звонок</a>
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
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children"><a href="shheben-granitnyj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/xscheben_granitniy-218x220.jpg.pagespeed.ic.G8Gu0_PZF8.webp" class="menu-image menu-image-title-below" alt="" srcset="wp-content/uploads/2017/05/xscheben_granitniy-218x220.jpg.pagespeed.ic.G8Gu0_PZF8.webp 218w, wp-content/uploads/2017/05/xscheben_granitniy-150x150.jpg.pagespeed.ic.4rFgCch8Il.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="3464865719" /><span class="menu-image-title">Гранитный щебень</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="granitnyj-shheben-fr-3-10/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/08/xscheben_granitniy_3_10-218x220.jpg.pagespeed.ic.NL5zrT3FcX.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2017/08/xscheben_granitniy_3_10-218x220.jpg.pagespeed.ic.NL5zrT3FcX.webp 218w, wp-content/uploads/2017/08/xscheben_granitniy_3_10-150x150.jpg.pagespeed.ic.KSAdrBME0D.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2694300626" /><span class="menu-image-title">Щебень гранитный 3-10</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="granitnyj-shheben-fr-5-20/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/08/xscheben_granitniy_5_20-218x220.jpg.pagespeed.ic.UZaIAQN1Jg.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2017/08/xscheben_granitniy_5_20-218x220.jpg.pagespeed.ic.UZaIAQN1Jg.webp 218w, wp-content/uploads/2017/08/xscheben_granitniy_5_20-150x150.jpg.pagespeed.ic.X2zLiHBsIB.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1673245179" /><span class="menu-image-title">Щебень гранитный 5-20</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="granitnyj-shheben-fr-20-40/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/08/xscheben_granitniy_20_40-218x220.jpg.pagespeed.ic.OeIsMNmEXw.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2017/08/xscheben_granitniy_20_40-218x220.jpg.pagespeed.ic.OeIsMNmEXw.webp 218w, wp-content/uploads/2017/08/xscheben_granitniy_20_40-150x150.jpg.pagespeed.ic.SEDYnbMYd9.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1075716412" /><span class="menu-image-title">Щебень гранитный 20-40</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="granitnyj-shheben-fr-40-70/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/08/xscheben_granitniy_40_70-218x220.jpg.pagespeed.ic.Epqp3ky0hw.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2017/08/xscheben_granitniy_40_70-218x220.jpg.pagespeed.ic.Epqp3ky0hw.webp 218w, wp-content/uploads/2017/08/xscheben_granitniy_40_70-150x150.jpg.pagespeed.ic.s1sC1I1DkK.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="88594103" /><span class="menu-image-title">Щебень гранитный 40-70</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children"><a href="shheben-gravijnyj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/ximage055-218x220.jpg.pagespeed.ic.R8R4_ormRL.webp" class="menu-image menu-image-title-below" alt="" srcset="wp-content/uploads/2017/05/ximage055-218x220.jpg.pagespeed.ic.R8R4_ormRL.webp 218w, wp-content/uploads/2017/05/ximage055-150x150.jpg.pagespeed.ic.KqspWQll-D.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="4178056082" /><span class="menu-image-title">Гравийный щебень</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="gravijnyj-shheben-fr-5-20/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/xscheben_graviyniy_5_20-218x220.jpg.pagespeed.ic.olHPcuZVGN.webp" class="menu-image menu-image-title-after" alt="Гравийный щебень фр. 5-20" srcset="wp-content/uploads/2017/05/xscheben_graviyniy_5_20-218x220.jpg.pagespeed.ic.olHPcuZVGN.webp 218w, wp-content/uploads/2017/05/xscheben_graviyniy_5_20-150x150.jpg.pagespeed.ic.5uEpL50Eb7.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1863592775" /><span class="menu-image-title">Щебень гравийный 5-20</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="gravijnyj-shheben-fr-20-40/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/xscheben_graviyniy_20_40-218x220.jpg.pagespeed.ic.-CRyA7PZNI.webp" class="menu-image menu-image-title-after" alt="Гравийный щебень фр. 20-40" srcset="wp-content/uploads/2017/05/xscheben_graviyniy_20_40-218x220.jpg.pagespeed.ic.-CRyA7PZNI.webp 218w, wp-content/uploads/2017/05/xscheben_graviyniy_20_40-150x150.jpg.pagespeed.ic.9u8Fxhacn2.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="241447712" /><span class="menu-image-title">Щебень гравийный 20-40</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="gravijnyj-shheben-fr-40-70/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/xscheben_graviyniy_40_70-218x220.jpg.pagespeed.ic.FbVqn83KRK.webp" class="menu-image menu-image-title-after" alt="Гравийный щебень фр. 40-70" srcset="wp-content/uploads/2017/05/xscheben_graviyniy_40_70-218x220.jpg.pagespeed.ic.FbVqn83KRK.webp 218w, wp-content/uploads/2017/05/xscheben_graviyniy_40_70-150x150.jpg.pagespeed.ic.B_0VUb7tMH.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="3549292699" /><span class="menu-image-title">Щебень гравийный 40-70</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children"><a href="shheben-izvestnyakovyj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/xshcheben-izvestnyakovyy-kupit-218x220.jpg.pagespeed.ic.96bs4zfnS5.webp" class="menu-image menu-image-title-below" alt="" srcset="wp-content/uploads/2017/05/xshcheben-izvestnyakovyy-kupit-218x220.jpg.pagespeed.ic.96bs4zfnS5.webp 218w, wp-content/uploads/2017/05/xshcheben-izvestnyakovyy-kupit-150x150.jpg.pagespeed.ic.UVIwhu0Yu5.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="4076584439" /><span class="menu-image-title">Известняковый щебень</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="izvestnyakovyj-shheben-fr-5-20/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/xscheben_izvestnyakoviy_5_20-218x220.jpg.pagespeed.ic.l0-PgjpjHk.webp" class="menu-image menu-image-title-after" alt="Известняковый щебень фр. 5-20" srcset="wp-content/uploads/2017/05/xscheben_izvestnyakoviy_5_20-218x220.jpg.pagespeed.ic.l0-PgjpjHk.webp 218w, wp-content/uploads/2017/05/xscheben_izvestnyakoviy_5_20-150x150.jpg.pagespeed.ic.ZMsa3N7eIw.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1323726198" /><span class="menu-image-title">Щебень известняковый 5-20</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="izvestnyakovyj-shheben-fr-20-40/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/xscheben_izvestnyakoviy_20_40-218x220.jpg.pagespeed.ic.poVIWgXvs1.webp" class="menu-image menu-image-title-after" alt="Известняковый щебень фр. 20-40" srcset="wp-content/uploads/2017/05/xscheben_izvestnyakoviy_20_40-218x220.jpg.pagespeed.ic.poVIWgXvs1.webp 218w, wp-content/uploads/2017/05/xscheben_izvestnyakoviy_20_40-150x150.jpg.pagespeed.ic.z_2WO-d4pr.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2533370157" /><span class="menu-image-title">Щебень известняковый 20-40</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="shheben-vtorichnyj/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2018/02/xscheben_vtor-218x220.jpg.pagespeed.ic.sVS1k8_1Ai.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2018/02/xscheben_vtor-218x220.jpg.pagespeed.ic.sVS1k8_1Ai.webp 218w, wp-content/uploads/2018/02/xscheben_vtor-150x150.jpg.pagespeed.ic.FFKh-QiuO1.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2046519831" /><span class="menu-image-title">Вторичный щебень</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2018/02/xgraviy1-218x220.jpg.pagespeed.ic.-eg6D7KeKJ.webp" class="menu-image menu-image-title-after" alt="Гравий" srcset="wp-content/uploads/2018/02/xgraviy1-218x220.jpg.pagespeed.ic.-eg6D7KeKJ.webp 218w, wp-content/uploads/2018/02/xgraviy1-150x150.jpg.pagespeed.ic.yrjrcJOfGG.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2409336270" /><span class="menu-image-title">Гравий</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2018/02/xgranit_otsev-218x220.jpg.pagespeed.ic.tvD0zbbO3N.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2018/02/xgranit_otsev-218x220.jpg.pagespeed.ic.tvD0zbbO3N.webp 218w, wp-content/uploads/2018/02/xgranit_otsev-150x150.jpg.pagespeed.ic.vle6VjWjlV.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2093859548" /><span class="menu-image-title">Гранитный отсев</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="mramornaya-kroshka/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2018/02/xmramor_kroshka-218x220.jpg.pagespeed.ic.1OhQKhwVxM.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2018/02/xmramor_kroshka-218x220.jpg.pagespeed.ic.1OhQKhwVxM.webp 218w, wp-content/uploads/2018/02/xmramor_kroshka-150x150.jpg.pagespeed.ic.OSHLtBXXEl.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1353006813" /><span class="menu-image-title">Мраморная крошка</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children">
                        <a href="" class="menu-image-title-below menu-image-not-hovered">
                            <img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xmat2.jpg.pagespeed.ic.bHO-9kmLMS.webp" class="menu-image menu-image-title-below" />
                            <span class="menu-image-title">Щебень</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="pesok-karernyj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/xkarjerniy_pesok1-218x220.jpg.pagespeed.ic.8XY92_B2t6.webp" class="menu-image menu-image-title-below" alt="" srcset="wp-content/uploads/2017/05/xkarjerniy_pesok1-218x220.jpg.pagespeed.ic.8XY92_B2t6.webp 218w, wp-content/uploads/2017/05/xkarjerniy_pesok1-150x150.jpg.pagespeed.ic.R1WUPsJEVV.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2192916764" /><span class="menu-image-title">Песок карьерный</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="pesok-karernyj-namyvnoj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/xpesok_namyvnoy-218x220.jpg.pagespeed.ic.fdXDEAZ2aZ.webp" class="menu-image menu-image-title-below" alt="" srcset="wp-content/uploads/2017/05/xpesok_namyvnoy-218x220.jpg.pagespeed.ic.fdXDEAZ2aZ.webp 218w, wp-content/uploads/2017/05/xpesok_namyvnoy-150x150.jpg.pagespeed.ic.7JCS3ESttb.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1022987755" /><span class="menu-image-title">Карьерный мытый</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="pesok-seyanyj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/xpesok_seyaniy1-218x220.jpg.pagespeed.ic.xzggMKBZv2.webp" class="menu-image menu-image-title-below" alt="" srcset="wp-content/uploads/2017/05/xpesok_seyaniy1-218x220.jpg.pagespeed.ic.xzggMKBZv2.webp 218w, wp-content/uploads/2017/05/xpesok_seyaniy1-150x150.jpg.pagespeed.ic.rVBSDTTjfp.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2480956579" /><span class="menu-image-title">Карьерный сеяный</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="pesok-rechnoj/" class="menu-image-title-below menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/05/xpesok_rechnoy1-218x220.jpg.pagespeed.ic.tH5dP4IMTo.webp" class="menu-image menu-image-title-below" alt="" srcset="wp-content/uploads/2017/05/xpesok_rechnoy1-218x220.jpg.pagespeed.ic.tH5dP4IMTo.webp 218w, wp-content/uploads/2017/05/xpesok_rechnoy1-150x150.jpg.pagespeed.ic.JNkAN_C5iQ.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="3770912547" /><span class="menu-image-title">Речной песок</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2018/02/xpgs-218x220.jpg.pagespeed.ic._PehP_iwmK.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2018/02/xpgs-218x220.jpg.pagespeed.ic._PehP_iwmK.webp 218w, wp-content/uploads/2018/02/xpgs-150x150.jpg.pagespeed.ic.y_rvnCyX2m.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1737251233" /><span class="menu-image-title">ПГС</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2018/02/xopgs1-218x220.jpg.pagespeed.ic.oGHM7E6BbW.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2018/02/xopgs1-218x220.jpg.pagespeed.ic.oGHM7E6BbW.webp 218w, wp-content/uploads/2018/02/xopgs1-150x150.jpg.pagespeed.ic.AQiqBdYOBf.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="4246350129" /><span class="menu-image-title">ОПГС</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children">
                        <a href="" class="menu-image-title-below menu-image-not-hovered">
                            <img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xmat2.jpg.pagespeed.ic.bHO-9kmLMS.webp" class="menu-image menu-image-title-below" />
                            <span class="menu-image-title">Грунт</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="keramzit-fr-5-10/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/08/xkeramzit_5_10-218x220.jpg.pagespeed.ic.MR41TJ8Lj6.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2017/08/xkeramzit_5_10-218x220.jpg.pagespeed.ic.MR41TJ8Lj6.webp 218w, wp-content/uploads/2017/08/xkeramzit_5_10-150x150.jpg.pagespeed.ic.yGkMh88psw.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="1807911547" /><span class="menu-image-title">Керамзит 5-10</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="keramzit-fr-10-20/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/08/xkeramzit_10_20-218x220.jpg.pagespeed.ic.pt-91PAVAx.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2017/08/xkeramzit_10_20-218x220.jpg.pagespeed.ic.pt-91PAVAx.webp 218w, wp-content/uploads/2017/08/xkeramzit_10_20-150x150.jpg.pagespeed.ic.Q-bl3mlj5G.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="3249690446" /><span class="menu-image-title">Керамзит 10-20</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="keramzit-fr-20-40/" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/08/xkeramzit_20_40_1-218x220.jpg.pagespeed.ic.80LCFM2ddU.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2017/08/xkeramzit_20_40_1-218x220.jpg.pagespeed.ic.80LCFM2ddU.webp 218w, wp-content/uploads/2017/08/xkeramzit_20_40_1-150x150.jpg.pagespeed.ic.mzmfG2geDr.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="813374611" /><span class="menu-image-title">Керамзит 20-40</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-materiali menu-item-has-children">
                        <a href="" class="menu-image-title-below menu-image-not-hovered">
                            <img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xmat2.jpg.pagespeed.ic.bHO-9kmLMS.webp" class="menu-image menu-image-title-below" />
                            <span class="menu-image-title">Асфальтная крошка</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2017/04/xpochvogrunt1-218x220.jpg.pagespeed.ic.6V2D2yw9ak.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2017/04/xpochvogrunt1-218x220.jpg.pagespeed.ic.6V2D2yw9ak.webp 218w, wp-content/uploads/2017/04/xpochvogrunt1-150x150.jpg.pagespeed.ic.0voqZacMT2.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="2562321484" /><span class="menu-image-title">Почвогрунт</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="" class="menu-image-title-after menu-image-not-hovered"><img width="218" height="220" src="wp-content/uploads/2018/03/xgrunt2-218x220.jpg.pagespeed.ic.tU8r9pZ3B6.webp" class="menu-image menu-image-title-after" alt="" srcset="wp-content/uploads/2018/03/xgrunt2-218x220.jpg.pagespeed.ic.tU8r9pZ3B6.webp 218w, wp-content/uploads/2018/03/xgrunt2-150x150.jpg.pagespeed.ic.d5fj7YjJon.webp 150w" sizes="(max-width: 218px) 100vw, 218px" data-pagespeed-url-hash="3837398290" /><span class="menu-image-title">Торф</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                        <a href="" class="menu-image-title-below menu-image-not-hovered">
                            <img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xmat2.jpg.pagespeed.ic.bHO-9kmLMS.webp" class="menu-image menu-image-title-below" />
                            <span class="menu-image-title">Вывоз мусора</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-materiali"><a href="sol-tehnicheskaya/" class="menu-image-title-below menu-image-not-hovered"><img width="168" height="98" src="<?php bloginfo('template_url'); ?>/images/xsoltech_menu.jpg.pagespeed.ic.DWimU8kjvo.webp" class="menu-image menu-image-title-below" alt="" srcset="images/xsoltech_menu.jpg.pagespeed.ic.DWimU8kjvo.webp 168w, images/xsoltech_menu-24x14.jpg.pagespeed.ic.0Gp2rRxN4d.webp 24w, images/xsoltech_menu-36x21.jpg.pagespeed.ic.w8JRSSi3SS.webp 36w, images/xsoltech_menu-48x28.jpg.pagespeed.ic.gy7ocOYPOU.webp 48w" sizes="(max-width: 168px) 100vw, 168px" data-pagespeed-url-hash="3450260759" /><span class="menu-image-title">Техническая соль</span></a></li>
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
<?php /*
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class('Ilya'); ?> >

<?php if(ale_get_option('sitelogo')){
    echo "<img src='".ale_get_option('sitelogo')."' />";
} ?>

<?php echo ale_get_option('calltoaction'); ?>

<?php if( has_nav_menu('header_left_menu') ){
    echo '<br>Левое меню';
   wp_nav_menu(['theme_location' => 'header_left_menu']);
}?>

<?php if( has_nav_menu('header_right_menu') ){
    echo 'Правое меню';
    wp_nav_menu(['theme_location' => 'header_right_menu']);
}?>

<div>
    <?php get_search_form(); ?>
</div>

<?php /*
<section class="slider-example">
	<div class="newhomeslider wrapper">
		<ul class="slides">
			<?php $slider = ale_sliders_get_slider('test-slider');  ?>
			<?php if($slider):?>
				<?php foreach ($slider['slides'] as $slide) : ?>
					<li>
						<figure>
							<img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" />
							<figcaption>
								<div class="sliderdata">
									<?php if($slide['title']){ ?>
										<div class="titleslide headerfont">
											<?php if($slide['url']){
												echo "<a href='".$slide['url']."'>";
											} ?>

											<?php echo $slide['title']; ?>

											<?php if($slide['url']){
												echo "</a>";
											} ?>
										</div>
									<?php } ?>
									<?php if($slide['description']){ ?>
										<div class="descriptionslide">
											<?php echo $slide['description']; ?>
										</div>
									<?php } ?>
									<?php if($slide['html']){ ?>
										<div class="descriptionslide">
											<?php echo $slide['html']; ?>
										</div>
									<?php } ?>
								</div>
							</figcaption>
						</figure>
					</li>
				<?php endforeach; ?>
			<?php endif;?>
		</ul>
	</div>
</section> */ ?>