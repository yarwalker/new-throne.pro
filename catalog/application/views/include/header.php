<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once $_SERVER['DOCUMENT_ROOT'] . '/Mobile_Detect.php';
$detect = new Mobile_Detect();

$name = 'name_' . $lang;
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="utf-8">
    <title <?php echo ($lang == 'arabic' ? 'dir="rtl"' : '');  ?>><?php echo (isset($equipment[0]->$name) ? $equipment[0]->$name : 'Каталог оборудования'); ?></title>

    <!--link href="<?php echo site_url(); ?>/css/jquery-ui.css" rel="stylesheet" type="text/css"-->
    <link href="<?php echo site_url(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--link href="<?php echo site_url(); ?>/css/bootstrap.icon-large.min.css" rel="stylesheet" type="text/css"-->
    <!--link href="<?php echo site_url(); ?>/css/fixed-positioning.css" rel="stylesheet" type="text/css" /-->
    <!--link href="<?php echo site_url(); ?>/css/normalize.css" rel="stylesheet" type="text/css" /-->

    <?php if ( !$detect->isMobile() ): ?>
        <link href="<?php echo site_url() . ( $lang == 'arabic' ? '/arabic' : '' ); ?>/css/main.css" rel="stylesheet" type="text/css" />
    <?php else: ?>
        <link href="<?php echo site_url() . ( $lang == 'arabic' ? '/arabic' : '' ); ?>/css/main_mobile.css" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo site_url(); ?>/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo site_url(); ?>/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url(); ?>/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url(); ?>/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url(); ?>/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url(); ?>/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url(); ?>/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url(); ?>/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url(); ?>/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo site_url(); ?>/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url(); ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo site_url(); ?>/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo site_url(); ?>/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo site_url(); ?>/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <script src="<?php echo site_url(); ?>/js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo site_url(); ?>/js/bootstrap.min.js"></script>

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
<body>
    <img src="<?php echo base_url(); ?>assets/images/phone_tube.png" alt="" class="cat_callback_fix_btn"  data-toggle="modal" data-target="#myModal"
         onclick="goog_report_conversion();  fbq('track', 'Lead'); yaCounter30996876.reachGoal('CALLBACK'); return true;"/>
    <?php echo lang('top'); ?>