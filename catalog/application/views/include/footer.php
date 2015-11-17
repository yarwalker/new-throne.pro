<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="modal fade" id="myAdmModal" tabindex="-1" role="dialog" aria-labelledby="myAdmModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myAdmModalLabel">Сообщение</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

    <div class="modal fade" id="myEditRecordModal" tabindex="-1" role="dialog" aria-labelledby="myRecordEditModalLabel">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myRecordEditModalLabel"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" id="record_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <fieldset>
                            <input type="hidden" name="id" id="id" value="" />
                            <legend>Редактирование записи</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="name_ru">Наименование (рус) <sup style="color: red">*</sup></label>
                                <div class="col-md-5">
                                    <input id="name_ru" name="name_ru" type="text" placeholder="Наименование (рус)"  class="form-control input-md" required="" value="">
                                </div>
                            </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label" for="name_en">Наименование (англ) <sup style="color: red">*</sup></label>
                               <div class="col-md-5">
                                    <input id="name_en" name="name_en" type="text" placeholder="Наименование (англ)" class="form-control input-md" required="" value="">
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label" for="name_arabic">Наименование (араб) <sup style="color: red">*</sup></label>
                               <div class="col-md-5">
                                    <input id="name_arabic" name="name_arabic" type="text" placeholder="Наименование (араб)" class="form-control input-md" required="" value="">
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label" for="warranty">Гарантия</label>
                               <div class="col-md-5">
                                    <input id="warranty" name="warranty" type="text" placeholder="Гарантия" class="form-control input-md" value="">
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label" for="manufacturer">Производитель</label>
                               <div class="col-md-5">
                                    <input id="manufacturer" name="manufacturer" type="text" placeholder="Производитель" class="form-control input-md" value="">
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label" for="manufacturer_url">Производитель (URL сайта)</label>
                               <div class="col-md-5">
                                    <input id="manufacturer_url" name="manufacturer_url" type="text" placeholder="Производитель (URL сайта)" class="form-control input-md" value="" >
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label" for="descr_ru">Описание (рус)</label>
                               <div class="col-md-6">
                                    <textarea class="form-control tinymce" rows="5" id="descr_ru_edit" name="descr_ru" ></textarea>
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label" for="descr_en">Описание (англ)</label>
                               <div class="col-md-6">
                                    <textarea class="form-control tinymce" rows="5"  id="descr_en_edit" name="descr_en"></textarea>
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label" for="descr_arabic">Описание (араб)</label>
                               <div class="col-md-6">
                                    <textarea class="form-control tinymce" rows="5"  id="descr_arabic_edit" name="descr_arabic"></textarea>
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label" for="filebutton">Изображение</label>
                               <div class="col-md-6 img_wrapper">';

                               </div>
                               <!--div class="col-md-offset-4 col-md-8">
                                    <a href="#" class="add_image">Добавить изображение</a>
                               </div-->
                           </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label" for="submit_rec"></label>
                               <div class="col-md-4">
                                    <button id="submit_rec" name="submit_rec" class="btn btn-primary">Сохранить</button>
                               </div>
                           </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <?php echo lang('my_modal'); ?>
    <?php echo lang('footer'); ?>


    <script type="text/javascript" src="<?php echo base_url('assets/js/tinymce/tinymce.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/tinymce/jquery.tinymce.min.js')?>"></script>
    <!--script type="text/javascript" src="http://tinymce.moxiecode.com/js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script-->
    <script type="text/javascript">
        $(function(){
            function ActivateTinyMCE() {
                tinyMCE.init({
                    selector: "textarea.tinymce",
                    theme: "modern",
                    schema: "html5",
                    invalid_elements: 'script',
                    inline_styles: true,
                    convert_urls: false,
                    relative_urls: false,
                    remove_script_host: false,
                    cleanup: true,
                    extended_valid_elements: "*[*]",
                    // content_css: true,
                    //valid_elements: "p[style|center]",
                    //extended_valid_elements : "a[href|style|title],p[style|center],div[style],span[style]",
                    //extended_valid_elements : "hr[class|width|size|noshade],font[face|size|color|style],p[class|align|style],span[class|align|style],input[class|value|style|id|type|name|size],form[name|method|action]",
                    //cleanup: false,
                    plugins: [
                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table contextmenu directionality",
                        "emoticons template paste textcolor moxiemanager"
                    ],
                    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | justifyleft justifycenter justifyright justifyfull | bullist numlist outdent indent | link image",
                    toolbar2: "print preview media | forecolor backcolor emoticons",
                    image_advtab: true,
                    templates: [
                        {
                            title: 'Fotorama',
                            content: '<div class="fotorama" data-nav="thumbs" data-width="100%" data-maxwidth="100%" data-ratio="16/9" data-allowfullscreen="true">...</div>'
                        },
                        {
                            title: 'Test snippet',
                            content: '<h3>Test snippet</h3> <p>dear friends, welcome to our super webinar!</p>'
                        }]
                });
            }



           // ActivateTinyMCE();
        });

    </script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>

</body>
</html>