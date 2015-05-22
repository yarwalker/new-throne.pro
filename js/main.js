( function( $ ) {

    // Setup variables
    $window = $(window);
    $slide = $('.homeSlide');
    $frame = $('.frame');
    $slideTall = $('.homeSlideTall');
    $slideTall2 = $('.homeSlideTall2');
    $body = $('body');
    $animation_frame_height = 0;
    $animation_bcg = $('#slide-3 .bcg'),
    $tabs_container = $('#tabs_container');
    $first_tab = $tabs_container.find('div').first(),
    $tabs_container_height = 0,
    htmlbody = $('html,body');

   /* console.log($first_tab);*/

    // smooth scrolling
    var scrollTime = 3.5;
    var scrollDistance = 450;

  /*  $window.on("mousewheel DOMMouseScroll", function(event){

        event.preventDefault();

        var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
        var scrollTop = $window.scrollTop();
        var finalScroll = scrollTop - parseInt(delta*scrollDistance);

        TweenMax.to($window, scrollTime, {
            scrollTo : { y: finalScroll, autoKill:true },
            ease: Power1.easeOut,
            overwrite: 5
        });

    });*/

//FadeIn all sections
    $body.imagesLoaded( function() {
        setTimeout(function() {

            tabulousInit();
            $tabs_container_height = $first_tab.height() + 20;
            $('#tabs_container').height($tabs_container_height);

            // Resize sections
            adjustWindow();
            frameResize();

            // Fade in sections
            $body.removeClass('loading').addClass('loaded');

        }, 800);
    });

    function adjustWindow(){
        // Get window size
        winH = $window.height();
        winW = $window.width();

        // Keep minimum height 550
        if(winH <= 550) {
            winH = 550;
        }

        // Resize our slides
        $slide.height(winH);

        $slideTall.height(winH*2);
        $slideTall2.height(winH*3);

        /*if( $('#fake_tabs').length ) {
            $('#fake_tabs').width($('#tabs').width());
            $('#fake_tabs').position().left = $('#tabs').position().left;
        }*/


        // удаляем атрибуты элементов анимации
        $animation_bcg.removeAttr('data--' + $animation_frame_height + '-bottom-top');

        // показываем этаж и кнопки с тенями
        $('#floor, #floor_back, #top_buttons').attr('data--' + $animation_frame_height + '-bottom-top');
        $('#top_buttons_shadows').attr( 'data--' + $animation_frame_height + '-bottom-top');
        $('#floor_shadow').attr( 'data--' + $animation_frame_height + '-bottom-top');


        // заканчивается изменение этажа, кнопок с тенями
        $('#floor, #floor_back').attr('data--' + Math.floor( $animation_frame_height * 1.25 ) + '-bottom-top');
        $('#top_buttons').attr('data--' + Math.floor( $animation_frame_height * 1.25  + 50) + '-bottom-top');
        $('#top_buttons_shadows').attr('data--' + Math.floor( $animation_frame_height * 1.25  + 50) + '-bottom-top');
        $('#floor_shadow').attr('data--' + Math.floor( $animation_frame_height * 1.25  + 50) + '-bottom-top');

        // показываем панель управления светом с тенью и световые зоны
        $('#light_panel_shadows').attr( 'data--' + Math.floor($animation_frame_height * 1.35) + '-bottom-top');
        $('#light_panel').attr('data--' + Math.floor($animation_frame_height * 1.25) + '-bottom-top');
        $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.25) + '-bottom-top');

        // заканчивается изменение панели управления светом с тенью и световых зон
        $('#light_panel_shadows').attr('data--' + Math.floor( $animation_frame_height * 1.5) + '-bottom-top');
        $('#light_panel').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top');
        $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top');
        $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.7) + '-bottom-top');

        $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.95) + '-bottom-top');
        $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 2 - 10) + '-bottom-top');



        // показываем панель управления климатом с тенью и зоны
        $('#climate_panel_shadows').attr( 'data--' + Math.floor($animation_frame_height * 1.6) + '-bottom-top');
        $('#climate_panel').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top');
        $('#climate_zones').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top');

        // заканчивается изменение панели управления климатом с тенью и зон
        $('#climate_panel_shadows').attr('data--' + Math.floor( $animation_frame_height * 1.75) + '-bottom-top');
        $('#climate_panel').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top');
        $('#climate_zones').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top');
        $('#climate_zones').attr('data--' + Math.floor($animation_frame_height * 1.9) + '-bottom-top');

        // показываем панель управления сигнализацией и контур окон
        $('#alarm_panel').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top');
        $('#alarm_cameras').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top');
        $('#alarm_panel_shadows').attr('data--' + Math.floor($animation_frame_height * 1.8) + '-bottom-top');
        $('#alarm_windows').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top');

        // заканчивается изменение панели управления сигнализацией и контура окон
        $('#alarm_panel').attr('data--' + Math.floor($animation_frame_height * 2 - 10) + '-bottom-top');
        $('#alarm_cameras').attr('data--' + Math.floor($animation_frame_height * 2 - 10) + '-bottom-top');
        $('#alarm_panel_shadows').attr('data--' + Math.floor($animation_frame_height * 2 - 10) + '-bottom-top');
        $('#alarm_windows').attr('data--' + Math.floor($animation_frame_height * 2 - 10) + '-bottom-top');




        // заново инициализируем атрибуты элементов анимации


        $animation_frame_height = $animation_bcg.height();
        $('#slide-3').height( $animation_frame_height * 2 );

        $animation_bcg.attr('data--' + ($animation_frame_height ) + '-bottom-top', "position: fixed;  bottom: 0px;");


        $('#fake_tabs ul').attr('data--' + $animation_frame_height + '-bottom-top', "visibility: visible");
        //$('#fake_tabs ul').attr('data-' + $('#fake_tabs').height() + '-bottom', "visibility: visible");
        $('#fake_tabs ul').attr('data--' + $('#fake_tabs').height() +  '-bottom', "visibility: hidden");

        $('#fake_tabs ul li').first().attr('data--' + Math.floor($animation_frame_height * 1.25) + '-bottom-top',"bottom: 0px; opacity: 0;");
        $('#fake_tabs ul li').first().attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top',"bottom: 0; opacity: 1;");

        $('#fake_tabs ul li').eq(1).attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top',"bottom: 0px; opacity: 0;");
        $('#fake_tabs ul li').eq(1).attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top',"bottom: 0; opacity: 1;");

        $('#fake_tabs ul li').eq(2).attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top',"bottom: 0px; opacity: 0;");
        $('#fake_tabs ul li').eq(2).attr('data--' + Math.floor($animation_frame_height * 2 - 30) + '-bottom-top',"bottom: 0; opacity: 1;");

        // показываем этаж и кнопки с тенями
        $('#floor, #floor_back, #top_buttons').attr(
            'data--' + $animation_frame_height + '-bottom-top',
            "bottom: " + Math.floor($animation_frame_height / 5) + "px; opacity: 0.3;");
        $('#top_buttons_shadows').attr( 'data--' + $animation_frame_height + '-bottom-top', "opacity: 0; bottom: 4px;");
        $('#floor_shadow').attr( 'data--' + $animation_frame_height + '-bottom-top', "opacity: 0; bottom: 4px;");


        // заканчивается изменение этажа, кнопок с тенями
        $('#floor, #floor_back').attr('data--' + Math.floor( $animation_frame_height * 1.25 ) + '-bottom-top',"bottom: 0; opacity: 1;");
        $('#top_buttons').attr('data--' + Math.floor( $animation_frame_height * 1.25  + 50) + '-bottom-top',"bottom: 0; opacity: 1;");
        $('#top_buttons_shadows').attr('data--' + Math.floor( $animation_frame_height * 1.25  + 50) + '-bottom-top',"opacity: 0.4;");
        $('#floor_shadow').attr('data--' + Math.floor( $animation_frame_height * 1.25  + 50) + '-bottom-top',"opacity: 1;");

        // показываем панель управления светом с тенью и световые зоны
        $('#light_panel_shadows').attr( 'data--' + Math.floor($animation_frame_height * 1.35) + '-bottom-top', "opacity: 0; bottom: 0;");
        $('#light_panel').attr('data--' + Math.floor($animation_frame_height * 1.25) + '-bottom-top',"bottom: 450px; opacity: 0;");
        $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.25) + '-bottom-top',"bottom: 450px; opacity: 0;");

        // заканчивается изменение панели управления светом с тенью и световых зон
        $('#light_panel_shadows').attr('data--' + Math.floor( $animation_frame_height * 1.5) + '-bottom-top',"opacity: 1;");
        $('#light_panel').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top',"bottom: 0; opacity: 1;");
        $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top',"bottom: 0; opacity: 1;");
        $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.7) + '-bottom-top',"bottom: 0; opacity: 0;");

        $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.95) + '-bottom-top',"bottom: 0; opacity: 0;");
        $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 2 - 10) + '-bottom-top',"bottom: 0; opacity: 1;");


        // показываем панель управления климатом с тенью и зоны
        $('#climate_panel_shadows').attr( 'data--' + Math.floor($animation_frame_height * 1.6) + '-bottom-top', "opacity: 0; bottom: 0;");
        $('#climate_panel').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top',"bottom: 450px; opacity: 0;");
        $('#climate_zones').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top',"bottom: 450px; opacity: 0;");

        // заканчивается изменение панели управления климатом с тенью и зон
        $('#climate_panel_shadows').attr('data--' + Math.floor( $animation_frame_height * 1.75) + '-bottom-top',"opacity: 1;");
        $('#climate_panel').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top',"bottom: 0; opacity: 1;");
        $('#climate_zones').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top',"bottom: 0; opacity: 1;");
        $('#climate_zones').attr('data--' + Math.floor($animation_frame_height * 1.9) + '-bottom-top',"opacity: 0;");

        // показываем панель управления сигнализацией и контур окон
        $('#alarm_panel').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top',"bottom: 450px; opacity: 0;");
        $('#alarm_cameras').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top',"bottom: 450px; opacity: 0;");
        $('#alarm_panel_shadows').attr('data--' + Math.floor($animation_frame_height * 1.8) + '-bottom-top',"bottom: 0; opacity: 0;");
        $('#alarm_windows').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top',"bottom: 0; opacity: 0;");

        // заканчивается изменение панели управления сигнализацией и контура окон
        $('#alarm_panel').attr('data--' + Math.floor($animation_frame_height * 2 - 30) + '-bottom-top',"bottom: 0; opacity: 1;");
        $('#alarm_cameras').attr('data--' + Math.floor($animation_frame_height * 2 - 30) + '-bottom-top',"bottom: 0; opacity: 1;");
        $('#alarm_panel_shadows').attr('data--' + Math.floor($animation_frame_height * 2 - 30) + '-bottom-top',"opacity: 1;");
        $('#alarm_windows').attr('data--' + Math.floor($animation_frame_height * 2 - 30) + '-bottom-top',"opacity: 1;");



      /*  // Init Skrollr
        var s = skrollr.init({
            render: function(data) {
                //Debugging - Log the current scroll position.
                console.log(data.curTop);
            },
            smoothScrolling: true,
            smoothScrollingDuration: 200,
            mobileDeceleration: 0.005,
            edgeStrategy: 'set',
            easing: {
                WTF: Math.random,
                inverted: function(p) {
                    return 1-p;
                }
            },
            forceHeight: false

        });

        // Refresh Skrollr after resizing our sections
        s.refresh($('.frame')); */

        // Init Skrollr for 768 and up
        if( winW >= 768) {
            // Init Skrollr
            var s = skrollr.init({
                render: function(data) {
                    //Debugging - Log the current scroll position.
                   // console.log(data.curTop);
                },
                smoothScrolling: true,
                smoothScrollingDuration: 200,
               /* mobileDeceleration: 0.005,
                edgeStrategy: 'set',
                easing: {
                    WTF: Math.random,
                    inverted: function(p) {
                        return 1-p;
                    }
                },*/
                forceHeight: false
            });

            // Resize our slides
            $slide.height(winH);

            s.refresh($('.frame'));

        } else {
            // destroy skrollr elements
            $('#slide-3').height( $animation_frame_height );
            $('.skrollr_el').remove();
            $('#slide2-ipad img').attr('src', 'images/ipad_slide2_org.jpg');

            // Init Skrollr
            var s = skrollr.init();
            s.destroy();

        }

        // Check for touch
        if(Modernizr.touch) {
            // destroy skrollr elements
            console.log('win width: ' + winW);
            $('#slide-3').height( $animation_frame_height );
            $('.skrollr_el').remove();
            $('#slide2-ipad img').attr('src', 'images/ipad_slide2_org.jpg');

            // Init Skrollr
            var s = skrollr.init();
            s.destroy();
        }
    }

   /* function initAdjustWindow() {
        return {
            match : function() {
                adjustWindow();
            },
            unmatch : function() {
                adjustWindow();
            }
        };
    }*/

   // enquire.register("screen and (min-width : 768px)", initAdjustWindow(), false);




    function init()
    {
        /*var s = skrollr.init({
            render: function(data) {
                //Debugging - Log the current scroll position.
                console.log(data.curTop);
            }
        });*/

      //  adjustWindow();
       // frameResize();


    }

    function frameResize()
    {
        var k = 1280 / 620;
        $('#dev-slide-3').height(Math.floor(window.innerWidth / k));
    }

    $window.on('resize', function(){

        frameResize();
        adjustWindow();

        /*var s = skrollr.init({
            render: function(data) {
                //Debugging - Log the current scroll position.
                console.log(data.curTop);
            }
        });*/


        // Refresh Skrollr after resizing our sections
        //s.refresh($('.frame'));
    });


    // Returns a random number between min (inclusive) and max (exclusive)
    function getRandomArbitrary(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }

    var tabs_effects = ['scale', 'slideLeft', 'scaleUp', 'flip'],
        effect = 'scale',
        i = 0;

    /* tabulous */

    function tabulousInit() {
        var i = getRandomArbitrary(0, tabs_effects.length),
            effect = tabs_effects[i];

        if( $('#tabs').length ) {
            $('#tabs').tabulous({
                effect: effect
            });
        }
    }

    function goToByScroll(dataslide)
    {
        htmlbody.animate({
            scrollTop: $('.frame[data-slide=' + dataslide + ']').offset().top
        }, 1000);
    }

    $('#tabs a, #fake_tabs ul li a').on('click', function(ev){
        ev.preventDefault();

        $('#tabs a, #fake_tabs a').removeClass('tabulous_active');

        $('#fake_tabs a[href=' + $(this).attr('href') + '], #tabs a[href=' + $(this).attr('href') + ']').addClass('tabulous_active');

        dataslide = $(this).data('slide');
        goToByScroll(dataslide);

        if( $(this).closest('div').attr('id') == 'fake_tabs' ) {
            $('#tabs a[href=' + $(this).attr('href') + ']').click();
        }
    });


    /* /tabulous */

    $('#integr_table .table_cell').on('mouseenter', function(){
        if( $(this).height() > $(this).find('.integr_description').first().height() ) {
            $(this)
                .find('.integr_description').first().height($(this).height());
        }
    });

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

