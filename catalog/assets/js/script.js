( function( $ ) {
    'use strict';

    function refreshList()
    {
        $.post('list_refresh', function(result){
            if( result.code == 0 )
            {
                $('#eq_table tbody').html(result.message);
            }
            else
            {
                $('#myAdmModal .modal-body').html(result.message);
                $('#myAdmModal').modal();
            }
        }, 'json')
        .error(function(response) {
            alert('Error: ' + response.responseText);
            console.log('Error: ' + response.responseText);
        });

        $('[data-toggle="tooltip"]').tooltip();
    }

    $('[data-toggle="tooltip"]').tooltip();

    $('#eq_tabs li a').on('click', function(e){
        e.preventDefault();

        // обновляем список если переходим на первую вкладку
        if( $(this).parent().index() == 0 )
        {
            refreshList();
            tinyMCE.remove();
        }
        else if( $(this).parent().index() == 1 )
        {
            tinyMCE.init({
                selector: "#new_record_form textarea.tinymce",
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

        $(this).tab('show');
    });



    // Сохранаяем новую запись
    $('#new_record_form').on('submit', function(e){
        e.preventDefault();

        $(this).find('#descr_ru').val(tinymce.get('descr_ru').getContent());
        $(this).find('#descr_en').val(tinymce.get('descr_en').getContent());
        $(this).find('#descr_arabic').val(tinymce.get('descr_arabic').getContent());

        if (typeof FormData !== 'undefined') {

            // send the formData
            var formData = new FormData( $('#new_record_form')[0] );

            $.ajax({
                url : 'save',  // Controller URL
                type : 'POST',
                data : formData,
                dataType: 'json',
                async : false,
                cache : false,
                contentType : false,
                processData : false,
                success : function(data) {
                    $('#myAdmModal .modal-body').html(data.message);
                    $('#myAdmModal').modal();

                    // при успешном сохранении очищаем форму
                    if( data.code == 0 )
                    {
                        tinyMCE.remove();
                        $('#new_record_form :input[type=text], #new_record_form textarea, #new_record_form :input[type=file]').val('');
                        refreshList();
                        $('#eq_tabs li:first a').tab('show');
                    }
                },
                error: function(response) {
                    alert('Error: ' + response.responseText);
                    console.log('Error: ' + response.responseText);
                }
            });

        } else {
            message("Your Browser Don't support FormData API! Use IE 10 or Above!");
        }
    });

    // Сохранаяем запись
    $('body').on('submit', '#record_form', function(e){
        e.preventDefault();

        if (typeof FormData !== 'undefined') {

            // send the formData
            var formData = new FormData( $('#record_form')[0] );

            $.ajax({
                url : 'save',  // Controller URL
                type : 'POST',
                data : formData,
                dataType: 'json',
                async : false,
                cache : false,
                contentType : false,
                processData : false,
                success : function(data) {
                    $('#myEditRecordModal').modal('hide');

                    $('#myAdmModal .modal-body').html(data.message);
                    $('#myAdmModal').modal();

                    // при успешном сохранении очищаем форму
                    if( data.code == 0 )
                    {
                        $('#record_form :input[type=text], #record_form textarea, #record_form :input[type=file]').val('');
                        $('#record_form textarea').html('');
                        refreshList();
                    }
                },
                error: function(response) {
                    alert('Error: ' + response.responseText);
                    console.log('Error: ' + response.responseText);
                }
            });

        } else {
            message("Your Browser Don't support FormData API! Use IE 10 or Above!");
        }
    });

    // Удаляем запись из списка
    $('#eq_table').on('click', '.glyphicon-trash', function(){
        var $id = $(this).data('id');

        $.post('delete', {'id' : $id}, function(result){
            if( result.code == 0)
            {
                $('#tr' + $id).remove();
            }

            $('#myAdmModal .modal-body').html(result.message);
            $('#myAdmModal').modal();
        }, 'json')
        .error(function(response) {
           alert('Error: ' + response.responseText);
           console.log('Error: ' + response.responseText);
        });
    });

    // Открываем форму редактирования записи
    $('#eq_table').on('click', '.glyphicon-pencil, a.edit_record', function(e){
        var $id = $(this).data('id'),
            $form = '';

        e.preventDefault();

        $.post('get_item',{'id' : $id}, function(result){
            var $str = '';
            if( result.code == 0)
            {
                $('#myEditRecordModal #id').val(result.item.equipment[0].id);
                $('#myEditRecordModal #name_ru').val(result.item.equipment[0].name_ru);
                $('#myEditRecordModal #name_en').val(result.item.equipment[0].name_en);
                $('#myEditRecordModal #name_arabic').val(result.item.equipment[0].name_arabic);
                $('#myEditRecordModal #warranty').val(result.item.equipment[0].warranty);
                $('#myEditRecordModal #manufacturer').val(result.item.equipment[0].manufacturer);
                $('#myEditRecordModal #manufacturer_url').val(result.item.equipment[0].manufacturer_url);
                $('#myEditRecordModal #descr_ru_edit').val(result.item.equipment[0].descr_ru);
                $('#myEditRecordModal #descr_en_edit').val(result.item.equipment[0].descr_en);
                $('#myEditRecordModal #descr_arabic_edit').val(result.item.equipment[0].descr_arabic);

                if( result.item.images.length )
                {
                    $str = '<div class="row">' +
                    '  <div class="col-sm-8">' +
                    '      <img src="' + result.item.images[0].image_url + '" data-eq-id="' + result.item.images[0].eq_id + '" class="img-responsive" />' +
                    '  </div>' +
                    '  <div class="col-sm-2">' +
                    '      <span class="glyphicon glyphicon-trash" data-eq-id="' + result.item.images[0].eq_id + '"  style="float: right" aria-hidden="true"></span>' +
                    '  </div>   ' +
                    '  </div>';
                }
                else
                {
                    $str = '<input id="image" name="image" accept="image/jpeg,image/png,image/gif" class="input-file" type="file" multiple>';
                }

                $('#myEditRecordModal .img_wrapper').html($str);


                $('#myRecordEditModalLabel').text(result.item.equipment[0].name_ru);
                $('#myEditRecordModal').modal();

                $('#myEditRecordModal textarea.tinymce').tinymce({
                    script_url: 'http://tinymce.moxiecode.com/js/tinymce/jscripts/tiny_mce/tiny_mce.js',
                    theme: 'modern'
                });
            }
            else
            {
                $('#myAdmModal .modal-body').html(result.message);
                $('#myAdmModal').modal();
            }



        }, 'json')
        .error(function(response) {
                alert('Error: ' + response.responseText);
                //window.location = location.protocol + '//' + location.host + '/catalog';
        });
    });

    // добавляем в форму кнопку для загрузки изображения
    $('body').on('click', '.add_image', function(e){
        var $el;
        e.preventDefault();

        $el = $(this).parent('div').prev('div[class ^= col-md]').children('input').first().clone();
        $el.appendTo($(this).parent('div').prev('div[class ^= col-md]'));
        $('<span class="glyphicon glyphicon-remove" style="float: right" aria-hidden="true"></span>').appendTo($(this).parent('div').prev('div[class ^= col-md]'));

    });

    // убираем кнопку загрузки изображения
    $('body').on('click', '.img_wrapper .glyphicon-trash', function(){
        var $str = '<input id="image" name="image" accept="image/jpeg,image/png,image/gif" class="input-file" type="file" multiple>',
            $wrapper = $(this).closest('.img_wrapper');

        $(this).parent().prev().remove();
        $(this).parent().remove();

        $wrapper.append($str);

        // удаляем изображение из базы
        $.post('delete_image', {'id' : $(this).data('eq-id')}, function(result){
            if( result.code == 12 )
            {
                $('#myAdmModal .modal-body').html(result.message);
                $('#myAdmModal').modal();
            }
        }, 'json')
        .error(function(response) {
            alert('Error: ' + response.responseText);

        });
    });

    $('body').on('change', '.img_wrapper #image', function(){
        //console.log($(this).val());
        $(this).parent().find('.glyphicon-remove').remove();
        $('<span class="glyphicon glyphicon-remove" style="float: right" aria-hidden="true"></span>').appendTo($(this).parent('div'));
    });

    // Cбрасываем выбранное изображение
    $('body').on('click', '.img_wrapper .glyphicon-remove', function(){
        $(this).prev().val('');
        $(this).remove();
    });


    // modal window reset
    $('#myAdmModal').on('hidden.bs.modal', function (e) {
        $(this).find('#myAdmModalLabel').text('Сообщение');
        $(this).find('.modal-body').text('');
        $('[data-toggle="tooltip"]').tooltip();
    });


    $('#myEditRecordModal').on('hidden.bs.modal', function (e) {
        $(this).find('#myRecordEditModalLabel').text('');
        $('#record_form :input[type=text], #record_form textarea, #record_form :input[type=file]').val('');
        tinyMCE.remove();
    });

    tinyMCE.init({
        mode : "none",
        theme : "modern"
    });

    $('#myEditRecordModal').on('shown.bs.modal', function (e) {
        tinyMCE.init({
            selector: "#myEditRecordModal textarea.tinymce",
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
    });

    // обработка формы авторизации
    $('#login-form').on('submit', function(e){
        e.preventDefault();

        $.post('login', $(this).serialize(), function(data){
            console.log(data);
            if( data.code == 0 )
            {
                location.href = location.protocol + '//' + location.hostname + '/catalog/adm';
            }
            else
            {
                if( data.try > 3 )
                {
                    $('#login-form').find('fieldset').attr({'disabled': 'disabled'});
                    $('#error').text('Вы исчерпали 3 попытки для авторизации.');
                    $('.alert').fadeIn(250);
                    $('#login-form').after('<p>Вернуться на <a href="' + location.protocol + '//' + location.hostname + '">сайт</a></p>');
                }
                else
                {
                    $('#error').text('Неверная пара логин/пароль');
                    $('.alert').fadeIn(250);
                }
            }
        }, 'json')
        .error(function(response) {
            alert('Error: ' + response.responseText);
        });
    });

    // смена языка
    $('#langs select').on('change', function(){
        var arr = location.pathname.split('/');

        window.location = location.protocol + '//' + location.host + '/catalog/show/' + $(this).val() + '/' + arr[arr.length-1];
    });

    // отправка из формы обратного звонка
    $('.send-btn').on('click', function(){
        //console.log('click');

        //console.log($(this).closest('.modal.fade').attr('id'));
        var $modalID = '#' + $(this).closest('.modal.fade').attr('id').toString(),
            $str = '',
            $url = '../../../send_email.php';

        //console.log(location.href.search('/en'));

        if( $($modalID + ' #inputPhone').val() == '' ) {
            if( location.href.search('/en') != -1 ) {
                $str = 'The field "Cellphone Number" can\'t be empty';
            }

            if( location.href.search('/ru') != -1 )
            {
                $str = 'Вы не заполнили поле "Телефон"';
            }

            if( location.href.search('/arabic') != -1 )
            {
                $str = 'مجال"رقم الهاتف"لايمكن ان تكون فارغة';
            }

            $($modalID + ' #error').text($str);
            $($modalID + ' .alert').fadeIn(250);
        } else {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,7}$/i;

            if( $($modalID + ' #inputPhone').val() != '' ) {

                $.post( $url, $($modalID + ' .callback_form').serialize(), function (data) {

                    //console.log(data);
                    if( location.href.search('/ru') != -1 ) {
                        var $str = '<div class="result">Ошибка отправки письма. <br/>' + (data.msg) + '</div>';

                        if( data.msg == 1 ) {
                            $str = '<div class="result">&mdash; Спасибо!<br> Мы свяжемся с вами в течение часа.</div>';
                        }
                    }
                    if( location.href.search('/en') != -1 )
                    {
                        var $str = '<div class="result">Email sending error. <br/>' + (data.msg) + '</div>';

                        if( data.msg == 1 ) {
                            $str = '<div class="result">&mdash; Thanks!<br> We will contact you shortly.</div>';
                        }
                    }

                    if( location.href.search('/arabic') != -1 ) {
                        var $str = '<div class="result">' + (data.msg) + '<br>حدث خطأ أثناء إرسال البريد الإلكتروني.</div>';

                        if (data.msg == 1) {
                            $str = '<div class="result">شكرا ! سنتصل بكم قريبا &mdash;</div>';
                        }
                    }


                    $($modalID).modal('hide');
                    $('#send_result').html($str);
                    $('#mySuccessModal').modal('show');
                }, 'json')
                .error(function(response) {
                    alert('Error: ' + response.responseText);

                });
            }
            /*else {
             //Не верно
             $($modalID + ' #inputEmail').closest('div.form-group').addClass('has-error');
             $($modalID + ' #error').text('Неверный e-mail адрес!');
             $($modalID + ' .alert').fadeIn(250);
             }*/

        }
    });

    function removeError(){
        $('#error').text('');
        $('.alert').fadeOut(250);
    }

    $('#input_login, #input_pass').on('keypress', function(){
        removeError();
    });

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

    //ActivateTinyMCE();

} )( jQuery );