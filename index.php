<?
session_start();

include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

//$_SESSION['DEVICE'] = 'desktop';
//!$detect->isMobile() || $_SESSION['DEVICE'] = 'mobile';
?>
<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <!--meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"-->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
    <meta name="HandheldFriendly" content="True"/>

    <meta name="description" content="THRONE 3D умный дом " />
    <meta name="keywords" content="THRONE 3D управление освещением, THRONE 3D система умный дом, THRONE 3D технология умный дом, THRONE 3D оборудование умный дом, THRONE 3D умный дом купить, THRONE 3D умный дом цена, THRONE 3D умный дом стоимость, THRONE 3D умный дом онлайн, THRONE 3D умный дом новейшие технологии, THRONE 3D умный дом новые технологии, THRONE 3D видеонаблюдение, THRONE 3D пожарная сигнализация, THRONE 3D охранная сигнализация, THRONE 3D управление жалюзи, THRONE 3D управление шторами" />
    <title>Умный дом ТРОН</title>
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.icon-large.min.css" rel="stylesheet" type="text/css">
    <!--link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"-->
    <link href="css/fixed-positioning.css" rel="stylesheet" type="text/css" />
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/tabulous.css" rel="stylesheet" type="text/css" />
    <!--link href="css/liquid-slider.css" rel="stylesheet" type="text/css" /-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">

    <link rel="stylesheet" href="js/flowplay/skin/functional.css">
    <? if ( !$detect->isMobile() ): ?>
        <link href="css/main.css" rel="stylesheet" type="text/css" />
    <? else: ?>
        <link href="css/main_mobile.css" rel="stylesheet" type="text/css" />
    <? endif; ?>

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1651187625124904');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1651187625124904&ev=PageView&noscript=1"
            /></noscript>
    <!-- Facebook Conversion Code for Leads - Throne.pro 1 -->
    <script>(function() {
        var _fbq = window._fbq || (window._fbq = []);
        if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
        }
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', '6026367573705', {'value':'0.00','currency':'USD'}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6026367573705&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->


</head>

<body class="loading">
<img src="images/phone_tube.png" alt="" class="callback_fix_btn" data-toggle="modal" data-target="#myModal"
     onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;" />
<div class="frame">
    <div id="head" class=" hidden-xs">
        <div id="langs" style="visibility: hidden">
            <span class="active">Ru</span>
            <span><a href="/en">En</a></span>
        </div>

        <a id="logo" href="/" >THRONE Project</a>

        <div class="callback visible-lg visible-md">
            <span class="callback_button" data-toggle="modal" data-target="#myModal"
                  onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Заказать обратный звонок</span>
            <span class="callback_contacts"><a href="mailto:office@throne.pro" target="_blank">office@throne.pro</a> или +7 (495) 255-0-777</span>
        </div>

        <ul id="top_menu_ext">
            <li><a href="installation.html" title="Как мы работаем">Как мы работаем</a></li>
            <li><a href="developers.html" title="Девелоперам">Девелоперам</a></li>
            <!--li><a href="partners.html" title="Партнерство">Партнерство</a></li-->
            <li><a href="about.html" title="О компании">О компании</a></li>
        </ul>

    </div>

    <div id="head" class=" visible-xs" >
        <nav class="navbar" id="top_menu_ext" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a id="logo" href="/" >THRONE Project</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" id="top_menu_ext">
                        <li><a href="installation.html" title="Как мы работаем">Как мы работаем</a></li>
                        <li><a href="developers.html" title="Девелоперам">Девелоперам</a></li>
                        <li><a href="about.html" title="О компании">О компании</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div id="slide-1" data-slide="1" class="frame animation" >
    <? //if(!$detect->isMobile()): ?>
        <div class="bcg "
                >

            <div id="slide1-text"
                 data-anchor-target="#slide-1"
                 data-50-top="opacity: 0"
                 data-top="opacity: 1;"
                 data-center="opacity: 0"
                    >
            </div>

            <div id="interier" class="homeSlide"
                 data-anchor-target="#slide-1"
                 data-10-top="position: relative;  transform: scale(1);"
                 data-top="position: fixed;   "
                 data--25p-top=""
                 data-90p-bottom="opacity: 1"
                 data-bottom="position: absolute;  transform: scale(10); opacity: 0;"
                    >
            </div>

            <div id="slide1_text_wrap" class="homeSlide"
                 data-anchor-target="#slide-1"
                 data-10-top="position: absolute; top: 0;  "
                 data-top="position: fixed; top: 0;  "
                 data-10p-bottom=""
                 data-90p-bottom=""
                 data-1-bottom="top: 0;"
                 data-bottom="position: absolute; opacity: 1; top: 50%; "
                    >
                <h1 id="slogan">Лучшее решение <nobr>"Умного дома"</nobr> на&nbsp;основе <nobr>3D-интерфейса</nobr> и&nbsp;сервис по&nbsp;его установке</h1>

                <div class="text-center">
                    <span>
                    <nobr>"Умный дом"</nobr> в исполнении "<span class="capital">ТРОН</span> Проект" &mdash; это набор совершенно понятных функций,
                        которые действительно нужны в&nbsp;повседневной жизни:
                    <a href="#tabs-1" data-slide="4" class="inner_anchor" title="Управление освещением">управление освещением</a> вашего жилища, <a href="#tabs-2" data-slide="4" class="inner_anchor" title="Управление климатом" >управление климатом</a>
                    и <a data-slide="4" href="#tabs-3" class="inner_anchor" title="Управление системой безопасности">системой безопасности</a>, домофония, видеонаблюдение и&nbsp;другие системы. Просто они сделаны по-современному
                    и&nbsp;управляются через единый <nobr>3D-интерфейс</nobr> со&nbsp;смартфона или планшета.
                    Безопасность, комфорт  и&nbsp;энергосбережение &mdash; вот что дает владельцам система <nobr>"умный дом"</nobr>.
                        </span>

                    <!--“Умный дом” в исполнении “ТРОН Проект” – это набор совершенно понятных функций, которые действительно нужны в повседневной жизни:
                    ,управление освещением вашего жилища, управление климатом и системой безопасности, домофония, видеонаблюдение и другие системы.
                    Просто они сделаны по-современному и управляются через единый 3D-интерфейс со смартфона или планшета.

                    Безопасность, комфорт  и энергосбережение - вот что дает владельцам система “умный дом”. -->


                </div>
            </div>
            <div id="ipad_wrap" class="homeSlide"
                 data-anchor-target="#slide-1"
                 data-10-top="position: absolute; top: 0; "
                 data-top=" position: fixed; top: 0  "
                 data--25p-top=""
                 data-1-bottom="top: 0"
                 data-bottom="position: absolute; top: 50%;"
                    >
                <div id="interior_ipad"
                     data-anchor-target="#slide-1"
                     data-10-top="transform: scale(0.04); opacity: 1 "
                     data--25p-top=""
                     data-bottom="transform: scale(0.5) "
                        >
                    <!--iframe data-anchor-target="#slide-1" src="https://player.vimeo.com/video/129051743" width="100%" height="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe-->
                    <!--div id="red_square" ></div-->
                    <video id="screendemo" loop="loop"
                           data-anchor-target="#slide-1"
                           data-top="transform: scale(0.71); opacity: 1 " >
                        <source src="/uploads/videos/costa.webm" type="video/webm">
                        <!--source src="/uploads/videos/costa.mp4" type="video/mp4"-->
                    </video>

                </div>

                <!--div id="play_demo"
                     data-anchor-target="#slide-1"
                     data-top="opacity: 0; transform: translate(-100%, -10%) scale(0)"
                     data-100-bottom=""
                     data-50-bottom="opacity: 1;  transform: translate(0, -10%) scale(0.75)"
                        >
                    <img src="images/movie_icon.png" style="width: 50%" alt=""/>
                </div-->
                <div id="play_demo"
                     data-anchor-target="#slide-1"
                     data-top="opacity: 0; transform: translate(-100%, -10%) scale(0)"
                     data-100-bottom=""
                     data-50-bottom="opacity: 1;  transform: translate(0, -10%) scale(0.75)"
                        >

                </div>
                <div id="play_demo_text"
                     data-anchor-target="#slide-1"
                     data-top="opacity: 0; transform: translate(200%, -10%) scale(0)"
                     data-100-bottom=""
                     data-50-bottom="opacity: 1;  transform: translate(65%, -10%) scale(1)"
                        >
                    Посмотрите<br>
                    видео<br>
                    работы<br>
                    интерфейса!
                </div>
            </div>

        </div>

    <? //else: ?>

        <!--div class="bcg visible-tablet">
            <div id="interier" class="homeSlide">
                <h1 id="slogan">Лучшее решение <nobr>"Умного дома"</nobr> на&nbsp;основе <nobr>3D-интерфейса</nobr> и&nbsp;сервис по&nbsp;его установке</h1>
                <div class="text-center">
                    <span>
                    <nobr>"Умный дом"</nobr> в исполнении "<span class="capital">ТРОН</span> Проект" &mdash; это набор совершенно понятных функций, которые действительно нужны
                    в&nbsp;повседневной жизни:
                    управление освещением вашего жилища, управление климатом, домофония, видеонаблюдение и&nbsp;другие системы. Просто они сделаны по-современному
                    и&nbsp;управляются через единый <nobr>3D-интерфейс</nobr> со&nbsp;смартфона или планшета.
                    Безопасность, комфорт  и&nbsp;энергосбережение &mdash; вот что дает владельцам система <nobr>"умный дом"</nobr>.
                        </span>
                </div>
            </div>

            <div id="ipad_wrap" class="homeSlide">
                <div id="interior_ipad">
                    <div class="flowplayer " id="screendemo" data-swf="flowplayer.swf" >
                        <video>
                            <source type="video/webm" src="/uploads/videos/costa.webm">
                            <source type="video/mp4" src="https://stream.flowplayer.org/bauhaus.mp4">
                        </video>
                    </div>
                </div>

                <div id="play_demo">

                </div>
                <div id="play_demo_text">
                    Посмотрите<br>
                    видео<br>
                    работы<br>
                    интерфейса!
                </div>
            </div>
        </div-->
    <? //endif; ?>


</div>

<div id="slide-2" data-slide="2" class="frame">
    <h1 class="visible-md visible-lg">Почему "Умный&nbsp;дом"<br>
        <nobr>от "<span class="capital">ТРОН</span> Проект"</nobr> &mdash; лучшее решение?
    </h1>
    <h1 class="visible-sm visible-xs">Почему "Умный&nbsp;дом"<br>
        <nobr>от "<span class="capital">ТРОН</span> Проект"</nobr> &mdash; лучшее решение?
    </h1>
    <div class="table visible-lg visible-md" id="advantages">
        <div class="table_row">
            <div class="table_cell">
                <div>
                    <h4>Революционное решение на&nbsp;основе <nobr>3D-технологии</nobr></h4>
                    <p>Единый <nobr>3D-интерфейс</nobr> для беспроводного управления освещением и&nbsp;шторами, климатом,
                    системами безопасности, мультимедиа и&nbsp;другими системами "умного&nbsp;дома".
                    </p>
                </div>
                <div>
                    <h4>Любые масштабы зданий</h4>
                    <p>Система может управлять небольшой квартирой или целой резиденцией. Количество подключаемых
                        устройств "Умного дома", а&nbsp;также смартфонов и&nbsp;планшетов не&nbsp;ограничено!</p>
                </div>
                <div>
                    <h4>Послепродажная поддержка</h4>
                    <p>Возможность дальнейшей модификации и&nbsp;модернизации системы. Пожизненная поддержка производителем.
                        Гарантия на&nbsp;оборудование 3&nbsp;года, гарантия на&nbsp;программное обеспечение THRONE - пожизненно.</p>
                </div>
            </div>
            <div class="table_cell">
                <img src="images/advantages_center.jpg" class="img-responsive" alt="Преимущества 'умного дома' с 'ТРОН Проект'" title="Преимущества 'умного дома' с 'ТРОН Проект'"/>
                <span class="callback_button" data-toggle="modal" data-target="#myModal"
                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Начать проект</span>
            </div>
            <div class="table_cell">
                <div>
                    <h4>Уникальная простота и наглядность</h4>
                    <p>С интерфейсом THRONE 3D Control легко может управиться даже ребенок.
                        Научиться работать с&nbsp;ним занимает 5&nbsp;минут. Попробуйте <nobr>Демо-версию</nobr> THRONE для iOS или Android
                    (подходит под&nbsp;любые размеры экрана).</p>
                    <p>
                        <a href="#" class="ios_throne_app" data-toggle="modal" data-target="#myAppStoreModal">THRONE App</a><br>
                        <a href="https://play.google.com/store/apps/details?id=com.throne.project28.demo.nexus" class="android_throne_app" target="_blank">THRONE App</a>
                    </p>
                </div>

                <div>
                    <h4>Сертифицированная установка</h4>
                    <p>Проектные решения, отработанные на&nbsp;десятках объектов. Гарантированное качество проводимых работ.
                        Аудит и&nbsp;шеф-монтаж. Использование правильных материалов и&nbsp;компонентов. Современный проект-менеджемент.<br>
                        <a href="installation.html">Подробнее</a>
                    </p>

                </div>

            </div>
        </div>
    </div>
    <div id="advantages" class="visible-sm visible-xs">
        <div class="table">
            <div class="table_row">
                <div class="table_cell">
                    <img src="images/advantages_center.jpg" class="img-responsive" alt="Преимущества 'умного дома' с 'ТРОН Проект'" title="Преимущества 'умного дома' с 'ТРОН Проект'"/>
                </div>
            </div>
            <div class="table_row">
                <div class="table_cell">
                    <div>
                        <h4>Революционное решение на&nbsp;основе <nobr>3D-технологии</nobr></h4>
                        <p>Единый <nobr>3D-интерфейс</nobr> для беспроводного управления освещением и&nbsp;шторами, климатом,
                        системами безопасности, мультимедиа и&nbsp;другими системами "умного&nbsp;дома".
                        </p>
                    </div>

                    <div>
                        <h4>Любые масштабы зданий</h4>
                        <p>Система может управлять небольшой квартирой или целой резиденцией. Количество подключаемых
                            устройств "Умного дома", а&nbsp;также смартфонов и&nbsp;планшетов не&nbsp;ограничено!</p>
                    </div>

                    <div>
                        <h4>Послепродажная поддержка</h4>
                        <p>Возможность дальнейшей модификации и&nbsp;модернизации системы. Пожизненная поддержка производителем.
                            Гарантия на&nbsp;оборудование 3&nbsp;года, гарантия на&nbsp;программное обеспечение THRONE - пожизненно.</p>
                    </div>

                    <div>
                        <h4>Уникальная простота и наглядность</h4>
                        <p>С интерфейсом THRONE 3D Control легко может управиться даже ребенок.
                            Научиться работать с&nbsp;ним занимает 5&nbsp;минут. Попробуйте <nobr>Демо-версию</nobr> THRONE для iOS или Android
                        (подходит под&nbsp;любые размеры экрана).</p>
                        <p class="app_links_container">
                            <a href="#" class="ios_throne_app" data-toggle="modal" data-target="#myAppStoreModal">THRONE App</a>
                            <a href="https://play.google.com/store/apps/details?id=com.throne.project28.demo.nexus" class="android_throne_app" target="_blank">THRONE App</a>
                        </p>
                    </div>

                    <div>
                        <h4>Сертифицированная установка</h4>
                        <p>Проектные решения, отработанные на&nbsp;десятках объектов. Гарантированное качество проводимых работ.
                            Аудит и&nbsp;шеф-монтаж. Использование правильных материалов и&nbsp;компонентов. Современный проект-менеджемент.<br>
                            <a href="installation.html">Подробнее</a>
                        </p>
                    </div>

                    <span class="callback_button" data-toggle="modal" data-target="#myModal"
                          onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Начать проект</span>
                </div>
            </div>
        </div>


    </div>
    <div class="bottom_line"></div>
</div>

<div id="slide-3" data-slide="3" class=" frame">


    <div class="bcg" data-anchor-target="#slide-3" data-bottom-top="position: relative;  bottom: 0px;  " data--52-bottom="position: absolute;  bottom: 0px;">

        <div class="skrollr_el" id="floor" data-anchor-target="#slide-3" ></div>
        <div class="skrollr_el" id="floor_back" data-anchor-target="#slide-3"></div>
        <div class="skrollr_el" id="floor_shadow" data-anchor-target="#slide-3" ></div>

        <div class="skrollr_el" id="top_buttons" data-anchor-target="#slide-3"></div>
        <div class="skrollr_el" id="top_buttons_shadows" data-anchor-target="#slide-3" ></div>

        <div class="skrollr_el" id="light_panel_shadows" data-anchor-target="#slide-3" ></div>
        <div class="skrollr_el" id="light_panel" data-anchor-target="#slide-3"></div>
        <div class="skrollr_el" id="light_zones" data-anchor-target="#slide-3"></div>

        <div class="skrollr_el" id="climate_panel" data-anchor-target="#slide-3"></div>
        <div class="skrollr_el" id="climate_panel_shadows" data-anchor-target="#slide-3"></div>
        <div class="skrollr_el" id="climate_zones" data-anchor-target="#slide-3"></div>

        <div class="skrollr_el" id="alarm_panel" data-anchor-target="#slide-3"></div>
        <div class="skrollr_el" id="alarm_cameras" data-anchor-target="#slide-3"></div>
        <div class="skrollr_el" id="alarm_panel_shadows" data-anchor-target="#slide-3"></div>
        <div class="skrollr_el" id="alarm_windows" data-anchor-target="#slide-3"></div>

        <div class="hsContainer">
            <div class="hsContent">
                <h1>Простое и понятное управление</h1>
                <p class="text-center" id="descr">
                    Для управления "умным&nbsp;домом" мы предлагаем клиентам интерфейс THRONE 3D Control, не имеющий аналогов в&nbsp;мире.
                    Он позволяет следить за&nbsp;состоянием всего дома и&nbsp;управлять различными системами с&nbsp;одного или
                    нескольких смартфонов или планшетов. Вы можете контролировать каждое устройство "умного&nbsp;дома" по&nbsp;отдельности,
                    либо управлять комнатой, целым этажом или даже всем домом сразу. И&nbsp;это просто и&nbsp;наглядно, как
                    никогда, благодаря использованию в&nbsp;системе "<span class="capital">ТРОН</span>" <nobr>3D&dash;модели</nobr> вашего дома.

                </p>
                <p class="text-center" id="watch_video"><a href="http://www.youtube.com/watch?v=P8bqAepnccI" class="youtube">Смотреть видео</a><span id="watch_btn"></span>
                <div id="notes">
                    <div><img src="images/interface_icon.png" alt=""/><span id="note1">Понятный и легкий<br>интерфейс</span></div>
                    <div><img src="images/scale_icon.png" alt=""/><span id="note2">Управление объектами<br>любого масштаба</span></div>
                    <div><img src="images/dist_manage_icon.png" alt=""/><span id="note3">Дистанционное управление<br>с планшета или телефона</span></div>
                </div>
                <div id="slide2-ipad">
                    <img src="images/ipad_slide2.jpg"  alt=""/>
                </div>
                <div id="fake_tabs" align="center" width="100%">
                    <ul  data-anchor-target="#slide-3" data-bottom-top="visibility: hidden">
                        <li data-anchor-target="#slide-3" ><a href="#tabs-1" data-slide="4" title="" class="tabulous_active">Освещение</a></li>
                        <li data-anchor-target="#slide-3"><a href="#tabs-2" data-slide="4" title="">Климат</a></li>
                        <li data-anchor-target="#slide-3"><a href="#tabs-3" data-slide="4" title="">Безопасность</a></li>
                        <span class="tabulousclear"></span>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="slide-4" data-slide="4" class="frame">
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1" data-slide="4" title="">Освещение</a></li>
            <li><a href="#tabs-2" data-slide="4" title="">Климат</a></li>
            <li><a href="#tabs-3" data-slide="4" title="">Безопасность</a></li>
        </ul>
        <div id="tabs_container">
            <div id="tabs-1">
                <table>
                    <tbody>
                    <tr>
                        <td width="60%"><img src="images/light_manage.jpg" alt="Управление освещением" title="Управление освещением" class="img-responsive tab_main_img"  /></td>
                        <td width="40%">
                            <h2>Управление освещением</h2>
                            <p class="">
                                Задумайтесь: в&nbsp;вашем доме будет несколько десятков светильников. Как убедиться, что ни один из&nbsp;них не горит? Перед сном или отъездом
                                нужно обойти весь дом, чтобы всё проверить. Это надежный, но несколько устаревший метод для <nob>21-го</nob> века.</p>
                            <p>"Умный дом ТРОН" позволяет управлять отдельными светильниками либо группами освещения, а&nbsp;также отключать весь свет одним нажатием на&nbsp;экран.
                                Вы можете настраивать яркость и&nbsp;цвет в&nbsp;каждой комнате или зоне, а&nbsp;потом сохранять световую сцену самостоятельно прямо в&nbsp;интерфейсе
                                "ТРОН".</p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table>
                    <tr>
                        <td>
                            <img src="images/light_zone_management.png" alt="Централизованное и зональное управление" title="Централизованное и зональное управление"/>
                            <span>Централизованное<br>и&nbspзональное<br>управление</span>
                        </td>
                        <td>
                            <img src="images/light_slide_control.png" alt="Плавная регулировка яркости освещения" title="Плавная регулировка яркости освещения"/>
                            <span>Плавная регулировка<br>яркости</span>
                        </td>
                        <td>
                            <img src="images/light_scene_saving.png" alt="Сохранение пользовательских сцен освещения" title="Сохранение пользовательских сцен освещения"/>
                            <span>Сохранение<br>пользовательских<br>сцен</span>
                        </td>
                        <td>
                            <img src="images/light_curtains.png" alt="Затенение шторами, рольставнями и жалюзи" title="Затенение шторами, рольставнями и жалюзи"/>
                            <span>Затенение шторами,<br>рольставнями<br>и&nbspжалюзи</span>
                        </td>
                        <td>
                            <img src="images/light_part_management.png" alt="Полное или частичное управление освещением" title="Полное или частичное управление освещением"  />
                            <span>Полное или частичное<br>управление</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="tabs-2">
                <table>
                    <tbody>
                    <tr>
                        <td width="60%"><img src="images/climate_management.jpg" class="img-responsive tab_main_img" alt="Управление климатом" title="Управление климатом"/></td>
                        <td>
                            <h2>Управление климатом</h2>
                            <p class="">
                                Климат-контроль давно стал стандартной опцией при&nbsp;покупке автомобиля. Почему же тогда отказывать себе в&nbsp;том же самом при&nbsp;обустройстве дома?</p>
                            <p>С помощью "умного дома ТРОН" вы сможете управлять климатическим оборудованием дома в&nbsp;любое время из&nbsp;любого места. Можно заранее, пока
                                вы едете к&nbsp;дому, включить теплые полы, чтобы помещения прогрелись; или настроить работу кондиционеров - чтобы жарким летом в&nbsp;доме ждала прохлада.</p>
                            <p>Можно посмотреть тепловую карту дома и, конечно, задать целевую температуру, которую система будет поддерживать автоматически.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table>
                    <tr>
                        <td>
                            <img src="images/climate_condition.jpg" alt="Управление кондиционированием" title="Управление кондиционированием"/>
                            <span>Кондиционирование</span>
                        </td>
                        <td>
                            <img src="images/climate_ventil.jpg" alt="Управление вентиляцией" title="Управление вентиляцией"/>
                            <span>Вентиляция</span>
                        </td>
                        <td>
                            <img src="images/climate_heating.jpg" alt="Управление отоплением" title="Управление отоплением"/>
                            <span>Отопление</span>
                        </td>
                        <td>
                            <img src="images/climate_warm_floor.jpg" alt="Управление теплыми полами" title="Управление теплыми полами"/>
                            <span>Теплые полы</span>
                        </td>
                        <td>
                            <img src="images/climate_thermostate.jpg" alt="Управление термостатами" title="Управление термостатами"/>
                            <span>Термостаты</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="tabs-3">
                <table>
                    <tbody>
                    <tr>
                        <td width="60%"><img src="images/slide4_bg.jpg" class="img-responsive tab_main_img" alt="Управление системой безопасности" title="Управление системой безопасности"/></td>
                        <td>
                            <h2>Управление системой безопасности</h2>
                            <p>
                                "Умный дом ТРОН" позволяет поставить на&nbsp;охрану или отключить сигнализацию сразу во&nbsp;всем здании, по&nbsp;этажам или по&nbsp;отдельным помещениям.
                                Уведомления о&nbsp;событиях приходят с&nbsp;указанием места происшествия <nobr>на 3D-модели</nobr>.
                            </p>
                            <p>С помощью "ТРОН" вы можете посмотреть видео с&nbsp;камер наблюдения, получить уведомления о&nbsp;пожаре, протечке воды, утечке газа,
                                проникновении (взломе).</p>
                            <p>А еще к&nbsp;"ТРОН" можно подключить домофон, и&nbsp;тогда вы сможете видеть своих гостей и&nbsp;открывать им дверь прямо
                                с&nbsp;мобильного телефона или планшета.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table>
                    <tr>
                        <td>
                            <img src="images/security_alarm.jpg" alt="Охранная и пожарная сигнализация" title="Охранная и пожарная сигнализация"/>
                            <span>Охранная<br>и пожарная<br>сигнализация</span>
                        </td>
                        <td>
                            <img src="images/security_sensors.jpg" alt="Датчики движения, открытия окон и дверей" title="Датчики движения, открытия окон и дверей"/>
                            <span>Датчики движения,<br>открытия окон<br>и дверей</span>
                        </td>
                        <td>
                            <img src="images/security_emergency.jpg" alt="Защита от протечек и других нештатных ситуаций" title="Защита от протечек и других нештатных ситуаций"/>
                            <span>Защита от протечек<br>и других нештатных<br>ситуаций</span>
                        </td>
                        <td>
                            <img src="images/security_notification.jpg" alt="Оповещение на охранные пульты и через SMS" title="Оповещение на охранные пульты и через SMS"/>
                            <span>Оповещение<br>на охранные пульты<br>и через SMS</span>
                        </td>
                        <td>
                            <img src="images/security_video.jpg" alt="Любое количество IP-камер видеонаблюдения" title="Любое количество IP-камер видеонаблюдения"/>
                            <span>Любое количество<br>IP-камер<br>видеонаблюдения</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="bottom_line"></div>
</div>

<div id="slide-5" data-slide="5" class=" frame">
    <h2 class="text-center">Расширение интеграции</h2>
    <div class="table" id="integr_table">
        <div class="table_row">
            <div class="table_cell">
                <div class="integr_description">
                    Открытие ворот или&nbsp;дверей не&nbsp;вставая с&nbsp;дивана
                </div>
                <img src="images/integr_open_gates.png" alt=""/>
                <p>Открытие дверей<br>или&nbsp;ворот</p>

            </div>
            <div class="table_cell">
                <div class="integr_description">
                    Все погодные условия на&nbsp;экране планшета или&nbsp;смартфона
                </div>
                <img src="images/integr_weather_stations.png" alt=""/>
                <p>Погодные<br>станции</p>
            </div>
            <div class="table_cell">
                <div class="integr_description">
                    <p>Управление зональным поливом газона</p>
                </div>
                <img src="images/integr_watering_systems.png" alt=""/>
                <p>Поливочные<br>системы</p>
            </div>
            <div class="table_cell">
                <div class="integr_description">
                    Управление музыкой для&nbsp;каждой комнаты
                </div>
                <img src="images/integr_mediaroom.png" alt=""/>
                <p>Медиа мультирум</p>
            </div>
            <div class="table_cell ">
                <div class="integr_description">
                    Настройка температуры воды в&nbsp;бассейне или&nbsp;сауне
                </div>
                <img src="images/integr_pool.png" alt=""/>
                <p>Сауны<br>и&nbsp;бассейны</p>
            </div>
        </div>
    </div>

    <h2 class="text-center">Оборудование для системы<br>"Умный дом ТРОН"</h2>
    <div class="table hidden-xs" id="equipment" >
        <div class="table_row">
            <div class="table_cell">
                <p>В качестве аппаратной части системы мы используем оборудование европейского стандарта KNX. В&nbsp;ассоциацию KNX на&nbsp;сегодня входят более
                    400 производителей оборудования, каждый из&nbsp;которых проходит строгую сертификацию.
                    Поэтому наши клиенты всегда получают предложение, оптимально сбалансированное по&nbsp;таким показателям как Цена / Дизайн / Надежность.</p>
                <p>Все сенсоры, датчики, выключатели, исполнительные и&nbsp;системные устройства сертифицированы и&nbsp;прошли проверку на&nbsp;безопасность, надежность и&nbsp;долговечность.</p>
            </div>
            <div class="table_cell" style="width: 35%;">
                <img src="images/equipment.jpg" class="img-responsive" />
            </div>
        </div>
    </div>

    <div class="table visible-xs" id="equipment" >
        <div><img src="images/equipment.jpg" class="img-responsive" /></div>
        <p>В качестве аппаратной части системы мы используем оборудование европейского стандарта KNX. В&nbsp;ассоциацию KNX на&nbsp;сегодня входят более
            400 производителей оборудования, каждый из&nbsp;которых проходит строгую сертификацию.
            Поэтому наши клиенты всегда получают предложение, оптимально сбалансированное по&nbsp;таким показателям как Цена / Дизайн / Надежность.</p>
        <p>Все сенсоры, датчики, выключатели, исполнительные и&nbsp;системные устройства сертифицированы и&nbsp;прошли проверку на&nbsp;безопасность, надежность и&nbsp;долговечность.</p>
    </div>

    <div class="text-center">
        <!--a href="#" class="ios_throne_app" data-toggle="modal" data-target="#myAppStoreModal">THRONE App</a>
        <a href="https://play.google.com/store/apps/details?id=com.throne.project28.demo.nexus" class="android_throne_app" target="_blank">THRONE App</a-->
        <span class="order_button" data-toggle="modal" data-target="#myModal"
              onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Запросить спецификацию</span>
    </div>

    <h2 class="text-center" id="know_more_title">Хотите узнать больше?</h2>
    <div id="know_more_tabs" class="hidden-xs">
        <ul class="nav nav-pills nav-justified">
            <li role="presentation" class="active"><a href="#about_tab">О компании "ТРОН&nbsp;Проект"</a></li>
            <li role="presentation"><a href="#how_works">Как мы работаем</a></li>
            <li role="presentation"><a href="#price">Стоимость "умного&nbsp;дома"</a></li>
            <li role="presentation"><a href="#discuss">Давайте всё обсудим!</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="about_tab" aria-labelledby="home-tab">
                <p>"ТРОН Проект" - международная инженерная компания.
                    Мы проектируем и&nbsp;устанавливаем системы автоматизации домов,
                    офисов и&nbsp;индустриальных зданий.</p>
                <a href="about.html" title="О компании 'ТРОН Проект'">Узнать больше</a>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="how_works" aria-labelledby="profile-tab">
                <p>Делаем <strong>бесплатно демо-версию</strong> вашего "умного дома" и&nbsp;предварительный обсчёт проекта.
                    Проектируем систему. Поставляем оборудование. Монтируем. Запускаем.
                    Гарантия на оборудование - 3 года. Гарантия на&nbsp;софт - пожизненно.</p>
                <a href="installation.html">Подробнее</a>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="price" aria-labelledby="home-tab">
                <p>Как хороший костюм шьётся по&nbsp;фигуре клиента, так и&nbsp;система "умный дом" проектируется по&nbsp;архитектуре помещения.
                    Начните с&nbsp;отправки нам планов дома, это обеспечит вам более точный расчет, чем при&nbsp;помощи каких-либо онлайн-калькуляторов.
                    Примеры проектов с ценами вы можете посмотреть в разделе "<a href="about.html" title="О компании">О компании</a>".</p>
                <p align="center"><span class="order_button" data-toggle="modal" data-target="#myModal"
                                        onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Запросить обсчёт</span></p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="discuss" aria-labelledby="profile-tab">
                <p>Оставьте номер своего телефона, мы быстро свяжемся с&nbsp;вами и&nbsp;проговорим все вопросы.
                    Мы никогда не&nbsp;рискуем отношениями с&nbsp;клиентами, поэтому мы не&nbsp;займем у&nbsp;вас много времени. И&nbsp;ни&nbsp;за&nbsp;что не передадим ваши контактные данные третьим лицам.</p>
                <p align="center"><span class="order_button" data-toggle="modal" data-target="#myModal"
                                        onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Заказать звонок</span></p>
            </div>
        </div>
    </div>

    <div class="visible-xs">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            О компании "ТРОН Проект"
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        "ТРОН Проект" - международная инженерная компания. Мы проектируем и&nbsp;устанавливаем системы автоматизации домов,
                        офисов и&nbsp;индустриальных зданий. <a href="about.html" title="О компании 'ТРОН Проект'">Узнать больше</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Как мы работаем
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <p>Делаем <strong>бесплатно демо-версию</strong> вашего "умного дома" и&nbsp;предварительный обсчёт проекта.</p>
                        <p>Проектируем систему. Поставляем оборудование. Монтируем. Запускаем.</p>
                        <p>Гарантия на оборудование - 3 года. Гарантия на&nbsp;софт - пожизненно.</p>
                        <a href="installation.html">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Стоимость "умного дома"
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <p>Как хороший костюм шьётся по&nbsp;фигуре клиента, так и&nbsp;система "умный дом" проектируется по&nbsp;архитектуре помещения.
                            Начните с&nbsp;отправки нам планов дома, это обеспечит вам более точный расчет, чем при&nbsp;помощи каких-либо онлайн-калькуляторов.</p>
                        <p>Примеры проектов с ценами вы можете посмотреть в <a href="about.html" title="О компании">разделе "О компании"</a>.</p>
                        <p><span class="order_button" data-toggle="modal" data-target="#myModal">Запросить обсчёт</span></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Давайте всё обсудим!
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        <p>Оставьте номер своего телефона, мы быстро свяжемся с&nbsp;вами и&nbsp;проговорим все вопросы.</p>
                        <p>Мы никогда не&nbsp;рискуем отношениями с&nbsp;клиентами, поэтому мы не&nbsp;займем у&nbsp;вас много времени. И&nbsp;ни&nbsp;за&nbsp;что не передадим ваши контактные данные третьим лицам.</p>
                        <p><span class="order_button" data-toggle="modal" data-target="#myModal">Заказать звонок</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<footer class="hidden-xs">
    &copy; 2015 <span id="brand">THRONE Project</span>
    <ul id="bottom_menu">
        <li><a href="installation.html" title="Как мы работаем">Как мы работаем</a></li>
        <li><a href="developers.html" title="Девелоперам">Девелоперам</a></li>
        <!--li><a href="partners.html" title="Партнерство">Партнерство</a></li-->
        <li><a href="about.html" title="О компании">О компании</a></li>
    </ul>

</footer>

<footer class="visible-xs">
    <ul id="bottom_menu">
        <li><a href="installation.html" title="Как мы работаем">Как мы работаем</a></li>
        <li><a href="developers.html" title="Девелоперам">Девелоперам</a></li>
        <!--li><a href="partners.html" title="Партнерство">Партнерство</a></li-->
        <li><a href="about.html" title="О компании">О компании</a></li>
    </ul>

    <div class="copy">&copy; 2015 <span id="brand">THRONE Project</span></div>
</footer>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btn-lg" data-dismiss="modal" aria-label="Close">
                    <!--span aria-hidden="true">&times;</span-->
                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-7 col-xs-7">
                        <form action="" class=" callback_form">
                            <div class="form-group">
                                <label for="inputName" class="control-label">Имя</label>
                                <div class=" ">
                                    <input type="text" class="form-control" id="inputName" name="inputNamee">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone" class="control-label">Телефон<sup>&#42;</sup></label>
                                <div class=" ">
                                    <input type="text" class="form-control" id="inputPhone" name="inputPhone">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <button type="button" class="send-btn">Отправить</button>
                                    <div class="footnote">Мы перезвоним<br>в течение часа</div>
                                </div>
                            </div>
                            <input type="hidden" name="inputTheme" value="Обратный звонок"/>
                        </form>
                        <div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            <span id="error"></span>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-5 col-sm-offset-1  cb_form_right">
                        <img src="images/phone_tube.png" alt="">
                        <div>Смелее! Это вас ни к&nbsp;чему не обязывает.</div>
                        <div id="padlock">
                            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                            <span>Мы никому не передадим ваш номер!</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="footnote">
                            Или вы можете <a href="mailto:office@throne.pro">написать нам</a> сами!
                            Просто отправьте нам планы помещений вашего объекта, и&nbsp;мы сделаем предварительный расчет. <strong>Это бесплатно</strong>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mySuccessModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btn-lg" data-dismiss="modal" aria-label="Close">
                    <!--span aria-hidden="true">&times;</span-->
                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="send_result">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myAppStoreModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btn-lg" data-dismiss="modal" aria-label="Close">
                    <!--span aria-hidden="true">&times;</span-->
                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <p>Версия для iOS готовится к релизу. Пожалуйста, оставьте свой email, и мы сообщим вам, как только она станет доступна.</p>
                        <form action="" class="form-horizontal ios_form">
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 col-xs-4 control-label">Email</label>
                                <div class="col-sm-8 col-xs-8 ">
                                    <input type="text" class="form-control" id="inputEmail" name="inputEmail">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-xs-offset-4 col-sm-8 col-xs-8">
                                    <button type="button" class="send-ios-btn">Отправить</button>
                                </div>
                            </div>
                            <input type="hidden" name="inputTheme" value="iOS version"/>
                        </form>

                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            <span id="ios-error"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/imagesloaded.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/vendor/modernizr-2.7.1.min.js"></script>
<? if(!$detect->isMobile()): ?>
    <script type="text/javascript" src="js/skrollr.min.js"></script>
<? endif; ?>
<script type="text/javascript" src="js/retina.min.js"></script>
<script type="text/javascript" src="js/tabulous.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
<!--script type="text/javascript" src="js/jquery.liquid-slider.js"></script-->
<script type="text/javascript" src="js/bootstrap.youtubepopup.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>

<script type="text/javascript" src="js/flowplay/flowplayer.min.js"></script>

<? if ( !$detect->isMobile() ): ?>
    <script type="text/javascript" src="js/main.js"></script>
<? else: ?>
    <script type="text/javascript" src="js/main_mobile.js"></script>
<? endif; ?>


<!--script src="js/jquery-2.1.3.min.js"></script-->
<!--script src="js/jquery-ui.js"></script-->

<!--script type="text/javascript" src="js/enquire.min.js"></script-->


<!-- smooth scrolling -->
<!--script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script-->
<!-- /smooth scrolling -->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-35863800-2', 'auto');
    ga('send', 'pageview');

</script>

<!-- Google Code for Throne.pro callback click Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script type="text/javascript">
    /* <![CDATA[ */
    goog_snippet_vars = function() {
        var w = window;
        w.google_conversion_id = 986593225;
        w.google_conversion_label = "YhJSCOPJ8V0Qye-41gM";
        w.google_remarketing_only = false;
    }
    // DO NOT CHANGE THE CODE BELOW.
    goog_report_conversion = function(url) {
        goog_snippet_vars();
        window.google_conversion_format = "3";
        window.google_is_call = true;
        var opt = new Object();
        opt.onload_callback = function() {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        }
        var conv_handler = window['google_trackConversion'];
        if (typeof(conv_handler) == 'function') {
            conv_handler(opt);
        }
    }
    /* ]]> */
</script>
<script type="text/javascript"
        src="//www.googleadservices.com/pagead/conversion_async.js">
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter30996876 = new Ya.Metrika({id:30996876,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/30996876" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>

</html>