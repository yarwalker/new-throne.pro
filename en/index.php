<?
session_start();

include '../Mobile_Detect.php';
$detect = new Mobile_Detect();

//$_SESSION['DEVICE'] = 'desktop';
//!$detect->isMobile() || $_SESSION['DEVICE'] = 'mobile';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"-->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
    <meta name="HandheldFriendly" content="True"/>

    <meta name="description" content="THRONE 3D smart home" />
    <meta name="keywords" content="THRONE 3D home automation, THRONE 3D smart home system, THRONE 3D building management system, THRONE 3D smart home technology, THRONE 3D wireless home automation, THRONE 3D smart home security, THRONE 3D home automation software, THRONE 3D building management system, THRONE 3D building automation system, THRONE 3D alarm systems control, THRONE 3D lighting control, THRONE 3D home automation lighting, THRONE 3D security system control, THRONE 3D home security, THRONE 3D homeautomation, THRONE 3D smart home automation, THRONE 3D intelligent home, THRONE 3D curtain control, THRONE 3D shading control, THRONE 3D security alarms, THRONE 3D fire alarms" />
    <title>THRONE Smart Home</title>
    <link href="../css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.icon-large.min.css" rel="stylesheet" type="text/css">
    <!--link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"-->
    <link href="../css/fixed-positioning.css" rel="stylesheet" type="text/css" />
    <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="../css/tabulous.css" rel="stylesheet" type="text/css" />
    <!--link href="css/liquid-slider.css" rel="stylesheet" type="text/css" /-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">

    <link href="../css/colorbox.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="../css/flexslider.css">

    <link rel="stylesheet" href="../js/flowplay/skin/functional.css">
    <link rel="stylesheet" href="../css/animate.css">

    <?php if ( !$detect->isMobile() ): ?>
        <link href="../css/main.css" rel="stylesheet" type="text/css" />
    <?php else: ?>
        <link href="../css/main_mobile.css" rel="stylesheet" type="text/css" />
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

    <!--script>
        ChatraID = 'uqSiLhJ2pHG4Yf9H2';
        (function(d, w, c) {
            var n = d.getElementsByTagName('script')[0],
                s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
            + '//chat.chatra.io/chatra.js';
            n.parentNode.insertBefore(s, n);
        })(document, window, 'Chatra');
    </script-->
</head>

<body class="loading">
<img src="../images/phone_tube.png" alt="" class="callback_fix_btn" data-toggle="modal" data-target="#myModal"
     onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;" />
<div class="frame">
    <div id="head" class=" hidden-xs">
        <div id="langs" >
            <span><a href="/ru">Ru</a></span>
            <span  class="active">En</span>
        </div>

        <a id="logo" href="/en" >THRONE Project</a>

        <div class="callback visible-lg visible-md">
            <span class="callback_button" data-toggle="modal" data-target="#myModal"
                  onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Require a callback</span>
            <span class="callback_contacts"><a href="mailto:office@throne.pro" target="_blank">office@throne.pro</a> or +7 (495) 255-0-777</span>
        </div>

        <ul id="top_menu_ext">
            <li><a href="installation.html" title="How We Work">How We Work</a></li>
            <li><a href="developers.html" title="For RE Developers">For RE Developers</a></li>
            <li><a href="about.html" title="About Us">About Us</a></li>
        </ul>

    </div>

    <div id="head" class=" visible-xs" >
        <nav class="navbar" id="top_menu_ext" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a id="logo" href="/en" >THRONE Project</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" id="top_menu_ext">
                        <li><a href="installation.html" title="How We Work">How We Work</a></li>
                        <li><a href="developers.html" title="For RE Developers">For RE Developers</a></li>
                        <li><a href="about.html" title="About Us">About Us</a></li>
                        <li>
                            <div id="langs" >
                                <span><a href="/ru">Ru</a></span>
                                <span  class="active">En</span>
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

        <h1 id="slogan">The Best Solution of Smart Home Based on 3D Interface and a&nbsp;Service for Its Installation</h1>
        <div class="flexslider">
            <ul class="slides">
                <li>
  	    	        <img src="../images/carousel/pic1.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">A Revolutionary Solution On a Basis Of 3D Technology</h2>
                        <p>A single 3D iterface for wireless control of lighting and shades, climate (HVAC), security systems, multimedia and other systems of a Smart Home.</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="../images/carousel/pic2.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Free 3D demo of your house!</h2>
                        <p> Even before signing the contract we provide to a client our 3D demo app, designed according to the floor plans of his house.
                            With this app the customer can get a complete idea how his Smart home will work. <strong>It's free</strong>.
                        </p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic3.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Any Size of Facilities</h2>
                        <p>The system can manage a small apartment or a huge residence. The number of connected Smart home devices, smartphones and tablets is unlimited!</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic4.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Post-sale Support</h2>
                        <p>The possibility of further modifications and system upgrades. Lifetime support by the manufacturer. 3 year warranty for the hardware. THRONE software warranty for life.</p>
                    </div>
  	    		</li>
            </ul>
        </div>


        <p class="text-center">
            Smart Home executed by THRONE Project is a set of perfectly understandable functions, which are really needed in everyday life
        </p>
        <div class="text-center" id="first_frame_factoids">
            <div>
                <a href="#tabs-1" data-slide="4" class="inner_anchor light" title="Smart lighting system">
                    smart<br>lighting<br>system<br>
                    <img src="../images/light_slide_control.png" alt=""/>
                </a>
            </div>
            <div>
                <a href="#tabs-2" data-slide="4" class="inner_anchor climate" title="Temperature (HVAC) automation and control" >
                    temperature<br>(HVAC) automation<br>and control<br>
                    <img src="../images/climate_condition.jpg" alt=""/>
                </a>
            </div>
            <div>
                <a data-slide="4" href="#tabs-3" class="inner_anchor security" title="Security and monitoring systems">
                    security<br>and monitoring<br>systems<br>
                    <img src="../images/security_alarm.jpg" alt=""/>
                </a>
            </div>
        </div>
        <p class="text-center">As well as video doorphones, video surveillance and other systems. They just made in a modern way and
            managed through a single 3D interface on a smartphone or tablet. Safety, comfort and energy efficiency &mdash; this is what a Smart Home system provides to a customer.
        </p>
        <div id="interior_ipad" class="flowplayer no-volume no-mute functional is-splash"
            style="background-image:url('../images/new_ipad222.jpg');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: contain;
            background-color: #fff;">
            <!--img src="../images/new_ipad.png" alt="" class="img-responsive"/-->
            <video id="screendemo" loop="loop"
              >
                <source src="../uploads/videos/sequence02.webm" type="video/webm">
                <source src="../uploads/videos/sequence02.mp4" type="video/mp4">
            </video>
        </div>


    <?php else: ?>

        <h1 id="slogan">The Best Solution of Smart Home Based on 3D Interface and a&nbsp;Service for Its Installation</h1>

        <div class="flexslider visible-lg">
            <ul class="slides">
                <li>
  	    	        <img src="../images/carousel/pic1.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">A Revolutionary Solution On a Basis Of 3D Technology</h2>
                        <p>A single 3D iterface for wireless control of lighting and shades, climate (HVAC), security systems, multimedia and other systems of a Smart Home.</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="../images/carousel/pic2.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Free 3D demo of your house!</h2>
                        <p> Even before signing the contract we provide to a client our 3D demo app, designed according to the floor plans of his house.
                            With this app the customer can get a complete idea how his Smart home will work. <strong>It's free</strong>.
                        </p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic3.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Any Size of Facilities</h2>
                        <p>The system can manage a small apartment or a huge residence. The number of connected Smart home devices, smartphones and tablets is unlimited!</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic4.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Post-sale Support</h2>
                        <p>The possibility of further modifications and system upgrades. Lifetime support by the manufacturer. 3 year warranty for the hardware. THRONE software warranty for life.</p>
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
                        <h2 data-animation="animated pulse">A Revolutionary Solution On a Basis Of 3D Technology</h2>
                        <p>A single 3D iterface for wireless control of lighting and shades, climate (HVAC), security systems, multimedia and other systems of a Smart Home.</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="../images/carousel/pic2-md.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Free 3D demo of your house!</h2>
                        <p>Even before signing the contract we provide to a client our 3D demo app, designed according to the floor plans of his house.
                            With this app the customer can get a complete idea how his Smart home will work. <strong>It's free</strong>.
                        </p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic3-md.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Any Size of Facilities</h2>
                        <p>The system can manage a small apartment or a huge residence. The number of connected Smart home devices, smartphones and tablets is unlimited!</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic4-md.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Post-sale Support</h2>
                        <p>The possibility of further modifications and system upgrades. Lifetime support by the manufacturer. 3 year warranty for the hardware. THRONE software warranty for life.</p>
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
                        <h2 data-animation="animated pulse">A Revolutionary Solution On a Basis Of 3D Technology</h2>
                        <p>A single 3D iterface for wireless control of lighting and shades, climate (HVAC), security systems, multimedia and other systems of a Smart Home.</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="../images/carousel/pic2-sm.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Free 3D demo of your house!</h2>
                        <p> Even before signing the contract we provide to a client our 3D demo app, designed according to the floor plans of his house.
                            With this app the customer can get a complete idea how his Smart home will work. <strong>It's free</strong>.
                        </p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic3-sm.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Any Size of Facilities</h2>
                        <p>The system can manage a small apartment or a huge residence. The number of connected Smart home devices, smartphones and tablets is unlimited!</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic4-sm.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Post-sale Support</h2>
                        <p>The possibility of further modifications and system upgrades. Lifetime support by the manufacturer. 3 year warranty for the hardware. THRONE software warranty for life.</p>
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
                        <h2 data-animation="animated pulse">A Revolutionary Solution On a Basis Of 3D Technology</h2>
                        <p>A single 3D iterface for wireless control of lighting and shades, climate (HVAC), security systems, multimedia and other systems of a Smart Home.</p>
                    </div>
                </li>
  	    		<li>
  	    	        <img src="../images/carousel/pic2-xs.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Free 3D demo of your house!</h2>
                        <p> Even before signing the contract we provide to a client our 3D demo app, designed according to the floor plans of his house.
                            With this app the customer can get a complete idea how his Smart home will work. <strong>It's free</strong>.
                        </p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic3-xs.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Any Size of Facilities</h2>
                        <p>The system can manage a small apartment or a huge residence. The number of connected Smart home devices, smartphones and tablets is unlimited!</p>
                    </div>
  	    		</li>
  	    		<li>
  	    	        <img src="../images/carousel/pic4-xs.jpg" />
                    <div class="flex-caption">
                        <span class="overlay"></span>
                        <h2 data-animation="animated pulse">Post-sale Support</h2>
                        <p>The possibility of further modifications and system upgrades. Lifetime support by the manufacturer. 3 year warranty for the hardware. THRONE software warranty for life.</p>
                    </div>
  	    		</li>
            </ul>
        </div>


        <p class="text-center">
            Smart Home by THRONE Project is a set of completely understandable functions, which are really needed in everyday life
        </p>


        <div class="text-center" id="first_frame_factoids">
            <div>
                <a href="#tabs-1" data-slide="4" class="inner_anchor light" title="Smart lighting system">
                    smart<br>lighting<br>system<br>
                    <img src="../images/light_slide_control.png" alt=""/>
                </a>
            </div>
            <div>
                <a href="#tabs-2" data-slide="4" class="inner_anchor climate" title="Temperature (HVAC) automation and control" >
                    temperature<br>(HVAC) automation<br>and control<br>
                    <img src="../images/climate_condition.jpg" alt=""/>
                </a>
            </div>
            <div>
                <a data-slide="4" href="#tabs-3" class="inner_anchor security" title="Security and monitoring systems">
                    security<br>and monitoring<br>systems<br>
                    <img src="../images/security_alarm.jpg" alt=""/>
                </a>
            </div>
        </div>
        <p class="text-center">
            As well as video doorphones, video surveillance and other systems. They just made in a modern way and
            managed through a single 3D interface on a smartphone or tablet. Safety, comfort and energy efficiency &mdash; this is what a Smart Home system provides to a customer.
        </p>
        <div id="interior_ipad" class="flowplayer no-volume no-mute functional is-splash"
            style="background-image:url('../images/new_ipad222.jpg');
                background-repeat: no-repeat;
                background-position: center center;
                background-color: #fff;">
            <!--img src="../images/new_ipad.png" alt="" class="img-responsive"/-->
            <video id="screendemo" loop="loop"
              >
                <source src="../uploads/videos/sequence02.webm" type="video/webm">
                <source src="../uploads/videos/sequence02.mp4" type="video/mp4">
            </video>
        </div>
        


    <?php endif; ?>

    <p class="app_links_container">
        <a href="https://itunes.apple.com/en/app/throne-3d-smart-home-building/id1024542280?l=ru&mt=8" class="ios_throne_app" target="_blank">THRONE for iOS</a>
        <a href="https://play.google.com/store/apps/details?id=com.throne.project28.demo.nexus" class="android_throne_app" target="_blank">THRONE for Android</a>
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
                <h1>Easy and Clear Control</h1>
                <p class="text-center" id="descr">
                    For control Smart Home we offer customers THRONE 3D Control interface that has no analogues in the world. It allows to monitor the status of the whole house and control various systems with one or more smartphones or tablets. You can operate each device of a smart home individually, or control room, a whole floor or even a whole building. And it is simple and clear, as never before, due to the use in THRONE system a 3D model of your home.
                </p>
                <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/P8bqAepnccI?autoplay=1" class="youtube">Watch video!</a><span id="watch_btn"></span></p>
                <div id="notes">
                    <div><img src="../images/interface_icon.png" class="img-responsive" alt=""/><span id="note1">Really Intuitive<br/>Interface</span></div>
                    <div><img src="../images/scale_icon.png" class="img-responsive" alt=""/><span id="note2">Any Size<br/>of a House</span></div>
                    <div><img src="../images/dist_manage_icon.png" class="img-responsive" alt=""/><span id="note3">Remote control from<br/>tablet or smartphone</span></div>
                </div>
                <div id="slide2-ipad">
                    <img src="../images/ipad_slide2.jpg" class="img-responsive" alt=""/>
                </div>
                <div id="fake_tabs" align="center" width="100%">
                    <ul  data-anchor-target="#slide-3" data-bottom-top="visibility: hidden">
                        <li data-anchor-target="#slide-3" ><a href="#tabs-1" data-slide="4" title="" class="tabulous_active">Lighting</a></li>
                        <li data-anchor-target="#slide-3"><a href="#tabs-2" data-slide="4" title="">Climate Сontrol</a></li>
                        <li data-anchor-target="#slide-3"><a href="#tabs-3" data-slide="4" title="">Security</a></li>
                        <span class="tabulousclear"></span>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hsContainer visible-md">
            <div class="hsContent">
                <h1>Easy and Clear Control</h1>
                <p class="text-center" id="descr">
                    For control Smart Home we offer customers THRONE 3D Control interface that has no analogues in the world. It allows to monitor the status of the whole house and control various systems with one or more smartphones or tablets. You can operate each device of a smart home individually, or control room, a whole floor or even a whole building. And it is simple and clear, as never before, due to the use in THRONE system a 3D model of your home.
                </p>
                <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/P8bqAepnccI?autoplay=1" class="youtube">Watch video!</a><span id="watch_btn"></span>
                <div id="notes">
                    <div><img src="../images/interface_icon.png" class="img-responsive" alt=""/><span id="note1">Really Intuitive<br/>Interface</span></div>
                    <div><img src="../images/scale_icon.png" class="img-responsive" alt=""/><span id="note2">Any Size<br/>of a House</span></div>
                    <div><img src="../images/dist_manage_icon.png" class="img-responsive" alt=""/><span id="note3">Remote control from<br/>tablet or smartphone</span></div>
                </div>
                <div id="slide2-ipad">
                    <img src="../images/ipad_slide2_org.jpg" class="img-responsive" alt=""/>
                </div>
                <div id="fake_tabs" align="center" width="100%">
                    <ul  data-anchor-target="#slide-3" data-bottom-top="visibility: hidden">
                        <li data-anchor-target="#slide-3" ><a href="#tabs-1" data-slide="4" title="" class="tabulous_active">Lighting</a></li>
                        <li data-anchor-target="#slide-3"><a href="#tabs-2" data-slide="4" title="">Climate Сontrol</a></li>
                        <li data-anchor-target="#slide-3"><a href="#tabs-3" data-slide="4" title="">Security</a></li>
                        <span class="tabulousclear"></span>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hsContainer visible-sm">
            <div class="hsContent">
                <h1>Easy and Clear Control</h1>
                <p class="text-center" id="descr">
                    For control Smart Home we offer customers THRONE 3D Control interface that has no analogues in the world. It allows to monitor the status of the whole house and control various systems with one or more smartphones or tablets. You can operate each device of a smart home individually, or control room, a whole floor or even a whole building. And it is simple and clear, as never before, due to the use in THRONE system a 3D model of your home.                </p>
                <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/P8bqAepnccI?autoplay=1" class="youtube">Watch video!</a><span id="watch_btn"></span>
                <div id="notes">
                    <div><img src="../images/interface_icon.png" class="img-responsive"  alt=""/><span id="note1">Really Intuitive<br/>Interface</span></div>
                    <div><img src="../images/scale_icon.png" class="img-responsive"  alt=""/><span id="note2">Any Size<br/>of a House</span></div>
                    <div><img src="../images/dist_manage_icon.png" class="img-responsive"  alt=""/><span id="note3">Remote control from<br/>tablet or smartphone</span></div>
                </div>
                <div id="slide2-ipad">
                    <img src="../images/ipad_slide2_org.jpg" class="img-responsive" alt=""/>
                </div>

            </div>
        </div>
        <div class="hsContainer visible-xs">
            <div class="hsContent">
                <h1>Easy and Clear Control</h1>
                <p class="text-center" id="descr">
                    For control Smart Home we offer customers THRONE 3D Control interface that has no analogues in the world. It allows to monitor the status of the whole house and control various systems with one or more smartphones or tablets. You can operate each device of a smart home individually, or control room, a whole floor or even a whole building. And it is simple and clear, as never before, due to the use in THRONE system a 3D model of your home.                </p>
                <p class="text-center" id="watch_video"><a href="http://www.youtube.com/embed/P8bqAepnccI?autoplay=1" class="youtube">Watch video!</a><span id="watch_btn"></span>
                <div id="notes" class="table">
                    <div class="table_row">
                        <div class="table_cell"><img src="../images/interface_icon.png" class="img-responsive"  alt=""/></div>
                        <div class="table_cell"><span id="note1">Really Intuitive<br/>Interface</span></div>
                    </div>
                    <div class="table_row">
                        <div class="table_cell"><img src="../images/scale_icon.png" class="img-responsive" alt=""/></div>
                        <div class="table_cell"><span id="note2">Any Size<br/>of a House</span></div>
                    </div>
                    <div class="table_row">
                        <div class="table_cell"><img src="../images/dist_manage_icon.png" class="img-responsive" alt=""/></div>
                        <div class="table_cell"><span id="note3">Remote control from<br/>tablet or smartphone</span></div>
                    </div>
                </div>
                <div id="slide2-ipad">
                    <img src="../images/ipad_slide2_org.jpg" class="img-responsive"  alt=""/>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="slide-4" data-slide="4" class="frame">
    <div id="tabs" class="visible-lg">
        <ul>
            <li><a href="#tabs-1" data-slide="4" title="">Lighting</a></li>
            <li><a href="#tabs-2" data-slide="4" title="">Climate Сontrol</a></li>
            <li><a href="#tabs-3" data-slide="4" title="">Security</a></li>
        </ul>
        <!--div id="tabs_container"-->
            <div id="tabs-1">
                <table class="table">
                    <tbody>
                    <tr><td colspan="2"><h2>Lighting Control</h2></td></tr>
                    <tr>
                        <td width="60%"><img src="../images/light_manage.jpg" alt="Управление освещением" title="Управление освещением" class="img-responsive tab_main_img"  /></td>
                        <td width="40%">
                            <p class="">
                                Think about it: your home will have a few dozen lamps. How to make sure that none of them left switched on? Before going to sleep or
                                leaving you will need to go around the house to check it out. It is a reliable, but somewhat outdated method for the 21st century.
                            </p>
                            <p>THRONE Smart Home allows you to control individual lights or groups of lights, and also to turn off all the lights with one touch of the screen.
                                You can adjust the brightness and color in each room or zone, and then save light scene directly in the interface of THRONE.
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="factoids">
                    <tr>
                        <td>
                            <img src="../images/light_zone_management.png" alt="Centralized and zonal management" title="Centralized and zonal management"/>
                            <span>Centralized<br/>and zonal<br/>management</span>
                        </td>
                        <td>
                            <img src="../images/light_slide_control.png" alt="Smooth brightness adjustment" title="Smooth brightness adjustment"/>
                            <span>Smooth<br/>brightness<br/>adjustment</span>
                        </td>
                        <td>
                            <img src="../images/light_scene_saving.png" alt="Custom scenes saving" title="Custom scenes saving"/>
                            <span>Custom<br/>scenes<br/>saving</span>
                        </td>
                        <td>
                            <img src="../images/light_curtains.png" alt="Shading with curtains, shutters and blinds" title="Shading with curtains, shutters and blinds"/>
                            <span>Shading with curtains,<br/>shutters<br/>and blinds</span>
                        </td>
                        <td>
                            <img src="../images/light_part_management.png" alt="Full or partial control" title="Full or partial control"  />
                            <span>Full or partial<br/>control</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="tabs-2">
                <table class="table">
                    <tbody>
                    <tr><td colspan="2"><h2>Climate Сontrol (HVAC)</h2></td></tr>
                    <tr>
                        <td width="60%"><img src="../images/climate_management.jpg" class="img-responsive tab_main_img" alt="Управление климатом" title="Управление климатом"/></td>
                        <td>
                            <p class="">
                                Climate control has long ago became a standard option when buying a car. Why, then, to deprive yourself the same in home improvement?
                            </p>
                            <p>Using THRONE Smart Home you will be able to manage climatic equipment of the house at any time from anywhere.
                                You can switch on heating to warm up the room while you drive to the house; or to set the air conditioner for making the house cool in hot summer.
                            </p>
                            <p>You can see a heat map of the house and, of course, set up the target temperature that the system will keep automatically.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="factoids">
                    <tr>
                        <td>
                            <img src="../images/climate_condition.jpg" alt="Air Conditioning Centralized and zonal" title="Air Conditioning Centralized and zonal"/>
                            <span>Air Conditioning<br/>Centralized<br/>and zonal</span>
                        </td>
                        <td>
                            <img src="../images/climate_ventil.jpg" alt="Ventilation Inlet and exhaust" title="Ventilation Inlet and exhaust"/>
                            <span>Ventilation<br/>Inlet<br/>and exhaust</span>
                        </td>
                        <td>
                            <img src="../images/climate_heating.jpg" alt="Heating Central and local" title="Heating Central and local"/>
                            <span>Heating<br/>Central<br/>and local</span>
                        </td>
                        <td>
                            <img src="../images/climate_warm_floor.jpg" alt="Heating floors Electric and aquatic" title="Heating floors Electric and aquatic"/>
                            <span>Heating floors<br/>Electric<br/>and aquatic</span>
                        </td>
                        <td>
                            <img src="../images/climate_thermostate.jpg" alt="Thermostats The full control of climate" title="Thermostats The full control of climate"/>
                            <span>Thermostats<br/>The full control<br/>of climate</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="tabs-3">
                <table class="table">
                    <tbody>
                    <tr><td colspan="2"><h2>Security System Control</h2></td></tr>
                    <tr>
                        <td width="60%"><img src="../images/slide4_bg.jpg" class="img-responsive tab_main_img" alt="Security System Control" title="Security System Control"/></td>
                        <td>
                            <p>
                                THRONE Smart Home allows to switch on or off the alarm in the entire building, on the floors or in separate premises.
                                Event notifications are displayed with specification of the location where they occur on the 3D model.
                            </p>
                            <p>Using THRONE you can watch the video from surveillance cameras, receive notifications of fire, water leakage, gas leakage, intrusion.</p>
                            <p>Also you can connect a video door phone with THRONE, and that will allow you to see your guests and open the door directly from your smartphone or tablet.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="factoids">
                    <tr>
                        <td>
                            <img src="../images/security_alarm.jpg" alt="Security and fire alarm" title="Security and fire alarm"/>
                            <span>Security<br/>and fire<br/>alarm</span>
                        </td>
                        <td>
                            <img src="../images/security_sensors.jpg" alt="Motion sensors, windows and doors opening sensors" title="Motion sensors, windows and doors opening sensors"/>
                            <span>Motion sensors,<br/>windows and doors<br/>opening sensors</span>
                        </td>
                        <td>
                            <img src="../images/security_emergency.jpg" alt="Protection from leakage and other emergency situations" title="Protection from leakage and other emergency situations"/>
                            <span>Protection from leakage<br/>and other<br/>emergency situations</span>
                        </td>
                        <td>
                            <img src="../images/security_notification.jpg" alt="Alert sending to security services and customer via SMS" title="Alert sending to security services and customer via SMS"/>
                            <span>Alert sending<br/>to security services<br/>and customer via SMS</span>
                        </td>
                        <td>
                            <img src="../images/security_video.jpg" alt="Any number of IP video surveillance cameras" title="Any number of IP video surveillance cameras"/>
                            <span>Any number<br/>of IP video surveillance<br/>cameras</span>
                        </td>
                    </tr>
                </table>
            </div>
        <!--/div-->
    </div>
    <div id="tabs2" class="visible-md">
        <ul>
            <li><a href="#md-tabs-1" data-slide="4" title="">Lighting</a></li>
            <li><a href="#md-tabs-2" data-slide="4" title="">Climate Сontrol</a></li>
            <li><a href="#md-tabs-3" data-slide="4" title="">Security</a></li>
        </ul>
        <!--div id="tabs_container"-->
            <div id="md-tabs-1">
                <table class="table">
                    <tbody>
                    <tr><td colspan="2"><h2>Lighting Control</h2></td></tr>
                    <tr>
                        <td width="60%"><img src="../images/light_manage.jpg" alt="Управление освещением" title="Управление освещением" class="img-responsive tab_main_img"  /></td>
                        <td width="40%">
                            <p class="">
                                Think about it: your home will have a few dozen lamps. How to make sure that none of them left switched on? Before going to sleep or
                                leaving you will need to go around the house to check it out. It is a reliable, but somewhat outdated method for the 21st century.
                            </p>
                            <p>THRONE Smart Home allows you to control individual lights or groups of lights, and also to turn off all the lights with one touch of the screen.
                                You can adjust the brightness and color in each room or zone, and then save light scene directly in the interface of THRONE.
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="factoids">
                    <tr>
                        <td>
                            <img src="../images/light_zone_management.png" alt="Centralized and zonal management" title="Centralized and zonal management"/>
                            <span>Centralized<br/>and zonal<br/>management</span>
                        </td>
                        <td>
                            <img src="../images/light_slide_control.png" alt="Smooth brightness adjustment" title="Smooth brightness adjustment"/>
                            <span>Smooth<br/>brightness<br/>adjustment</span>
                        </td>
                        <td>
                            <img src="../images/light_scene_saving.png" alt="Custom scenes saving" title="Custom scenes saving"/>
                            <span>Custom<br/>scenes<br/>saving</span>
                        </td>
                        <td>
                            <img src="../images/light_curtains.png" alt="Shading with curtains, shutters and blinds" title="Shading with curtains, shutters and blinds"/>
                            <span>Shading with curtains,<br/>shutters<br/>and blinds</span>
                        </td>
                        <td>
                            <img src="../images/light_part_management.png" alt="Full or partial control" title="Full or partial control"  />
                            <span>Full or partial<br/>control</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="md-tabs-2">
                <table class="table">
                    <tbody>
                    <tr><td colspan="2"><h2>Climate Сontrol (HVAC)</h2></td></tr>
                    <tr>
                        <td width="60%"><img src="../images/climate_management.jpg" class="img-responsive tab_main_img" alt="Управление климатом" title="Управление климатом"/></td>
                        <td>
                            <p class="">
                                Climate control has long ago became a standard option when buying a car. Why, then, to deprive yourself the same in home improvement?
                            </p>
                            <p>Using THRONE Smart Home you will be able to manage climatic equipment of the house at any time from anywhere.
                                You can switch on heating to warm up the room while you drive to the house; or to set the air conditioner for making the house cool in hot summer.
                            </p>
                            <p>You can see a heat map of the house and, of course, set up the target temperature that the system will keep automatically.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="factoids">
                    <tr>
                        <td>
                            <img src="../images/climate_condition.jpg" alt="Air Conditioning Centralized and zonal" title="Air Conditioning Centralized and zonal"/>
                            <span>Air Conditioning<br/>Centralized<br/>and zonal</span>
                        </td>
                        <td>
                            <img src="../images/climate_ventil.jpg" alt="Ventilation Inlet and exhaust" title="Ventilation Inlet and exhaust"/>
                            <span>Ventilation<br/>Inlet<br/>and exhaust</span>
                        </td>
                        <td>
                            <img src="../images/climate_heating.jpg" alt="Heating Central and local" title="Heating Central and local"/>
                            <span>Heating<br/>Central<br/>and local</span>
                        </td>
                        <td>
                            <img src="../images/climate_warm_floor.jpg" alt="Heating floors Electric and aquatic" title="Heating floors Electric and aquatic"/>
                            <span>Heating floors<br/>Electric<br/>and aquatic</span>
                        </td>
                        <td>
                            <img src="../images/climate_thermostate.jpg" alt="Thermostats The full control of climate" title="Thermostats The full control of climate"/>
                            <span>Thermostats<br/>The full control<br/>of climate</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="md-tabs-3">
                <table class="table">
                    <tbody>
                    <tr><td colspan="2"><h2>Security System Control</h2></td></tr>
                    <tr>
                        <td width="60%"><img src="../images/slide4_bg.jpg" class="img-responsive tab_main_img" alt="Security System Control" title="Security System Control"/></td>
                        <td>
                            <p>
                                THRONE Smart Home allows to switch on or off the alarm in the entire building, on the floors or in separate premises.
                                Event notifications are displayed with specification of the location where they occur on the 3D model.
                            </p>
                            <p>Using THRONE you can watch the video from surveillance cameras, receive notifications of fire, water leakage, gas leakage, intrusion.</p>
                            <p>Also you can connect a video door phone with THRONE, and that will allow you to see your guests and open the door directly from your smartphone or tablet.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="factoids">
                    <tr>
                        <td>
                            <img src="../images/security_alarm.jpg" alt="Security and fire alarm" title="Security and fire alarm"/>
                            <span>Security<br/>and fire<br/>alarm</span>
                        </td>
                        <td>
                            <img src="../images/security_sensors.jpg" alt="Motion sensors, windows and doors opening sensors" title="Motion sensors, windows and doors opening sensors"/>
                            <span>Motion sensors,<br/>windows and doors<br/>opening sensors</span>
                        </td>
                        <td>
                            <img src="../images/security_emergency.jpg" alt="Protection from leakage and other emergency situations" title="Protection from leakage and other emergency situations"/>
                            <span>Protection from leakage<br/>and other<br/>emergency situations</span>
                        </td>
                        <td>
                            <img src="../images/security_notification.jpg" alt="Alert sending to security services and customer via SMS" title="Alert sending to security services and customer via SMS"/>
                            <span>Alert sending<br/>to security services<br/>and customer via SMS</span>
                        </td>
                        <td>
                            <img src="../images/security_video.jpg" alt="Any number of IP video surveillance cameras" title="Any number of IP video surveillance cameras"/>
                            <span>Any number<br/>of IP video surveillance<br/>cameras</span>
                        </td>
                    </tr>
                </table>
            </div>
        <!--/div-->
    </div>
    <div id="tabs3" class="visible-sm">
        <ul>
            <li><a href="#sm-tabs-1" data-slide="4" title="">Lighting</a></li>
            <li><a href="#sm-tabs-2" data-slide="4" title="">Climate Сontrol</a></li>
            <li><a href="#sm-tabs-3" data-slide="4" title="">Security</a></li>
        </ul>
        <!--div id="tabs_container"-->
            <div id="sm-tabs-1">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>
                            <h2>Lighting Control</h2>
                            <img src="../images/light_manage.jpg" alt="Управление освещением" title="Управление освещением" class="img-responsive tab_main_img"  />
                            <p class="">
                                Think about it: your home will have a few dozen lamps. How to make sure that none of them left switched on? Before going to sleep or
                                leaving you will need to go around the house to check it out. It is a reliable, but somewhat outdated method for the 21st century.
                            </p>
                            <p>THRONE Smart Home allows you to control individual lights or groups of lights, and also to turn off all the lights with one touch of the screen.
                                You can adjust the brightness and color in each room or zone, and then save light scene directly in the interface of THRONE.
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="factoids">
                    <tr>
                        <td>
                            <img  src="../images/light_zone_management.png" alt="Centralized and zonal management" title="Centralized and zonal management"/>
                        </td>
                        <td>
                            <span>Centralized<br/>and zonal<br/>management</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Smooth<br/>brightness<br/>adjustment</span>
                        </td>
                        <td>
                            <img src="../images/light_slide_control.png" alt="Smooth brightness adjustment" title="Smooth brightness adjustment"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="../images/light_scene_saving.png" alt="Custom scenes saving" title="Custom scenes saving"/>
                        </td>
                        <td>
                            <span>Custom<br/>scenes<br/>saving</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Shading with curtains,<br/>shutters<br/>and blinds</span>
                        </td>
                        <td>
                            <img src="../images/light_curtains.png" alt="Shading with curtains, shutters and blinds" title="Shading with curtains, shutters and blinds"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="../images/light_part_management.png" alt="Full or partial control" title="Full or partial control"  />
                        </td>
                        <td>
                            <span>Full or partial<br/>control</span>
                        </td>
                    </tr>
                </table>

            </div>
            <div id="sm-tabs-2">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <h2>Climate Сontrol (HVAC)</h2>
                            <img src="../images/climate_management.jpg" class="img-responsive tab_main_img" alt="Управление климатом" title="Управление климатом"/>
                            <p class="">
                                Climate control has long ago became a standard option when buying a car. Why, then, to deprive yourself the same in home improvement?
                            </p>
                            <p>Using THRONE Smart Home you will be able to manage climatic equipment of the house at any time from anywhere.
                                You can switch on heating to warm up the room while you drive to the house; or to set the air conditioner for making the house cool in hot summer.
                            </p>
                            <p>You can see a heat map of the house and, of course, set up the target temperature that the system will keep automatically.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="factoids">
                    <tr>
                        <td>
                            <img src="../images/climate_condition.jpg" alt="Air Conditioning Centralized and zonal" title="Air Conditioning Centralized and zonal"/>
                        </td>
                        <td>
                            <span>Air Conditioning<br/>Centralized<br/>and zonal</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Ventilation<br/>Inlet<br/>and exhaust</span>
                        </td>
                        <td>
                            <img src="../images/climate_ventil.jpg" alt="Ventilation Inlet and exhaust" title="Ventilation Inlet and exhaust"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="../images/climate_heating.jpg" alt="Heating Central and local" title="Heating Central and local"/>
                        </td>
                        <td>
                            <span>Heating<br/>Central<br/>and local</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <<span>Heating floors<br/>Electric<br/>and aquatic</span>
                        </td>
                        <td>
                            <img src="../images/climate_warm_floor.jpg" alt="Heating floors Electric and aquatic" title="Heating floors Electric and aquatic"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="../images/climate_thermostate.jpg" alt="Thermostats The full control of climate" title="Thermostats The full control of climate"/>
                        </td>
                        <td>
                            <span>Thermostats<br/>The full control<br/>of climate</span>
                        </td>
                    </tr>
                </table>

            </div>
            <div id="sm-tabs-3">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <h2>Security System Control</h2>
                            <img src="../images/slide4_bg.jpg" class="img-responsive tab_main_img" alt="Security System Control" title="Security System Control"/>
                            <p>
                                THRONE Smart Home allows to switch on or off the alarm in the entire building, on the floors or in separate premises.
                                Event notifications are displayed with specification of the location where they occur on the 3D model.
                            </p>
                            <p>Using THRONE you can watch the video from surveillance cameras, receive notifications of fire, water leakage, gas leakage, intrusion.</p>
                            <p>Also you can connect a video door phone with THRONE, and that will allow you to see your guests and open the door directly from your smartphone or tablet.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="factoids">
                    <tr>
                        <td>
                            <img src="../images/security_alarm.jpg" alt="Security and fire alarm" title="Security and fire alarm"/>
                        </td>
                        <td>
                            <span>Security<br/>and fire<br/>alarm</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Motion sensors,<br/>windows and doors<br/>opening sensors</span>
                        </td>
                        <td>
                            <img src="../images/security_sensors.jpg" alt="Motion sensors, windows and doors opening sensors" title="Motion sensors, windows and doors opening sensors"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="../images/security_emergency.jpg" alt="Protection from leakage and other emergency situations" title="Protection from leakage and other emergency situations"/>
                        </td>
                        <td>
                            <span>Protection from leakage<br/>and other<br/>emergency situations</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Alert sending<br/>to security services<br/>and customer via SMS</span>
                        </td>
                        <td>
                            <img src="../images/security_notification.jpg" alt="Alert sending to security services and customer via SMS" title="Alert sending to security services and customer via SMS"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="../images/security_video.jpg" alt="Any number of IP video surveillance cameras" title="Any number of IP video surveillance cameras"/>
                        </td>
                        <td>
                            <span>Any number<br/>of IP video surveillance<br/>cameras</span>
                        </td>
                    </tr>
                </table>

            </div>

    </div>
    <div id="tabs4" class="visible-xs">
        <ul>
            <li><a href="#xs-tabs-1" data-slide="4" title="">Lighting</a></li>
            <li><a href="#xs-tabs-2" data-slide="4" title="">Climate Сontrol</a></li>
            <li><a href="#xs-tabs-3" data-slide="4" title="">Security</a></li>
        </ul>

        <div id="xs-tabs-1">
            <table>
                <tbody>
                <tr>
                    <td>
                        <h2>Lighting Control</h2>
                        <img src="../images/light_manage.jpg" alt="Управление освещением" title="Управление освещением" class="img-responsive tab_main_img"  />
                        <p class="">
                            Think about it: your home will have a few dozen lamps. How to make sure that none of them left switched on? Before going to sleep or
                            leaving you will need to go around the house to check it out. It is a reliable, but somewhat outdated method for the 21st century.
                        </p>
                        <p>THRONE Smart Home allows you to control individual lights or groups of lights, and also to turn off all the lights with one touch of the screen.
                            You can adjust the brightness and color in each room or zone, and then save light scene directly in the interface of THRONE.
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <img src="../images/light_zone_management.png" alt="Centralized and zonal management" title="Centralized and zonal management"/>
                    </td>
                    <td>
                        <span>Centralized<br/>and zonal<br/>management</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Smooth<br/>brightness<br/>adjustment</span>
                    </td>
                    <td>
                        <img src="../images/light_slide_control.png" alt="Smooth brightness adjustment" title="Smooth brightness adjustment"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="../images/light_scene_saving.png" alt="Custom scenes saving" title="Custom scenes saving"/>
                    </td>
                    <td>
                        <span>Custom<br/>scenes<br/>saving</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Shading with curtains,<br/>shutters<br/>and blinds</span>
                    </td>
                    <td>
                        <img src="../images/light_curtains.png" alt="Shading with curtains, shutters and blinds" title="Shading with curtains, shutters and blinds"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="../images/light_part_management.png" alt="Full or partial control" title="Full or partial control"  />
                    </td>
                    <td>
                        <span>Full or partial<br/>control</span>
                    </td>
                </tr>
            </table>
        </div>
        <div id="xs-tabs-2">
            <table>
                <tbody>
                <tr>
                    <td>
                        <h2>Climate Сontrol (HVAC)</h2>
                        <img src="../images/climate_management.jpg" class="img-responsive tab_main_img" alt="Управление климатом" title="Управление климатом"/>
                        <p class="">
                            Climate control has long ago became a standard option when buying a car. Why, then, to deprive yourself the same in home improvement?
                        </p>
                        <p>Using THRONE Smart Home you will be able to manage climatic equipment of the house at any time from anywhere.
                            You can switch on heating to warm up the room while you drive to the house; or to set the air conditioner for making the house cool in hot summer.
                        </p>
                        <p>You can see a heat map of the house and, of course, set up the target temperature that the system will keep automatically.</p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <img src="../images/climate_condition.jpg" alt="Air Conditioning Centralized and zonal" title="Air Conditioning Centralized and zonal"/>
                    </td>
                    <td>
                        <span>Air Conditioning<br/>Centralized<br/>and zonal</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Ventilation<br/>Inlet<br/>and exhaust</span>
                    </td>
                    <td>
                        <img src="../images/climate_ventil.jpg" alt="Ventilation Inlet and exhaust" title="Ventilation Inlet and exhaust"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="../images/climate_heating.jpg" alt="Heating Central and local" title="Heating Central and local"/>
                    </td>
                    <td>
                        <span>Heating<br/>Central<br/>and local</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Heating floors<br/>Electric<br/>and aquatic</span>
                    </td>
                    <td>
                        <img src="../images/climate_warm_floor.jpg" alt="Heating floors Electric and aquatic" title="Heating floors Electric and aquatic"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="../images/climate_thermostate.jpg" alt="Thermostats The full control of climate" title="Thermostats The full control of climate"/>
                    </td>
                    <td>
                        <span>Thermostats<br/>The full control<br/>of climate</span>
                    </td>
                </tr>
            </table>


        </div>
        <div id="xs-tabs-3">
            <table>
                <tbody>
                <tr>
                    <td>
                        <h2>Security System Control</h2>
                        <img src="../images/slide4_bg.jpg" class="img-responsive tab_main_img" alt="Security System Control" title="Security System Control"/>
                        <p>
                            THRONE Smart Home allows to switch on or off the alarm in the entire building, on the floors or in separate premises.
                            Event notifications are displayed with specification of the location where they occur on the 3D model.
                        </p>
                        <p>Using THRONE you can watch the video from surveillance cameras, receive notifications of fire, water leakage, gas leakage, intrusion.</p>
                        <p>Also you can connect a video door phone with THRONE, and that will allow you to see your guests and open the door directly from your smartphone or tablet.</p>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="factoids">
                <tr>
                    <td>
                        <img src="../images/security_alarm.jpg" alt="Security and fire alarm" title="Security and fire alarm"/>
                    </td>
                    <td>
                        <span>Security<br/>and fire<br/>alarm</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Motion sensors,<br/>windows and doors<br/>opening sensors</span>
                    </td>
                    <td>
                        <img src="../images/security_sensors.jpg" alt="Motion sensors, windows and doors opening sensors" title="Motion sensors, windows and doors opening sensors"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="../images/security_emergency.jpg" alt="Protection from leakage and other emergency situations" title="Protection from leakage and other emergency situations"/>
                    </td>
                    <td>
                        <span>Protection from leakage<br/>and other<br/>emergency situations</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Alert sending<br/>to security services<br/>and customer via SMS</span>
                    </td>
                    <td>
                        <img src="../images/security_notification.jpg" alt="Alert sending to security services and customer via SMS" title="Alert sending to security services and customer via SMS"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="../images/security_video.jpg" alt="Any number of IP video surveillance cameras" title="Any number of IP video surveillance cameras"/>
                    </td>
                    <td>
                        <span>Any number<br/>of IP video surveillance<br/>cameras</span>
                    </td>
                </tr>
            </table>


        </div>

    </div>
    <div class="bottom_line"></div>
</div>

<div id="slide-5" data-slide="5" class=" frame">
    <h2 class="text-center">Extension of Integration</h2>
    <div class="table hidden-xs" id="integr_table">
        <div class="table_row">
            <div class="table_cell">
                <div class="integr_description">
                    Open a gate or door without leaving your couch
                </div>
                <img src="../images/integr_open_gates.png" class="img-responsive" alt=""/>
                <p>Opening of a door<br/>or gate</p>
            </div>

            <div class="table_cell">
                <div class="integr_description">
                    All weather conditions on your tablet or smartphone
                </div>
                <img src="../images/integr_weather_stations.png" class="img-responsive" alt=""/>
                <p>Weather<br/>Stations</p>
            </div>

            <div class="table_cell">
                <div class="integr_description">
                    Manage zonal lawn sprinklers
                </div>
                <img src="../images/integr_watering_systems.png" class="img-responsive" alt=""/>
                <p>Sprinkling<br/>systems</p>
            </div>

            <div class="table_cell">
                <div class="integr_description">
                    Control music in each room
                </div>
                <img src="../images/integr_mediaroom.png" class="img-responsive" alt=""/>
                <p>Audio<br/>multiroom</p>
            </div>

            <div class="table_cell ">
                <div class="integr_description">
                    Setting the temperature in a pool or sauna
                </div>
                <img src="../images/integr_pool.png" class="img-responsive" alt=""/>
                <p>Saunas<br/>and pools</p>
            </div>
        </div>
    </div>

    <div class="table visible-xs" id="integr_table">
        <div class="table_row">
            <div class="table_cell">
                <div class="integr_block_wrap">
                    <img src="../images/integr_open_gates.png" class="img-responsive" alt=""/>
                    <!--p>Открытие дверей<br>или&nbsp;ворот</p-->
                </div>
            </div>
            <div class="table_cell">
                Open a gate or door without leaving your couch
            </div>
        </div>
        <div class="table_row">
            <div class="table_cell">
                All weather conditions on your tablet or smartphone
            </div>
            <div class="table_cell">
                <img src="../images/integr_weather_stations.png" class="img-responsive" alt=""/>
                <!--p>Погодные<br>станции</p-->
            </div>
        </div>
        <div class="table_row">
            <div class="table_cell">
                <div class="integr_block_wrap">
                    <img src="../images/integr_watering_systems.png" class="img-responsive" alt=""/>
                    <!--p>Поливочные<br>системы</p-->
                </div>
            </div>
            <div class="table_cell">
                Manage zonal lawn sprinklers
            </div>
        </div>
        <div class="table_row">
            <div class="table_cell">
                Control music in each room
            </div>
            <div class="table_cell">
                <img src="../images/integr_mediaroom.png" class="img-responsive" alt=""/>
                <!--p>Медиа мультирум</p-->
            </div>
        </div>
        <div class="table_row">
            <div class="table_cell ">
                <div class="integr_block_wrap">
                    <img src="../images/integr_pool.png" class="img-responsive" alt=""/>
                    <!--p>Сауны<br>и&nbsp;бассейны</p-->
                </div>
            </div>
            <div class="table_cell">
                Setting the temperature in a pool or sauna
            </div>
        </div>
    </div>

    <h2 class="text-center">Equipment for THRONE<br/>Smart Home system</h2>
    <div class="table hidden-xs" id="equipment" >
        <div class="table_row">
            <div class="table_cell">
                <p>As hardware part of the system we use the equipment of European standard KNX. The KNX Association today includes more than 400 manufacturers of equipment,
                    each of which passes a rigorous certification. So our customers always get the offer, optimally balanced on such indicators as Price / Design / Reliability.</p>
                <p>All sensors, switches, controllers and executive devices are certified and tested for safety, reliability and durability.</p>
            </div>
            <div class="table_cell" style="width: 35%;">
                <img src="../images/equipment.jpg" class="img-responsive" />
            </div>
        </div>
    </div>

    <div class="table visible-xs" id="equipment" >
        <div><img src="../images/equipment.jpg" class="img-responsive" /></div>
        <p>As hardware part of the system we use the equipment of European standard KNX. The KNX Association today includes more than 400 manufacturers of equipment,
            each of which passes a rigorous certification. So our customers always get the offer, optimally balanced on such indicators as Price / Design / Reliability.</p>
        <p>All sensors, switches, controllers and executive devices are certified and tested for safety, reliability and durability.</p>
    </div>

    <div class="text-center">
        <!--a href="#" class="ios_throne_app" data-toggle="modal" data-target="#myAppStoreModal">THRONE App</a>
        <a href="https://play.google.com/store/apps/details?id=com.throne.project28.demo.nexus" class="android_throne_app" target="_blank">THRONE App</a-->
        <span class="order_button" data-toggle="modal" data-target="#myModal"
              onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Require Specification</span>
    </div>

    <h2 class="text-center" id="know_more_title">Want to know more?</h2>
    <div id="know_more_tabs" class="hidden-xs">
        <ul class="nav nav-pills nav-justified">
            <li role="presentation"><a href="#about_tab">About THRONE Project</a></li>
            <li role="presentation"><a href="#how_works">How We Work</a></li>
            <li role="presentation"><a href="#price">The Cost of Smart Home</a></li>
            <li role="presentation" class="active"><a href="#discuss">Let’s Discuss Everything!</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade" id="about_tab" aria-labelledby="home-tab">
                <p>THRONE Project is an international engineering company. We design and install automation systems for homes, offices and industrial buildings.</p>
                <a href="about.html" title="About THRONE Project">Learn more</a>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="how_works" aria-labelledby="profile-tab">
                <p>We make free demo version of your Smart Home and the preliminary quotation of the project. We design the system.
                    We supply the equipment. We mount. We set up and run. Warranty for equipment is 3 years. Warranty for software is lifetime.</p>
                <a href="installation.html">Read more</a>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="price" aria-labelledby="home-tab">
                <p>As a good suit is sewn by the figure of a client, the smart home system is designed by the architecture of the premises.
                    Start with sending us your house plans, this will provide you with a more accurate calculation than using any of the online calculators.
                </p>
                <p align="center"><span class="order_button" data-toggle="modal" data-target="#myModal"
                                        onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Require a quotation</span></p>
            </div>
            <div role="tabpanel" class="tab-pane fade active in" id="discuss" aria-labelledby="profile-tab">
                <p>Leave your phone number, we will quickly contact you and discuss all the issues.
                    We never run the risk of the customer relationship, so we won't take much ща your time. And will never disclose your contact details to the third parties.</p>
                <p align="center"><span class="order_button" data-toggle="modal" data-target="#myModal"
                                        onclick="goog_report_conversion(); fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;">Require a call</span></p>
            </div>
        </div>
    </div>

    <div class="visible-xs">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            About THRONE Project
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        THRONE Project is an international engineering company. We design and install automation systems for homes, offices and industrial buildings.
                        <a href="about.html" title="About THRONE Project">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How We Work
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <p>We make free demo version of your Smart Home and the preliminary quotation of the project.</p>
                        <p>We design the system. We supply the equipment. We mount. We set up and run. </p>
                        <p>Warranty for equipment is 3 years. Warranty for software is lifetime.</p>
                        <a href="installation.html">Read more</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            The Cost of Smart Home
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <p>As a good suit is sewn by the figure of a client, the smart home system is designed by the architecture of the premises.
                            Start with sending us your house plans, this will provide you with a more accurate calculation than using any of the online calculators.</p>
                        <p class="text-center"><span class="order_button" data-toggle="modal" data-target="#myModal">Require a quotation</span></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Let’s Discuss Everything!
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        <p>Leave your phone number, we will quickly contact you and discuss all the issues. </p>
                        <p>We never run the risk of the customer relationship, so we won't take much ща your time. And will never disclose your contact details to the third parties.</p>
                        <p class="text-center"><span class="order_button" data-toggle="modal" data-target="#myModal">Require a callback</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="hidden-xs">
    &copy; 2015 <span id="brand">THRONE Project</span>
    <ul id="bottom_menu">
        <li><a href="installation.html" title="How We Work">How We Work</a></li>
        <li><a href="developers.html" title="For RE Developers">For RE Developers</a></li>
        <!--li><a href="partners.html" title="Партнерство">Партнерство</a></li-->
        <li><a href="about.html" title="About Us">About Us</a></li>
    </ul>
</footer>

<footer class="visible-xs">
    <ul id="bottom_menu">
        <li><a href="installation.html" title="How We Work">How We Work</a></li>
        <li><a href="developers.html" title="For RE Developers">For RE Developers</a></li>
        <!--li><a href="partners.html" title="Партнерство">Партнерство</a></li-->
        <li><a href="about.html" title="About Us">About Us</a></li>
    </ul>
    <div class="copy">&copy; 2015 <span id="brand">THRONE Project</span></div>
</footer>

<div id="callback_wrapper">
    <div id="callback_title">
        &gt;&gt;&gt; Require FREE 3D Demo for your house! &lt;&lt;&lt;
    </div>
    <div id="callback_form">
        <div class="footnote">Just send us the floor plans of your facility to <a href="mailto:office@throne.pro">office@throne.pro</a> and
            we will make 3D Demo and preliminary estimation. It is <strong>FREE</strong>.</div>
        <div class="footnote">For processing of your enquiery please leave your contacts and select a convenient time of our call.</div>

        <form action="" class="callback_form1">
            <table>
                <tbody>
                <tr>
                    <td align="right"><label for="inputName" class="control-label">Your name</label></td>
                    <td><input type="text" class="form-control" id="inputName" name="inputName" required="required"></td>
                </tr>
                <tr>
                    <td align="right"><label for="inputPhone" class="control-label">Phone number</label></td>
                    <td><input type="text" class="form-control" id="inputPhone" name="inputPhone" required="required"></td>
                </tr>
                <tr>
                    <td align="right"><label for="inputTime" class="control-label">Time of call</label></td>
                    <td><input type="text" class="form-control" id="inputTime" name="inputTime"></td>
                </tr>
                <tr><td>&nbsp;</td><td><button type="button" class="offer-send-btn">Send</button></td></tr>
                </tbody>
            </table>

            <input type="hidden" name="inputTheme" value="Require Callback">
        </form>

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
                <h4 class="modal-title">We’ll call back within 1 hour</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-7 col-xs-7">
                        <form action="" class=" callback_form">
                            <div class="form-group">
                                <label for="inputName" class="control-label">Your Name</label>
                                <div class=" ">
                                    <input type="text" class="form-control" id="inputName" name="inputName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone" class="control-label">Cellphone Number</label>

                                <div class=" ">
                                    <input type="text" class="form-control" id="inputPhone" name="inputPhone">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <button type="button" class="send-btn">Send</button>
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
                        <div>You will have no obligations.</div>
                        <div id="padlock">
                            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                            <span>We’ll not disclose you contact details to anyone!</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="footnote">
                            Or you can <a href="mailto:office@throne.pro">email us</a> right now!
                            Just send us the floor plans of your house and we will make a preliminary calculation. <strong>It's free</strong>.
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
<!--script type="text/javascript" src="js/jquery.liquid-slider.js"></script-->
<script type="text/javascript" src="../js/bootstrap.youtubepopup.min.js"></script>
<script type="text/javascript" src="../js/jquery.mask.min.js"></script>

<script type="text/javascript" src="../js/flowplay/flowplayer.js"></script>
<!--script type="text/javascript" src="js/flowplay/flowplayer.ipad-3.2.13.min.js"></script-->

<script type="text/javascript" src="../js/jquery.flexslider.js"></script>

<script type="text/javascript" src="../js/jquery.colorbox-min.js"></script>

<?php if ( !$detect->isMobile() ): ?>
    <script type="text/javascript" src="../js/main.js"></script>
<?php else: ?>
    <script type="text/javascript" src="http://releases.flowplayer.org/js/flowplayer.ipad-3.2.13.min.js"></script>
    <!--script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script-->
    <script type="text/javascript" src="../js/main_mobile.js"></script>
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