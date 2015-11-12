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
        }

        $(this).tab('show');
    });



    // Сохранаяем новую запись
    $('#new_record_form').on('submit', function(e){
        e.preventDefault();

        if (typeof FormData !== 'undefined') {

            // send the formData
            var formData = new FormData( $('#new_record_form')[0] );
            console.log(formData);
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
                        $('#new_record_form :input[type=text], #new_record_form textarea, #new_record_form :input[type=file]').val('');
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
                    $('#myAdmModal .modal-body').html(data.message);
                    $('#myAdmModal').modal();

                    // при успешном сохранении очищаем форму
                    if( data.code == 0 )
                    {
                        $('#record_form :input[type=text], #record_form textarea, #record_form :input[type=file]').val('');
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
            if( result.code == 0)
            {
                $form = '<form class="form-horizontal" id="record_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">' +
                        '   <fieldset>' +
                        '       <input type="hidden" name="id" id="id" value="' + result.item.equipment[0].id + '" />' +
                        '       <legend>Редактирование записи</legend>' +
                        '       <div class="form-group">' +
                        '           <label class="col-md-4 control-label" for="textinput">Наименование (рус) <sup style="color: red">*</sup></label>' +
                        '           <div class="col-md-5">' +
                        '               <input id="name_ru" name="name_ru" type="text" placeholder="Наименование (рус)"  class="form-control input-md" required="" value="' + result.item.equipment[0].name_ru + '">' +
                        '           </div>' +
                        '       </div>' +
                        '       <div class="form-group">' +
                        '           <label class="col-md-4 control-label" for="textinput">Наименование (англ) <sup style="color: red">*</sup></label>' +
                        '           <div class="col-md-5">' +
                        '               <input id="name_en" name="name_en" type="text" placeholder="Наименование (англ)" class="form-control input-md" required="" value="' + result.item.equipment[0].name_en + '">' +
                        '           </div>' +
                        '       </div>' +
                        '       <div class="form-group">' +
                        '           <label class="col-md-4 control-label" for="textinput">Наименование (араб) <sup style="color: red">*</sup></label>' +
                        '           <div class="col-md-5">' +
                        '               <input id="name_arabic" name="name_arabic" type="text" placeholder="Наименование (араб)" class="form-control input-md" required="" value="' + result.item.equipment[0].name_arabic + '">' +
                        '           </div>' +
                        '       </div>' +
                        '       <div class="form-group">' +
                        '           <label class="col-md-4 control-label" for="textinput">Гарантия</label>' +
                        '           <div class="col-md-5">' +
                        '               <input id="warranty" name="warranty" type="text" placeholder="Гарантия" class="form-control input-md" value="' + result.item.equipment[0].warranty + '">' +
                        '           </div>' +
                        '       </div>' +
                        '       <div class="form-group">' +
                        '           <label class="col-md-4 control-label" for="textinput">Производитель</label>' +
                        '           <div class="col-md-5">' +
                        '               <input id="manufacturer" name="manufacturer" type="text" placeholder="Производитель" class="form-control input-md">' +
                        '           </div>' +
                        '       </div>' +
                        '       <div class="form-group">' +
                        '           <label class="col-md-4 control-label" for="textinput">Производитель (URL сайта)</label>' +
                        '           <div class="col-md-5">' +
                        '               <input id="manufacturer_url" name="manufacturer_url" type="text" placeholder="Производитель (URL сайта)" class="form-control input-md" value="' + result.item.equipment[0].manufacturer_url + '" >' +
                        '           </div>' +
                        '       </div>' +
                        '       <div class="form-group">' +
                        '           <label class="col-md-4 control-label" for="descr_ru">Описание (рус)</label>' +
                        '           <div class="col-md-6">' +
                        '               <textarea class="form-control" rows="5" id="descr_ru" name="descr_ru" >' + result.item.equipment[0].descr_ru + '</textarea>' +
                        '           </div>' +
                        '       </div>' +
                        '       <div class="form-group">' +
                        '           <label class="col-md-4 control-label" for="descr_en">Описание (англ)</label>' +
                        '           <div class="col-md-6">' +
                        '               <textarea class="form-control" rows="5"  id="descr_en" name="descr_en">' + result.item.equipment[0].descr_en + '</textarea>' +
                        '           </div>' +
                        '       </div>' +
                        '       <div class="form-group">' +
                        '           <label class="col-md-4 control-label" for="descr_arabic">Описание (араб)</label>' +
                        '           <div class="col-md-6">' +
                        '               <textarea class="form-control" rows="5"  id="descr_arabic" name="descr_arabic">' + result.item.equipment[0].descr_arabic + '</textarea>' +
                        '           </div>' +
                        '       </div>' +
                        '       <div class="form-group">' +
                        '           <label class="col-md-4 control-label" for="filebutton">Изображение</label>' +
                        '           <div class="col-md-7 img_wrapper">';
                if( result.item.images.length )
                {
                    $form += '<div class="col-md-6">' +
                             '<img src="' + result.item.images[0].image_url + '" data-eq-id="' + result.item.images[0].eq_id + '" class="img-responsive" />' +
                             '</div><div class="col-md-1"><span class="glyphicon glyphicon-trash" data-eq-id="' + result.item.images[0].eq_id + '"  style="float: right" aria-hidden="true"></span></div>   ';
                }
                else
                {
                    $form += '<input id="image" name="image" accept="image/jpeg,image/png,image/gif" class="input-file" type="file" multiple>';
                }
                $form += '           </div>' +
                         '           <!--div class="col-md-offset-4 col-md-8">' +
                         '               <a href="#" class="add_image">Добавить изображение</a>' +
                         '           </div-->' +
                         '       </div>'  +
                         '       <div class="form-group">' +
                         '           <label class="col-md-4 control-label" for="submit_rec"></label>' +
                         '           <div class="col-md-4">' +
                         '               <button id="submit_rec" name="submit_rec" class="btn btn-primary">Сохранить</button>' +
                         '           </div>' +
                         '       </div>' +
                         '   </fieldset>' +
                         '</form>' ;
                $('#myAdmModalLabel').text(result.item.equipment[0].name_ru);
                $('#myAdmModal .modal-body').html($form);
            }
            else
            {
                $('#myAdmModal .modal-body').html(result.message);
            }

            //$('#myAdmModal .modal-body').html();
            $('#myAdmModal').modal();
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
            $('#myAdmModal .modal-body').html(result.message);
            $('#myAdmModal').modal();
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

} )( jQuery );