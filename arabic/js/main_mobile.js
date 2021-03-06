/*! viewportSize | Author: Tyson Matanich, 2013 | License: MIT */
(function(n){n.viewportSize={},n.viewportSize.getHeight=function(){return t("Height")},n.viewportSize.getWidth=function(){return t("Width")};var t=function(t){var f,o=t.toLowerCase(),e=n.document,i=e.documentElement,r,u;return n["inner"+t]===undefined?f=i["client"+t]:n["inner"+t]!=i["client"+t]?(r=e.createElement("body"),r.id="vpw-test-b",r.style.cssText="overflow:scroll",u=e.createElement("div"),u.id="vpw-test-d",u.style.cssText="position:absolute;top:-1000px",u.innerHTML="<style>@media("+o+":"+i["client"+t]+"px){body#vpw-test-b div#vpw-test-d{"+o+":7px!important}}<\/style>",r.appendChild(u),i.insertBefore(r,e.head),f=u["offset"+t]==7?i["client"+t]:n["inner"+t],i.removeChild(r)):f=n["inner"+t],f}})(this);

( function( $ ) {

    // Setup variables
    $window = $(window);
    $slide = $('.homeSlide');
    $frame = $('.frame');
    $animation = $('.animation');
    $slideTall = $('.homeSlideTall');
    $slideTall2 = $('.homeSlideTall2');
    $body = $('body');

    $video = $('#screendemo');
    $interior_ipad = $('#interior_ipad');
    $video_h_koeff = 0.7975 / 720; // 0.7975 - отношение частного ширины и высоты картинки планшета к частному ширины и высоты видео, 720 высота видео
    $video_w_koeff = 0.7975 / 1280;

    $colorbox_height = ( screen.width >= screen.height ?
        ( screen.height * 0.9 > 600 ? '600' : screen.height * 0.9 ) :
        ( Math.round(screen.width * 0.9 * screen.width / screen.height) > 600 ? '600' : Math.round(screen.width * 0.9 * screen.width / screen.height) )
    );

    $animation_frame_height = 0;
    $animation_bcg = $('#slide-3 .bcg');
    //var $tabs_container;
    $('#slide-4 div[class ^= visible]').each(function(){

       if( $(this).is(':visible') ) {
           //console.log($(this));
           $tabs_container = $(this).find('#tabs_container');
           //console.log($tabs_container);
           if( $tabs_container.length ) {
               $first_tab = $tabs_container.find('div').first();

               //console.log($first_tab);
           }
        }
    });

    //console.log($first_tab);
    //console.log($tabs_container);

    $tabs_container_height = 0,
    htmlbody = $('html,body');

    /* console.log($first_tab);*/

    // smooth scrolling
    var scrollTime = 3.5;
    var scrollDistance = 450;

    // projects init
    if( $('div[id^=about]').length ) {
        var $about_slide_3, $cur_project;
        $('.projects').each(function () {
            if ($(this).is(':visible')) {
                $about_slide_3 = $(this);
                console.log('visible');
            }
        });

        if (typeof($about_slide_3) != 'undefined' && $about_slide_3.length) {
            var $projects_cnt = $about_slide_3.find('#project_list li').length;
            var $project_gallery = $about_slide_3.find('.project_gallery');
            //$project_gallery.width($about_slide_3.find('.project_gallery .gallery_container.active').innerWidth());
            //$project_gallery.width($('#slide-6 .header + div').width());
            var $gallery_width = $project_gallery.width();
        }

        console.log('projects init');
        console.log($about_slide_3);
    }

    // 1. Initialize fotorama manually.
    var $fotoramaDiv, fotorama;
    var resizeTimer;



    //console.log($projects_cnt);

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

            if( typeof($tabs_container) !== 'undefined' && $tabs_container.length ) { console.log($tabs_container);
                tabulousInit();
                $tabs_container_height = $first_tab.height() + 20;
                $tabs_container.height($tabs_container_height);
            }

            $('.flexslider').each(function() {

                if ($(this).is(':visible')) {
                    $(this).flexslider({
                        animation: "slide",
                        slideshowSpeed: 7000,
                        start: function (slider) {
                            $('body').removeClass('loading');
                        }
                    });
                }
            });

            // Resize sections
            adjustWindow();
            frameResize();



          //  carouselInit();

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

        //$animation.height(winH * 2);

        /*if( $('#fake_tabs').length ) {
         $('#fake_tabs').width($('#tabs').width());
         $('#fake_tabs').position().left = $('#tabs').position().left;
         }*/

        if( $('.jcarousel').length ) {

            if( $(window).width() < 480 ) {
                $jc_item_width = Math.ceil($('.jcarousel').width());
            } else if ( $(window).width() < 768 ) {
                $jc_item_width = Math.ceil($('.jcarousel').width() * 0.5);
            } else {
                $jc_item_width = Math.ceil($('.jcarousel').width() * 0.3333);
            }


            $('.jcarousel li').css({'width': ($jc_item_width + 1) + 'px', 'padding': '0 17px'});
            $('a[class ^= "jcarousel-control"]').css({'top': Math.ceil($('.jcarousel').height() / 2 - 15)});

            // определим высоту блока отзывов

            //$jc_item_width = Math.ceil($('.jcarousel').width() * 0.333333);

            $('.jcarousel li').css({'width': ($jc_item_width + 1) + 'px', 'padding': '0 17px'});
            $('a[class ^= "jcarousel-control"]').css({'top': Math.ceil( parseInt($('#about-slide-4 h3').outerHeight(true) + $('.jcarousel').height() / 2 ) - 15)});

            // отзывы
            $('.jcarousel').jcarousel({
                // Configuration goes here
                //animation: {
                //duration: 400,
                //easing:   'linear',
                //complete: function() {
                //}
                //},
                transitions: Modernizr.csstransitions ? {
                    transforms:   Modernizr.csstransforms,
                    transforms3d: Modernizr.csstransforms3d,
                    easing:       'linear'
                } : false,
                wrap: 'circular'
            })
                .jcarouselAutoscroll({
                    interval: 10000,
                    target: '+=1',
                    autostart: true
                });

            $('.jcarousel-control-prev')
                .jcarouselControl({
                    target: '-=1'
                });

            $('.jcarousel-control-next')
                .jcarouselControl({
                    target: '+=1'
                });
/*
            $jc_item_width = Math.ceil($('.jcarousel').width() * 0.333333);

            $('.jcarousel li').css({'width': ($jc_item_width+1) + 'px', 'padding': '0 17px'});
            $('a[class ^= "jcarousel-control"]').css({'top': Math.ceil( $('.jcarousel').height() / 2 - 15 ) });

            // определим высоту блока отзывов

            $jc_item_width = Math.ceil($('.jcarousel').width() * 0.333333);

            $('.jcarousel li').css({'width': ($jc_item_width+1) + 'px', 'padding': '0 17px'});
            $('a[class ^= "jcarousel-control"]').css({'top': Math.ceil( ( parseInt($('#about-slide-4').css('margin-top')) + $('.jcarousel').height() ) / 2 - 15 ) });*/

        }

        $animation_frame_height = $animation_bcg.height();
        // Check for touch
        if(Modernizr.touch) {
            // destroy skrollr elements
            //console.log('win width: ' + winW);

            $('.skrollr_el').remove();
            $('.visible-lg #slide2-ipad img, .visible-md #slide2-ipad img,' +
            '.visible-sm #slide2-ipad img, .visible-xs #slide2-ipad img').attr('src',  '../images/ipad_slide2_org.jpg');

        } else {
            // удаляем атрибуты элементов анимации

            $video.each(function (index, el) {
                $.each(el.attributes, function () {
                    if (this.name.indexOf('data-') === 0) {
                        $(el).removeAttr(this.name);
                        $(el).attr('data-anchor-target', '#slide-1');
                    }
                });
            });


        }

    }


    $(window).scroll(function() {
        /*if ($(this).scrollTop() >  Math.floor($(this).height() / 4 * 3 ) ) {
            $('.callback_fix_btn').fadeIn(500);
        } else {
            $('.callback_fix_btn').fadeOut(500);
        } */

        //$('.navbar-custom .nav li a:focus').blur();

        if( $('#slide-1 .bcg.visible-tablet').is(':visible') ) {
           // console.log('visible');

            if( $window.scrollTop() >= $('#slide-1').offset().top ) {
                $('.visible-tablet #slogan').css({ position: 'fixed', top: 0, left: '10%' });
                $('.visible-tablet #slogan + div').css({ position: 'fixed', bottom: 0, 'margin-left': '5%' });
            } else {
                $('.visible-tablet #slogan').css({ position: 'relative', top: 0, left: 0 });
                $('.visible-tablet #slogan + div').css({ position: 'absolute', bottom: 0, 'margin-left': '5%' });
            }

            if( $window.scrollTop() >= $('#ipad_wrap').offset().top ) {
                $('.visible-tablet #slogan').css({ position: 'absolute',
                    top: ( $('#ipad_wrap').offset().top - $('#slide-1').offset().top ), left: '10%' });
                $('.visible-tablet #slogan + div').css({ position: 'absolute', bottom: ( $(window).height() - $("#slide-1").height()  ), 'margin-left': '5%' });
            }
        }
    });



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
        //$('#dev-slide-3').height(Math.floor(window.innerWidth / k));
    }

    $(window).on('resize', function(){
        var $tmp;

        frameResize();
        adjustWindow();

        var d = new Date();
        //console.log(d.getDate() + '.' + d.getMonth() + '.' + d.getYear() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds() + ':' + d.getMilliseconds());

        //$('.fotorama__stage__shaft').width( Math.ceil( $('#gallery_wrapper').width() * 0.8 ) );

       // $('img').removeAttr('height').removeAttr('width');
       /* $('img').each(function(){
            var src = this.getAttribute('src');
            this.setAttribute('src', src.replace('@2x', ''));

            new RetinaImage(this);
        }); */

        if( typeof($tabs_container) !== 'undefined' ) {
            $('#slide-4 div[class ^= visible]').each(function () {

                if ($(this).is(':visible')) {
                    //console.log($(this));
                    $tabs_container = $(this).find('#tabs_container');
                    //console.log($tabs_container);
                }
            });

            $first_tab = $tabs_container.find('div').first(),
                $tabs_container_height = 0;

            //console.log('resize');
            tabulousInit();
            $tabs_container_height = $first_tab.height() + 20;
            $tabs_container.height($tabs_container_height);
        }

        $('.flexslider').each(function() {

            if ($(this).is(':visible')) {
                $(this).flexslider({
                    animation: "slide",
                    slideshowSpeed: 7000,
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            }
        });

        if( $('.youtube').length ) {
            $colorbox_height = ( screen.width >= screen.height ?
                ( screen.height * 0.9 > 600 ? '600' : screen.height * 0.9 ) :
                ( Math.round(screen.width * 0.9 * screen.width / screen.height) > 600 ? '600' : Math.round(screen.width * 0.9 * screen.width / screen.height) )
            ); //( screen.width < screen.height ? ( Math.round(screen.width * 0.9 * screen.width / screen.height) + 'px') : '90%' );

            $.colorbox.resize({
                width: ( Math.round(screen.width * 0.9) > 800 ? 800 : Math.round(screen.width * 0.9) ), //'90%',
                height: $colorbox_height
            });
        }

        // projects resizing
        if( $('div[id^=about]').length ) {

            $tmp = $about_slide_3;

            //console.log('tmp');
            //console.log($tmp);

            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {


                // Run code here, resizing has "stopped"

                //console.log('prev');
                //console.log($about_slide_3);
                //console.log($fotoramaDiv);


                // find visible projects block
                $('.projects').each(function(){
                    if( $(this).is(':visible') ) {
                        $about_slide_3 = $(this);
                        //console.log('visible');
                    }
                });

                if( $tmp.data('type') == $about_slide_3.data('type') ) {
                    //console.log('tmp=new');
                    fotoramaResize($about_slide_3.data('type'));
                } else {
                    $projects_cnt = $about_slide_3.find('#project_list li').length;
                    $project_gallery = $about_slide_3.find('.project_gallery');
                    //$project_gallery.width($about_slide_3.find('.project_gallery .gallery_container.active').innerWidth());
                    $gallery_width = $project_gallery.width();


                    //var $rand_project = Math.floor((Math.random() * $projects_cnt));

                    //console.log('new');
                    //console.log($about_slide_3);
                    // console.log($rand_project);

                    $about_slide_3
                        .find('#project_list ul li')
                        .removeClass('active')
                        .eq($cur_project)
                        .addClass('active');

                    $about_slide_3
                        .find('#project_title')
                        .text($about_slide_3.find('#project_list ul li.active a').text());

                    makeProjectCounterString();

                    $about_slide_3
                        .find('.gallery_container')
                        .removeClass('active')
                        .eq($cur_project)
                        .addClass('active');

                    // destroy previous fotorama
                    fotorama.destroy();

                    $fotoramaDiv = $about_slide_3
                        .find('.gallery_container.active .fotorama')
                        .fotorama();

                    // 2. Get the API object.
                    fotorama = $fotoramaDiv.data('fotorama');

                    //console.log($fotoramaDiv);

                    //fotoramaResize();
                }
            }, 250);



        }

    });


    //console.log($.mobile.orientationChangeEnabled);
    // Listen for orientation changes
    /*window.addEventListener("orientationchange", function() {
        // Announce the new orientation number
        console.log(window.orientation);
    }, false);*/
    $(window).bind('orientationchange',function(){
        if(event.orientation == 'portrait'){
            alert('portrait');
        }
        else if(event.orientation == 'landscape') {
            alert('landscape');
        }
    });

    /*$window.on( 'orientationchange', function(event) {
        //$( "#orientation" ).text( "This device is in " + event.orientation + " mode!" );
        console.log('orientation change ' + event.orientation + ' ' + $.now());
        console.log('screen width: ' + $window.innerWidth());
       // carouselInit();


    });
*/
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
            effect = tabs_effects[i],
            $tabs = $tabs_container.parent('div[id ^= tabs]');

       // console.log($tabs_container);
       // console.log($tabs);

        if( $tabs.length && !$tabs.hasClass('activated')) {
            //$('#tabs').tabulous({
            $tabs.addClass('activated');
            $tabs.tabulous({
                effect: effect
            });
            //$('#tabs a, #tabs2 a, #tabs3 a,#tabs4 a, #fake_tabs a').removeClass('tabulous_active');

            //$('#fake_tabs a[href=' + $(this).attr('href') + '], #tabs a[href=' + $(this).attr('href') + ']').addClass('tabulous_active');
        }
    }

    function goToByScroll(dataslide)
    {
        htmlbody.animate({
            scrollTop: ( dataslide != 4 ? $('.frame[data-slide=' + dataslide + ']').offset().top : $('.frame[data-slide=' + dataslide + ']').offset().top - 30 )
        }, 1000);
    }

    $('a.inner_anchor ').on('click', function(ev){
        var link = '#';
        ev.preventDefault();

        // сформируем ссылку для скроллинга
        if( window.outerWidth >= 992 && window.outerWidth < 1200 ) {
            link += 'md-';
        } else if( window.outerWidth >= 768 && window.outerWidth < 992 ) {
            link += 'sm-';
        } else if( window.outerWidth < 768 ) {
            link += 'xs-';
        }

        link += $(this).attr('href').substr(1);

        htmlbody.animate({
            scrollTop: ( $(link).offset().top - 30 )
        }, 1000);

        if( $(this).closest('div').attr('id') == 'fake_tabs' ) {
            $('#tabs a[href=' + $(this).attr('href') + ']').click();
        }
    });

    $('#slide-4 .visible-lg li a, #slide-4 .visible-md li a, #slide-4 .visible-sm li a, #slide-4 .visible-xs li a').on('click', function(ev){
        ev.preventDefault();

        htmlbody.animate({
            scrollTop: ( $( $(this).attr('href') ).offset().top  )
        }, 1000);
    });


    /* /tabulous */

    $('#integr_table .table_cell').on('mouseenter', function(){
        if( $(this).height() > $(this).find('.integr_description').first().height() ) {
            $(this)
                .find('.integr_description')
                .first()
                .height($(this).height());
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

    /*if( location.pathname == '/about.html' ) {
     googleMap("map_canvas", 57.590141,39.900717);
     } */

    // скрываем сообщение об ошибке
    function removeError(){
        $('#error').text('');
        $('#ios-error').text('');
        $('.alert').fadeOut(250);
    }

    // прячем сообщение об ошибке при изменениях полей формы
    $('#inputPhone, #inputPhoneCB, #inputPhoneDemo, #inputEmail').on('keypress', function(){
        removeError();
    });

    $('#myModal, #myAppStoreModal').on('hide.bs.modal', function (e) {
        $('#inputName').val('');
        $('#inputPhone').val('');
        $('#inputEmail').val('').closest('div.form-group').removeClass('has-error').removeClass('has-success');
        removeError();
    });

    $('#inputEmail').on('blur', function(){
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
    });

    /* $('#inputEmail').on('change', function(){
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
     });*/

    $('#callback_title').on('click', function(){
        var $clone = $('#callback_wrapper').clone();

        /*$clone.css({'position': 'absolute', 'left': 0, 'top': 0}).children('#callback_form').show();
        console.log($window.height());
        console.log($clone);
        console.log($clone.height());*/


        $('#callback_form').slideToggle(350);
    });

    $('.offer-send-btn').on('click', function(ev){
        var $lang = $('html').attr('lang'),
            $url = '../send_email.php',
            $form = $('.callback_form1'),
            $fl = true; // флаг = true если заполнены все обязательные поля форма

        ev.preventDefault();

        $form.find(':input').each(function(){
            if( $(this).attr('required') && $(this).val() == '')
            {
                $fl = false;
                return false;
            }
        });

        if( $fl )
        {
            if( telInput_demo.intlTelInput("isValidNumber") ) {
                // все обязательные поля формы заполнены, отправляем письмо
                /*if( $lang != 'ru' ) {
                 $url = '../' + $url;
                 }*/

                telInput_demo.val(telInput_demo.intlTelInput("getNumber"));
                var form_ser_data = $form.serialize();
                console.info('form data:', form_ser_data);

                $.post($url, $form.serialize(), function(data){

                    /*if( $lang != 'en' ) {
                        var $str = '<div class="result">Ошибка отправки письма. <br/>' + (data.msg) + '</div>';

                        if( data.msg == 1 ) {
                            $str = '<div class="result">&mdash; Спасибо!<br> Мы перезвоним в указанное время.</div>';
                        }
                    } else {*/
                    var $str = '<div class="result">' + (data.msg) + '<br>حدث خطأ أثناء إرسال البريد الإلكتروني.</div>';

                    if( data.msg == 1 ) {
                        $str = '<div class="result"> شكرا لك! ونحن ندعو لكم مرة أخرى في وقت محدد.</div>';
                    }
                   // }

                    $('#mySuccessModal .modal-body').html($str);
                    $('#mySuccessModal').modal();

                    $form.find(':text').each(function(){
                        $(this).val('');
                    });
                    $('#callback_title').click();

                }, 'json')
                    .fail(function() {
                        alert( "error" );
                    });
            } else {
                $str = 'شكل الهاتف غير صالح'; //'Неверный формат телефона!';
                //$($modalID + ' #error').text($str);
                //$($modalID + ' .alert').fadeIn(250);

                $('#mySuccessModal .modal-body').html('<p style="direction: rtl;">' + $str + '</p>');
                $('#mySuccessModal').modal();
            }
        }
        else
        {
            $('#mySuccessModal .modal-body').html( '<p style="direction: rtl;">البيانات المطلوبة فارغة</p>' );
            $('#mySuccessModal').modal();
        }


    });

    $('#myModal .callback_form').on('submit', function(ev){
        ev.preventDefault();

        $('.send-btn').click();
    });

    $('.send-btn').on('click', function(){
        //console.log('click');

       // console.log($(this).closest('.modal.fade').attr('id'));
        var $modalID = '#' + $(this).closest('.modal.fade').attr('id').toString(),
            $str = '',
            $url = '../send_email.php';

        if( $($modalID + ' #inputPhoneCB').val() == '' ) {
            $str = 'مجال"رقم الهاتف"لايمكن ان تكون فارغة';

            $($modalID + ' #error').text($str);
            $($modalID + ' .alert').fadeIn(250);
        } else {
            //var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,7}$/i;

            if( telInput_cb.intlTelInput("isValidNumber") ) {

                console.info('telInput', telInput_cb);
                telInput_cb.val(telInput_cb.intlTelInput("getNumber"));
                var form_ser_data = $($modalID + ' .callback_form').serialize();
                console.info('form data:', form_ser_data);

                $.post($url, form_ser_data, function (data) {

                    var $str = '<div class="result">' + (data.msg) + '<br>حدث خطأ أثناء إرسال البريد الإلكتروني.</div>';

                    if( data.msg == 1 ) {
                        $str = '<div class="result">شكرا ! سنتصل بكم قريبا &mdash;</div>';
                    }

                    $($modalID).modal('hide');
                    $($modalID + ' :text').val('');
                    $('#send_result').html($str);
                    $('#mySuccessModal').modal('show');
                }, 'json');
            } else {
             //Не верно
                $str = 'شكل الهاتف غير صالح'; //'Неверный формат телефона!';
                $($modalID + ' #error').text($str);
                $($modalID + ' .alert').fadeIn(250);
            }

        }
    });

    $('#myAppStoreModal .ios_form').on('submit', function(ev){
        ev.preventDefault();

        $('.send-ios-btn').click();
    });

    $('.send-ios-btn').on('click', function(){
       // console.log('click');

       // console.log($(this).closest('.modal.fade').attr('id'));
        var $modalID = '#' + $(this).closest('.modal.fade').attr('id').toString();

        if( $($modalID + ' #inputEmail').val() == '' ) {
            $($modalID + ' #ios-error').text('Вы не заполнили поле "Email"');
            $($modalID + ' .alert').fadeIn(250);
        } else {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,7}$/i;


            if (pattern.test($($modalID + ' #inputEmail').val())) {
                //Верно
                $($modalID + ' #inputEmail').closest('div.form-group').removeClass('has-error').addClass('has-success');

                //console.log($($modalID + ' .ios_form').serialize());

                $.post('send_email.php', $($modalID + ' .ios_form').serialize(), function (data) {

                    var $str = '<div class="result">Ошибка отправки письма</div>';

                    if( data.msg == 1 ) {
                        $str = '<div class="result">&mdash;– Спасибо! Как только выйдет версия для iOS, мы пришлём вам письмо. </div>';
                    }

                    // console.log(data);

                    $($modalID).modal('hide');
                    $('#send_result').html($str);
                    $('#mySuccessModal').modal('show');
                }, 'json');
            } else {
                //Не верно
                $(this).closest('div.form-group').addClass('has-error');
                $($modalID + ' #ios-error').text('Похоже, вы ввели некорректный адрес email. Пожалуйста, проверьте.');
                $($modalID + ' .alert').fadeIn(250);
            }




        }
    });

    // bootstrap youtube popup init
    if( $(".youtube").length ) {
        //$(".youtube").YouTubeModal({autoplay:0, width: 980, height: 640});
    }

    $('.youtube').on('click', function(){
        $(this)
            .colorbox({
                opacity: 0.6,
                iframe: true,
                width: ( Math.round(screen.width * 0.9) > 800 ? 800 : Math.round(screen.width * 0.9) ), //'90%',
                height: $colorbox_height,
                transition: 'none',
                onComplete : function(){
                    $(this).colorbox.resize({
                        width: ( Math.round(screen.width * 0.9) > 800 ? 800 : Math.round(screen.width * 0.9) ), //'90%',
                        height: $colorbox_height
                    });
                }
            });
    });

    // accordions on index page
    // $('.collapse').collapse('toggle');
    $('#know_more_tabs li a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

    /*$('.youtube').on('click', function(){
     $('#YouTubeModalDialog').css({'margin-top': Math.floor( ($window.height() - 600) / 2)});
     }); */


    // галерея проектов
    // Init magnific popup
    if( $('.parent-container').length ) {
        $('.parent-container').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            // other options
            mainClass: 'mfp-with-zoom', // this class is for CSS animation below

            zoom: {
                enabled: true, // By default it's false, so don't forget to enable it

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                // The "opener" function should return the element from which popup will be zoomed in
                // and to which popup will be scaled down
                // By defailt it looks for an image tag:
                opener: function (openerElement) {
                    // openerElement is the element on which popup was initialized, in this case its <a> tag
                    // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            },
            image: {
                markup: '<div class="mfp-figure">' +
                '<div class="mfp-close"></div>' +
                '<div class="mfp-img"></div>' +
                '<div class="mfp-bottom-bar">' +
                '<div class="mfp-title"></div>' +
                '<div class="mfp-counter"></div>' +
                '</div>' +
                '</div>', // Popup HTML markup. `.mfp-img` div will be replaced with img tag, `.mfp-close` by close button

                cursor: 'mfp-zoom-out-cur', // Class that adds zoom cursor, will be added to body. Set to null to disable zoom out cursor.

                titleSrc: 'title', // Attribute of the target element that contains caption for the slide.
                // Or the function that should return the title. For example:
                // titleSrc: function(item) {
                //   return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                // }

                verticalFit: true, // Fits image in area vertically

                tError: '<a href="%url%">The image</a> could not be loaded.' // Error message
            }
        });
    }
    // Init scroll pane
    /*$('.scroll_pane').scrollbar({
     "type": "simple" //,
     //"autoScrollSize": true,
     //"scrolly": $('.external-scroll_y')
     });*/
    if( $('.scrollbar-outer').length ) {
        $('.scrollbar-outer').scrollbar();
    }

    // accordion of projects gallery
    $('#about-slide-3 .gallery_container .panel-group h4 a')
        .on('click', function(){
            console.log('click');
            $(this)
                .closest('.panel-group')
                .find('.panel-collapse')
                .collapse('hide');

            $about_slide_3.find($(this).attr('href')).collapse('toggle');
    });

    // show project list
    $('#about-slide-3 #project_title').on('click', function(){
        $about_slide_3.find('#project_list').fadeToggle();
    });

    // hide project list
    $('#about-slide-3 #proj_list_close').on('click', function(){
        // $('#project_list').animate({'opacity': 0}, 250).css({'left': '-5000px'});
        $about_slide_3.find('#project_list').fadeOut();
    });

    function projectsInit()
    {
        var $rand_project = Math.floor((Math.random() * $projects_cnt));

        $about_slide_3
            .find('#project_list ul li')
            .eq($rand_project)
            .addClass('active');

        $about_slide_3
            .find('#project_title')
            .text($about_slide_3
                    .find('#project_list ul li.active a')
                    .text());

        $about_slide_3
            .find('.gallery_container')
            .eq($rand_project)
            .addClass('active');

        $cur_project = $rand_project; console.log('rand: ' + $rand_project + ' cur: ' + $cur_project);

        $fotoramaDiv = $about_slide_3
            .find('.gallery_container.active .fotorama')
            .fotorama();

        // 2. Get the API object.
        fotorama = $fotoramaDiv.data('fotorama');
        //console.log(fotorama);


        //fotoramaResize();
    }

    if( typeof($about_slide_3) != 'undefined' && $about_slide_3.length ) {
        projectsInit(); //console.log(fotorama);
    }

    function fotoramaResize( type )
    {
        var $fotorama = $about_slide_3.find('#gallery_wrapper .gallery_container.active .fotorama'),
            $gallery_wrapper_width = $about_slide_3.find('#gallery_wrapper').width(),
            $car_caption_width = $about_slide_3.find('#gallery_wrapper .gallery_container.active .car-caption').outerWidth();

        if( type == 'sm-xs' ) {
            $gallery_width = $gallery_wrapper_width;
        } else {
            $gallery_width = $gallery_wrapper_width - $car_caption_width;
        }

       // console.log('$gallery_wrapper_width = ' + $gallery_wrapper_width);
       // console.log('$car_caption_width = ' + $car_caption_width);

        //console.log('$gallery_width = ' + $gallery_width);
        $fotorama.width($gallery_width).data('width',$gallery_width); // forse resize
        fotorama.resize({width: $gallery_width });
    }

    // change active project in gallery
    function changePojectGallery(el)
    {
        //$('.project_gallery .carousel.active').removeClass('active').closest('.gallery_container').removeClass('active');
        $about_slide_3.find('.gallery_container.active').removeClass('active');
        $about_slide_3.find( el.attr('href')).addClass('active').closest('.gallery_container').addClass('active');

        // destroy previous fotorama
        fotorama.destroy();

        $fotoramaDiv = $about_slide_3
                        .find('.gallery_container.active .fotorama')
                        .fotorama();

        // 2. Get the API object.
        fotorama = $fotoramaDiv.data('fotorama');

        $cur_project = $about_slide_3.find('#project_list li.active').index(); //console.log('current project: ' + $cur_project);

        //fotoramaResize();

    }

    // make project counter string
    function makeProjectCounterString()
    {
        var $cur_index = $about_slide_3.find('#project_list li.active').index() + 1,
            $str = 'Project ' + $cur_index.toString() + ' of ' + $projects_cnt.toString();

        if(location.href.search('/en') != -1) {
            $str = 'Project ' + $cur_index.toString() + ' of ' + $projects_cnt.toString();
        }

        /*if(location.href.search('/en') != -1)
         $str = 'Project ' + $cur_index.toString() + ' of ' + $projects_cnt.toString();
         else if (location.href.search('/ru') != -1 || location.pathname.length == 1) */
        //$str = 'Проект ' + $cur_index.toString() + ' из ' + $projects_cnt.toString();

        $about_slide_3.find('#proj_counter').text($str);
    }

    if( typeof($about_slide_3) != 'undefined' && $about_slide_3.length ) {
        makeProjectCounterString();
    }

    function sliderResize()
    {
        var $img_width = 885, $img_height = 550;

        $gallery_width = $('.navbar > div.container').width() - 60; //$project_gallery.width();
       // $project_gallery.width($gallery_width);

        var $koeff = ($img_width / $img_height).toFixed(1),
            $inner_diff = $gallery_width - $('.gallery_container.active .car-caption').innerWidth();

        //$('.project_gallery .carousel').width($inner_diff);

        $fw_height = Math.floor($inner_diff / $koeff);

        var $new_height = $fw_height; //( $fh_height < $fw_height ) ? Math.floor($fh_height) : Math.floor($fw_height);

        //console.info('$new_height = ' + $new_height);

        $('.project_gallery .carousel-inner > .item, .project_gallery .carousel-inner > .item > img').height( $new_height ); //Math.floor(mywindow.height() * 0.55 ));

        $('.project_gallery .carousel-inner').width(Math.floor($new_height * $koeff)); //$('.carousel-inner > .item.active > img').width());
        $('.project_gallery .carousel').width(Math.floor($new_height * $koeff));

        $project_gallery.width($gallery_width);

        // позиционируем стрелки управления
        $('.project_gallery .carousel-control').css({ 'padding-top': Math.floor($new_height/2) - 19 });
    }
    /*
     $('.project_gallery .carousel').hover(function(){
     var $caption_top = $('.project_gallery .carousel.active .carousel-inner').offset().top + $('.project_gallery .carousel.active .carousel-inner').height() //$('.carousel div.active .carousel-caption').offset().top;

     $('.project_gallery .carousel.active .carousel-control').css({'display': 'block'});
     }, function(){
     $('.project_gallery .carousel.active .carousel-control').css({'display': 'none'});
     });

     $('.project_gallery').on('mousemove', function(ev){
     var $carousel_inner_left = $('.project_gallery .carousel.active .carousel-inner').offset().left; //$('.carousel div.active .carousel-caption').offset().top;
     var $carousel_inner_right = $('.project_gallery .carousel.active .carousel-inner').offset().left + $('.project_gallery .carousel.active .carousel-inner').innerWidth();
     var $carousel_inner_top = $('.carousel.active .carousel-inner').offset().top;
     var $carousel_inner_bottom = $('.project_gallery .carousel.active .carousel-inner').offset().top + $('.project_gallery .carousel.active .carousel-inner .item.active').height();
     var $carousel_inner_center = $carousel_inner_left + Math.floor($('.project_gallery .carousel.active .carousel-inner .item.active').width() / 2);

     mouseX = ev.pageX;
     mouseY = ev.pageY;

     if( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) )

     if( $carousel_inner_left < mouseX && mouseX < $carousel_inner_right &&
     $carousel_inner_top < mouseY && mouseY < $carousel_inner_bottom
     )
     {
     if( mouseX  <= $carousel_inner_center )
     {
     $('.project_gallery .carousel.active .carousel-control.left').css({'display': 'block'});  //.animate({ 'width': '60px'}, 1000);
     $('.project_gallery .carousel.active .carousel-control.right').css({'display': 'none'});
     }
     else if ( mouseX > $carousel_inner_center )
     {
     $('.project_gallery .carousel.active .carousel-control.right').css({'display': 'block'});
     $('.project_gallery .carousel.active .carousel-control.left').css({'display': 'none'});
     }
     }
     else
     {
     $('.project_gallery .carousel.active .carousel-control').css({'display': 'none'});
     }
     });
     */
    $('#about-slide-3 #project_list a').on('click', function(ev){
        ev.preventDefault(); console.log('prevent click 5');

        $about_slide_3.find('#project_list li.active').removeClass('active');
        $about_slide_3.find('#project_title').text($(this).text());
        $(this).closest('li').addClass('active');

        $about_slide_3.find('#proj_list_close').click();
        changePojectGallery($(this));
        makeProjectCounterString();
    });

    /*$window.on('resize', function(){
     sliderResize(); // resize project gallery
     });*/

    // show previous project of gallery
    $('#about-slide-3 #proj_prev').on('click',function(ev){
        var $cur_proj_index = $about_slide_3.find('#project_list li.active').index(),
            $new_proj_index = -1,
            $new_active_proj;

        ev.preventDefault(); //console.log('prevent click 8');

        if( $cur_proj_index == 0)
            $new_proj_index = $projects_cnt - 1;
        else
            $new_proj_index = $cur_proj_index - 1;

        $new_active_proj = $about_slide_3.find('#project_list li').eq( $new_proj_index );

        $about_slide_3.find('#project_list li.active').removeClass('active');
        $new_active_proj.addClass('active');
        $about_slide_3.find('#project_title').text( $new_active_proj.text() );

        $about_slide_3.find('#proj_list_close').click();

        changePojectGallery($new_active_proj.children('a'));

        makeProjectCounterString();

    });

    // show next project of gallery
    $('#about-slide-3 #proj_next').on('click',function(ev){
        var $cur_proj_index = $about_slide_3.find('#project_list li.active').index(),
            $new_proj_index = -1,
            $new_active_proj;

        ev.preventDefault(); //console.log('prevent click 9');

        if( $cur_proj_index == ($projects_cnt - 1))
            $new_proj_index = 0;
        else
            $new_proj_index = $cur_proj_index + 1;

        $new_active_proj = $about_slide_3.find('#project_list li').eq( $new_proj_index );

        $about_slide_3.find('#project_list li.active').removeClass('active');
        $new_active_proj.addClass('active');
        $about_slide_3.find('#project_title').text( $new_active_proj.text() );

        $about_slide_3.find('#proj_list_close').click();

        changePojectGallery($new_active_proj.children('a'));

        makeProjectCounterString();
    });

    //$('#inputPhone').mask("+7 (000) 000-0000");

   /* $('#interior_ipad').flowplayer({
        fullscreen: false,
        brand: false,
        embed: false,
        plugins: { controls: false }

    }); */


   /* flowplayer("interior_ipad", "http://new-throne.pro/js/flowplay/flowplayer-3.2.2.swf", {
        plugins: {
            // tube buttons (appr. 4kb)
            tube: {
                url: "http://releases.flowplayer.org/swf/buttons_tube.swf",
                type: "classLibrary"
            },

            // skinless controlbar using tube buttons
            controls: //{
               // url: "flowplayer.controls-skinless-3.2.16.swf",
               // skin: 'tube'
                null
            //}
        },
        clip: {
            autoPlay: false
        }

    }); */

    $('#play_demo, #play_demo_text').on('click', function(){
        var $play_demo = $('#play_demo');

        if($('#slide-1 .bcg.visible-tablet').is(':visible')) {
            var api = flowplayer();

            api.toggle();

            if( api.paused == true ) {   // play the file, and display pause symbol
                $str = $play_demo.css('background-image');
                $play_demo.css( { 'background-image' : $str.replace('play-button', 'pause-button') } );
            } else if( api.playing == true ) {              // pause the file, and display play symbol
                $str = $play_demo.css('background-image');
                $play_demo.css( { 'background-image' : $str.replace('pause-button', 'play-button') } );
            }
        } else {
            if ($video[0].paused == true) {   // play the file, and display pause symbol
                $video[0].play();
                //$(this).attr('src', $(this).attr('src').replace('play-button', 'pause-button'));
                $str = $play_demo.css('background-image');
                $play_demo.css( { 'background-image' : $str.replace('play-button', 'pause-button') } );
            } else {              // pause the file, and display play symbol
                $video[0].pause();
                //$(this).attr('src', $(this).attr('src').replace('pause-button', 'play-button'));
                $str = $play_demo.css('background-image');
                $play_demo.css( { 'background-image' : $str.replace('pause-button', 'play-button') } );
            }
        }
    });

    $('.flowplayer .fp-player + a').on('click', function(ev){
        ev.preventDefault();
    });

    /* main page top carousel */

    var $myCarousel, $caption_height = 0;



    function carouselInit() {
        if( $('#slide-1 .carousel').length ) {
            delete $myCarousel;
            //console.log($('#slide-1 .carousel'));
            $('#slide-1 .carousel').each(function(){
                if( $(this).is(':visible') ) {
                    $myCarousel = $(this); //$('#slide-1 #carousel');
                }
            });

            $caption_height = 0;
            $myCarousel.find('.carousel-caption').each(function(){
                var $el = $(this).clone(),
                    $tmp_height = 0;

                $el.appendTo('body').
                    css({
                        top: '-10000px',
                        bottom: 'auto' //,
                        //width: document.documentElement.clientWidth //innerWidth()
                    }).
                    addClass('tmp_caption').
                    show();

                $tmp_height = Math.ceil( $el.children('h2').outerHeight(true) + $el.children('p').outerHeight(true) );

                console.log('.carousel width: ' + screen.width);
                console.log($myCarousel.attr('id') + ' tmp height: ' + $tmp_height + ' h2(' + $el.children('h2').text() + '): ' + Math.ceil($el.children('h2').outerHeight(true)) + ' p: ' + Math.ceil($el.children('p').outerHeight(true)) );
                if( $caption_height < $tmp_height ) {
                    $caption_height = $tmp_height;
                }

                delete $el;
                //$('.tmp_caption').remove();
            });

            $myCarousel.find('.carousel-caption').height( $caption_height );
            console.log('init height: ' + ($caption_height ));

            // Initialize carousel
            $myCarousel.carousel({
                interval: 6000
            });

            // Select the elements to be animated
            // in the first slide on page load
            var $firstAnimatingElems = $myCarousel.find('.item:first')
                .find('[data-animation ^= "animated"]');

            // Apply the animation using our function
            doAnimations($firstAnimatingElems);

            // Pause the carousel
            //$myCarousel.carousel('pause');

            // Attach our doAnimations() function to the
            // carousel's slide.bs.carousel event
            $myCarousel.on('slide.bs.carousel', function (e) {
                // Select the elements to be animated inside the active slide
                var $animatingElems = $(e.relatedTarget)
                    .find("[data-animation ^= 'animated']");
                doAnimations($animatingElems);
            });
        }
    }

    function doAnimations(elems) {
        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');

            // Add animate.css classes to
            // the elements to be animated
            // Remove animate.css classes
            // once the animation event has ended
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }



    /* /main page top carousel */

    $('#langs select').on('change', function(){
        var arr = location.pathname.split('/');

        //if( $(this).val() != 'ru' ) {
        window.location = location.protocol + '//' + location.host + '/' + $(this).val() + '/' + arr[arr.length-1];
        //} else {
        //    window.location = location.protocol + '//' + location.host + '/' + arr[arr.length-1];
        //}
    });

    var cities = ['doha'];
    var tmp_path = location.pathname,
        arr = tmp_path.split('/'),
        i = 0;

    for( i = 1; i < arr.length; i++){
        // проверим есть в пути какой-нибудь из городов
        if( cities.indexOf(arr[i]) != -1 ){ console.info(arr[i]);
            $('#logo').attr('href', '/' + arr[1] + '/' + arr[i] + '/');
            $('#cities .btn-group').siblings('span.visible').removeClass('visible').addClass('hidden');
            $('#cities .btn-group').siblings('span[id = city_' + arr[i] + ']').removeClass('hidden').addClass('visible');
            $('#cities .btn-group .dropdown-menu li').each(function(){
                if( $(this).data('city') == arr[i] ){
                    $('#cities .btn-group button').html( $(this).text() + ' <span class="my_caret"></span>' );
                }
            });
        }
    }

    $('#cities .btn-group .dropdown-menu li a').on('click', function(ev){
        var path = location.pathname,
            arr = path.split('/'),
            url = '/';

        ev.preventDefault();
        console.log(arr);
        console.log($(this).parent().data('city'));
        location.href = '/' + arr[1] + '/' + ( $(this).parent().data('city') != 'default' ? $(this).parent().data('city') + '/' : '' ) + arr[arr.length-1];
        /*
         for( i = 1; i < arr.length - 1; i++){
         // проверим есть в пути какой-нибудь из городов
         if( cities.indexOf(arr[i]) == -1 ){
         url += arr[i] + '/';
         }
         }

         // add city to our url
         url += $(this).data('city') + '/';

         $('#logo').attr('href', '/' + arr[1] + '/' + $(this).val() + '/');

         if( arr[arr.length-1] != '' ){
         url += arr[arr.length-1];
         }

         history.pushState( '', '', url );

         $('#cities .btn-group button').html( $(this).text() + ' <span class="my_caret"></span>' );
         $('#cities .btn-group').siblings('span.visible').removeClass('visible').addClass('hidden');
         $('#cities .btn-group').siblings('span[id = city_' + $(this).data('city') + ']').removeClass('hidden').addClass('visible');
         $('#logo').attr('href', '/' + arr[1] + '/' + $(this).data('city') + '/'); */
    });

    var telInput_cb = $("#inputPhoneCB"),
        telInput_demo = $("#inputPhoneDemo")
    errorMsg = $(".error-msg"),
        validMsg = $(".valid-msg");

    telInput_cb.intlTelInput({
        nationalMode: true,
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            })
        },
        utilsScript: "/js/intl_phone_input/utils.js"
    });

    var reset = function() {
        telInput_cb.removeClass("error");
        errorMsg.addClass("hide");
        validMsg.addClass("hide");
    };

    // on blur: validate
    telInput_cb.on('blur',function() {
        reset();
        if ($.trim(telInput_cb.val())) {
            if (telInput_cb.intlTelInput("isValidNumber")) {
                validMsg.removeClass("hide");
            } else {
                telInput_cb.addClass("error");
                errorMsg.removeClass("hide");
            }
        }
    });

    // on keyup / change flag: reset
    telInput_cb.on("keyup change", reset);

    telInput_demo.intlTelInput({
        nationalMode: true,
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            })
        },
        utilsScript: "/js/intl_phone_input/utils.js"
    });

    var reset = function() {
        telInput_demo.removeClass("error");
        errorMsg.addClass("hide");
        validMsg.addClass("hide");
    };

    // on blur: validate
    telInput_demo.on('blur',function() {
        reset();
        /*if ($.trim(telInput_demo.val())) {
         if (telInput_demo.intlTelInput("isValidNumber")) {
         validMsg.removeClass("hide");
         } else {
         telInput_demo.addClass("error");
         errorMsg.removeClass("hide");
         }
         }*/
    });

    // on keyup / change flag: reset
    telInput_demo.on("keyup change", reset);

} )( jQuery );


