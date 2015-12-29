<?
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/Mobile_Detect.php';
$detect = new Mobile_Detect();

//$_SESSION['DEVICE'] = 'desktop';
//!$detect->isMobile() || $_SESSION['DEVICE'] = 'mobile';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <!--meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"-->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
    <meta name="HandheldFriendly" content="True"/>

    <link rel="alternate" hreflang="en" href="http://throne.pro/en">
    <link rel="alternate" hreflang="ru" href="http://throne.pro/ru">
    <link rel="alternate" hreflang="ar" href="http://throne.pro/arabic">

    <meta name="description" content="THRONE 3D умный дом " />
    <meta name="keywords" content="THRONE 3D управление освещением, THRONE 3D система умный дом, THRONE 3D технология умный дом, THRONE 3D оборудование умный дом, THRONE 3D умный дом купить, THRONE 3D умный дом цена, THRONE 3D умный дом стоимость, THRONE 3D умный дом онлайн, THRONE 3D умный дом новейшие технологии, THRONE 3D умный дом новые технологии, THRONE 3D видеонаблюдение, THRONE 3D пожарная сигнализация, THRONE 3D охранная сигнализация, THRONE 3D управление жалюзи, THRONE 3D управление шторами" />
    <title>Умный дом ТРОН</title>
    <link href="/css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.icon-large.min.css" rel="stylesheet" type="text/css">
    <!--link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"-->
    <link href="/css/fixed-positioning.css" rel="stylesheet" type="text/css" />
    <link href="/css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="/css/tabulous.css" rel="stylesheet" type="text/css" />
    <!--link href="css/liquid-slider.css" rel="stylesheet" type="text/css" /-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">

    <link href="/css/colorbox.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="/css/flexslider.css">

    <link rel="stylesheet" href="/js/flowplay/skin/functional.css">
    <link rel="stylesheet" href="/css/animate.css">

    <?php if ( !$detect->isMobile() ): ?>
        <link href="/css/main.css" rel="stylesheet" type="text/css" />
    <?php else: ?>
        <link href="/css/main_mobile.css" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
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

    <!-- Facebook Conversion Code for Оформление заказов - Иван Василенко 1 -->
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
        window._fbq.push(['track', '6029738348169', {'value':'0.00','currency':'RUB'}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6029738348169&amp;cd[value]=0.00&amp;cd[currency]=RUB&amp;noscript=1" /></noscript>

    <meta name="google-site-verification" content="CiMZRvE_Po9AR5n-FG4HtIYCSXeNkkCiP72C028BNy8" />
</head>

<body class="loading">
    <div id="cities">
        <div class="container">
            <div class="row">
                <div class="city_wrapper col-lg-8 col-md-7 col-sm-5 col-xs-12">
                    <img src="/images/geo-location.png" alt="">
                    <div class="btn-group">

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Москва <span class="my_caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li data-city="moscow"><a href="/ru/moscow">Москва</a></li>
                            <li data-city="yaroslavl"><a href="/ru/yaroslavl">Ярославль</a></li>
                        </ul>
                    </div>
                    <span id="city_moscow" class="visible">+7(495) 255-0777 </span>
                    <span id="city_yaroslavl" class="hidden">+7(4852) 77-06-77 </span>
                </div>
                <div class="callback_wrapper col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <span class="callback_contacts"><a href="mailto:office@throne.pro" target="_blank">office@throne.pro</a></span>
                    <span class="callback_button" data-toggle="modal" data-target="#myModal"
                          onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Заказать звонок</span>
                </div>
            </div>
        </div>
    </div>
    <img src="/images/phone_tube.png" alt="" class="callback_fix_btn" data-toggle="modal" data-target="#myModal"
         onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;" />
    <div class="frame">
        <div id="head" class="visible-lg visible-md">
            <div id="langs" class="form-group">
                <select class="form-control">
                    <option value="ru" selected>RU</option>
                    <option value="en">EN</option>
                    <option value="arabic">العربية</option>
                </select>
            </div>

            <a id="logo" href="/ru" >THRONE Project</a>

            <!--div class="callback visible-lg">
                <span class="callback_button" data-toggle="modal" data-target="#myModal"
                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Заказать обратный звонок</span>
                <span class="callback_contacts"><a href="mailto:office@throne.pro" target="_blank">office@throne.pro</a> или +7 (495) 255-0-777</span>
            </div-->

            <ul id="top_menu_ext">
                <li><a href="installation.html" title="Как мы работаем">Как мы работаем</a></li>
                <li><a href="developers.html" title="Девелоперам">Девелоперам</a></li>
                <!--li><a href="partners.html" title="Партнерство">Партнерство</a></li-->
                <li><a href="about.html" title="О компании">О компании</a></li>
                <li><span><a href="faq.html" title="Частые вопросы">Частые вопросы</a></span></li>
            </ul>

        </div>

        <div id="head" class="visible-sm visible-xs" >
            <nav class="navbar" id="top_menu_ext" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="logo" href="/ru" >THRONE Project</a>
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
                            <li><span><a href="faq.html" title="Частые вопросы">Частые вопросы</a></span></li>
                            <li>
                                <div id="langs" class="form-group">
                                    <select class="form-control">
                                        <option value="ru" selected>RU</option>
                                        <option value="en" >EN</option>
                                        <option value="arabic" >العربية</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="msg">
        <table class="new-year">
            <tr>
                <td><img src="/images/firework.gif" alt="" class="img-responsive"></td>
                <td><span>С Новым годом! В&nbsp;праздники мы работаем в&nbsp;обычном режиме</span></td>
                <td><img src="/images/firework.gif" alt="" class="img-responsive"></td>
            </tr>
        </table>
    </div>

    <div id="slide-1" data-slide="1" class="frame animation" >
        <?php if(!$detect->isMobile()): ?>

            <h1 id="slogan">Лучшее решение <nobr>"Умного дома"</nobr> на&nbsp;основе <nobr>3D-интерфейса</nobr> и&nbsp;сервис по&nbsp;его установке</h1>
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="/images/carousel/pic1.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Революционное решение на основе 3D-технологии</h2>
                            <p>Единый 3D-интерфейс для&nbsp;беспроводного управления освещением и&nbsp;шторами, климатом, системами безопасности, мультимедиа и&nbsp;другими системами "умного&nbsp;дома".</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic2.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Бесплатное 3D-демо вашего дома</h2>
                            <p>
                                Еще до&nbsp;заключения договора мы предлагаем клиенту демо-приложение, сделанное по&nbsp;планам его дома. По&nbsp;этому приложению заказчик системы может получить полное представление,
                                как будет работать его "умный&nbsp;дом". <strong>Это бесплатно</strong>.
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic3.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Любые масштабы зданий</h2>
                            <p>Система может управлять небольшой квартирой или целой резиденцией. Количество подключаемых устройств "Умного&nbsp;дома", а&nbsp;также смартфонов и&nbsp;планшетов не&nbsp;ограничено!</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic4.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Послепродажная поддержка</h2>
                            <p>Возможность дальнейшей модификации и&nbsp;модернизации системы. Пожизненная поддержка производителем. Гарантия на&nbsp;оборудование 3&nbsp;года, гарантия на&nbsp;программное обеспечение THRONE - пожизненно.</p>
                        </div>
                    </li>
                </ul>
            </div>


            <p class="text-center">
                <nobr>"Умный дом"</nobr> в исполнении "<span class="capital">ТРОН</span> Проект" &mdash; это набор совершенно понятных функций,<br>
                    которые действительно нужны в&nbsp;повседневной жизни

            </p>
            <div class="text-center" id="first_frame_factoids">
                <div>
                    <a href="#tabs-1" data-slide="4" class="inner_anchor light" title="Управление освещением">
                        система<br>"умного"<br>освещения<br>
                        <img src="/images/light_slide_control.png" alt=""/>
                    </a>
                </div>
                <div>
                    <a href="#tabs-2" data-slide="4" class="inner_anchor climate" title="Управление климатом" >
                        управление<br>и автоматизация<br>климата<br>
                        <img src="/images/climate_condition.jpg" alt=""/>
                    </a>
                </div>
                <div>
                    <a data-slide="4" href="#tabs-3" class="inner_anchor security" title="Управление системой безопасности">
                        системы<br>безопасности<br>и мониторинга<br>
                        <img src="/images/security_alarm.jpg" alt=""/>
                    </a>
                </div>
            </div>
            <p class="text-center">А также домофония, видеонаблюдение и&nbsp;другие системы. Просто они сделаны по-современному
               и&nbsp;управляются через единый <nobr>3D-интерфейс</nobr> со&nbsp;смартфона или планшета.
               Безопасность, комфорт  и&nbsp;энергосбережение &mdash; вот что дает владельцам система <nobr>"умный дом"</nobr>.
            </p>
            <div id="interior_ipad" class="flowplayer no-volume no-mute functional is-splash"
                style="background-image:url('/images/new_ipad222.jpg');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                background-color: #fff;">
                <!--img src="images/new_ipad.png" alt="" class="img-responsive"/-->
                <video id="screendemo" loop="loop"
                  >
                    <source src="/uploads/videos/sequence02.webm" type="video/webm">
                    <source src="/uploads/videos/sequence02.mp4" type="video/mp4">
                </video>
            </div>


        <?php else: ?>

            <h1 id="slogan">Лучшее решение <nobr>"Умного дома"</nobr> на&nbsp;основе <nobr>3D-интерфейса</nobr> и&nbsp;сервис по&nbsp;его установке</h1>

            <div class="flexslider visible-lg">
                <ul class="slides">
                    <li>
                        <img src="/images/carousel/pic1.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Революционное решение на основе 3D-технологии</h2>
                            <p>Единый 3D-интерфейс для&nbsp;беспроводного управления освещением и&nbsp;шторами, климатом, системами безопасности, мультимедиа и&nbsp;другими системами "умного&nbsp;дома".</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic2.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Бесплатное 3D-демо вашего дома</h2>
                            <p>Еще до&nbsp;заключения договора мы предлагаем клиенту демо-приложение, сделанное по&nbsp;планам его дома. По&nbsp;этому приложению заказчик системы может получить полное представление,
                                как будет работать его "умный&nbsp;дом". <strong>Это бесплатно</strong>.</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic3.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Любые масштабы зданий</h2>
                            <p>Система может управлять небольшой квартирой или целой резиденцией. Количество подключаемых устройств "Умного&nbsp;дома", а&nbsp;также смартфонов и&nbsp;планшетов не&nbsp;ограничено!</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic4.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Послепродажная поддержка</h2>
                            <p>Возможность дальнейшей модификации и&nbsp;модернизации системы. Пожизненная поддержка производителем. Гарантия на&nbsp;оборудование 3&nbsp;года, гарантия на&nbsp;программное обеспечение THRONE - пожизненно.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="flexslider visible-md">
                <ul class="slides">
                    <li>
                        <img src="/images/carousel/pic1-md.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Революционное решение на основе 3D-технологии</h2>
                            <p>Единый 3D-интерфейс для&nbsp;беспроводного управления освещением и&nbsp;шторами, климатом, системами безопасности, мультимедиа и&nbsp;другими системами "умного&nbsp;дома".</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic2-md.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Бесплатное 3D-демо вашего дома</h2>
                            <p>Еще до&nbsp;заключения договора мы предлагаем клиенту демо-приложение, сделанное по&nbsp;планам его дома. По&nbsp;этому приложению заказчик системы может получить полное представление,
                                как будет работать его "умный&nbsp;дом". <strong>Это бесплатно</strong>.</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic3-md.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Любые масштабы зданий</h2>
                            <p>Система может управлять небольшой квартирой или целой резиденцией. Количество подключаемых устройств "Умного&nbsp;дома", а&nbsp;также смартфонов и&nbsp;планшетов не&nbsp;ограничено!</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic4-md.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Послепродажная поддержка</h2>
                            <p>Возможность дальнейшей модификации и&nbsp;модернизации системы. Пожизненная поддержка производителем. Гарантия на&nbsp;оборудование 3&nbsp;года, гарантия на&nbsp;программное обеспечение THRONE - пожизненно.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="flexslider visible-sm">
                <ul class="slides">
                    <li>
                        <img src="/images/carousel/pic1-sm.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Революционное решение на основе 3D-технологии</h2>
                            <p>Единый 3D-интерфейс для&nbsp;беспроводного управления освещением и&nbsp;шторами, климатом, системами безопасности, мультимедиа и&nbsp;другими системами "умного&nbsp;дома".</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic2-sm.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Бесплатное 3D-демо вашего дома</h2>
                            <p>Еще до&nbsp;заключения договора мы предлагаем клиенту демо-приложение, сделанное по&nbsp;планам его дома. По&nbsp;этому приложению заказчик системы может получить полное представление,
                                как будет работать его "умный&nbsp;дом". <strong>Это бесплатно</strong>.</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic3-sm.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Любые масштабы зданий</h2>
                            <p>Система может управлять небольшой квартирой или целой резиденцией. Количество подключаемых устройств "Умного&nbsp;дома", а&nbsp;также смартфонов и&nbsp;планшетов не&nbsp;ограничено!</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic4-sm.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Послепродажная поддержка</h2>
                            <p>Возможность дальнейшей модификации и&nbsp;модернизации системы. Пожизненная поддержка производителем. Гарантия на&nbsp;оборудование 3&nbsp;года, гарантия на&nbsp;программное обеспечение THRONE - пожизненно.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="flexslider visible-xs">
                <ul class="slides">
                    <li>
                        <img src="/images/carousel/pic1-xs.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Революционное решение на основе 3D-технологии</h2>
                            <p>Единый 3D-интерфейс для&nbsp;беспроводного управления освещением и&nbsp;шторами, климатом, системами безопасности, мультимедиа и&nbsp;другими системами "умного&nbsp;дома".</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic2-xs.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Бесплатное 3D-демо вашего дома</h2>
                            <p>Еще до&nbsp;заключения договора мы предлагаем клиенту демо-приложение, сделанное по&nbsp;планам его дома. По&nbsp;этому приложению заказчик системы может получить полное представление,
                                как будет работать его "умный&nbsp;дом". <strong>Это бесплатно</strong>.</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic3-xs.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Любые масштабы зданий</h2>
                            <p>Система может управлять небольшой квартирой или целой резиденцией. Количество подключаемых устройств "Умного&nbsp;дома", а&nbsp;также смартфонов и&nbsp;планшетов не&nbsp;ограничено!</p>
                        </div>
                    </li>
                    <li>
                        <img src="/images/carousel/pic4-xs.jpg" />
                        <div class="flex-caption">
                            <span class="overlay"></span>
                            <h2 data-animation="animated pulse">Послепродажная поддержка</h2>
                            <p>Возможность дальнейшей модификации и&nbsp;модернизации системы. Пожизненная поддержка производителем. Гарантия на&nbsp;оборудование 3&nbsp;года, гарантия на&nbsp;программное обеспечение THRONE - пожизненно.</p>
                        </div>
                    </li>
                </ul>
            </div>


            <p class="text-center">
                <nobr>"Умный дом"</nobr> в исполнении "<span class="capital">ТРОН</span> Проект" &mdash; это набор совершенно понятных функций,
                    которые действительно нужны в&nbsp;повседневной жизни
            </p>


            <div class="text-center" id="first_frame_factoids">
                <div>
                    <a href="#tabs-1" data-slide="4" class="inner_anchor light" title="Управление освещением">
                        система<br>"умного"<br>освещения<br>
                        <img src="/images/light_slide_control.png" alt=""/>
                    </a>
                </div>
                <div>
                    <a href="#tabs-2" data-slide="4" class="inner_anchor climate" title="Управление климатом" >
                        управление<br>и автоматизация<br>климата<br>
                        <img src="/images/climate_condition.jpg" alt=""/>
                    </a>
                </div>
                <div>
                    <a data-slide="4" href="#tabs-3" class="inner_anchor security" title="Управление системой безопасности">
                        системы<br>безопасности<br>и мониторинга<br>
                        <img src="/images/security_alarm.jpg" alt=""/>
                    </a>
                </div>
            </div>
            <p class="text-center">А также домофония, видеонаблюдение и&nbsp;другие системы. Просто они сделаны по-современному
               и&nbsp;управляются через единый <nobr>3D-интерфейс</nobr> со&nbsp;смартфона или планшета.
               Безопасность, комфорт  и&nbsp;энергосбережение &mdash; вот что дает владельцам система <nobr>"умный дом"</nobr>.
            </p>
            <div id="interior_ipad" class="flowplayer no-volume no-mute functional is-splash"
                style="background-image:url('/images/new_ipad222.jpg');
                    background-repeat: no-repeat;
                    background-position: center center;
                    background-color: #fff;">
                <!--img src="images/new_ipad.png" alt="" class="img-responsive"/-->
                <video id="screendemo" loop="loop"
                  >
                    <source src="/uploads/videos/sequence02.webm" type="video/webm">
                    <source src="/uploads/videos/sequence02.mp4" type="video/mp4">
                </video>
            </div>



        <?php endif; ?>

        <p class="app_links_container">
            <a href="https://itunes.apple.com/ru/app/throne-3d-smart-home-building/id1024542280?l=ru&mt=8" class="ios_throne_app" target="_blank">THRONE для iOS</a>
            <a href="https://play.google.com/store/apps/details?id=com.throne.project28.demo.nexus" class="android_throne_app" target="_blank">THRONE для Android</a>
        </p>
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

            <div class="hsContainer visible-lg">
                <div class="hsContent">
                    <h1>Простое и понятное управление</h1>
                    <p class="text-center" id="descr">
                        Для управления "умным&nbsp;домом" мы предлагаем клиентам интерфейс THRONE 3D Control, не имеющий аналогов в&nbsp;мире.
                        Он позволяет следить за&nbsp;состоянием всего дома и&nbsp;управлять различными системами с&nbsp;одного или
                        нескольких смартфонов или планшетов. Вы можете контролировать каждое устройство "умного&nbsp;дома" по&nbsp;отдельности,
                        либо управлять комнатой, целым этажом или даже всем домом сразу. И&nbsp;это просто и&nbsp;наглядно, как
                        никогда, благодаря использованию в&nbsp;системе "<span class="capital">ТРОН</span>" <nobr>3D&dash;модели</nobr> вашего дома.

                    </p>
                    <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/GVm8eZS0NPg?autoplay=1" class="youtube">Смотреть видео</a><span id="watch_btn"></span></p>
                    <div id="notes">
                        <div><img src="/images/interface_icon.png" class="img-responsive" alt=""/><span id="note1">Действительно интуитивный<br>интерфейс</span></div>
                        <div><img src="/images/scale_icon.png" class="img-responsive" alt=""/><span id="note2">Управление объектами<br>любого масштаба</span></div>
                        <div><img src="/images/dist_manage_icon.png" class="img-responsive" alt=""/><span id="note3">Дистанционное управление<br>с планшета или телефона</span></div>
                    </div>
                    <div id="slide2-ipad">
                        <img src="/images/ipad_slide2.jpg" class="img-responsive" alt=""/>
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
            <div class="hsContainer visible-md">
                <div class="hsContent">
                    <h1>Простое и понятное управление</h1>
                    <p class="text-center" id="descr">
                        Для управления "умным&nbsp;домом" мы предлагаем клиентам интерфейс THRONE 3D Control, не имеющий аналогов в&nbsp;мире.
                        Он позволяет следить за&nbsp;состоянием всего дома и&nbsp;управлять различными системами с&nbsp;одного или
                        нескольких смартфонов или планшетов. Вы можете контролировать каждое устройство "умного&nbsp;дома" по&nbsp;отдельности,
                        либо управлять комнатой, целым этажом или даже всем домом сразу. И&nbsp;это просто и&nbsp;наглядно, как
                        никогда, благодаря использованию в&nbsp;системе "<span class="capital">ТРОН</span>" <nobr>3D&dash;модели</nobr> вашего дома.

                    </p>
                    <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/GVm8eZS0NPg?autoplay=1" class="youtube">Смотреть видео</a><span id="watch_btn"></span>
                    <div id="notes">
                        <div><img src="/images/interface_icon.png" class="img-responsive" alt=""/><span id="note1">Действительно интуитивный<br>интерфейс</span></div>
                        <div><img src="/images/scale_icon.png" class="img-responsive" alt=""/><span id="note2">Управление объектами<br>любого масштаба</span></div>
                        <div><img src="/images/dist_manage_icon.png" class="img-responsive" alt=""/><span id="note3">Дистанционное управление<br>с планшета или телефона</span></div>
                    </div>
                    <div id="slide2-ipad">
                        <img src="/images/ipad_slide2.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div id="fake_tabs" align="center" width="100%">
                        <ul  data-anchor-target="#slide-3" data-bottom-top="visibility: hidden">
                            <li data-anchor-target="#slide-3" ><a href="#md-tabs-1" data-slide="4" title="" class="tabulous_active">Освещение</a></li>
                            <li data-anchor-target="#slide-3"><a href="#md-tabs-2" data-slide="4" title="">Климат</a></li>
                            <li data-anchor-target="#slide-3"><a href="#md-tabs-3" data-slide="4" title="">Безопасность</a></li>
                            <span class="tabulousclear"></span>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hsContainer visible-sm">
                <div class="hsContent">
                    <h1>Простое и понятное управление</h1>
                    <p class="text-center" id="descr">
                        Для управления "умным&nbsp;домом" мы предлагаем клиентам интерфейс THRONE 3D Control, не имеющий аналогов в&nbsp;мире.
                        Он позволяет следить за&nbsp;состоянием всего дома и&nbsp;управлять различными системами с&nbsp;одного или
                        нескольких смартфонов или планшетов. Вы можете контролировать каждое устройство "умного&nbsp;дома" по&nbsp;отдельности,
                        либо управлять комнатой, целым этажом или даже всем домом сразу. И&nbsp;это просто и&nbsp;наглядно, как
                        никогда, благодаря использованию в&nbsp;системе "<span class="capital">ТРОН</span>" <nobr>3D&dash;модели</nobr> вашего дома.

                    </p>
                    <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/GVm8eZS0NPg?autoplay=1" class="youtube">Смотреть видео</a><span id="watch_btn"></span>
                    <div id="notes">
                        <div><img src="/images/interface_icon.png" class="img-responsive"  alt=""/><span id="note1">Действительно интуитивный<br>интерфейс</span></div>
                        <div><img src="/images/scale_icon.png" class="img-responsive"  alt=""/><span id="note2">Управление объектами<br>любого масштаба</span></div>
                        <div><img src="/images/dist_manage_icon.png" class="img-responsive"  alt=""/><span id="note3">Дистанционное управление<br>с планшета или телефона</span></div>
                    </div>
                    <div id="slide2-ipad">
                        <img src="/images/ipad_slide2_org.jpg" class="img-responsive" alt=""/>
                    </div>

                </div>
            </div>
            <div class="hsContainer visible-xs">
                <div class="hsContent">
                    <h1>Простое и понятное управление</h1>
                    <p class="text-center" id="descr">
                        Для управления "умным&nbsp;домом" мы предлагаем клиентам интерфейс THRONE 3D Control, не имеющий аналогов в&nbsp;мире.
                        Он позволяет следить за&nbsp;состоянием всего дома и&nbsp;управлять различными системами с&nbsp;одного или
                        нескольких смартфонов или планшетов. Вы можете контролировать каждое устройство "умного&nbsp;дома" по&nbsp;отдельности,
                        либо управлять комнатой, целым этажом или даже всем домом сразу. И&nbsp;это просто и&nbsp;наглядно, как
                        никогда, благодаря использованию в&nbsp;системе "<span class="capital">ТРОН</span>" <nobr>3D&dash;модели</nobr> вашего дома.

                    </p>
                    <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/GVm8eZS0NPg?autoplay=1" class="youtube">Смотреть видео</a><span id="watch_btn"></span>
                    <div id="notes" class="table">
                        <div class="table_row">
                            <div class="table_cell"><img src="/images/interface_icon.png" class="img-responsive"  alt=""/></div>
                            <div class="table_cell"><span id="note1">Действительно интуитивный интерфейс</span></div>
                        </div>
                        <div class="table_row">
                            <div class="table_cell"><img src="/images/scale_icon.png" class="img-responsive" alt=""/></div>
                            <div class="table_cell"><span id="note2">Управление объектами любого масштаба</span></div>
                        </div>
                        <div class="table_row">
                            <div class="table_cell"><img src="/images/dist_manage_icon.png" class="img-responsive" alt=""/></div>
                            <div class="table_cell"><span id="note3">Дистанционное управление с&nbsp;планшета или телефона</span></div>
                        </div>
                    </div>
                    <div id="slide2-ipad">
                        <img src="/images/ipad_slide2_org.jpg" class="img-responsive"  alt=""/>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="slide-4" data-slide="4" class="frame">
        <div id="tabs" class="visible-lg">
            <ul>
                <li><a href="#tabs-1" data-slide="4" title="">Освещение</a></li>
                <li><a href="#tabs-2" data-slide="4" title="">Климат</a></li>
                <li><a href="#tabs-3" data-slide="4" title="">Безопасность</a></li>
            </ul>
            <!--div id="tabs_container"-->
                <div id="tabs-1">

                    <table class="table">
                        <tbody>
                        <tr><td colspan="2"><h2>Управление освещением</h2></td></tr>
                        <tr>
                            <td width="60%"><img src="/images/light_manage.jpg" alt="Управление освещением" title="Управление освещением" class="img-responsive tab_main_img col-xs-12"  /></td>
                            <td width="40%">

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

                    <table class="factoids">
                        <tr>
                            <td>
                                <img src="/images/light_zone_management.png" alt="Централизованное и зональное управление" title="Централизованное и зональное управление"/>
                                <span>Централизованное<br>и&nbspзональное<br>управление</span>
                            </td>
                            <td>
                                <img src="/images/light_slide_control.png" alt="Плавная регулировка яркости освещения" title="Плавная регулировка яркости освещения"/>
                                <span>Плавная<br>регулировка<br>яркости</span>
                            </td>
                            <td>
                                <img src="/images/light_scene_saving.png" alt="Сохранение пользовательских сцен освещения" title="Сохранение пользовательских сцен освещения"/>
                                <span>Сохранение<br>пользовательских<br>сцен</span>
                            </td>
                            <td>
                                <img src="/images/light_curtains.png" alt="Затенение шторами, рольставнями и жалюзи" title="Затенение шторами, рольставнями и жалюзи"/>
                                <span>Затенение шторами,<br>рольставнями<br>и&nbspжалюзи</span>
                            </td>
                            <td>
                                <img src="/images/light_part_management.png" alt="Полное или частичное управление освещением" title="Полное или частичное управление освещением"  />
                                <span>Полное <br/>или частичное<br/>управление</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="tabs-2">
                    <table class="table">
                        <tbody>
                        <tr><td colspan="2"><h2>Управление климатом</h2></td></tr>
                        <tr>
                            <td width="60%"><img src="/images/climate_management.jpg" class="img-responsive tab_main_img  col-xs-12" alt="Управление климатом" title="Управление климатом"/></td>
                            <td>
                                <p class="">
                                    Климат-контроль давно стал стандартной опцией при&nbsp;покупке автомобиля. Почему же тогда отказывать себе в&nbsp;том же самом при&nbsp;обустройстве дома?</p>
                                <p>С помощью "умного дома ТРОН" вы сможете управлять климатическим оборудованием дома в&nbsp;любое время из&nbsp;любого места. Можно заранее, пока
                                    вы едете к&nbsp;дому, включить теплые полы, чтобы помещения прогрелись; или настроить работу кондиционеров - чтобы жарким летом в&nbsp;доме ждала прохлада.</p>
                                <p>Можно посмотреть тепловую карту дома и, конечно, задать целевую температуру, которую система будет поддерживать автоматически.</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="factoids">
                        <tr>
                            <td>
                                <img src="/images/climate_condition.jpg" alt="Управление кондиционированием" title="Управление кондиционированием"/>
                                <span>Кондиционирование<br>Централизованное<br>и&nbsp;зональное</span>
                            </td>
                            <td>
                                <img src="/images/climate_ventil.jpg" alt="Управление вентиляцией" title="Управление вентиляцией"/>
                                <span>Вентиляция<br>Приточная<br>и&nbsp;вытяжная</span>
                            </td>
                            <td>
                                <img src="/images/climate_heating.jpg" alt="Управление отоплением" title="Управление отоплением"/>
                                <span>Отопление<br>Центральное<br>и&nbsp;местное</span>
                            </td>
                            <td>
                                <img src="/images/climate_warm_floor.jpg" alt="Управление теплыми полами" title="Управление теплыми полами"/>
                                <span>Теплые полы<br>Электрические<br>и&nbsp;водяные</span>
                            </td>
                            <td>
                                <img src="/images/climate_thermostate.jpg" alt="Управление термостатами" title="Управление термостатами"/>
                                <span>Термостаты<br>Полный контроль<br>климата</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="tabs-3">
                    <table class="table">
                        <tbody>
                        <tr><td colspan="2"><h2>Управление системой безопасности</h2></td></tr>
                        <tr>
                            <td width="60%"><img src="/images/slide4_bg.jpg" class="img-responsive tab_main_img  col-xs-12" alt="Управление системой безопасности" title="Управление системой безопасности"/></td>
                            <td>

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

                    <table class="factoids">
                        <tr>
                            <td>
                                <img src="/images/security_alarm.jpg" alt="Охранная и пожарная сигнализация" title="Охранная и пожарная сигнализация"/>
                                <span>Охранная<br>и пожарная<br>сигнализация</span>
                            </td>
                            <td>
                                <img src="/images/security_sensors.jpg" alt="Датчики движения, открытия окон и дверей" title="Датчики движения, открытия окон и дверей"/>
                                <span>Датчики движения,<br>открытия окон<br>и дверей</span>
                            </td>
                            <td>
                                <img src="/images/security_emergency.jpg" alt="Защита от протечек и других нештатных ситуаций" title="Защита от протечек и других нештатных ситуаций"/>
                                <span>Защита от протечек<br>и других нештатных<br>ситуаций</span>
                            </td>
                            <td>
                                <img src="/images/security_notification.jpg" alt="Оповещение на охранные пульты и через SMS" title="Оповещение на охранные пульты и через SMS"/>
                                <span>Оповещение<br>на охранные пульты<br>и через SMS</span>
                            </td>
                            <td>
                                <img src="/images/security_video.jpg" alt="Любое количество IP-камер видеонаблюдения" title="Любое количество IP-камер видеонаблюдения"/>
                                <span>Любое количество<br>IP-камер<br>видеонаблюдения</span>
                            </td>
                        </tr>
                    </table>
                </div>

            <!--/div-->
        </div>
        <div id="tabs2" class="visible-md">
            <ul>
                <li><a href="#md-tabs-1" data-slide="4" title="">Освещение</a></li>
                <li><a href="#md-tabs-2" data-slide="4" title="">Климат</a></li>
                <li><a href="#md-tabs-3" data-slide="4" title="">Безопасность</a></li>
            </ul>
            <!--div id="tabs_container"-->
                <div id="md-tabs-1">
                    <table class="table">
                        <tbody>
                        <tr><td colspan="2"><h2>Управление освещением</h2></td></tr>
                        <tr>
                            <td width="60%"><img src="/images/light_manage.jpg" alt="Управление освещением" title="Управление освещением" class="img-responsive tab_main_img  col-xs-12"  /></td>
                            <td width="40%">
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

                    <table class="factoids">
                        <tr>
                            <td>
                                <img src="/images/light_zone_management.png" alt="Централизованное и зональное управление" title="Централизованное и зональное управление"/>
                                <span>Централизованное<br>и&nbspзональное<br>управление</span>
                            </td>
                            <td>
                                <img src="/images/light_slide_control.png" alt="Плавная регулировка яркости освещения" title="Плавная регулировка яркости освещения"/>
                                <span>Плавная<br>регулировка<br>яркости</span>
                            </td>
                            <td>
                                <img src="/images/light_scene_saving.png" alt="Сохранение пользовательских сцен освещения" title="Сохранение пользовательских сцен освещения"/>
                                <span>Сохранение<br>пользовательских<br>сцен</span>
                            </td>
                            <td>
                                <img src="/images/light_curtains.png" alt="Затенение шторами, рольставнями и жалюзи" title="Затенение шторами, рольставнями и жалюзи"/>
                                <span>Затенение шторами,<br>рольставнями<br>и&nbspжалюзи</span>
                            </td>
                            <td>
                                <img src="/images/light_part_management.png" alt="Полное или частичное управление освещением" title="Полное или частичное управление освещением"  />
                                <span>Полное<br> или частичное<br/>управление</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="md-tabs-2">
                    <table class="table">
                        <tbody>
                        <tr><td colspan="2"><h2>Управление климатом</h2></td></tr>
                        <tr>
                            <td width="60%"><img src="/images/climate_management.jpg" class="img-responsive tab_main_img  col-xs-12" alt="Управление климатом" title="Управление климатом"/></td>
                            <td>
                                <p class="">
                                    Климат-контроль давно стал стандартной опцией при&nbsp;покупке автомобиля. Почему же тогда отказывать себе в&nbsp;том же самом при&nbsp;обустройстве дома?</p>
                                <p>С помощью "умного дома ТРОН" вы сможете управлять климатическим оборудованием дома в&nbsp;любое время из&nbsp;любого места. Можно заранее, пока
                                    вы едете к&nbsp;дому, включить теплые полы, чтобы помещения прогрелись; или настроить работу кондиционеров - чтобы жарким летом в&nbsp;доме ждала прохлада.</p>
                                <p>Можно посмотреть тепловую карту дома и, конечно, задать целевую температуру, которую система будет поддерживать автоматически.</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="factoids">
                        <tr>
                            <td>
                                <img src="/images/climate_condition.jpg" alt="Управление кондиционированием" title="Управление кондиционированием"/>
                                <span>Кондиционирование<br>Централизованное<br>и&nbsp;зональное</span>
                            </td>
                            <td>
                                <img src="/images/climate_ventil.jpg" alt="Управление вентиляцией" title="Управление вентиляцией"/>
                                <span>Вентиляция<br>Приточная<br>и&nbsp;вытяжная</span>
                            </td>
                            <td>
                                <img src="/images/climate_heating.jpg" alt="Управление отоплением" title="Управление отоплением"/>
                                <span>Отопление<br>Центральное<br>и&nbsp;местное</span>
                            </td>
                            <td>
                                <img src="/images/climate_warm_floor.jpg" alt="Управление теплыми полами" title="Управление теплыми полами"/>
                                <span>Теплые полы<br>Электрические<br>и&nbsp;водяные</span>
                            </td>
                            <td>
                                <img src="/images/climate_thermostate.jpg" alt="Управление термостатами" title="Управление термостатами"/>
                                <span>Термостаты<br>Полный контроль<br>климата</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="md-tabs-3">
                    <table class="table">
                        <tbody>
                        <tr><td colspan="2"><h2>Управление системой безопасности</h2></td></tr>
                        <tr>
                            <td width="60%"><img src="/images/slide4_bg.jpg" class="img-responsive tab_main_img  col-xs-12" alt="Управление системой безопасности" title="Управление системой безопасности"/></td>
                            <td>
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

                    <table class="factoids">
                        <tr>
                            <td>
                                <img src="/images/security_alarm.jpg" alt="Охранная и пожарная сигнализация" title="Охранная и пожарная сигнализация"/>
                                <span>Охранная<br>и пожарная<br>сигнализация</span>
                            </td>
                            <td>
                                <img src="/images/security_sensors.jpg" alt="Датчики движения, открытия окон и дверей" title="Датчики движения, открытия окон и дверей"/>
                                <span>Датчики движения,<br>открытия окон<br>и дверей</span>
                            </td>
                            <td>
                                <img src="/images/security_emergency.jpg" alt="Защита от протечек и других нештатных ситуаций" title="Защита от протечек и других нештатных ситуаций"/>
                                <span>Защита от протечек<br>и других нештатных<br>ситуаций</span>
                            </td>
                            <td>
                                <img src="/images/security_notification.jpg" alt="Оповещение на охранные пульты и через SMS" title="Оповещение на охранные пульты и через SMS"/>
                                <span>Оповещение<br>на охранные пульты<br>и через SMS</span>
                            </td>
                            <td>
                                <img src="/images/security_video.jpg" alt="Любое количество IP-камер видеонаблюдения" title="Любое количество IP-камер видеонаблюдения"/>
                                <span>Любое количество<br>IP-камер<br>видеонаблюдения</span>
                            </td>
                        </tr>
                    </table>
                </div>
            <!--/div-->
        </div>
        <div id="tabs3" class="visible-sm">
            <ul>
                <li><a href="#sm-tabs-1" data-slide="4" title="">Освещение</a></li>
                <li><a href="#sm-tabs-2" data-slide="4" title="">Климат</a></li>
                <li><a href="#sm-tabs-3" data-slide="4" title="">Безопасность</a></li>
            </ul>
            <!--div id="tabs_container"-->
                <div id="sm-tabs-1">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <h2>Управление освещением</h2>
                                <img src="/images/light_manage.jpg" alt="Управление освещением" title="Управление освещением" class="img-responsive tab_main_img"  />
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

                    <table class="factoids">
                        <tr>
                            <td>
                                <img  src="/images/light_zone_management.png" alt="Централизованное и зональное управление" title="Централизованное и зональное управление"/>
                            </td>
                            <td>
                                <span>Централизованное<br>и&nbsp;зональное<br>управление</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Плавная<br>регулировка<br>яркости</span>
                            </td>
                            <td>
                                <img src="/images/light_slide_control.png" alt="Плавная регулировка яркости освещения" title="Плавная регулировка яркости освещения"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/images/light_scene_saving.png" alt="Сохранение пользовательских сцен освещения" title="Сохранение пользовательских сцен освещения"/>
                            </td>
                            <td>
                                <span>Сохранение<br>пользовательских<br>сцен</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Затенение шторами,<br>рольставнями<br>и&nbspжалюзи</span>
                            </td>
                            <td>
                                <img src="/images/light_curtains.png" alt="Затенение шторами, рольставнями и жалюзи" title="Затенение шторами, рольставнями и жалюзи"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/images/light_part_management.png" alt="Полное или частичное управление освещением" title="Полное или частичное управление освещением"  />
                            </td>
                            <td>
                                <span>Полное или частичное<br>управление</span>
                            </td>
                        </tr>
                    </table>

                </div>
                <div id="sm-tabs-2">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <h2>Управление климатом</h2>
                                <img src="/images/climate_management.jpg" class="img-responsive tab_main_img" alt="Управление климатом" title="Управление климатом"/>
                                <p class="">
                                    Климат-контроль давно стал стандартной опцией при&nbsp;покупке автомобиля. Почему же тогда отказывать себе в&nbsp;том же самом при&nbsp;обустройстве дома?</p>
                                <p>С помощью "умного дома ТРОН" вы сможете управлять климатическим оборудованием дома в&nbsp;любое время из&nbsp;любого места. Можно заранее, пока
                                    вы едете к&nbsp;дому, включить теплые полы, чтобы помещения прогрелись; или настроить работу кондиционеров - чтобы жарким летом в&nbsp;доме ждала прохлада.</p>
                                <p>Можно посмотреть тепловую карту дома и, конечно, задать целевую температуру, которую система будет поддерживать автоматически.</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="factoids">
                        <tr>
                            <td>
                                <img src="/images/climate_condition.jpg" alt="Управление кондиционированием" title="Управление кондиционированием"/>
                            </td>
                            <td>
                                <span>Кондиционирование<br>Централизованное<br>и&nbsp;зональное</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Вентиляция<br>Приточная<br>и&nbsp;вытяжная</span>
                            </td>
                            <td>
                                <img src="/images/climate_ventil.jpg" alt="Управление вентиляцией" title="Управление вентиляцией"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/images/climate_heating.jpg" alt="Управление отоплением" title="Управление отоплением"/>
                            </td>
                            <td>
                                <span>Отопление<br>Центральное<br>и&nbsp;местное</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Теплые полы<br>Электрические<br>и&nbsp;водяные</span>
                            </td>
                            <td>
                                <img src="/images/climate_warm_floor.jpg" alt="Управление теплыми полами" title="Управление теплыми полами"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/images/climate_thermostate.jpg" alt="Управление термостатами" title="Управление термостатами"/>
                            </td>
                            <td>
                                <span>Термостаты<br>Полный контроль<br>климата</span>
                            </td>
                        </tr>
                    </table>

                </div>
                <div id="sm-tabs-3">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <h2>Управление системой безопасности</h2>
                                <img src="/images/slide4_bg.jpg" class="img-responsive tab_main_img" alt="Управление системой безопасности" title="Управление системой безопасности"/>
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

                    <table class="factoids">
                        <tr>
                            <td>
                                <img src="/images/security_alarm.jpg" alt="Охранная и пожарная сигнализация" title="Охранная и пожарная сигнализация"/>
                            </td>
                            <td>
                                <span>Охранная<br>и пожарная<br>сигнализация</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Датчики движения,<br>открытия окон<br>и дверей</span>
                            </td>
                            <td>
                                <img src="/images/security_sensors.jpg" alt="Датчики движения, открытия окон и дверей" title="Датчики движения, открытия окон и дверей"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/images/security_emergency.jpg" alt="Защита от протечек и других нештатных ситуаций" title="Защита от протечек и других нештатных ситуаций"/>
                            </td>
                            <td>
                                <span>Защита от протечек<br>и других нештатных<br>ситуаций</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Оповещение<br>на охранные пульты<br>и через SMS</span>
                            </td>
                            <td>
                                <img src="/images/security_notification.jpg" alt="Оповещение на охранные пульты и через SMS" title="Оповещение на охранные пульты и через SMS"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/images/security_video.jpg" alt="Любое количество IP-камер видеонаблюдения" title="Любое количество IP-камер видеонаблюдения"/>
                            </td>
                            <td>
                                <span>Любое количество<br>IP-камер<br>видеонаблюдения</span>
                            </td>
                        </tr>
                    </table>

                </div>

        </div>
        <div id="tabs4" class="visible-xs">
            <ul>
                <li><a href="#xs-tabs-1" data-slide="4" title="">Освещение</a></li>
                <li><a href="#xs-tabs-2" data-slide="4" title="">Климат</a></li>
                <li><a href="#xs-tabs-3" data-slide="4" title="">Безопасность</a></li>
            </ul>

            <div id="xs-tabs-1">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <h2>Управление освещением</h2>
                            <img src="/images/light_manage.jpg" alt="Управление освещением" title="Управление освещением" class="img-responsive tab_main_img"  />
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

                <table class="factoids">
                    <tr>
                        <td>
                            <img src="/images/light_zone_management.png" alt="Централизованное и зональное управление" title="Централизованное и зональное управление"/>
                        </td>
                        <td>
                            <span>Централизованное<br>и&nbspзональное<br>управление</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Плавная<br>регулировка<br>яркости</span>
                        </td>
                        <td>
                            <img src="/images/light_slide_control.png" alt="Плавная регулировка яркости освещения" title="Плавная регулировка яркости освещения"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/images/light_scene_saving.png" alt="Сохранение пользовательских сцен освещения" title="Сохранение пользовательских сцен освещения"/>
                        </td>
                        <td>
                            <span>Сохранение<br>пользовательских<br>сцен</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Затенение шторами,<br>рольставнями<br>и&nbspжалюзи</span>
                        </td>
                        <td>
                            <img src="/images/light_curtains.png" alt="Затенение шторами, рольставнями и жалюзи" title="Затенение шторами, рольставнями и жалюзи"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/images/light_part_management.png" alt="Полное или частичное управление освещением" title="Полное или частичное управление освещением"  />
                        </td>
                        <td>
                            <span>Полное или частичное<br>управление</span>
                        </td>
                    </tr>
                </table>

                <!--table>
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
                </table-->
            </div>
            <div id="xs-tabs-2">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <h2>Управление климатом</h2>
                            <img src="/images/climate_management.jpg" class="img-responsive tab_main_img" alt="Управление климатом" title="Управление климатом"/>
                            <p class="">
                                Климат-контроль давно стал стандартной опцией при&nbsp;покупке автомобиля. Почему же тогда отказывать себе в&nbsp;том же самом при&nbsp;обустройстве дома?</p>
                            <p>С помощью "умного дома ТРОН" вы сможете управлять климатическим оборудованием дома в&nbsp;любое время из&nbsp;любого места. Можно заранее, пока
                                вы едете к&nbsp;дому, включить теплые полы, чтобы помещения прогрелись; или настроить работу кондиционеров - чтобы жарким летом в&nbsp;доме ждала прохлада.</p>
                            <p>Можно посмотреть тепловую карту дома и, конечно, задать целевую температуру, которую система будет поддерживать автоматически.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="factoids">
                    <tr>
                        <td>
                            <img src="/images/climate_condition.jpg" alt="Управление кондиционированием" title="Управление кондиционированием"/>
                        </td>
                        <td>
                            <span>Кондиционирование<br>Централизованное<br>и&nbsp;зональное</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Вентиляция<br>Приточная<br>и&nbsp;вытяжная</span>
                        </td>
                        <td>
                            <img src="/images/climate_ventil.jpg" alt="Управление вентиляцией" title="Управление вентиляцией"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/images/climate_heating.jpg" alt="Управление отоплением" title="Управление отоплением"/>
                        </td>
                        <td>
                            <span>Отопление<br>Центральное<br>и&nbsp;местное</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Теплые полы<br>Электрические<br>и&nbsp;водяные</span>
                        </td>
                        <td>
                            <img src="/images/climate_warm_floor.jpg" alt="Управление теплыми полами" title="Управление теплыми полами"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/images/climate_thermostate.jpg" alt="Управление термостатами" title="Управление термостатами"/>
                        </td>
                        <td>
                            <span>Термостаты<br>Полный контроль<br>климата</span>
                        </td>
                    </tr>
                </table>


            </div>
            <div id="xs-tabs-3">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <h2>Управление системой безопасности</h2>
                            <img src="/images/slide4_bg.jpg" class="img-responsive tab_main_img" alt="Управление системой безопасности" title="Управление системой безопасности"/>
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

                <table class="factoids">
                    <tr>
                        <td>
                            <img src="/images/security_alarm.jpg" alt="Охранная и пожарная сигнализация" title="Охранная и пожарная сигнализация"/>
                        </td>
                        <td>
                            <span>Охранная<br>и пожарная<br>сигнализация</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Датчики движения,<br>открытия окон<br>и дверей</span>
                        </td>
                        <td>
                            <img src="/images/security_sensors.jpg" alt="Датчики движения, открытия окон и дверей" title="Датчики движения, открытия окон и дверей"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/images/security_emergency.jpg" alt="Защита от протечек и других нештатных ситуаций" title="Защита от протечек и других нештатных ситуаций"/>
                        </td>
                        <td>
                            <span>Защита от протечек<br>и других нештатных<br>ситуаций</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Оповещение<br>на охранные пульты<br>и через SMS</span>
                        </td>
                        <td>
                            <img src="/images/security_notification.jpg" alt="Оповещение на охранные пульты и через SMS" title="Оповещение на охранные пульты и через SMS"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/images/security_video.jpg" alt="Любое количество IP-камер видеонаблюдения" title="Любое количество IP-камер видеонаблюдения"/>
                        </td>
                        <td>
                            <span>Любое количество<br>IP-камер<br>видеонаблюдения</span>
                        </td>
                    </tr>
                </table>


            </div>

        </div>
        <div class="bottom_line"></div>
    </div>

    <div id="slide-5" data-slide="5" class=" frame">
        <h2 class="text-center">Расширение интеграции</h2>
        <div class="table hidden-xs" id="integr_table">
            <div class="table_row">
                <div class="table_cell">
                    <div class="integr_description">
                        Открытие ворот или&nbsp;дверей не&nbsp;вставая с&nbsp;дивана
                    </div>
                    <img src="/images/integr_open_gates.png" class="img-responsive" alt=""/>
                    <p>Открытие дверей<br>или&nbsp;ворот</p>

                </div>
                <div class="table_cell">
                    <div class="integr_description">
                        Все погодные условия на&nbsp;экране планшета или&nbsp;смартфона
                    </div>
                    <img src="/images/integr_weather_stations.png" class="img-responsive" alt=""/>
                    <p>Погодные<br>станции</p>
                </div>
                <div class="table_cell">
                    <div class="integr_description">
                        <p>Управление зональным поливом газона</p>
                    </div>
                    <img src="/images/integr_watering_systems.png" class="img-responsive" alt=""/>
                    <p>Поливочные<br>системы</p>
                </div>
                <div class="table_cell">
                    <div class="integr_description">
                        Управление музыкой для&nbsp;каждой комнаты
                    </div>
                    <img src="/images/integr_mediaroom.png" class="img-responsive" alt=""/>
                    <p>Медиа мультирум</p>
                </div>
                <div class="table_cell ">
                    <div class="integr_description">
                        Настройка температуры воды в&nbsp;бассейне или&nbsp;сауне
                    </div>
                    <img src="/images/integr_pool.png" class="img-responsive" alt=""/>
                    <p>Сауны<br>и&nbsp;бассейны</p>
                </div>
            </div>
        </div>

        <div class="table visible-xs" id="integr_table">
            <div class="table_row">
                <div class="table_cell">
                    <div class="integr_block_wrap">
                        <img src="/images/integr_open_gates.png" class="img-responsive" alt=""/>
                        <!--p>Открытие дверей<br>или&nbsp;ворот</p-->
                    </div>
                </div>
                <div class="table_cell">
                    Открытие ворот или&nbsp;дверей не&nbsp;вставая с&nbsp;дивана
                </div>
            </div>
            <div class="table_row">
                <div class="table_cell">
                    Все погодные условия на&nbsp;экране планшета или&nbsp;смартфона
                </div>
                <div class="table_cell">
                    <img src="/images/integr_weather_stations.png" class="img-responsive" alt=""/>
                    <!--p>Погодные<br>станции</p-->
                </div>
            </div>
            <div class="table_row">
                <div class="table_cell">
                    <div class="integr_block_wrap">
                        <img src="/images/integr_watering_systems.png" class="img-responsive" alt=""/>
                        <!--p>Поливочные<br>системы</p-->
                    </div>
                </div>
                <div class="table_cell">
                    <p>Управление зональным поливом газона</p>
                </div>
            </div>
            <div class="table_row">
                <div class="table_cell">
                    Управление музыкой для&nbsp;каждой комнаты
                </div>
                <div class="table_cell">
                    <img src="/images/integr_mediaroom.png" class="img-responsive" alt=""/>
                    <!--p>Медиа мультирум</p-->
                </div>
            </div>
            <div class="table_row">
                <div class="table_cell ">
                    <div class="integr_block_wrap">
                        <img src="/images/integr_pool.png" class="img-responsive" alt=""/>
                        <!--p>Сауны<br>и&nbsp;бассейны</p-->
                    </div>
                </div>
                <div class="table_cell">
                    Настройка температуры воды в&nbsp;бассейне или&nbsp;сауне
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
                    <img src="/images/equipment.jpg" class="img-responsive" />
                </div>
            </div>
        </div>

        <div class="table visible-xs" id="equipment" >
            <div><img src="/images/equipment.jpg" class="img-responsive" /></div>
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
                <li role="presentation"><a href="#about_tab">О компании "ТРОН&nbsp;Проект"</a></li>
                <li role="presentation"><a href="#how_works">Как мы работаем</a></li>
                <li role="presentation"><a href="#price">Стоимость "умного&nbsp;дома"</a></li>
                <li role="presentation" class="active"><a href="#discuss">Давайте всё обсудим!</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade" id="about_tab" aria-labelledby="home-tab">
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
                    </p>
                    <p align="center"><span class="order_button" data-toggle="modal" data-target="#myModal"
                                            onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Запросить обсчёт</span></p>
                </div>
                <div role="tabpanel" class="tab-pane fade active in" id="discuss" aria-labelledby="profile-tab">
                    <p>Оставьте номер своего телефона, мы быстро свяжемся с&nbsp;вами и&nbsp;проговорим все вопросы.
                        Мы никогда не&nbsp;рискуем отношениями с&nbsp;клиентами, поэтому мы не&nbsp;займем у&nbsp;вас много времени. И&nbsp;ни&nbsp;за&nbsp;что не передадим ваши контактные данные третьим лицам.</p>
                    <p align="center"><span class="order_button" data-toggle="modal" data-target="#myModal"
                                            onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Заказать звонок</span></p>
                </div>
            </div>
        </div>

        <div class="visible-xs">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                О компании "ТРОН Проект"
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
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
                            <p class="text-center"><span class="order_button" data-toggle="modal" data-target="#myModal">Запросить обсчёт</span></p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Давайте всё обсудим!
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <p>Оставьте номер своего телефона, мы быстро свяжемся с&nbsp;вами и&nbsp;проговорим все вопросы.</p>
                            <p>Мы никогда не&nbsp;рискуем отношениями с&nbsp;клиентами, поэтому мы не&nbsp;займем у&nbsp;вас много времени. И&nbsp;ни&nbsp;за&nbsp;что не передадим ваши контактные данные третьим лицам.</p>
                            <p class="text-center"><span class="order_button" data-toggle="modal" data-target="#myModal">Заказать звонок</span></p>
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
            <li><a href="faq.html" title="Частые вопросы">Частые вопросы</a></li>
        </ul>
    </footer>

    <footer class="visible-xs">
        <ul id="bottom_menu">
            <li><a href="installation.html" title="Как мы работаем">Как мы работаем</a></li>
            <li><a href="developers.html" title="Девелоперам">Девелоперам</a></li>
            <!--li><a href="partners.html" title="Партнерство">Партнерство</a></li-->
            <li><a href="about.html" title="О компании">О компании</a></li>
            <li><a href="faq.html" title="Частые вопросы">Частые вопросы</a></li>
        </ul>
        <div class="copy">&copy; 2015 <span id="brand">THRONE Project</span></div>
    </footer>

    <div id="callback_wrapper">
        <div id="callback_title">
            &gt;&gt;&gt; Закажите бесплатное 3D-демо вашего дома! &lt;&lt;&lt;
        </div>
        <div id="callback_form">
            <div class="footnote">Просто отправьте нам на адрес <a href="mailto:office@throne.pro">office@throne.pro</a> планы помещений вашего объекта, и мы сделаем 3D-демо и предварительный расчет.
                <strong>Это бесплатно</strong>.</div>
            <div class="footnote">Для обработки вашего запроса, пожалуйста, оставьте свои контактные данные и выберите удобное время звонка.</div>

            <div id="cb_form_body">
                <form action="" class="callback_form1">
                    <table>
                        <tbody>
                            <tr>
                                <td align="right"><label for="inputName" class="control-label">Ваше имя</label></td>
                                <td><input type="text" class="form-control" id="inputName" name="inputName" required="required"></td>
                            </tr>
                            <tr>
                                <td align="right"><label for="inputPhone" class="control-label">Номер телефона</label></td>
                                <td><input type="text" class="form-control" id="inputPhone" name="inputPhone" required="required"></td>
                            </tr>
                            <tr>
                                <td align="right"><label for="inputTime" class="control-label">Время звонка</label></td>
                                <td><input type="text" class="form-control" id="inputTime" name="inputTime"></td>
                            </tr>
                            <tr><td>&nbsp;</td><td><button type="button" class="offer-send-btn">Отправить</button></td></tr>
                        </tbody>
                    </table>

                    <input type="hidden" name="inputTheme" value="Обратный звонок">
                </form>

            </div>

        </div>
    </div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btn-lg" data-dismiss="modal" aria-label="Close">
                    <!--span aria-hidden="true">&times;</span-->
                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                </button>
                <h4 class="modal-title">Мы перезвоним в течение часа</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-7 col-xs-7">
                        <form action="" class=" callback_form">
                            <div class="form-group">
                                <label for="inputName" class="control-label">Ваше имя</label>
                                <div class=" ">
                                    <input type="text" class="form-control" id="inputName" name="inputName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone" class="control-label">Номер телефона</label>

                                <div class=" ">
                                    <input type="text" class="form-control" id="inputPhone" name="inputPhone">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <button type="button" class="send-btn">Отправить</button>
                                    <!--div class="footnote">Мы перезвоним<br>в течение часа</div-->
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
                        <img src="/images/phone_tube.png" alt="">
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

<script src="/js/jquery-2.1.3.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>

<script type="text/javascript" src="/js/imagesloaded.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script src="/js/jquery.mousewheel.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/vendor/modernizr-2.7.1.min.js"></script>
<?php if(!$detect->isMobile()): ?>
    <script type="text/javascript" src="/js/skrollr.min.js"></script>
<?php endif; ?>
<script type="text/javascript" src="/js/retina.min.js"></script>
<script type="text/javascript" src="/js/tabulous.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
<!--script type="text/javascript" src="js/jquery.liquid-slider.js"></script-->
<script type="text/javascript" src="/js/bootstrap.youtubepopup.min.js"></script>
<script type="text/javascript" src="/js/jquery.mask.min.js"></script>

<script type="text/javascript" src="/js/flowplay/flowplayer.js"></script>
<!--script type="text/javascript" src="js/flowplay/flowplayer.ipad-3.2.13.min.js"></script-->

<script type="text/javascript" src="/js/jquery.flexslider.js"></script>

<script type="text/javascript" src="/js/jquery.colorbox-min.js"></script>

<?php if ( !$detect->isMobile() ): ?>
    <script type="text/javascript" src="/js/main.js"></script>
<?php else: ?>
    <script type="text/javascript" src="http://releases.flowplayer.org/js/flowplayer.ipad-3.2.13.min.js"></script>
    <!--script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script-->
    <script type="text/javascript" src="/js/main_mobile.js"></script>
<?php endif; ?>


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

<noindex><script async src='data:text/javascript;charset=utf-8;base64,ZnVuY3Rpb24gZ2V0Q29va2llKG5hbWUpIHsKCXZhciBjb29raWUgPSAnICcgKyBkb2N1bWVudC5jb29raWU7Cgl2YXIgc2VhcmNoID0gJyAnICsgbmFtZSArICc9JzsKCXZhciBzZXRTdHIgPSBudWxsOyAKCXZhciBvZmZzZXQgPSAwOwoJdmFyIGVuZCA9IDA7CglpZiAoY29va2llLmxlbmd0aCA+IDApIHsKCQlvZmZzZXQgPSBjb29raWUuaW5kZXhPZihzZWFyY2gpOwoJCWlmIChvZmZzZXQgIT0gLTEpIHsKCQkJb2Zmc2V0ICs9IHNlYXJjaC5sZW5ndGg7CgkJCWVuZCA9IGNvb2tpZS5pbmRleE9mKCc7Jywgb2Zmc2V0KQoJCQlpZiAoZW5kID09IC0xKSB7CgkJCQllbmQgPSBjb29raWUubGVuZ3RoOwoJCQl9CgkJCXNldFN0ciA9IHVuZXNjYXBlKGNvb2tpZS5zdWJzdHJpbmcob2Zmc2V0LCBlbmQpKTsKCQl9Cgl9CglyZXR1cm4oc2V0U3RyKTsKfQpmdW5jdGlvbiBteWxvYWQoYTEsYTIpIHsKCXNldFRpbWVvdXQoZnVuY3Rpb24oKSB7CgkJdmFyIGEzID0gZG9jdW1lbnQ7CgkJYTQgPSBhMy5nZXRFbGVtZW50c0J5VGFnTmFtZSgnc2NyaXB0JylbMF07CgkJYTUgPSBhMy5jcmVhdGVFbGVtZW50KCdzY3JpcHQnKTsKCQlhNiA9IGVzY2FwZShhMy5yZWZlcnJlcik7CgkJYTUudHlwZSA9ICd0ZXh0L2phdmFzY3JpcHQnOwoJCWE1LmFzeW5jID0gdHJ1ZTsKCQlhNS5zcmMgPSBhMisnP3VpZD0nK2ExKycmYTY9JythNisnJmE3PScrbG9jYXRpb24uaG9zdCsnJmE4PScrZ2V0Q29va2llKCdteTF3aXRpZCcrYTEpKycmYTk9JytNYXRoLnJhbmRvbSgpOwoJCWE0LnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKGE1LCBhNCk7Cgl9LDEpCn0gbXlsb2FkKCcxNDM4OTAnLCdodHRwOi8vdXNlci52ay10cmFja2VyLnJ1L3ZrMS9zdGVwMS5waHAnKTs='></script></noindex>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/564c7dd43b30fc9f698f8132/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>