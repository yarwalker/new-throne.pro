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


</head>
<body>
    <?php echo lang('top'); ?>