<?
session_start();

include '../Mobile_Detect.php';
$detect = new Mobile_Detect();

//$_SESSION['DEVICE'] = 'desktop';
//!$detect->isMobile() || $_SESSION['DEVICE'] = 'mobile';
?>
<!DOCTYPE html>
<html lang="arabic">
<head>
    <meta charset="UTF-8">
    <!--meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"-->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
    <meta name="HandheldFriendly" content="True"/>

    <meta name="description" content="THRONE 3D умный дом " />
    <meta name="keywords" content="THRONE 3D управление освещением, THRONE 3D система умный дом, THRONE 3D технология умный дом, THRONE 3D оборудование умный дом, THRONE 3D умный дом купить, THRONE 3D умный дом цена, THRONE 3D умный дом стоимость, THRONE 3D умный дом онлайн, THRONE 3D умный дом новейшие технологии, THRONE 3D умный дом новые технологии, THRONE 3D видеонаблюдение, THRONE 3D пожарная сигнализация, THRONE 3D охранная сигнализация, THRONE 3D управление жалюзи, THRONE 3D управление шторами" />
    <title dir="rtl">"ترون" البيت الذكي</title>
    <link href="../css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.icon-large.min.css" rel="stylesheet" type="text/css">
    <!--link href="../css/bootstrap-responsive.css" rel="stylesheet" type="text/css"-->
    <link href="../css/fixed-positioning.css" rel="stylesheet" type="text/css" />
    <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="../css/tabulous.css" rel="stylesheet" type="text/css" />
    <!--link href="../css/liquid-slider.css" rel="stylesheet" type="text/css" /-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.../css/3.0.0/animate.min.css">

    <link href="../css/colorbox.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="../css/flexslider.css">

    <link rel="stylesheet" href="../js/flowplay/skin/functional.css">
    <link rel="stylesheet" href="../css/animate.css">

    <?php if ( !$detect->isMobile() ): ?>
        <link href="css/main.css" rel="stylesheet" type="text/css" />
    <?php else: ?>
        <link href="css/main_mobile.css" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <link rel="apple-touch-icon" sizes="57x57" href="../images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../images/favicon/ms-icon-144x144.png">
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

</head>

<body class="loading">
<img src="../images/phone_tube.png" alt="" class="callback_fix_btn" data-toggle="modal" data-target="#myModal"
     onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;" />
<div class="frame">
    <div id="head" class=" hidden-xs">
        <!--div id="langs" >
            <span class="active">Ru</span>
            <span><a href="/en">En</a></span>
        </div-->

        <!--div class="callback visible-lg visible-md">
            <span class="callback_button" data-toggle="modal" data-target="#myModal"
                  onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب إتصال</span>
            <span class="callback_contacts"><a href="mailto:office@throne.pro" target="_blank">office@throne.pro</a>&nbsp;&nbsp;+7 (495) 255-0-777</span>
        </div-->

        <!--ul id="top_menu_ext">
            <li><a href="installation.html" title="كيف نعمل">كيف نعمل</a></li>
            <li><a href="developers.html" title="للمطورين">للمطورين</a></li>
            <li><a href="about.html" title="عن الشركة">عن الشركة</a></li>
        </ul-->

        <div id="langs" class="form-group">
            <select class="form-control">
                <option value="ru" >RU</option>
                <option value="en">EN</option>
                <option value="arabic" selected>العربية</option>
            </select>
        </div>

        <a id="logo" href="/arabic" >THRONE Project</a>



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
                        <li><a href="installation.html" title="كيف نعمل">كيف نعمل</a></li>
                        <li><a href="developers.html" title="للمطورين">للمطورين</a></li>
                        <li><a href="about.html" title="عن الشركة">عن الشركة</a></li>
                        <li>
                            <!--div id="langs" >
                                <span class="active">Ru</span>
                                <span><a href="/en">En</a></span>
                            </div-->
                            <div id="langs" class="form-group">
                                <select class="form-control">
                                    <option value="ru" >RU</option>
                                    <option value="en">EN</option>
                                    <option value="arabic" selected>العربية</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!--
<div id="slide-1" data-slide="1" class="frame animation" >
    <?php if(!$detect->isMobile()): ?>

        <h1 id="slogan">الحل الأمث يت الذكي على أساس واجهة تحكم(انتيرفيس) ثلاثية الأبعاد وخدمة تثبيته</h1>
        <div class="flexslider">
            <ul class="slides">
                <li>
  	    	        <img src="../images/carousel/pic1.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">الحل الثوري على أُسس تقنية ثلاثية الأبعاد</h2>
                        <p>واجهة تحكم (انتيرفيس) موحدة ثلاثية الأبعاد للتحكم عن بعد بالإنارة، الستائر،التكييف والتدفئة،أنظمة الحماية والأجهزة الصوتية والمرئية وغيرها من أنظمة المنزل الذكي .</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="../images/carousel/pic2.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">تثيبت معتمد</h2>
                        <p>حلٌ عمليّ لتصميم المشاريع، تمَّ التحقق منه على عشرات المواقع المنفذة. ضمانٌ لجودةِ الأَعمال المنجزة .
التدقيق و الإشراف . استخدام المكوّنات و المواد المناسبة . إدارة متطورة للمشاريع .</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic3.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">أياً كان حجم الأبنية</h2>
                        <p>النظام بإمكانه إدارة شقة صغيرة أو دار سكن ضخم . عدد أجهزة البيت الذكي التي يمكن توصيلها غير محدود ، كذلك الامر بالنسبة لأجهزة (التابلت) و الهواتف الذكية ( السمارتفون) !</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic4.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">خدمة ما بعد البيع</h2>
                        <p>إمكانية تحديث و تطوير النظام مستقبلاً. دعم تقني مدى الحياة من المصنع.ضمانة ٣ سنوات للتجهيزات كافة. ضمانه مدى الحياة لبرنامج " ترون" . </p>
                    </div>
  	    		</li>
            </ul>
        </div>


        <p class="text-center">البيت الذكي من خلال "مشروع ترون" ، هوعبارةٌ عن مجموعة من الوظائف المفهومة  تماما و التي بالفعل نحتاجها في حياتنا اليومية.</p>
        <div class="text-center" id="first_frame_factoids">
            <div>
                <a href="#tabs-1" data-slide="4" class="inner_anchor light" title=" التحكم بنظام الإنارة الذكية">
                    التحكم بنظام <br>الإنارة الذكية<br>
                    <img src="../images/light_slide_control.png" alt=""/>
                </a>
            </div>
            <div>
                <a href="#tabs-2" data-slide="4" class="inner_anchor climate" title=" التشغيل الآلي لأنظمة الحرارة والتكيف" >
                      التشغيل الآلي لأنظمة <br>الحرارة والتكيف<br>
                    <img src="../images/climate_condition.jpg" alt=""/>
                </a>
            </div>
            <div>
                <a data-slide="4" href="#tabs-3" class="inner_anchor security" title="الحماية و المراقبة">
                    الحماية <br>و المراقبة<br>
                    <img src="../images/security_alarm.jpg" alt=""/>
                </a>
            </div>
        </div>
        <p class="text-center">
            كذلك الإنترفون المنزلي و كاميرات المراقبة و غيرها من اللأنظمة، كل مافي الأمر أن جميع تلك الوظائف تم ترجمتها بطريقة حديثة من خلال واجهة موحده ثلاثية الأبعاد يتم تثبيتها على الهاتف النقال ( السمارتفون) او أجهزة الحاسب الشخصية و( التابلت).
            السلامة و الراحة بالاضافة الى التوفير من استهلاك الطاقة ، تلك هي الميزات الأهم التي يقدمها نظام البيت الذكي لمستخدميه.
        </p>
        <div id="interior_ipad" class="flowplayer no-volume no-mute functional is-splash"
            style="background-image:url('../images/new_ipad222.jpg');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: contain;
            background-color: #fff;">

            <video id="screendemo" loop="loop"
              >
                <source src="../uploads/videos/sequence02.webm" type="video/webm">
                <source src="../uploads/videos/sequence02.mp4" type="video/mp4">
            </video>
        </div>


    <?php else: ?>

        <h1 id="slogan">الحل الأمث يت الذكي على أساس واجهة تحكم(انتيرفيس) ثلاثية الأبعاد وخدمة تثبيته</h1>

        <div class="flexslider visible-lg">
            <ul class="slides">
                <li>
  	    	        <img src="../images/carousel/pic1.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">الحل الثوري على أُسس تقنية ثلاثية الأبعاد</h2>
                        <p>واجهة تحكم (انتيرفيس) موحدة ثلاثية الأبعاد للتحكم عن بعد بالإنارة، الستائر،التكييف والتدفئة،أنظمة الحماية والأجهزة الصوتية والمرئية وغيرها من أنظمة المنزل الذكي .</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="../images/carousel/pic2.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Сертифицированная установка</h2>
                        <p>Проектные решения, отработанные на&nbsp;десятках объектов. Гарантированное качество проводимых работ. Аудит и&nbsp;шеф-монтаж. Использование правильных материалов и&nbsp;компонентов. Современный проект-менеджемент.</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic3.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Любые масштабы зданий</h2>
                        <p>Система может управлять небольшой квартирой или целой резиденцией. Количество подключаемых устройств "Умного&nbsp;дома", а&nbsp;также смартфонов и&nbsp;планшетов не&nbsp;ограничено!</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic4.jpg" />
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
  	    	        <img src="../images/carousel/pic1-md.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Революционное решение на основе 3D-технологии</h2>
                        <p>Единый 3D-интерфейс для&nbsp;беспроводного управления освещением и&nbsp;шторами, климатом, системами безопасности, мультимедиа и&nbsp;другими системами "умного&nbsp;дома".</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="../images/carousel/pic2-md.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Сертифицированная установка</h2>
                        <p>Проектные решения, отработанные на&nbsp;десятках объектов. Гарантированное качество проводимых работ. Аудит и&nbsp;шеф-монтаж. Использование правильных материалов и&nbsp;компонентов. Современный проект-менеджемент.</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic3-md.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Любые масштабы зданий</h2>
                        <p>Система может управлять небольшой квартирой или целой резиденцией. Количество подключаемых устройств "Умного&nbsp;дома", а&nbsp;также смартфонов и&nbsp;планшетов не&nbsp;ограничено!</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic4-md.jpg" />
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
  	    	        <img src="../images/carousel/pic1-sm.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Революционное решение на основе 3D-технологии</h2>
                        <p>Единый 3D-интерфейс для&nbsp;беспроводного управления освещением и&nbsp;шторами, климатом, системами безопасности, мультимедиа и&nbsp;другими системами "умного&nbsp;дома".</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="../images/carousel/pic2-sm.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Сертифицированная установка</h2>
                        <p>Проектные решения, отработанные на&nbsp;десятках объектов. Гарантированное качество проводимых работ. Аудит и&nbsp;шеф-монтаж. Использование правильных материалов и&nbsp;компонентов. Современный проект-менеджемент.</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic3-sm.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Любые масштабы зданий</h2>
                        <p>Система может управлять небольшой квартирой или целой резиденцией. Количество подключаемых устройств "Умного&nbsp;дома", а&nbsp;также смартфонов и&nbsp;планшетов не&nbsp;ограничено!</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic4-sm.jpg" />
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
  	    	        <img src="../images/carousel/pic1-xs.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Революционное решение на основе 3D-технологии</h2>
                        <p>Единый 3D-интерфейс для&nbsp;беспроводного управления освещением и&nbsp;шторами, климатом, системами безопасности, мультимедиа и&nbsp;другими системами "умного&nbsp;дома".</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="../images/carousel/pic2-xs.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Сертифицированная установка</h2>
                        <p>Проектные решения, отработанные на&nbsp;десятках объектов. Гарантированное качество проводимых работ. Аудит и&nbsp;шеф-монтаж. Использование правильных материалов и&nbsp;компонентов. Современный проект-менеджемент.</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic3-xs.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Любые масштабы зданий</h2>
                        <p>Система может управлять небольшой квартирой или целой резиденцией. Количество подключаемых устройств "Умного&nbsp;дома", а&nbsp;также смартфонов и&nbsp;планшетов не&nbsp;ограничено!</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic4-xs.jpg" />
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
                    <img src="../images/light_slide_control.png" alt=""/>
                </a>
            </div>
            <div>
                <a href="#tabs-2" data-slide="4" class="inner_anchor climate" title="Управление климатом" >
                    управление<br>и автоматизация<br>климата<br>
                    <img src="../images/climate_condition.jpg" alt=""/>
                </a>
            </div>
            <div>
                <a data-slide="4" href="#tabs-3" class="inner_anchor security" title="Управление системой безопасности">
                    системы<br>безопасности<br>и мониторинга<br>
                    <img src="../images/security_alarm.jpg" alt=""/>
                </a>
            </div>
        </div>
        <p class="text-center">А также домофония, видеонаблюдение и&nbsp;другие системы. Просто они сделаны по-современному
           и&nbsp;управляются через единый <nobr>3D-интерфейс</nobr> со&nbsp;смартфона или планшета.
           Безопасность, комфорт  и&nbsp;энергосбережение &mdash; вот что дает владельцам система <nobr>"умный дом"</nobr>.
        </p>
        <div id="interior_ipad" class="flowplayer no-volume no-mute functional is-splash"
            style="background-image:url('../images/new_ipad222.jpg');
                background-repeat: no-repeat;
                background-position: center center;
                background-color: #fff;">

            <video id="screendemo" loop="loop"
              >
                <source src="../uploads/videos/sequence02.webm" type="video/webm">
                <source src="../uploads/videos/sequence02.mp4" type="video/mp4">
            </video>
        </div>
        


    <?php endif; ?>

    <p class="app_links_container">
        <a href="https://itunes.apple.com/en/app/throne-3d-smart-home-building/id1024542280?l=ru&mt=8" class="ios_throne_app" target="_blank">ترون لنظام iOS</a>
        <a href="https://play.google.com/store/apps/details?id=com.throne.project28.demo.nexus" class="android_throne_app" target="_blank">ترون لنظام   Android</a>
    </p>
    <div class="bottom_line"></div>
</div>

-->



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
                        <img src="../images/phone_tube.png" alt="">
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

<script src="../js/jquery-2.1.3.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>

<script type="text/javascript" src="../js/imagesloaded.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script src="../js/jquery.mousewheel.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/vendor/modernizr-2.7.1.min.js"></script>
<?php if(!$detect->isMobile()): ?>
    <script type="text/javascript" src="../js/skrollr.min.js"></script>
<?php endif; ?>
<script type="text/javascript" src="../js/retina.min.js"></script>
<script type="text/javascript" src="../js/tabulous.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
<!--script type="text/javascript" src="../js/jquery.liquid-slider.js"></script-->
<script type="text/javascript" src="../js/bootstrap.youtubepopup.min.js"></script>
<script type="text/javascript" src="../js/jquery.mask.min.js"></script>

<script type="text/javascript" src="../js/flowplay/flowplayer.js"></script>
<!--script type="text/javascript" src="../js/flowplay/flowplayer.ipad-3.2.13.min.js"></script-->

<script type="text/javascript" src="../js/jquery.flexslider.js"></script>

<script type="text/javascript" src="../js/jquery.colorbox-min.js"></script>

<?php if ( !$detect->isMobile() ): ?>
    <script type="text/javascript" src="js/main.js"></script>
<?php else: ?>
    <script type="text/javascript" src="http://releases.flowplayer.org/../js/flowplayer.ipad-3.2.13.min.js"></script>
    <!--script type="text/javascript" src="../js/jquery.mobile-1.4.5.min.js"></script-->
    <script type="text/javascript" src="js/main_mobile.js"></script>
<?php endif; ?>


<!--script src="../js/jquery-2.1.3.min.js"></script-->
<!--script src="../js/jquery-ui.js"></script-->

<!--script type="text/javascript" src="../js/enquire.min.js"></script-->


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

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
    var __lc = {};
    __lc.license = 6592911;
    (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
</script>
<!-- End of LiveChat code -->

</body>

</html>