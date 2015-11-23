<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
    <h1>Каталог оборудования</h1>

    <div>
        <ul id="eq_tabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#list" aria-controls="list" role="tab" data-toggle="tab">Список</a></li>
            <li role="presentation"><a href="#new_record" aria-controls="new_record" role="tab" data-toggle="tab">Новая запись</a></li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active in fade" id="list">
                <h3>Список</h3>
                <?php
                if( $eq_list ):
                    echo '<table id="eq_table" class="table table-hover table-striped table-condensed">
                            <thead>
                              <tr><th>ID</th><th>Наименование</th><th>Действия</th></tr>
                            </thead>
                            <tbody>
                         ';

                    echo $eq_list;

                    echo '</tbody></table>';
                endif;
                ?>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="new_record">
                <!--form class="form-horizontal" id="new_record_form" method="post" accept-charset="utf-8" enctype="multipart/form-data"-->
                <?php echo form_open_multipart('', array('id' => "new_record_form", 'class' => 'form-horizontal')); ?>
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Новая запись</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name_ru">Наименование (рус) <sup style="color: red">*</sup></label>
                            <div class="col-md-5">
                                <input id="name_ru" name="name_ru" type="text" placeholder="Наименование (рус)" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name_en">Наименование (англ) <sup style="color: red">*</sup></label>
                            <div class="col-md-5">
                                <input id="name_en" name="name_en" type="text" placeholder="Наименование (англ)" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name_arabic">Наименование (араб) <sup style="color: red">*</sup></label>
                            <div class="col-md-5">
                                <input id="name_arabic" name="name_arabic" type="text" placeholder="Наименование (араб)" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="sku">Артикул</label>
                            <div class="col-md-5">
                                <input id="sku" name="sku" type="text" placeholder="Арткиул" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="warranty">Гарантия</label>
                            <div class="col-md-5">
                                <input id="warranty" name="warranty" type="text" placeholder="Гарантия" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="manufacturer">Производитель</label>
                            <div class="col-md-5">
                                <input id="manufacturer" name="manufacturer" type="text" placeholder="Производитель" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="manufacturer_url">Производитель (URL сайта)</label>
                            <div class="col-md-5">
                                <input id="manufacturer_url" name="manufacturer_url" type="text" placeholder="Производитель (URL сайта)" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="descr_ru">Описание (рус)</label>
                            <div class="col-md-6">
                                <textarea class="form-control tinymce" rows="5" id="descr_ru" name="descr_ru" ></textarea>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="descr_en">Описание (англ)</label>
                            <div class="col-md-6">
                                <textarea class="form-control tinymce" rows="5" id="descr_en" name="descr_en"></textarea>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="descr_arabic">Описание (араб)</label>
                            <div class="col-md-6">
                                <textarea class="form-control tinymce" rows="5" id="descr_arabic" name="descr_arabic"></textarea>
                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Изображение</label>
                            <div class="col-md-4 img_wrapper">
                                <input id="image" name="image" accept="image/jpeg,image/png,image/gif" class="input-file" type="file">
                            </div>
                            <!--div class="col-md-offset-4 col-md-8">
                                <a href="#" class="add_image">Добавить изображение</a>
                            </div-->
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="submit_new_rec"></label>
                            <div class="col-md-4">
                                <button id="submit_new_rec" name="submit_new_rec" class="btn btn-primary">Сохранить</button>
                            </div>
                        </div>

                    </fieldset>
                <?php echo form_close(); ?>


            </div>
        </div>
    </div>

</div>

