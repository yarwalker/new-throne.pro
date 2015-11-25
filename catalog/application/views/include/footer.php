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
                                <label class="col-md-4 control-label" for="sku">Артикул</label>
                                <div class="col-md-5">
                                    <input id="sku" name="sku" type="text" placeholder="Артикул" class="form-control input-md" value="">
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



</body>
</html>