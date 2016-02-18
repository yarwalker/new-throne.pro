<?
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/Mobile_Detect.php';
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

    <link rel="alternate" hreflang="en" href="http://throne.pro/en">
    <link rel="alternate" hreflang="ru" href="http://throne.pro/ru">
    <link rel="alternate" hreflang="ar" href="http://throne.pro/arabic">

    <meta name="description" content="THRONE 3D умный дом " />
    <meta name="keywords" content="THRONE 3D управление освещением, THRONE 3D система умный дом, THRONE 3D технология умный дом, THRONE 3D оборудование умный дом, THRONE 3D умный дом купить, THRONE 3D умный дом цена, THRONE 3D умный дом стоимость, THRONE 3D умный дом онлайн, THRONE 3D умный дом новейшие технологии, THRONE 3D умный дом новые технологии, THRONE 3D видеонаблюдение, THRONE 3D пожарная сигнализация, THRONE 3D охранная сигнализация, THRONE 3D управление жалюзи, THRONE 3D управление шторами" />
    <title dir="rtl">"ترون" البيت الذكي</title>
    <link href="/css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.icon-large.min.css" rel="stylesheet" type="text/css">
    <!--link href="/css/bootstrap-responsive.css" rel="stylesheet" type="text/css"-->
    <link href="/css/fixed-positioning.css" rel="stylesheet" type="text/css" />
    <link href="/css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="/css/tabulous.css" rel="stylesheet" type="text/css" />
    <!--link href="/css/liquid-slider.css" rel="stylesheet" type="text/css" /-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate/css/3.0.0/animate.min.css">

    <link href="/css/colorbox.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="/css/flexslider.css">

    <link rel="stylesheet" href="/js/flowplay/skin/functional.css">
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/intlTelInput.css">

    <?php if ( !$detect->isMobile() ): ?>
        <link href="/arabic/css/main.css" rel="stylesheet" type="text/css" />
    <?php else: ?>
        <link href="/arabic/css/main_mobile.css" rel="stylesheet" type="text/css" />
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
    <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
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

<div id="cities" class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="callback_wrapper col-lg-4 col-md-5 col-sm-7 col-xs-12">
                <span class="callback_button" data-toggle="modal" data-target="#myModal"
                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب إتصال</span>
                <span class="callback_contacts"><a href="mailto:office@throne.pro" target="_blank">office@throne.pro</a></span>
            </div>

            <div class="city_wrapper col-lg-8 col-md-7 col-sm-5 col-xs-12">

                <span id="city_doha" class="visible">+974 44980308<br>Fereej Bin Mahmoud, Street No 830, Office No 26</span>
                <div class="btn-group">

                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        الدوحة <span class="my_caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li data-city="default"><a href="/arabic">THRONE Middle East HQ</a></li>
                        <li data-city="doha"><a href="/arabic/doha">الدوحة</a></li>
                    </ul>
                </div>
                <img src="/images/geo-location.png" alt="">
            </div>
        </div>
    </div>
</div>

<div id="cities" class="visible-xs">
    <div class="container">
        <div class="row">
            <div class="city_wrapper col-lg-8 col-md-7 col-sm-5 col-xs-12">

                <span id="city_doha" class="visible">+974 44980308<br>Fereej Bin Mahmoud, Street No 830, Office No 26</span>
                <div class="btn-group">

                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        الدوحة <span class="my_caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li data-city="default"><a href="/arabic">THRONE Middle East HQ</a></li>
                        <li data-city="doha"><a href="/arabic/doha">الدوحة</a></li>
                    </ul>
                </div>
                <img src="/images/geo-location.png" alt="">
            </div>
            <div class="callback_wrapper col-lg-4 col-md-5 col-sm-7 col-xs-12">
                <span class="callback_contacts cc_370"><a href="mailto:office@throne.pro" target="_blank">office@throne.pro</a></span>
                <span class="callback_button" data-toggle="modal" data-target="#myModal"
                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب إتصال</span>
                <span class="callback_contacts"><a href="mailto:office@throne.pro" target="_blank">office@throne.pro</a></span>
            </div>
        </div>
    </div>
</div>


<img src="/images/phone_tube.png" alt="" class="callback_fix_btn" data-toggle="modal" data-target="#myModal"
     onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;" />
<div class="frame">
    <div id="head" class=" hidden-xs">

        <div id="langs" class="form-group">
            <select class="form-control">
                <option value="ru" >RU</option>
                <option value="en">EN</option>
                <option value="arabic" selected>العربية</option>
            </select>
        </div>

        <a id="logo" href="/arabic/doha" >THRONE Project</a>

        <ul id="top_menu_ext">
            <li><a href="about.html" title="عن الشركة">عن الشركة</a></li>
            <!--li><a href="developers.html" title="للمطورين">للمطورين</a></li-->
            <li><a href="installation.html" title="كيف نعمل">كيف نعمل</a></li>
        </ul>

        <!--div class="callback visible-lg visible-md">
            <span class="callback_button" data-toggle="modal" data-target="#myModal"
                  onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب إتصال</span>
            <span class="callback_contacts"><a href="mailto:office@throne.pro" target="_blank">office@throne.pro</a>&nbsp;&nbsp;+7 (495) 255-0-777</span>
        </div-->

    </div>

    <div id="head" class=" visible-xs" >
        <nav class="navbar" id="top_menu_ext" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a id="logo" href="/arabic/doha" >THRONE Project</a>
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
                        <!--li><a href="developers.html" title="للمطورين">للمطورين</a></li-->
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

<div id="slide-1" data-slide="1" class="frame animation" >
    <?php if(!$detect->isMobile()): ?>

        <h1 id="slogan">الحل الأمثل لادارة و تثبيت البيت الذكي من خلال واجهة تحكم (إنتيرفيس) ثلاثية الأبعاد الأولى من نوعها في العالم!</h1>
        <div class="flexslider">
            <ul class="slides">
                <li>
  	    	        <img src="/images/carousel/pic1.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">الحل الثوري على أُسس تقنية ثلاثية الأبعاد</h2>
                        <p>واجهة تحكم (إنتيرفيس) موحدة ثلاثية الأبعاد للتحكم عن بعد: بالإنارة، الستائر،التكييف والتدفئة،أنظمة الحماية والأجهزة الصوتية والمرئية وغيرها من أنظمة المنزل الذكي</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="/images/carousel/pic2.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">نموذج عرض لمنزلكم على واجهة تحكم ثلاثية الأبعاد مجاناً</h2>
                        <p>حتى قبل توقيع العقود، نحن نقدم مجاناً ولكافة عملائنا فرصة الحصول على تصور كامل حول كيفية عمل المنزل الذكي الخاص بهم، وذلك من خلال نموذج تجريبي ثلاثي الأبعاد مصمم بناءً على مخططات العقار المطلوب تزويده بنظام البيت الذكي. بإمكانكم إرسال مخططات منزلكم، وسنقوم بتصميم نموذج ثلاثي الأبعاد خاص بكم مجانا</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="/images/carousel/pic3.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">أياً كان حجم الأبنية !</h2>
                        <p>النظام بإمكانه إدارة شقة صغيرة أو دار سكن ضخم، كما أن عدد أجهزة البيت الذكي التي يمكن توصيلها للنظام غير محدود. كذلك الأمر بالنسبة لأجهزة الحاسب و(التابلت) والهواتف الذكية (السمارتفون)</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="/images/carousel/pic4.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">خدمة ما بعد البيع</h2>
                        <p>إمكانية تحديث و تطوير النظام مستقبلاً، دعم تقني مدى الحياة من المصنع،ضمانة ٣ سنوات للتجهيزات كافة، ضمانه مدى الحياة لبرنامج " ترون".</p>
                    </div>
  	    		</li>
            </ul>
        </div>

        <p class="text-center">أصبح البيت الذكي من خلال «مشروع ترون»،عبارة عن مجموعة من الوظائف المفهومة  تماما و التي بالفعل نحتاجها في حياتنا اليومية:</p>
        <div class="text-center" id="first_frame_factoids">
            <div>
                <a data-slide="4" href="#tabs-3" class="inner_anchor security" title="الحماية و المراقبة">
                    الحماية <br>و المراقبة<br>
                    <img src="/images/security_alarm.jpg" alt=""/>
                </a>
            </div>
            <div>
                <a href="#tabs-2" data-slide="4" class="inner_anchor climate" title=" التشغيل الآلي لأنظمة الحرارة والتكيف" >
                      التشغيل الآلي لأنظمة <br>الحرارة والتكيف<br>
                    <img src="/images/climate_condition.jpg" alt=""/>
                </a>
            </div>
            <div>
                <a href="#tabs-1" data-slide="4" class="inner_anchor light" title=" التحكم بنظام الإنارة الذكية">
                    التحكم بنظام <br>الإنارة الذكية<br>
                    <img src="/images/light_slide_control.png" alt=""/>
                </a>
            </div>
        </div>
        <p class="text-center">
            وكذلك التحكم بالإنترفون المنزلي وكاميرات المراقبة وكافة أجهزة السلامة والراحة وغيرها من الأنظمة التي تلعب دورا هاما في التوفير من استهلاك الطاقة وتساهم في رفع درجة الامان. تلك هي الميزات الأهم التي يقدمها نظام البيت الذكي لمستخدميه، و بواسطة «مشروع ترون» أصبحت جميع تلك الوظائف سهلة الادارة والتنفيذ حيث تم ترجمتها بطريقة حديثة من خلال واجهة موحده ثلاثية الأبعاد يتم تثبيتها على الهاتف النقال (السمارتفون) او أجهزة الحاسب الشخصية وأجهزة (التابلت).
        </p>
        <div id="interior_ipad" class="flowplayer no-volume no-mute functional is-splash"
            style="background-image:url('/images/new_ipad222.jpg');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: contain;
            background-color: #fff;">

            <video id="screendemo" loop="loop"
              >
                <source src="/uploads/videos/sequence02.webm" type="video/webm">
                <source src="/uploads/videos/sequence02.mp4" type="video/mp4">
            </video>
        </div>


    <?php else: ?>

        <h1 id="slogan">الحل الأمثل لادارة و تثبيت البيت الذكي من خلال واجهة تحكم (إنتيرفيس) ثلاثية الأبعاد الأولى من نوعها في العالم!</h1>

        <div class="flexslider visible-lg">
            <ul class="slides">
                <li>
  	    	        <img src="/images/carousel/pic1.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">الحل الثوري على أُسس تقنية ثلاثية الأبعاد</h2>
                        <p>واجهة تحكم (إنتيرفيس) موحدة ثلاثية الأبعاد للتحكم عن بعد: بالإنارة، الستائر،التكييف والتدفئة،أنظمة الحماية والأجهزة الصوتية والمرئية وغيرها من أنظمة المنزل الذكي</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="/images/carousel/pic2.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">نموذج عرض لمنزلكم على واجهة تحكم ثلاثية الأبعاد مجاناً</h2>
                        <p>حتى قبل توقيع العقود، نحن نقدم مجاناً ولكافة عملائنا فرصة الحصول على تصور كامل حول كيفية عمل المنزل الذكي الخاص بهم، وذلك من خلال نموذج تجريبي ثلاثي الأبعاد مصمم بناءً على مخططات العقار المطلوب تزويده بنظام البيت الذكي. بإمكانكم إرسال مخططات منزلكم، وسنقوم بتصميم نموذج ثلاثي الأبعاد خاص بكم مجانا</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="/images/carousel/pic3.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">أياً كان حجم الأبنية !</h2>
                        <p>النظام بإمكانه إدارة شقة صغيرة أو دار سكن ضخم، كما أن عدد أجهزة البيت الذكي التي يمكن توصيلها للنظام غير محدود. كذلك الأمر بالنسبة لأجهزة الحاسب و(التابلت) والهواتف الذكية (السمارتفون)</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="/images/carousel/pic4.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">خدمة ما بعد البيع</h2>
                        <p>إمكانية تحديث و تطوير النظام مستقبلاً، دعم تقني مدى الحياة من المصنع،ضمانة ٣ سنوات للتجهيزات كافة، ضمانه مدى الحياة لبرنامج " ترون".</p>
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
                        <h2 data-animation="animated pulse">الحل الثوري على أُسس تقنية ثلاثية الأبعاد</h2>
                        <p>واجهة تحكم (إنتيرفيس) موحدة ثلاثية الأبعاد للتحكم عن بعد: بالإنارة، الستائر،التكييف والتدفئة،أنظمة الحماية والأجهزة الصوتية والمرئية وغيرها من أنظمة المنزل الذكي</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="/images/carousel/pic2-md.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">نموذج عرض لمنزلكم على واجهة تحكم ثلاثية الأبعاد مجاناً</h2>
                        <p>حتى قبل توقيع العقود، نحن نقدم مجاناً ولكافة عملائنا فرصة الحصول على تصور كامل حول كيفية عمل المنزل الذكي الخاص بهم، وذلك من خلال نموذج تجريبي ثلاثي الأبعاد مصمم بناءً على مخططات العقار المطلوب تزويده بنظام البيت الذكي. بإمكانكم إرسال مخططات منزلكم، وسنقوم بتصميم نموذج ثلاثي الأبعاد خاص بكم مجانا</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="/images/carousel/pic3-md.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">أياً كان حجم الأبنية !</h2>
                        <p>النظام بإمكانه إدارة شقة صغيرة أو دار سكن ضخم، كما أن عدد أجهزة البيت الذكي التي يمكن توصيلها للنظام غير محدود. كذلك الأمر بالنسبة لأجهزة الحاسب و(التابلت) والهواتف الذكية (السمارتفون)</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="/images/carousel/pic4-md.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">خدمة ما بعد البيع</h2>
                        <p>إمكانية تحديث و تطوير النظام مستقبلاً، دعم تقني مدى الحياة من المصنع،ضمانة ٣ سنوات للتجهيزات كافة، ضمانه مدى الحياة لبرنامج " ترون".</p>
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
                        <h2 data-animation="animated pulse">الحل الثوري على أُسس تقنية ثلاثية الأبعاد</h2>
                        <p>واجهة تحكم (إنتيرفيس) موحدة ثلاثية الأبعاد للتحكم عن بعد: بالإنارة، الستائر،التكييف والتدفئة،أنظمة الحماية والأجهزة الصوتية والمرئية وغيرها من أنظمة المنزل الذكي</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="/images/carousel/pic2-sm.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">نموذج عرض لمنزلكم على واجهة تحكم ثلاثية الأبعاد مجاناً</h2>
                        <p>حتى قبل توقيع العقود، نحن نقدم مجاناً ولكافة عملائنا فرصة الحصول على تصور كامل حول كيفية عمل المنزل الذكي الخاص بهم، وذلك من خلال نموذج تجريبي ثلاثي الأبعاد مصمم بناءً على مخططات العقار المطلوب تزويده بنظام البيت الذكي. بإمكانكم إرسال مخططات منزلكم، وسنقوم بتصميم نموذج ثلاثي الأبعاد خاص بكم مجانا</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="/images/carousel/pic3-sm.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">أياً كان حجم الأبنية !</h2>
                        <p>النظام بإمكانه إدارة شقة صغيرة أو دار سكن ضخم، كما أن عدد أجهزة البيت الذكي التي يمكن توصيلها للنظام غير محدود. كذلك الأمر بالنسبة لأجهزة الحاسب و(التابلت) والهواتف الذكية (السمارتفون)</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="/images/carousel/pic4-sm.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">خدمة ما بعد البيع</h2>
                        <p>إمكانية تحديث و تطوير النظام مستقبلاً، دعم تقني مدى الحياة من المصنع،ضمانة ٣ سنوات للتجهيزات كافة، ضمانه مدى الحياة لبرنامج " ترون".</p>
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
                        <h2 data-animation="animated pulse">الحل الثوري على أُسس تقنية ثلاثية الأبعاد</h2>
                        <p>واجهة تحكم (إنتيرفيس) موحدة ثلاثية الأبعاد للتحكم عن بعد: بالإنارة، الستائر،التكييف والتدفئة،أنظمة الحماية والأجهزة الصوتية والمرئية وغيرها من أنظمة المنزل الذكي</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="/images/carousel/pic2-xs.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">نموذج عرض لمنزلكم على واجهة تحكم ثلاثية الأبعاد مجاناً</h2>
                        <p>حتى قبل توقيع العقود، نحن نقدم مجاناً ولكافة عملائنا فرصة الحصول على تصور كامل حول كيفية عمل المنزل الذكي الخاص بهم، وذلك من خلال نموذج تجريبي ثلاثي الأبعاد مصمم بناءً على مخططات العقار المطلوب تزويده بنظام البيت الذكي. بإمكانكم إرسال مخططات منزلكم، وسنقوم بتصميم نموذج ثلاثي الأبعاد خاص بكم مجانا</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="/images/carousel/pic3-xs.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">أياً كان حجم الأبنية !</h2>
                        <p>النظام بإمكانه إدارة شقة صغيرة أو دار سكن ضخم، كما أن عدد أجهزة البيت الذكي التي يمكن توصيلها للنظام غير محدود. كذلك الأمر بالنسبة لأجهزة الحاسب و(التابلت) والهواتف الذكية (السمارتفون)</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="/images/carousel/pic4-xs.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">خدمة ما بعد البيع</h2>
                        <p>إمكانية تحديث و تطوير النظام مستقبلاً، دعم تقني مدى الحياة من المصنع،ضمانة ٣ سنوات للتجهيزات كافة، ضمانه مدى الحياة لبرنامج " ترون".</p>
                    </div>
  	    		</li>
            </ul>
        </div>

        <p class="text-center">أصبح البيت الذكي من خلال «مشروع ترون»،عبارة عن مجموعة من الوظائف المفهومة  تماما و التي بالفعل نحتاجها في حياتنا اليومية:</p>

        <div class="text-center" id="first_frame_factoids">
            <div>
                <a data-slide="4" href="#tabs-3" class="inner_anchor security" title="الحماية و المراقبة">
                    الحماية <br>و المراقبة<br>
                    <img src="/images/security_alarm.jpg" alt=""/>
                </a>
            </div>
            <div>
                <a href="#tabs-2" data-slide="4" class="inner_anchor climate" title=" التشغيل الآلي لأنظمة الحرارة والتكيف" >
                    التشغيل الآلي لأنظمة <br>الحرارة والتكيف<br>
                    <img src="/images/climate_condition.jpg" alt=""/>
                </a>
            </div>
            <div>
                <a href="#tabs-1" data-slide="4" class="inner_anchor light" title=" التحكم بنظام الإنارة الذكية">
                    التحكم بنظام <br>الإنارة الذكية<br>
                    <img src="/images/light_slide_control.png" alt=""/>
                </a>
            </div>
        </div>

        <!--div class="text-center" id="first_frame_factoids">
            <div>
                <a data-slide="4" href="#tabs-3" class="inner_anchor security" title="Управление системой безопасности">
                    системы<br>безопасности<br>и мониторинга<br>
                    <img src="/images/security_alarm.jpg" alt=""/>
                </a>
            </div>

            <div>
                <a href="#tabs-2" data-slide="4" class="inner_anchor climate" title="Управление климатом" >
                    управление<br>и автоматизация<br>климата<br>
                    <img src="/images/climate_condition.jpg" alt=""/>
                </a>
            </div>

            <div>
                <a href="#tabs-1" data-slide="4" class="inner_anchor light" title="Управление освещением">
                    система<br>"умного"<br>освещения<br>
                    <img src="/images/light_slide_control.png" alt=""/>
                </a>
            </div>
        </div-->

        <p class="text-center">
            وكذلك التحكم بالإنترفون المنزلي وكاميرات المراقبة وكافة أجهزة السلامة والراحة وغيرها من الأنظمة التي تلعب دورا هاما في التوفير من استهلاك الطاقة وتساهم في رفع درجة الامان. تلك هي الميزات الأهم التي يقدمها نظام البيت الذكي لمستخدميه، و بواسطة «مشروع ترون» أصبحت جميع تلك الوظائف سهلة الادارة والتنفيذ حيث تم ترجمتها بطريقة حديثة من خلال واجهة موحده ثلاثية الأبعاد يتم تثبيتها على الهاتف النقال (السمارتفون) او أجهزة الحاسب الشخصية وأجهزة (التابلت).
        </p>

        <div id="interior_ipad" class="flowplayer no-volume no-mute functional is-splash"
            style="background-image:url('/images/new_ipad222.jpg');
                background-repeat: no-repeat;
                background-position: center center;
                background-color: #fff;">

            <video id="screendemo" loop="loop"
              >
                <source src="/uploads/videos/sequence02.webm" type="video/webm">
                <source src="/uploads/videos/sequence02.mp4" type="video/mp4">
            </video>
        </div>
        


    <?php endif; ?>

    <p class="app_links_container">
        <a href="https://itunes.apple.com/en/app/throne-3d-smart-home-building/id1024542280?l=ru&mt=8" class="ios_throne_app" target="_blank">ترون لنظام
            iOS</a>
        <a href="https://play.google.com/store/apps/details?id=com.throne.project28.demo.nexus" class="android_throne_app" target="_blank">ترون لنظام
            Android</a>
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
                <h1>تحكم سهل و واضح</h1>
                <p class="text-center" id="descr">لإدارة البيت الذكي نحن نقدم لعملائنا واجهة التحكم (انتيرفيس) "ترون" ثلاثية الأبعاد الفريدة من نوعها و التي لم ينتج مثيل لها حتى الآن في العالم ، بوساطتها سيمكنكم متابعة الحالة العامة للمنزل و إدارة الأنظمة المختلفة فيه من خلال الهاتف النقال الشخصي أو عن طريق عدد منها أو من أي جهاز حاسب شخصي. فابإمكانكم التحكم بكل من أجهزة البيت الذكي بشكل منفرد، أو بغرفة معينة أو بطابق كامل أو بالبيت بأكمله. وإن القيام بكل تلك العمليات، أصبح أمراً بسيطاً جداً وبدرجةٍ من السهولة بشكل لم نعهده من قبل وكل ذلك بفضل استخدام نظام "ترون" ثلاثي الأبعاد و المخصص لمنزلكم بالذات.</p>
                <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/Ek26aN5T5DE?autoplay=1" class="youtube">مشاهدة فيديو </a><span id="watch_btn"></span></p>
                <div id="notes">
                    <div><img src="/images/interface_icon.png" class="img-responsive" alt=""/><span id="note1">واجهة تحكم (إنتيرفيس) واضحة و سهلة</span></div>
                    <div><img src="/images/scale_icon.png" class="img-responsive" alt=""/><span id="note2">إدارة المنشآت مهما بلغت مساحتها </span></div>
                    <div><img src="/images/dist_manage_icon.png" class="img-responsive" alt=""/><span id="note3">التحكم عن بعد بواسطة الهاتف النقال<br>( السمارتفون ) او أجهزة ( التابلت )  </span></div>
                </div>
                <div id="slide2-ipad">
                    <img src="/images/ipad_slide2.jpg" class="img-responsive" alt=""/>
                </div>
                <div id="fake_tabs" align="center" width="100%">
                    <ul  data-anchor-target="#slide-3" data-bottom-top="visibility: hidden">
                        <li data-anchor-target="#slide-3"><a href="#tabs-3" data-slide="4" title="">الأمان</a></li>
                        <li data-anchor-target="#slide-3"><a href="#tabs-2" data-slide="4" title="">المناخ</a></li>
                        <li data-anchor-target="#slide-3" ><a href="#tabs-1" data-slide="4" title="" class="tabulous_active">اللإنارة </a></li>
                        <span class="tabulousclear"></span>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hsContainer visible-md">
            <div class="hsContent">
                <h1>تحكم سهل و واضح</h1>
                <p class="text-center" id="descr">لإدارة البيت الذكي نحن نقدم لعملائنا واجهة التحكم (انتيرفيس) "ترون" ثلاثية الأبعاد الفريدة من نوعها و التي لم ينتج مثيل لها حتى الآن في العالم ، بوساطتها سيمكنكم متابعة الحالة العامة للمنزل و إدارة الأنظمة المختلفة فيه من خلال الهاتف النقال الشخصي أو عن طريق عدد منها أو من أي جهاز حاسب شخصي. فابإمكانكم التحكم بكل من أجهزة البيت الذكي بشكل منفرد، أو بغرفة معينة أو بطابق كامل أو بالبيت بأكمله. وإن القيام بكل تلك العمليات، أصبح أمراً بسيطاً جداً وبدرجةٍ من السهولة بشكل لم نعهده من قبل وكل ذلك بفضل استخدام نظام "ترون" ثلاثي الأبعاد و المخصص لمنزلكم بالذات.</p>
                <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/Ek26aN5T5DE?autoplay=1" class="youtube">مشاهدة فيديو </a><span id="watch_btn"></span>
                <div id="notes">
                    <div><img src="/images/interface_icon.png" class="img-responsive" alt=""/><span id="note1">واجهة تحكم (إنتيرفيس) واضحة و سهلة</span></div>
                    <div><img src="/images/scale_icon.png" class="img-responsive" alt=""/><span id="note2">إدارة المنشآت مهما بلغت مساحتها </span></div>
                    <div><img src="/images/dist_manage_icon.png" class="img-responsive" alt=""/><span id="note3">التحكم عن بعد بواسطة الهاتف النقال<br>( السمارتفون ) او أجهزة ( التابلت )  </span></div>
                </div>
                <div id="slide2-ipad">
                    <img src="/images/ipad_slide2.jpg" class="img-responsive" alt=""/>
                </div>
                <div id="fake_tabs" align="center" width="100%">
                    <ul  data-anchor-target="#slide-3" data-bottom-top="visibility: hidden">
                        <li data-anchor-target="#slide-3"><a href="#md-tabs-3" data-slide="4" title="">الأمان</a></li>
                        <li data-anchor-target="#slide-3"><a href="#md-tabs-2" data-slide="4" title="">المناخ</a></li>
                        <li data-anchor-target="#slide-3" ><a href="#md-tabs-1" data-slide="4" title="" class="tabulous_active">اللإنارة </a></li>
                        <span class="tabulousclear"></span>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hsContainer visible-sm">
            <div class="hsContent">
                <h1>تحكم سهل و واضح</h1>
                <p class="text-center" id="descr">لإدارة البيت الذكي نحن نقدم لعملائنا واجهة التحكم (انتيرفيس) "ترون" ثلاثية الأبعاد الفريدة من نوعها و التي لم ينتج مثيل لها حتى الآن في العالم ، بوساطتها سيمكنكم متابعة الحالة العامة للمنزل و إدارة الأنظمة المختلفة فيه من خلال الهاتف النقال الشخصي أو عن طريق عدد منها أو من أي جهاز حاسب شخصي. فابإمكانكم التحكم بكل من أجهزة البيت الذكي بشكل منفرد، أو بغرفة معينة أو بطابق كامل أو بالبيت بأكمله. وإن القيام بكل تلك العمليات، أصبح أمراً بسيطاً جداً وبدرجةٍ من السهولة بشكل لم نعهده من قبل وكل ذلك بفضل استخدام نظام "ترون" ثلاثي الأبعاد و المخصص لمنزلكم بالذات.</p>
                <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/Ek26aN5T5DE?autoplay=1" class="youtube">مشاهدة فيديو </a><span id="watch_btn"></span>
                <div id="notes">
                    <div><img src="/images/interface_icon.png" class="img-responsive" alt=""/><span id="note1">واجهة تحكم (إنتيرفيس) واضحة و سهلة</span></div>
                    <div><img src="/images/scale_icon.png" class="img-responsive" alt=""/><span id="note2">إدارة المنشآت مهما بلغت مساحتها </span></div>
                    <div><img src="/images/dist_manage_icon.png" class="img-responsive" alt=""/><span id="note3">التحكم عن بعد بواسطة الهاتف النقال<br>( السمارتفون ) او أجهزة ( التابلت )  </span></div>
                </div>
                <div id="slide2-ipad">
                    <img src="/images/ipad_slide2_org.jpg" class="img-responsive" alt=""/>
                </div>

            </div>
        </div>
        <div class="hsContainer visible-xs">
            <div class="hsContent">
                <h1>تحكم سهل و واضح</h1>
                <p class="text-center" id="descr">لإدارة البيت الذكي نحن نقدم لعملائنا واجهة التحكم (انتيرفيس) "ترون" ثلاثية الأبعاد الفريدة من نوعها و التي لم ينتج مثيل لها حتى الآن في العالم ، بوساطتها سيمكنكم متابعة الحالة العامة للمنزل و إدارة الأنظمة المختلفة فيه من خلال الهاتف النقال الشخصي أو عن طريق عدد منها أو من أي جهاز حاسب شخصي. فابإمكانكم التحكم بكل من أجهزة البيت الذكي بشكل منفرد، أو بغرفة معينة أو بطابق كامل أو بالبيت بأكمله. وإن القيام بكل تلك العمليات، أصبح أمراً بسيطاً جداً وبدرجةٍ من السهولة بشكل لم نعهده من قبل وكل ذلك بفضل استخدام نظام "ترون" ثلاثي الأبعاد و المخصص لمنزلكم بالذات.</p>
                <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/Ek26aN5T5DE?autoplay=1" class="youtube">مشاهدة فيديو </a><span id="watch_btn"></span>
                <div id="notes" class="table">
                    <div class="table_row">
                        <div class="table_cell"><span id="note1">واجهة تحكم (إنتيرفيس) واضحة و سهلة</span></div>
                        <div class="table_cell"><img src="/images/interface_icon.png" class="img-responsive"  alt=""/></div>
                    </div>
                    <div class="table_row">
                        <div class="table_cell"><span id="note2">إدارة المنشآت مهما بلغت مساحتها </span></div>
                        <div class="table_cell"><img src="/images/scale_icon.png" class="img-responsive" alt=""/></div>
                    </div>
                    <div class="table_row">
                        <div class="table_cell"><span id="note3">التحكم عن بعد بواسطة الهاتف النقال السمارتفون او أجهزة التابلت</span></div>
                        <div class="table_cell"><img src="/images/dist_manage_icon.png" class="img-responsive" alt=""/></div>
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
            <li><a href="#tabs-3" data-slide="4" title="">الأمان</a></li>
            <li><a href="#tabs-2" data-slide="4" title="">المناخ</a></li>
            <li><a href="#tabs-1" data-slide="4" title="">اللإنارة</a></li>
        </ul>
        <!--div id="tabs_container"-->
        <div id="tabs-1">

            <table class="table">
                <tbody>
                <tr><td colspan="2"><h2>التحكم بالإنارة </h2></td></tr>
                <tr>
                    <td width="60%"><img src="/images/light_manage.jpg" alt="التحكم بالإنارة " title="التحكم بالإنارة " class="img-responsive tab_main_img col-xs-12"  /></td>
                    <td width="40%">

                        <p class="">
                            على سيبل المثال : قد يكون في منزلكم العشرات من أجهزة الإضاءة، وللتأكد من أن جميعها دون استثناء قد تم إيقاف تشغيلها قبل الخلود إلى النوم أو مغادرة المنزل، سيتوجب عليكم المرور عَلى كل غرف البيت للتأكد من هذا الأمر . وهذه الطريقة التقليدية و إن كانت مضمونة، لكنها قديمة بعض الشيء بالنسبة لحداثة القرن 21 .</p>
                        <p>
                            البيت الذكي "ترون" يتيح لكم التحكم بأجهزة إضاءة محددة او بمجموعات من الأجهزة الضوئية ، وبالتأكيد بلمسة زر واحدة يمكن إطفاء كامل إنارة المنزل في أي وقت . بالإضافة الى ذلك يمكنكم إختيار درجات سطوع و ألوان الإضاءة في كل غرفة او قسم من المنزل على وجه الخصوص و حفظ تلك النماذج (المشاهد)من الإنارة المفضلة في قائمة مخصصة في واجهة "ترون" .</p>
                        <p class="text-center more-info">
                            يمكنكم استشارة الأخصائيين في شركتنا، لمعرفة كافة التفاصيل حول أتمتة الإنارة<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <img src="/images/light_zone_management.png" alt="تحكم مركزي أو مقسم لمناطق " title="تحكم مركزي أو مقسم لمناطق "/>
                        <span>تحكم مركزي أو مقسم لمناطق </span>
                    </td>
                    <td>
                        <img src="/images/light_slide_control.png" alt="تعديل تدرج السطوع" title="تعديل تدرج السطوع"/>
                        <span>تعديل تدرج السطوع</span>
                    </td>
                    <td>
                        <img src="/images/light_scene_saving.png" alt="حفظ نماذج (مشاهد) إضاءة معينة للمستخدم " title="حفظ نماذج (مشاهد) إضاءة معينة للمستخدم "/>
                        <span>حفظ نماذج (مشاهد) إضاءة معينة للمستخدم </span>
                    </td>
                    <td>
                        <img src="/images/light_curtains.png" alt="حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها " title="حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها "/>
                        <span>حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها </span>
                    </td>
                    <td>
                        <img src="/images/light_part_management.png" alt="تحكم كلي أو جزئي " title="تحكم كلي أو جزئي "  />
                        <span>تحكم كلي أو جزئي </span>
                    </td>
                </tr>
            </table>
        </div>
        <div id="tabs-2">
            <table class="table">
                <tbody>
                <tr><td colspan="2"><h2>التحكم بالمناخ </h2></td></tr>
                <tr>
                    <td width="60%"><img src="/images/climate_management.jpg" class="img-responsive tab_main_img  col-xs-12" alt="التحكم بالمناخ " title="التحكم بالمناخ "/></td>
                    <td>
                        <p class="">
                            نظام التحكم بالمناخ (درجة الحرارة) داخل مقصورات قيادة السيارات، أصبح من الميزات العادية منذ زمن طويل، وهنا السؤال الذي يطرح نفسه : ماهو السبب الذي يمنعنا من التمتع بنفس تلك الميزة لكن في المنزل ؟</p>
                        <p>بواسطة البيت الذكي "ترون" سيصبح بإمكانكم التحكم الكامل بكل أجهزة التكييف و التدفئة في المنزل في أي وقت او من أي مكان من داخل او من خارج المنزل. فقبل وصولكم الى البيت سيمكنكم تهيئة المناخ المناسب حسب طلبكم، فتكون البرودة باستقبالكم في أيام الصيف الحارة ، او يمكنكم تشغيل أنظمة تدفئة الأرضية مسبقا لرفع درجة حرارة المنزل بما يتناسب مع رغبتكم في ليالي الشتاء الباردة .</p>
                        <p>بالضغط على الزر المناسب ، سيظهر عل شاشة جهازكم
                            (خريطة حرارية) أي رسم بياني يبين بشكل دقيق حرارة كل قسم من أقسام المنزل و بالطبع يمكن تعديل او ضبط الحرارة المناسبة ليقوم النظام تلقائيا فيما بعد بالحفاظ عليها .</p>
                        <p class="text-center more-info">
                            يمكنكم استشارة الأخصائيين في شركتنا لمعرفة كافة التفاصيل بخصوص أتمتة تجهيزات المناخ<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <img src="/images/climate_condition.jpg" alt="تكييف مركزي او مقسم لمناطق " title="تكييف مركزي او مقسم لمناطق "/>
                        <span>تكييف مركزي او مقسم لمناطق </span>
                    </td>
                    <td>
                        <img src="/images/climate_ventil.jpg" alt="تهوية معكوسة" title="تهوية معكوسة"/>
                        <span>تهوية معكوسة</span>
                    </td>
                    <td>
                        <img src="/images/climate_heating.jpg" alt="تدفئة مركزية او مقسمة لمناطق " title="تدفئة مركزية او مقسمة لمناطق "/>
                        <span>تدفئة مركزية او مقسمة لمناطق </span>
                    </td>
                    <td>
                        <img src="/images/climate_warm_floor.jpg" alt="التدفئة الأرضية الكهربائية و بالأنابيب المائية" title="التدفئة الأرضية الكهربائية و بالأنابيب المائية"/>
                        <span>التدفئة الأرضية الكهربائية و بالأنابيب المائية</span>
                    </td>
                    <td>
                        <img src="/images/climate_thermostate.jpg" alt="منظمات الحرارة" title="منظمات الحرارة"/>
                        <span>منظمات الحرارة</span>
                    </td>
                </tr>
            </table>
        </div>
        <div id="tabs-3">
            <table class="table">
                <tbody>
                <tr><td colspan="2"><h2>إدارة انظمة الأمان</h2></td></tr>
                <tr>
                    <td width="60%"><img src="/images/slide4_bg.jpg" class="img-responsive tab_main_img  col-xs-12" alt="إدارة انظمة الأمان" title="إدارة انظمة الأمان"/></td>
                    <td>
                        <p>"البيت الذكي ترون" يتيح تشغيل او إيقاف نظام الأمان و الإنذارفوريا بكامل المبنى او بكل طابق بشكل مستقل او في أقسام معينة منه. التبليغ بحدوث طارئ ما يترافق مع تحديد المكان على النموذج الثلاثي الابعاد . </p>
                        <p>بواسطة " ترون" ، يمكنكم مشاهدة الفيديو من كاميرات المراقبة، تلقي الإنذارات حول نشوب حريق ما، تسرب غاز او مياه، أو بحدوث أي تسلل إلى داخل حرم المنزل .</p>
                        <p>وبتوصيل جهاز الانترفون المنزلي لبرنامج ترون، يصبح ممكنا رؤية الزوار القادمين إليكم و فتح الأبوب الخارجية لهم مباشرة عن طريق هاتفكم النقال او جهاز الحاسب الخاص بكم .</p>
                        <p class="text-center more-info">
                            لمعرفة المزيد حول أتمتة أنظمة الحماية، يمكنكم التواصل مع الخبراء الأخصائيين في شركتنا<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <img src="/images/security_alarm.jpg" alt="أجهزة الانذار من الحرائق و إنذار الأمان" title="أجهزة الانذار من الحرائق و إنذار الأمان"/>
                        <span>أجهزة الانذار من الحرائق و إنذار الأمان</span>
                    </td>
                    <td>
                        <img src="/images/security_sensors.jpg" alt="حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب" title="حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب"/>
                        <span>حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب</span>
                    </td>
                    <td>
                        <img src="/images/security_emergency.jpg" alt="حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة" title="حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة"/>
                        <span>حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة</span>
                    </td>
                    <td>
                        <img src="/images/security_notification.jpg" alt="تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية" title="تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية"/>
                        <span>تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية</span>
                    </td>
                    <td>
                        <img src="/images/security_video.jpg" alt="عدد غير محدود من كاميرات المراقبة " title="عدد غير محدود من كاميرات المراقبة "/>
                        <span>عدد غير محدود من كاميرات المراقبة </span>
                    </td>
                </tr>
            </table>
        </div>

        <!--/div-->
    </div>
    <div id="tabs2" class="visible-md">
        <ul>
            <li><a href="#md-tabs-3" data-slide="4" title="">الأمان</a></li>
            <li><a href="#md-tabs-2" data-slide="4" title="">المناخ</a></li>
            <li><a href="#md-tabs-1" data-slide="4" title="">اللإنارة</a></li>
        </ul>
        <!--div id="tabs_container"-->
        <div id="md-tabs-1">
            <table class="table">
                <tbody>
                <tr><td colspan="2"><h2>التحكم بالإنارة </h2></td></tr>
                <tr>
                    <td width="60%"><img src="/images/light_manage.jpg" alt="التحكم بالإنارة " title="التحكم بالإنارة " class="img-responsive tab_main_img  col-xs-12"  /></td>
                    <td width="40%">
                        <p class="">
                            على سيبل المثال : قد يكون في منزلكم العشرات من أجهزة الإضاءة، وللتأكد من أن جميعها دون استثناء قد تم إيقاف تشغيلها قبل الخلود إلى النوم أو مغادرة المنزل، سيتوجب عليكم المرور عَلى كل غرف البيت للتأكد من هذا الأمر . وهذه الطريقة التقليدية و إن كانت مضمونة، لكنها قديمة بعض الشيء بالنسبة لحداثة القرن 21 .</p>
                        <p>
                            البيت الذكي "ترون" يتيح لكم التحكم بأجهزة إضاءة محددة او بمجموعات من الأجهزة الضوئية ، وبالتأكيد بلمسة زر واحدة يمكن إطفاء كامل إنارة المنزل في أي وقت . بالإضافة الى ذلك يمكنكم إختيار درجات سطوع و ألوان الإضاءة في كل غرفة او قسم من المنزل على وجه الخصوص و حفظ تلك النماذج (المشاهد)من الإنارة المفضلة في قائمة مخصصة في واجهة "ترون" .</p>
                        <p class="text-center more-info">
                            يمكنكم استشارة الأخصائيين في شركتنا، لمعرفة كافة التفاصيل حول أتمتة الإنارة<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <img src="/images/light_zone_management.png" alt="تحكم مركزي أو مقسم لمناطق " title="تحكم مركزي أو مقسم لمناطق "/>
                        <span>تحكم مركزي أو مقسم لمناطق </span>
                    </td>
                    <td>
                        <img src="/images/light_slide_control.png" alt="تعديل تدرج السطوع" title="تعديل تدرج السطوع"/>
                        <span>تعديل تدرج السطوع</span>
                    </td>
                    <td>
                        <img src="/images/light_scene_saving.png" alt="حفظ نماذج (مشاهد) إضاءة معينة للمستخدم " title="حفظ نماذج (مشاهد) إضاءة معينة للمستخدم "/>
                        <span>حفظ نماذج (مشاهد) إضاءة معينة للمستخدم </span>
                    </td>
                    <td>
                        <img src="/images/light_curtains.png" alt="حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها " title="حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها "/>
                        <span>حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها </span>
                    </td>
                    <td>
                        <img src="/images/light_part_management.png" alt="تحكم كلي أو جزئي " title="تحكم كلي أو جزئي "  />
                        <span>تحكم كلي أو جزئي </span>
                    </td>
                </tr>
            </table>
        </div>
        <div id="md-tabs-2">
            <table class="table">
                <tbody>
                <tr><td colspan="2"><h2>التحكم بالمناخ </h2></td></tr>
                <tr>
                    <td width="60%"><img src="/images/climate_management.jpg" class="img-responsive tab_main_img  col-xs-12" alt="التحكم بالمناخ " title="التحكم بالمناخ "/></td>
                    <td>
                        <p class="">
                            نظام التحكم بالمناخ (درجة الحرارة) داخل مقصورات قيادة السيارات، أصبح من الميزات العادية منذ زمن طويل، وهنا السؤال الذي يطرح نفسه : ماهو السبب الذي يمنعنا من التمتع بنفس تلك الميزة لكن في المنزل ؟</p>
                        <p>بواسطة البيت الذكي "ترون" سيصبح بإمكانكم التحكم الكامل بكل أجهزة التكييف و التدفئة في المنزل في أي وقت او من أي مكان من داخل او من خارج المنزل. فقبل وصولكم الى البيت سيمكنكم تهيئة المناخ المناسب حسب طلبكم، فتكون البرودة باستقبالكم في أيام الصيف الحارة ، او يمكنكم تشغيل أنظمة تدفئة الأرضية مسبقا لرفع درجة حرارة المنزل بما يتناسب مع رغبتكم في ليالي الشتاء الباردة .</p>
                        <p>بالضغط على الزر المناسب ، سيظهر عل شاشة جهازكم
                            (خريطة حرارية) أي رسم بياني يبين بشكل دقيق حرارة كل قسم من أقسام المنزل و بالطبع يمكن تعديل او ضبط الحرارة المناسبة ليقوم النظام تلقائيا فيما بعد بالحفاظ عليها .</p>
                        <p class="text-center more-info">
                            يمكنكم استشارة الأخصائيين في شركتنا لمعرفة كافة التفاصيل بخصوص أتمتة تجهيزات المناخ<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <img src="/images/climate_condition.jpg" alt="تكييف مركزي او مقسم لمناطق " title="تكييف مركزي او مقسم لمناطق "/>
                        <span>تكييف مركزي او مقسم لمناطق </span>
                    </td>
                    <td>
                        <img src="/images/climate_ventil.jpg" alt="تهوية معكوسة" title="تهوية معكوسة"/>
                        <span>تهوية معكوسة</span>
                    </td>
                    <td>
                        <img src="/images/climate_heating.jpg" alt="تدفئة مركزية او مقسمة لمناطق " title="تدفئة مركزية او مقسمة لمناطق "/>
                        <span>تدفئة مركزية او مقسمة لمناطق </span>
                    </td>
                    <td>
                        <img src="/images/climate_warm_floor.jpg" alt="التدفئة الأرضية الكهربائية و بالأنابيب المائية" title="التدفئة الأرضية الكهربائية و بالأنابيب المائية"/>
                        <span>التدفئة الأرضية الكهربائية و بالأنابيب المائية</span>
                    </td>
                    <td>
                        <img src="/images/climate_thermostate.jpg" alt="منظمات الحرارة" title="منظمات الحرارة"/>
                        <span>منظمات الحرارة</span>
                    </td>
                </tr>
            </table>
        </div>
        <div id="md-tabs-3">
            <table class="table">
                <tbody>
                <tr><td colspan="2"><h2>إدارة انظمة الأمان</h2></td></tr>
                <tr>
                    <td width="60%"><img src="/images/slide4_bg.jpg" class="img-responsive tab_main_img  col-xs-12" alt="إدارة انظمة الأمان" title="إدارة انظمة الأمان"/></td>
                    <td>
                        <p>"البيت الذكي ترون" يتيح تشغيل او إيقاف نظام الأمان و الإنذارفوريا بكامل المبنى او بكل طابق بشكل مستقل او في أقسام معينة منه. التبليغ بحدوث طارئ ما يترافق مع تحديد المكان على النموذج الثلاثي الابعاد . </p>
                        <p>بواسطة " ترون" ، يمكنكم مشاهدة الفيديو من كاميرات المراقبة، تلقي الإنذارات حول نشوب حريق ما، تسرب غاز او مياه، أو بحدوث أي تسلل إلى داخل حرم المنزل .</p>
                        <p>وبتوصيل جهاز الانترفون المنزلي لبرنامج ترون، يصبح ممكنا رؤية الزوار القادمين إليكم و فتح الأبوب الخارجية لهم مباشرة عن طريق هاتفكم النقال او جهاز الحاسب الخاص بكم .</p>
                        <p class="text-center more-info">
                            لمعرفة المزيد حول أتمتة أنظمة الحماية، يمكنكم التواصل مع الخبراء الأخصائيين في شركتنا<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <img src="/images/security_alarm.jpg" alt="أجهزة الانذار من الحرائق و إنذار الأمان" title="أجهزة الانذار من الحرائق و إنذار الأمان"/>
                        <span>أجهزة الانذار من الحرائق و إنذار الأمان</span>
                    </td>
                    <td>
                        <img src="/images/security_sensors.jpg" alt="حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب" title="حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب"/>
                        <span>حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب</span>
                    </td>
                    <td>
                        <img src="/images/security_emergency.jpg" alt="حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة" title="حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة"/>
                        <span>حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة</span>
                    </td>
                    <td>
                        <img src="/images/security_notification.jpg" alt="تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية" title="تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية"/>
                        <span>تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية</span>
                    </td>
                    <td>
                        <img src="/images/security_video.jpg" alt="عدد غير محدود من كاميرات المراقبة " title="عدد غير محدود من كاميرات المراقبة "/>
                        <span>عدد غير محدود من كاميرات المراقبة </span>
                    </td>
                </tr>
            </table>
        </div>
        <!--/div-->
    </div>
    <div id="tabs3" class="visible-sm">
        <ul>
            <li><a href="#sm-tabs-3" data-slide="4" title="">الأمان</a></li>
            <li><a href="#sm-tabs-2" data-slide="4" title="">المناخ</a></li>
            <li><a href="#sm-tabs-1" data-slide="4" title="">اللإنارة</a></li>
        </ul>
        <!--div id="tabs_container"-->
        <div id="sm-tabs-1">
            <table>
                <tbody>
                <tr>
                    <td>
                        <h2>التحكم بالإنارة </h2>
                        <img src="/images/light_manage.jpg" alt="التحكم بالإنارة " title="التحكم بالإنارة " class="img-responsive tab_main_img"  />
                        <p class="">
                            على سيبل المثال : قد يكون في منزلكم العشرات من أجهزة الإضاءة، وللتأكد من أن جميعها دون استثناء قد تم إيقاف تشغيلها قبل الخلود إلى النوم أو مغادرة المنزل، سيتوجب عليكم المرور عَلى كل غرف البيت للتأكد من هذا الأمر . وهذه الطريقة التقليدية و إن كانت مضمونة، لكنها قديمة بعض الشيء بالنسبة لحداثة القرن 21 .</p>
                        <p>
                            البيت الذكي "ترون" يتيح لكم التحكم بأجهزة إضاءة محددة او بمجموعات من الأجهزة الضوئية ، وبالتأكيد بلمسة زر واحدة يمكن إطفاء كامل إنارة المنزل في أي وقت . بالإضافة الى ذلك يمكنكم إختيار درجات سطوع و ألوان الإضاءة في كل غرفة او قسم من المنزل على وجه الخصوص و حفظ تلك النماذج (المشاهد)من الإنارة المفضلة في قائمة مخصصة في واجهة "ترون" .</p>
                        <p class="text-center more-info">
                            يمكنكم استشارة الأخصائيين في شركتنا، لمعرفة كافة التفاصيل حول أتمتة الإنارة<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <span>تحكم مركزي أو مقسم لمناطق </span>
                    </td>
                    <td>
                        <img  src="/images/light_zone_management.png" alt="تحكم مركزي أو مقسم لمناطق " title="تحكم مركزي أو مقسم لمناطق "/>
                    </td>

                </tr>
                <tr>
                    <td>
                        <span>تعديل تدرج السطوع</span>
                    </td>
                    <td>
                        <img src="/images/light_slide_control.png" alt="تعديل تدرج السطوع" title="تعديل تدرج السطوع"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>حفظ نماذج (مشاهد) إضاءة معينة للمستخدم </span>
                    </td>
                    <td>
                        <img src="/images/light_scene_saving.png" alt="حفظ نماذج (مشاهد) إضاءة معينة للمستخدم " title="حفظ نماذج (مشاهد) إضاءة معينة للمستخدم "/>
                    </td>

                </tr>
                <tr>
                    <td>
                        <span>حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها </span>
                    </td>
                    <td>
                        <img src="/images/light_curtains.png" alt="حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها " title="حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها "/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>تحكم كلي أو جزئي </span>
                    </td>
                    <td>
                        <img src="/images/light_part_management.png" alt="تحكم كلي أو جزئي " title="تحكم كلي أو جزئي "  />
                    </td>
                </tr>
            </table>

        </div>
        <div id="sm-tabs-2">
            <table>
                <tbody>
                <tr>
                    <td>
                        <h2>التحكم بالمناخ </h2>
                        <img src="/images/climate_management.jpg" class="img-responsive tab_main_img" alt="التحكم بالمناخ " title="التحكم بالمناخ "/>
                        <p class="">
                            نظام التحكم بالمناخ (درجة الحرارة) داخل مقصورات قيادة السيارات، أصبح من الميزات العادية منذ زمن طويل، وهنا السؤال الذي يطرح نفسه : ماهو السبب الذي يمنعنا من التمتع بنفس تلك الميزة لكن في المنزل ؟</p>
                        <p>بواسطة البيت الذكي "ترون" سيصبح بإمكانكم التحكم الكامل بكل أجهزة التكييف و التدفئة في المنزل في أي وقت او من أي مكان من داخل او من خارج المنزل. فقبل وصولكم الى البيت سيمكنكم تهيئة المناخ المناسب حسب طلبكم، فتكون البرودة باستقبالكم في أيام الصيف الحارة ، او يمكنكم تشغيل أنظمة تدفئة الأرضية مسبقا لرفع درجة حرارة المنزل بما يتناسب مع رغبتكم في ليالي الشتاء الباردة .</p>
                        <p>بالضغط على الزر المناسب ، سيظهر عل شاشة جهازكم
                            (خريطة حرارية) أي رسم بياني يبين بشكل دقيق حرارة كل قسم من أقسام المنزل و بالطبع يمكن تعديل او ضبط الحرارة المناسبة ليقوم النظام تلقائيا فيما بعد بالحفاظ عليها .</p>
                        <p class="text-center more-info">
                            يمكنكم استشارة الأخصائيين في شركتنا لمعرفة كافة التفاصيل بخصوص أتمتة تجهيزات المناخ<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <span>تكييف مركزي او مقسم لمناطق </span>
                    </td>
                    <td>
                        <img src="/images/climate_condition.jpg" alt="تكييف مركزي او مقسم لمناطق " title="تكييف مركزي او مقسم لمناطق "/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>تهوية معكوسة</span>
                    </td>
                    <td>
                        <img src="/images/climate_ventil.jpg" alt="تهوية معكوسة" title="تهوية معكوسة"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>تدفئة مركزية او مقسمة لمناطق </span>
                    </td>
                    <td>
                        <img src="/images/climate_heating.jpg" alt="تدفئة مركزية او مقسمة لمناطق " title="تدفئة مركزية او مقسمة لمناطق "/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>التدفئة الأرضية الكهربائية و بالأنابيب المائية</span>
                    </td>
                    <td>
                        <img src="/images/climate_warm_floor.jpg" alt="التدفئة الأرضية الكهربائية و بالأنابيب المائية" title="التدفئة الأرضية الكهربائية و بالأنابيب المائية"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>منظمات الحرارة</span>
                    </td>
                    <td>
                        <img src="/images/climate_thermostate.jpg" alt="منظمات الحرارة" title="منظمات الحرارة"/>
                    </td>
                </tr>
            </table>

        </div>
        <div id="sm-tabs-3">
            <table>
                <tbody>
                <tr>
                    <td>
                        <h2>إدارة انظمة الأمان</h2>
                        <img src="/images/slide4_bg.jpg" class="img-responsive tab_main_img" alt="إدارة انظمة الأمان" title="إدارة انظمة الأمان"/>
                        <p>"البيت الذكي ترون" يتيح تشغيل او إيقاف نظام الأمان و الإنذارفوريا بكامل المبنى او بكل طابق بشكل مستقل او في أقسام معينة منه. التبليغ بحدوث طارئ ما يترافق مع تحديد المكان على النموذج الثلاثي الابعاد . </p>
                        <p>بواسطة " ترون" ، يمكنكم مشاهدة الفيديو من كاميرات المراقبة، تلقي الإنذارات حول نشوب حريق ما، تسرب غاز او مياه، أو بحدوث أي تسلل إلى داخل حرم المنزل .</p>
                        <p>وبتوصيل جهاز الانترفون المنزلي لبرنامج ترون، يصبح ممكنا رؤية الزوار القادمين إليكم و فتح الأبوب الخارجية لهم مباشرة عن طريق هاتفكم النقال او جهاز الحاسب الخاص بكم .</p>
                        <p class="text-center more-info">
                            لمعرفة المزيد حول أتمتة أنظمة الحماية، يمكنكم التواصل مع الخبراء الأخصائيين في شركتنا<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <span>أجهزة الانذار من الحرائق و إنذار الأمان</span>
                    </td>
                    <td>
                        <img src="/images/security_alarm.jpg" alt="أجهزة الانذار من الحرائق و إنذار الأمان" title="أجهزة الانذار من الحرائق و إنذار الأمان"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب</span>
                    </td>
                    <td>
                        <img src="/images/security_sensors.jpg" alt="حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب" title="حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة</span>
                    </td>
                    <td>
                        <img src="/images/security_emergency.jpg" alt="حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة" title="حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية</span>
                    </td>
                    <td>
                        <img src="/images/security_notification.jpg" alt="تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية" title="تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>عدد غير محدود من كاميرات المراقبة </span>
                    </td>
                    <td>
                        <img src="/images/security_video.jpg" alt="عدد غير محدود من كاميرات المراقبة " title="عدد غير محدود من كاميرات المراقبة "/>
                    </td>
                </tr>
            </table>

        </div>

    </div>
    <div id="tabs4" class="visible-xs">
        <ul>
            <li><a href="#xs-tabs-3" data-slide="4" title="">الأمان</a></li>
            <li><a href="#xs-tabs-2" data-slide="4" title="">المناخ</a></li>
            <li><a href="#xs-tabs-1" data-slide="4" title="">اللإنارة</a></li>
        </ul>

        <div id="xs-tabs-1">
            <table>
                <tbody>
                <tr>
                    <td>
                        <h2>التحكم بالإنارة </h2>
                        <img src="/images/light_manage.jpg" alt="التحكم بالإنارة " title="التحكم بالإنارة " class="img-responsive tab_main_img"  />
                        <p class="">
                            على سيبل المثال : قد يكون في منزلكم العشرات من أجهزة الإضاءة، وللتأكد من أن جميعها دون استثناء قد تم إيقاف تشغيلها قبل الخلود إلى النوم أو مغادرة المنزل، سيتوجب عليكم المرور عَلى كل غرف البيت للتأكد من هذا الأمر . وهذه الطريقة التقليدية و إن كانت مضمونة، لكنها قديمة بعض الشيء بالنسبة لحداثة القرن 21 .</p>
                        <p>
                            البيت الذكي "ترون" يتيح لكم التحكم بأجهزة إضاءة محددة او بمجموعات من الأجهزة الضوئية ، وبالتأكيد بلمسة زر واحدة يمكن إطفاء كامل إنارة المنزل في أي وقت . بالإضافة الى ذلك يمكنكم إختيار درجات سطوع و ألوان الإضاءة في كل غرفة او قسم من المنزل على وجه الخصوص و حفظ تلك النماذج (المشاهد)من الإنارة المفضلة في قائمة مخصصة في واجهة "ترون" .</p>
                        <p class="text-center more-info">
                            يمكنكم استشارة الأخصائيين في شركتنا، لمعرفة كافة التفاصيل حول أتمتة الإنارة<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <span>تحكم مركزي أو مقسم لمناطق </span>
                    </td>
                    <td>
                        <img src="/images/light_zone_management.png" alt="تحكم مركزي أو مقسم لمناطق " title="تحكم مركزي أو مقسم لمناطق "/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>تعديل تدرج السطوع</span>
                    </td>
                    <td>
                        <img src="/images/light_slide_control.png" alt="تعديل تدرج السطوع" title="تعديل تدرج السطوع"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>حفظ نماذج (مشاهد) إضاءة معينة للمستخدم </span>
                    </td>
                    <td>
                        <img src="/images/light_scene_saving.png" alt="حفظ نماذج (مشاهد) إضاءة معينة للمستخدم " title="حفظ نماذج (مشاهد) إضاءة معينة للمستخدم "/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها </span>
                    </td>
                    <td>
                        <img src="/images/light_curtains.png" alt="حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها " title="حجب النور الخارجي بواسطة إسدال الستائرعلى مختلف أنواعها "/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>تحكم كلي أو جزئي </span>
                    </td>
                    <td>
                        <img src="/images/light_part_management.png" alt="تحكم كلي أو جزئي " title="تحكم كلي أو جزئي "  />
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
                        <h2>التحكم بالمناخ </h2>
                        <img src="/images/climate_management.jpg" class="img-responsive tab_main_img" alt="التحكم بالمناخ " title="التحكم بالمناخ "/>
                        <p class="">
                            نظام التحكم بالمناخ (درجة الحرارة) داخل مقصورات قيادة السيارات، أصبح من الميزات العادية منذ زمن طويل، وهنا السؤال الذي يطرح نفسه : ماهو السبب الذي يمنعنا من التمتع بنفس تلك الميزة لكن في المنزل ؟</p>
                        <p>بواسطة البيت الذكي "ترون" سيصبح بإمكانكم التحكم الكامل بكل أجهزة التكييف و التدفئة في المنزل في أي وقت او من أي مكان من داخل او من خارج المنزل. فقبل وصولكم الى البيت سيمكنكم تهيئة المناخ المناسب حسب طلبكم، فتكون البرودة باستقبالكم في أيام الصيف الحارة ، او يمكنكم تشغيل أنظمة تدفئة الأرضية مسبقا لرفع درجة حرارة المنزل بما يتناسب مع رغبتكم في ليالي الشتاء الباردة .</p>
                        <p>بالضغط على الزر المناسب ، سيظهر عل شاشة جهازكم
                            (خريطة حرارية) أي رسم بياني يبين بشكل دقيق حرارة كل قسم من أقسام المنزل و بالطبع يمكن تعديل او ضبط الحرارة المناسبة ليقوم النظام تلقائيا فيما بعد بالحفاظ عليها .</p>
                        <p class="text-center more-info">
                            يمكنكم استشارة الأخصائيين في شركتنا لمعرفة كافة التفاصيل بخصوص أتمتة تجهيزات المناخ<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <span>تكييف مركزي او مقسم لمناطق </span>
                    </td>
                    <td>
                        <img src="/images/climate_condition.jpg" alt="تكييف مركزي او مقسم لمناطق " title="تكييف مركزي او مقسم لمناطق "/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>تهوية معكوسة</span>
                    </td>
                    <td>
                        <img src="/images/climate_ventil.jpg" alt="تهوية معكوسة" title="تهوية معكوسة"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>تدفئة مركزية او مقسمة لمناطق </span>
                    </td>
                    <td>
                        <img src="/images/climate_heating.jpg" alt="تدفئة مركزية او مقسمة لمناطق " title="تدفئة مركزية او مقسمة لمناطق "/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>التدفئة الأرضية الكهربائية و بالأنابيب المائية</span>
                    </td>
                    <td>
                        <img src="/images/climate_warm_floor.jpg" alt="التدفئة الأرضية الكهربائية و بالأنابيب المائية" title="التدفئة الأرضية الكهربائية و بالأنابيب المائية"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>منظمات الحرارة</span>
                    </td>
                    <td>
                        <img src="/images/climate_thermostate.jpg" alt="منظمات الحرارة" title="منظمات الحرارة"/>
                    </td>
                </tr>
            </table>
        </div>
        <div id="xs-tabs-3">
            <table>
                <tbody>
                <tr>
                    <td>
                        <h2>إدارة انظمة الأمان</h2>
                        <img src="/images/slide4_bg.jpg" class="img-responsive tab_main_img" alt="إدارة انظمة الأمان" title="إدارة انظمة الأمان"/>
                        <p>"البيت الذكي ترون" يتيح تشغيل او إيقاف نظام الأمان و الإنذارفوريا بكامل المبنى او بكل طابق بشكل مستقل او في أقسام معينة منه. التبليغ بحدوث طارئ ما يترافق مع تحديد المكان على النموذج الثلاثي الابعاد . </p>
                        <p>بواسطة " ترون" ، يمكنكم مشاهدة الفيديو من كاميرات المراقبة، تلقي الإنذارات حول نشوب حريق ما، تسرب غاز او مياه، أو بحدوث أي تسلل إلى داخل حرم المنزل .</p>
                        <p>وبتوصيل جهاز الانترفون المنزلي لبرنامج ترون، يصبح ممكنا رؤية الزوار القادمين إليكم و فتح الأبوب الخارجية لهم مباشرة عن طريق هاتفكم النقال او جهاز الحاسب الخاص بكم .</p>
                        <p class="text-center more-info">
                            لمعرفة المزيد حول أتمتة أنظمة الحماية، يمكنكم التواصل مع الخبراء الأخصائيين في شركتنا<br>
                                <span class="order_button" data-toggle="modal" data-target="#myModal"
                                      onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب معلومات</span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <span>أجهزة الانذار من الحرائق و إنذار الأمان</span>
                    </td>
                    <td>
                        <img src="/images/security_alarm.jpg" alt="أجهزة الانذار من الحرائق و إنذار الأمان" title="أجهزة الانذار من الحرائق و إنذار الأمان"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب</span>
                    </td>
                    <td>
                        <img src="/images/security_sensors.jpg" alt="حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب" title="حسسات الحركة، ومستشعرات فتح النوافذ و الأبواب"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة</span>
                    </td>
                    <td>
                        <img src="/images/security_emergency.jpg" alt="حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة" title="حماية تامة من كافة أنواع التسريب و غيرها من الحالات الطارئة"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية
                    <td>
                        <img src="/images/security_notification.jpg" alt="تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية" title="تبليغ برسائل قصيرة و إنذار المراكز المسؤولة عن الحماية"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>عدد غير محدود من كاميرات المراقبة </span>
                    </td>
                    <td>
                        <img src="/images/security_video.jpg" alt="عدد غير محدود من كاميرات المراقبة " title="عدد غير محدود من كاميرات المراقبة "/>
                    </td>
                </tr>
            </table>
        </div>

    </div>
    <div class="bottom_line"></div>
</div>

<div id="slide-5" data-slide="5" class=" frame">
    <h2 class="text-center">توسعة عملية الدمج والتكامل</h2>
    <div class="table hidden-xs" id="integr_table">
        <div class="table_row">
            <div class="table_cell">
                <div class="integr_description">
                    فتح البوابة من دون مغادرة مكان جلوسكم
                </div>
                <img src="/images/integr_open_gates.png" class="img-responsive" alt=""/>
                <p>فتح الأبواب او بوابة<br> السور الخارجية </p>

            </div>
            <div class="table_cell">
                <div class="integr_description">
                    كل أحوال الطقس يمكن رؤيتها من على شاشة الجوال او الحاسب الشخصي
                </div>
                <img src="/images/integr_weather_stations.png" class="img-responsive" alt=""/>
                <p>محطات<br> الطقس</p>
            </div>
            <div class="table_cell">
                <div class="integr_description">
                    <p>إدارة أنظمة الري وفقا لمناطق متعددة </p>
                </div>
                <img src="/images/integr_watering_systems.png" class="img-responsive" alt=""/>
                <p>أنظمة الري و<br> سقاية الحدائق</p>
            </div>
            <div class="table_cell">
                <div class="integr_description">
                    التحكم بالموسيقا الخاصة بكل غرفة
                </div>
                <img src="/images/integr_mediaroom.png" class="img-responsive" alt=""/>
                <p>إدارة الأنظمة الصوتية<br> في كل غرفة</p>
            </div>
            <div class="table_cell ">
                <div class="integr_description">
                    ضبط درجات حرارة المياه في المسبح و حمامات البخار
                </div>
                <img src="/images/integr_pool.png" class="img-responsive" alt=""/>
                <p>المسابح و<br> حمامات البخار</p>
            </div>
        </div>
    </div>

    <div class="table visible-xs" id="integr_table">
        <div class="table_row">
            <div class="table_cell">
                فتح البوابة من دون مغادرة مكان جلوسكم
            </div>
            <div class="table_cell">
                <div class="integr_block_wrap">
                    <img src="/images/integr_open_gates.png" class="img-responsive" alt=""/>
                    <!--p>Открытие дверей<br>или&nbsp;ворот</p-->
                </div>
            </div>
        </div>

        <div class="table_row">
            <div class="table_cell">
                كل أحوال الطقس يمكن رؤيتها من على شاشة الجوال او الحاسب الشخصي
            </div>
            <div class="table_cell">
                <img src="/images/integr_weather_stations.png" class="img-responsive" alt=""/>
                <!--p>Погодные<br>станции</p-->
            </div>
        </div>

        <div class="table_row">
            <div class="table_cell">
                <p>إدارة أنظمة الري وفقا لمناطق متعددة </p>
            </div>
            <div class="table_cell">
                <div class="integr_block_wrap">
                    <img src="/images/integr_watering_systems.png" class="img-responsive" alt=""/>
                    <!--p>Поливочные<br>системы</p-->
                </div>
            </div>
        </div>

        <div class="table_row">
            <div class="table_cell">
                التحكم بالموسيقا الخاصة بكل غرفة
            </div>
            <div class="table_cell">
                <img src="/images/integr_mediaroom.png" class="img-responsive" alt=""/>
                <!--p>Медиа мультирум</p-->
            </div>
        </div>

        <div class="table_row">
            <div class="table_cell">
                ضبط درجات حرارة المياه في المسبح و حمامات البخار
            </div>
            <div class="table_cell ">
                <div class="integr_block_wrap">
                    <img src="/images/integr_pool.png" class="img-responsive" alt=""/>
                    <!--p>Сауны<br>и&nbsp;бассейны</p-->
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center">التجهيزات اللازمة لنظام "ترون" البيت الذكي </h2>
    <div class="table hidden-xs" id="equipment" >
        <div class="table_row">
            <div class="table_cell">
                <p>كأجزاء مكونة لنظام "ترون" ، نحن نتستخدم المعدات المطابقة للمواصفة الاوروبية
                    KNX
                    تضم منظمة ال
                    KNX
                    اليوم أكثر من 400 مصنع للمعدات و التجهيزات التقنية ، كل منهم يخضع لشروط اعتماد صارمة . لذلك عملاؤنا يحصلون دوما على عروض متوازنة ينسجم فيها السعر مع الجودة والتصمميم  .</p>
                <p>جميع أجهزة الاستشعار و الحسساسات و مفاتيح الاغلاق و كل المعدات المنفذة لوظائف النظام، تم إخضاعها لاختبارات المتانة و السلامة و الديمومة و التحمل.</p>
            </div>
            <div class="table_cell" style="width: 35%;">
                <img src="/images/equipment.jpg" class="img-responsive" />
            </div>
        </div>
    </div>

    <div class="table visible-xs" id="equipment" >
        <div><img src="/images/equipment.jpg" class="img-responsive" /></div>
        <p>كأجزاء مكونة لنظام "ترون" ، نحن نتستخدم المعدات المطابقة للمواصفة الاوروبية
            KNX
            تضم منظمة ال
            KNX
            اليوم أكثر من 400 مصنع للمعدات و التجهيزات التقنية ، كل منهم يخضع لشروط اعتماد صارمة . لذلك عملاؤنا يحصلون دوما على عروض متوازنة ينسجم فيها السعر مع الجودة والتصمميم  .</p>
        <p>جميع أجهزة الاستشعار و الحسساسات و مفاتيح الاغلاق و كل المعدات المنفذة لوظائف النظام، تم إخضاعها لاختبارات المتانة و السلامة و الديمومة و التحمل.</p>
    </div>

    <div class="text-center">
        <!--a href="#" class="ios_throne_app" data-toggle="modal" data-target="#myAppStoreModal">THRONE App</a>
        <a href="https://play.google.com/store/apps/details?id=com.throne.project28.demo.nexus" class="android_throne_app" target="_blank">THRONE App</a-->
        <span class="order_button" data-toggle="modal" data-target="#myModal"
              onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب المواصفات </span>
    </div>

    <h2 class="text-center" id="know_more_title">لديكم الرغبة لمعرفة المزيد ؟</h2>
    <div id="know_more_tabs" class="hidden-xs">
        <ul class="nav nav-pills nav-justified">
            <li role="presentation"><a href="#about_tab">حول شركة "مشروع ترون" :</a></li>
            <li role="presentation"><a href="#how_works">آلية عملنا</a></li>
            <li role="presentation"><a href="#price">تكلفة البيت الذكي </a></li>
            <li role="presentation" class="active"><a href="#discuss">دعونا نناقش كل شيء !</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade" id="about_tab" aria-labelledby="home-tab">
                <p>ان شركة "مشروع ترون" هي شركة هندسة دولية . نحن نقوم بتصميم و تنفيذ و تثبيت أنظمة الأتمتة الخاصة بالمنازل و المكاتب و المباني الصناعية .</p>
                <a href="about.html" title='"حول شركة" مشروع ترون"'>لمعرفة المزيد</a>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="how_works" aria-labelledby="profile-tab">
                <p>نحن نقوم أولاٌ بتنفيذ نموذج عرض توضيحي مجاني لبيتكم الذكي مع حساب تكلفة مبدئي. نصمم المنظومة . نقوم بتوريد المعدات و الأجهزة . نثبتها و من ثم يتم التشغيل . ضمانة المعدات 3 سنوات و ضمانة البرنامج مدى الحياة .</p>
                <a href="installation.html">تفاصيل أكثر </a>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="price" aria-labelledby="home-tab">
                <p>كالبدلة الجيدة التي تُصمم و يتم خياطتها وفقاٌ لمقاسات الزبون على وجه الخصوص، كذلك الأمر بالنسبة لمنظومة البيت الذكي، والتي يتم تصمميها وفقاً لهندسة ومخطط البناء. كخطوة أولى، يمكن أن ترسلوا لنا مخخطات البناء الخاص بكم، و إن هذه الخطوة ستتيح لكم الحصول على حساب تكلفة تقديرية أكثر دقة من أيّة الآت حسابية متواجدة في الإنترنت .
                </p>
                <p align="center"><span class="order_button" data-toggle="modal" data-target="#myModal"
                                        onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب حساب تكلفة </span></p>
            </div>
            <div role="tabpanel" class="tab-pane fade active in" id="discuss" aria-labelledby="profile-tab">
                <p>يمكنكم فقط ترك رقم هاتفكم و سنعاود الإتصال بكم فوراً و نجيب على كافة تساؤلاتكم. أننا نثمن عالياً علاقاتنا مع جميع عملائنا و نقدر وقتهم، لذلك لن نطيل عليكم بالشرح أثناء الاتصال و بكل تأكيد نتعهد بالحفاظ على الخصوصية التامة وعدم الافصاح عن أيّة معلومات خاصة بكم لأي طرف ثالث .</p>
                <p align="center"><span class="order_button" data-toggle="modal" data-target="#myModal"
                                        onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">طلب اتصال </span></p>
            </div>
        </div>
    </div>

    <div class="visible-xs">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            حول شركة "مشروع ترون" :
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        ان شركة "مشروع ترون" هي شركة هندسة دولية . نحن نقوم بتصميم و تنفيذ و تثبيت أنظمة الأتمتة الخاصة بالمنازل و المكاتب و المباني الصناعية .
                        <a href="about.html" title='"حول شركة" مشروع ترون"'>لمعرفة المزيد</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            آلية عملنا
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <p>نحن نقوم أولاٌ بتنفيذ نموذج عرض توضيحي مجاني لبيتكم الذكي مع حساب تكلفة مبدئي. نصمم المنظومة . نقوم بتوريد المعدات و الأجهزة . نثبتها و من ثم يتم التشغيل . ضمانة المعدات 3 سنوات و ضمانة البرنامج مدى الحياة .</p>
                        <a href="installation.html">تفاصيل أكثر </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            تكلفة البيت الذكي
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <p>كالبدلة الجيدة التي تُصمم و يتم خياطتها وفقاٌ لمقاسات الزبون على وجه الخصوص، كذلك الأمر بالنسبة لمنظومة البيت الذكي، والتي يتم تصمميها وفقاً لهندسة ومخطط البناء. كخطوة أولى، يمكن أن ترسلوا لنا مخخطات البناء الخاص بكم، و إن هذه الخطوة ستتيح لكم الحصول على حساب تكلفة تقديرية أكثر دقة من أيّة الآت حسابية متواجدة في الإنترنت .  </p>
                        <p class="text-center"><span class="order_button" data-toggle="modal" data-target="#myModal">طلب حساب تكلفة </span></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            دعونا نناقش كل شيء !
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        <p>يمكنكم فقط ترك رقم هاتفكم و سنعاود الإتصال بكم فوراً و نجيب على كافة تساؤلاتكم. أننا نثمن عالياً علاقاتنا مع جميع عملائنا و نقدر وقتهم، لذلك لن نطيل عليكم بالشرح أثناء الاتصال و بكل تأكيد نتعهد بالحفاظ على الخصوصية التامة وعدم الافصاح عن أيّة معلومات خاصة بكم لأي طرف ثالث .</p>
                        <p class="text-center"><span class="order_button" data-toggle="modal" data-target="#myModal">طلب اتصال </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="hidden-xs">

    <ul id="bottom_menu">
        <li><a href="about.html" title="عن الشركة">عن الشركة</a></li>
        <!--li><a href="developers.html" title="للمطورين">للمطورين</a></li-->
        <li><a href="installation.html" title="كيف نعمل">كيف نعمل</a></li>
    </ul>

   <span id="brand">THRONE Project</span>  &copy; 2015
</footer>

<footer class="visible-xs">
    <ul id="bottom_menu">
        <li><a href="about.html" title="عن الشركة">عن الشركة</a></li>
        <!--li><a href="developers.html" title="للمطورين">للمطورين</a></li-->
        <li><a href="installation.html" title="كيف نعمل">كيف نعمل</a></li>
    </ul>

    <ul id="bottom_menu" class="vertical">
        <li><a href="installation.html" title="كيف نعمل">كيف نعمل</a></li>
        <li><a href="about.html" title="عن الشركة">عن الشركة</a></li>
        <!--li><a href="developers.html" title="للمطورين">للمطورين</a></li-->

    </ul>
    <div class="copy"><span id="brand">THRONE Project</span> &copy; 2015</div>
</footer>

<div id="callback_wrapper">
    <div id="callback_title" onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">
        &gt;&gt;&gt; اطب مجانا تصميم نموذج ثلاثي الأبعاد للمنزل  &lt;&lt;&lt;
    </div>
    <div id="callback_form">
        <div class="footnote">فقط أرسل لنا مخطط المبني وسنبذل نموذج تجريبي  ثلاثي الأبعاد للمنزل ,تقدير أولي. إنه مجاني. <a href="mailto:office@throne.pro">office@throne.pro</a></div>
        <div class="footnote">لتجهيز طلبك، يرجى ترك المعلومات الاتصال الخاصة بك وحدد وقت مناسب للمكالمة.</div>

        <div id="cb_form_body">
            <form action="" class="callback_form1" data-toggle="validator">
                <table>
                    <tbody>
                    <tr class="form-group">
                        <td align="left"><label for="inputName" class="control-label">الإسم </label></td>
                        <td><input type="text" class="form-control" id="inputName" name="inputName" required="required"></td>
                    </tr>
                    <tr class="form-group">
                        <td align="left"><label for="inputPhoneDemo" class="control-label">رقم الهاتف</label></td>
                        <td><input type="text" class="form-control" id="inputPhoneDemo" name="inputPhone" required="required"></td>
                    </tr>
                    <tr>
                        <td align="left"><label for="inputTime" class="control-label">وقت الإتصال </label></td>
                        <td><input type="text" class="form-control" id="inputTime" name="inputTime"></td>
                    </tr>
                    <tr><td>&nbsp;</td><td><button type="button" class="offer-send-btn" onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">لإرسال</button></td></tr>
                    </tbody>
                </table>

                <input type="hidden" name="inputTheme" value="Заказ 3D демо">
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
                <h4 class="modal-title">سنعاود الاتصال بكم خلال ساعة </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-7 col-xs-7">
                        <form action="" class=" callback_form" data-toggle="validator">
                            <div class="form-group">
                                <label for="inputName" class="control-label">الإسم</label>
                                <div class=" ">
                                    <input type="text" class="form-control" id="inputName" name="inputName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhoneCB" class="control-label">رقم الهاتف</label>

                                <div class=" ">
                                    <input type="text" class="form-control" id="inputPhoneCB" name="inputPhone" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <button type="button" class="send-btn">لإرسال</button>
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
                        <div>الاستشارات المقدمة من قبل شركتنا لا تُرتب عليكم أي إلتزام مادي</div>
                        <div id="padlock">
                            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                            <span>نتعهد بضمان الخصوصية التامة و بأن المعلومات الخاصة بكم لن يتم مشاركتها مع أي طرف آخر</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="footnote">
                            <!--a href="mailto:office@throne.pro">написать нам</a-->
                            او بامكانكم التواصل عبر البريد الالكتروني بارسال رسالة مرفقة بمخخط المنزل او البناء و سنجيبكم على الفور بالتكلفة التقديرية للمشروع مجانا
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
<!--script type="text/javascript" src="/js/jquery.liquid-slider.js"></script-->
<script type="text/javascript" src="/js/bootstrap.youtubepopup.min.js"></script>
<script type="text/javascript" src="/js/jquery.mask.min.js"></script>

<script type="text/javascript" src="/js/flowplay/flowplayer.js"></script>
<!--script type="text/javascript" src="/js/flowplay/flowplayer.ipad-3.2.13.min.js"></script-->

<script type="text/javascript" src="/js/jquery.flexslider.js"></script>

<script type="text/javascript" src="/js/jquery.colorbox-min.js"></script>

<script type="text/javascript" src="/js/validator.min.js" ></script>
<script type="text/javascript" src="/js/intl_phone_input/intlTelInput.min.js"></script>
<script type="text/javascript" src="/js/intl_phone_input/utils.js"></script>

<?php if ( !$detect->isMobile() ): ?>
    <script type="text/javascript" src="/arabic/js/main.js"></script>
<?php else: ?>
    <script type="text/javascript" src="http://releases.flowplayer.org//js/flowplayer.ipad-3.2.13.min.js"></script>
    <!--script type="text/javascript" src="/js/jquery.mobile-1.4.5.min.js"></script-->
    <script type="text/javascript" src="/arabic/js/main_mobile.js"></script>
<?php endif; ?>


<!--script src="/js/jquery-2.1.3.min.js"></script-->
<!--script src="/js/jquery-ui.js"></script-->

<!--script type="text/javascript" src="/js/enquire.min.js"></script-->


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


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/565c5eaafc4bd1b143997801/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>