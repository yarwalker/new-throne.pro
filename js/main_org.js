( function( $ ) {

    // Setup variables
    $window = $(window);
    $slide = $('.homeSlide');
    $frame = $('.frame');
    $slideTall = $('.homeSlideTall');
    $slideTall2 = $('.homeSlideTall2');
    $body = $('body');
    $animation_frame_height = 0;
    $animation_bcg = $('#slide-2 .bcg');

    // smooth scrolling
    var scrollTime = 1.2;
    var scrollDistance = 150;

    $window.on("mousewheel DOMMouseScroll", function(event){

        event.preventDefault();

        var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
        var scrollTop = $window.scrollTop();
        var finalScroll = scrollTop - parseInt(delta*scrollDistance);

        TweenMax.to($window, scrollTime, {
            scrollTo : { y: finalScroll, autoKill:true },
            ease: Power1.easeOut,
            overwrite: 5
        });

    });

//FadeIn all sections
 /*   $body.imagesLoaded( function() {
        setTimeout(function() {

            // Resize sections
            adjustWindow();

            // Fade in sections
            $body.removeClass('loading').addClass('loaded');

        }, 800);
    });*/

    function adjustWindow(){

        // Init Skrollr
        /*var s = skrollr.init({
            render: function(data) {
                //Debugging - Log the current scroll position.
                console.log(data.curTop);
            }
        });*/

        // Get window size
        winH = $window.height();

        // Keep minimum height 550
        if(winH <= 580) {
            sect8H = 580;
        } else {
            sect8H = winH;
        }

        // Resize our slides
        $slide.each(function(){
            if( $(this).data('slide') == 8 )
                $(this).height(sect8H);
            else
                $(this).height(winH);
        });

        $slideTall.height(winH*2);
        $slideTall2.height(winH*3);

        // Refresh Skrollr after resizing our sections
        //s.refresh($('.frame'));
    }



    function init()
    {
        // Init Skrollr
       /* var s = skrollr.init({
            render: function(data) {
                //Debugging - Log the current scroll position.
                // console.log(data.curTop);
            },
            smoothScrolling: true,
            smoothScrollingDuration: 200,
            mobileDeceleration: 0.005
        });*/

        //console.log($('#slide-2 .bcg').height());
      /*  $animation_frame_height = $animation_bcg.height();
        $('#slide-2').height( $animation_frame_height * 2 );
        $animation_bcg.attr('data--' + $animation_frame_height + '-bottom-top',"position: fixed; bottom: 0; left: 0;"); */

        adjustWindow();
        frameResize();
    }

    function frameResize()
    {
        var k = 1280 / 620;
        $('#dev-slide-3').height(Math.floor(window.innerWidth / k));
    }

    $window.on('resize', function(){
        adjustWindow();
        frameResize();

       /* $animation_bcg.removeAttr('data--' + $animation_frame_height.toString() + '-bottom-top');
        $animation_frame_height = $animation_bcg.height();
        $('#slide-2').height( $animation_frame_height * 2 );
        $animation_bcg.attr('data--' + $animation_frame_height + '-bottom-top',"position: fixed; bottom: 0; left: 0;"); */
    });

    init();

    // Init Skrollr
   /* var s = skrollr.init({
        render: function(data) {
            //Debugging - Log the current scroll position.
            // console.log(data.curTop);
        },
        smoothScrolling: true,
        smoothScrollingDuration: 200,
        mobileDeceleration: 0.005
    });*/





    var map;
    setMapStyle=function(){

        var styles = [
            {
                featureType: "all",
                elementType: "all",
                stylers: [
                    { visibility: "on" }
                ]
            },
            {
                featureType: "administrative.country",
                elementType: "labels",
                stylers: [
                    { visibility: "on" }
                ]
            },
            {
                featureType: "road",
                elementType: "labels",
                stylers: [
                    { visibility: "on" }
                ]
            },
            {
                featureType: "all",
                elementType: "geometry",
                stylers: [
                    { visibility: "simplified" }
                ]
            },
            {
                featureType: "transit",
                elementType: "labels",
                stylers: [
                    { visibility: "off" }
                ]
            }
        ];

        map.mapTypes.set('throne',
            new google.maps.StyledMapType(styles, {  name: "Normal" })
        );

        map.setMapTypeId('throne');
    }

    function googleMap(selector, lat, lng) {
        var myLatlng = new google.maps.LatLng(lat, lng);
        if (!map) {
            var myOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: false
            }
            map = new google.maps.Map(document.getElementById(selector), myOptions);

            setMapStyle();

            infowindow = new google.maps.InfoWindow({
                content: "holding...",
                maxWidth: 500 ,
                minHeight: 200
            });

            marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
                title: 'Ярославль - ТРОН Проект',
                html: '<div class="info"><h4>ТРОН Проект</h4>' +
                '<p>Центральный офис<br>Ярославль, пр-т Фрунзе, 38<br>тел. +7 (4852) 770-677</p></div>'

            });

            google.maps.event.addListener(marker, 'click', function() {
                /*map.setZoom(18);*/
                map.panTo(this.getPosition());

                infowindow.setContent(this.html);
                infowindow.open(map, this);
            });


        } else {
            map.setCenter(myLatlng);
            map.setZoom(15);
        }

    }

    if( location.pathname == '/about.html' ) {
        googleMap("map_canvas", 57.590141,39.900717);
    }

    // скрываем сообщение об ошибке
    function removeError(){
        $('#error').text('');
        $('.alert').fadeOut(250);
    }

    // прячем сообщение об ошибке при изменениях полей формы
    $('#inputPhone').on('keypress', function(){
        removeError();
    });

    $('#myModal').on('hide.bs.modal', function (e) {
        $('#inputPhone').val('');
        //$('#inputEmail').val('').closest('div.form-group').removeClass('has-error').removeClass('has-success');
        removeError();
    });

   /* $('#inputEmail').on('blur', function(){
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,7}$/i;
        if($(this).val() != '' ) {
            if (pattern.test($(this).val())) {
                //Верно
                $(this).closest('div.form-group').removeClass('has-error').addClass('has-success');
            } else {
                //Не верно
                $(this).closest('div.form-group').addClass('has-error');
            }
        }
    }); */

    $('.send-btn').on('click', function(){
        console.log('click');

        console.log($(this).closest('.modal.fade').attr('id'));
        var $modalID = '#' + $(this).closest('.modal.fade').attr('id').toString();

        if( $($modalID + ' #inputPhone').val() == '' ) {
            $($modalID + ' #error').text('Вы не заполнили поле "Телефон"');
            $($modalID + ' .alert').fadeIn(250);
        } else {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,7}$/i;

            if( $($modalID + ' #inputPhone').val() != '' ) {

                //Верно
               // $($modalID + ' #inputEmail').closest('div.form-group').removeClass('has-error').addClass('has-success');

                // отправляем письмо
                //$($modalID + ' #inputCheck').val($('body').data('check'));

                //console.log($('.callback_form').serialize());

                $.post('send_email.php', $($modalID + ' .callback_form').serialize(), function (data) {

                    var $str = '<div class="result">Ошибка отправки письма</div>';

                    if( data.msg == 1 ) {
                        $str = '<div class="result">&mdash;Спасибо<br/>Свяжемся с вами в течение часа</div>';
                    }

                    $($modalID).modal('hide');
                    $('#send_result').html($str);
                    $('#mySuccessModal').modal('show');
                }, 'json');
            }
            /*else {
                //Не верно
                $($modalID + ' #inputEmail').closest('div.form-group').addClass('has-error');
                $($modalID + ' #error').text('Неверный e-mail адрес!');
                $($modalID + ' .alert').fadeIn(250);
            }*/

        }
    });

} )( jQuery );

