<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$name = 'name_' . $lang;
$descr = 'descr_' . $lang;
?>

<div class="container" id="item_wrapper">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <img src="<?php echo ( isset($images[0]->image_url) ? htmlspecialchars_decode($images[0]->image_url, ENT_QUOTES) : '/catalog/assets/images/noimages.png'); ?>" class="img-responsive" alt=""/>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 <?php echo ( $lang == 'arabic' ? 'arabic' : '' ); ?>">
            <h1><?php echo htmlspecialchars_decode($equipment[0]->$name, ENT_QUOTES); ?></h1>
            <?php echo htmlspecialchars_decode($equipment[0]->$descr, ENT_QUOTES); ?>
            <p>
                <strong class="label"><?php echo lang('manufacturer_label'); ?></strong><a href="<?php echo htmlspecialchars_decode($equipment[0]->manufacturer_url, ENT_QUOTES); ?>" target="_blank"><?php echo htmlspecialchars_decode($equipment[0]->manufacturer, ENT_QUOTES); ?></a>
            </p>
        </div>
    </div>
</div>

