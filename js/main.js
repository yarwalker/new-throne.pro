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
        //$tabs_container = $('#tabs_container');
    $('#slide-4 div[class ^= visible]').each(function(){

        if( $(this).is(':visible') ) {
            //console.log($(this));
           $tabs_container = $(this).find('#tabs_container');
            //console.log($tabs_container);
            //console.log($tabs_container);
            if( $tabs_container.length ) {
                $first_tab = $tabs_container.find('div').first();
            }
        }
    });


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

            if( typeof($tabs_container) !== 'undefined' && $tabs_container.length ) {
                tabulousInit();
                $tabs_container_height = $first_tab.height() + 20;
                $tabs_container.height($tabs_container_height);
            }

            if( $('.flexslider').length ) {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                        adjustWindow();
                    },
                    init: function () {

                    }
                });
            }

            console.log(location.pathname);
            if( location.pathname != '/' && location.pathname != '/en/' ) {
                $('#callback_wrapper').show();
            }

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

       // $animation.height(winH * 2);

        /*if( $('#fake_tabs').length ) {
         $('#fake_tabs').width($('#tabs').width());
         $('#fake_tabs').position().left = $('#tabs').position().left;
         }*/

         if( $('.jcarousel').length ) {
         $jc_item_width = Math.ceil($('.jcarousel').width() * 0.333333);

         $('.jcarousel li').css({'width': ($jc_item_width + 1) + 'px', 'padding': '0 17px'});
         $('a[class ^= "jcarousel-control"]').css({'top': Math.ceil($('.jcarousel').height() / 2 - 15)});

         // определим высоту блока отзывов

         $jc_item_width = Math.ceil($('.jcarousel').width() * 0.333333);

         $('.jcarousel li').css({'width': ($jc_item_width + 1) + 'px', 'padding': '0 17px'});
         $('a[class ^= "jcarousel-control"]').css({'top': Math.ceil(( parseInt($('#about-slide-4').css('margin-top')) + $('.jcarousel').height() ) / 2 - 15)});

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

         $jc_item_width = Math.ceil($('.jcarousel').width() * 0.333333);

         $('.jcarousel li').css({'width': ($jc_item_width+1) + 'px', 'padding': '0 17px'});
         $('a[class ^= "jcarousel-control"]').css({'top': Math.ceil( $('.jcarousel').height() / 2 - 15 ) });

         // определим высоту блока отзывов

         $jc_item_width = Math.ceil($('.jcarousel').width() * 0.333333);

         $('.jcarousel li').css({'width': ($jc_item_width+1) + 'px', 'padding': '0 17px'});
         $('a[class ^= "jcarousel-control"]').css({'top': Math.ceil( ( parseInt($('#about-slide-4').css('margin-top')) + $('.jcarousel').height() ) / 2 - 15 ) });

         }

        $animation_frame_height = $animation_bcg.height();
        // Check for touch
        if(Modernizr.touch) {
            // destroy skrollr elements
            console.log('win width: ' + winW);
            $('#slide-3').height( $animation_frame_height );
            $('.skrollr_el').remove();
            $('#slide2-ipad img').attr('src', 'images/ipad_slide2_org.jpg');

            if( $('#slide-1 .bcg.visible-tablet').is(':visible') ) {
                console.log('visible');

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

            // Init Skrollr
            //var s = skrollr.init();
            //s.destroy();
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
            //$video.attr( 'data-top', "transform: scale(" + ( $('#interior_ipad').height() * $video_koeff ) + "); opacity: 1 ");
          /*  if( ( $interior_ipad.height() * $video_h_koeff ) <= ( $interior_ipad.height() * 1.4178 * $video_h_koeff ) ) {
                $scale = $interior_ipad.height() * $video_h_koeff;
            } else {
                $scale = $interior_ipad.height() * 1.4178 * $video_h_koeff;
            }
            $video.attr( 'data-top', "transform: scale(" + $scale + "); opacity: 1 ");

            console.log($interior_ipad.width() + 'x' + $interior_ipad.height());
            console.log('width scale: ' + ($interior_ipad.height() * 1.4178 * $video_h_koeff)) ;
            console.log('height scale: ' + ($interior_ipad.height() * $video_h_koeff)) ;
            console.log('video_scale: ' + $scale );*/

            if( winW <= 1024 ) {
                $video.attr( 'data-top', "transform: scale(0.85); opacity: 1 ");
            } else if( winW <= 1280 ) {
                $video.attr( 'data-top', "transform: scale(0.69); opacity: 1 ");
            } else if( winW <= 1366 ) {
                $video.attr( 'data-top', "transform: scale(0.69); opacity: 1 ");
            } else {
                $video.attr( 'data-top', "transform: scale(0.75); opacity: 1 ");
            }


            $('#slide-3 .bcg, .skrollr_el').each(function (index, el) {
                $.each(el.attributes, function () {
                    if (this.name.indexOf('data-') === 0) {
                        $(el).removeAttr(this.name);
                        $(el).attr('data-anchor-target', '#slide-3');
                    }
                });
            });
            $('#slide-3 .bcg').attr('data-bottom-top', "position: relative;  bottom: 0px;");
            $('#slide-3 .bcg').attr('data--52-bottom', "position: absolute;  bottom: 0px;");

            // заново инициализируем атрибуты элементов анимации

            //console.log('$animation_frame_height: ' + $animation_frame_height);
            $('#slide-3').height($animation_frame_height * 2);

            $animation_bcg.attr('data--' + ($animation_frame_height ) + '-bottom-top', "position: fixed;  bottom: 0px;");

            // for visible-lg
            $('.visible-lg #fake_tabs ul').attr('data--' + $animation_frame_height + '-bottom-top', "visibility: visible");
            //$('#fake_tabs ul').attr('data-' + $('#fake_tabs').height() + '-bottom', "visibility: visible");
            $('.visible-lg #fake_tabs ul').attr('data--' + $('.visible-lg #fake_tabs').height() + '-bottom', "visibility: hidden");

            $('.visible-lg #fake_tabs ul li').first().attr('data--' + Math.floor($animation_frame_height * 1.25) + '-bottom-top', "bottom: 0px; opacity: 0;");
            $('.visible-lg #fake_tabs ul li').first().attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top', "bottom: 0; opacity: 1;");

            $('.visible-lg #fake_tabs ul li').eq(1).attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top', "bottom: 0px; opacity: 0;");
            $('.visible-lg #fake_tabs ul li').eq(1).attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top', "bottom: 0; opacity: 1;");

            $('.visible-lg #fake_tabs ul li').eq(2).attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top', "bottom: 0px; opacity: 0;");
            $('.visible-lg #fake_tabs ul li').eq(2).attr('data--' + Math.floor($animation_frame_height * 2 - 30) + '-bottom-top', "bottom: 0; opacity: 1;");


            // for visible-md
            $('.visible-md #fake_tabs ul').attr('data--' + $animation_frame_height + '-bottom-top', "visibility: visible");
            //$('#fake_tabs ul').attr('data-' + $('#fake_tabs').height() + '-bottom', "visibility: visible");
            $('.visible-md #fake_tabs ul').attr('data--' + $('.visible-md #fake_tabs').height() + '-bottom', "visibility: hidden");

            $('.visible-md #fake_tabs ul li').first().attr('data--' + Math.floor($animation_frame_height * 1.25) + '-bottom-top', "bottom: 0px; opacity: 0;");
            $('.visible-md #fake_tabs ul li').first().attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top', "bottom: 0; opacity: 1;");

            $('.visible-md #fake_tabs ul li').eq(1).attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top', "bottom: 0px; opacity: 0;");
            $('.visible-md #fake_tabs ul li').eq(1).attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top', "bottom: 0; opacity: 1;");

            $('.visible-md #fake_tabs ul li').eq(2).attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top', "bottom: 0px; opacity: 0;");
            $('.visible-md #fake_tabs ul li').eq(2).attr('data--' + Math.floor($animation_frame_height * 2 - 30) + '-bottom-top', "bottom: 0; opacity: 1;");

            // показываем этаж и кнопки с тенями
            $('#floor, #floor_back, #top_buttons').attr(
                'data--' + $animation_frame_height + '-bottom-top',
                "bottom: " + Math.floor($animation_frame_height / 6) + "px; opacity: 0.3;");
            $('#top_buttons_shadows').attr('data--' + $animation_frame_height + '-bottom-top', "opacity: 0; bottom: 4px;");
            $('#floor_shadow').attr('data--' + $animation_frame_height + '-bottom-top', "opacity: 0; bottom: 4px;");


            // заканчивается изменение этажа, кнопок с тенями
            $('#floor, #floor_back').attr('data--' + Math.floor($animation_frame_height * 1.25) + '-bottom-top', "bottom: 0; opacity: 1;");
            $('#top_buttons').attr('data--' + Math.floor($animation_frame_height * 1.25 + 50) + '-bottom-top', "bottom: 0; opacity: 1;");
            $('#top_buttons_shadows').attr('data--' + Math.floor($animation_frame_height * 1.25 + 50) + '-bottom-top', "opacity: 0.4;");
            $('#floor_shadow').attr('data--' + Math.floor($animation_frame_height * 1.25 + 50) + '-bottom-top', "opacity: 1;");

            // показываем панель управления светом с тенью и световые зоны
            $('#light_panel_shadows').attr('data--' + Math.floor($animation_frame_height * 1.35) + '-bottom-top', "opacity: 0; bottom: 0;");
            $('#light_panel').attr('data--' + Math.floor($animation_frame_height * 1.25) + '-bottom-top', "bottom: 450px; opacity: 0;");
            $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.25) + '-bottom-top', "bottom: 450px; opacity: 0;");

            // заканчивается изменение панели управления светом с тенью и световых зон
            $('#light_panel_shadows').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top', "opacity: 1;");
            $('#light_panel').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top', "bottom: 0; opacity: 1;");
            $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top', "bottom: 0; opacity: 1;");
            $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.7) + '-bottom-top', "bottom: 0; opacity: 0;");

            $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 1.95) + '-bottom-top', "bottom: 0; opacity: 0;");
            $('#light_zones').attr('data--' + Math.floor($animation_frame_height * 2 - 10) + '-bottom-top', "bottom: 0; opacity: 1;");


            // показываем панель управления климатом с тенью и зоны
            $('#climate_panel_shadows').attr('data--' + Math.floor($animation_frame_height * 1.6) + '-bottom-top', "opacity: 0; bottom: 0;");
            $('#climate_panel').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top', "bottom: 450px; opacity: 0;");
            $('#climate_zones').attr('data--' + Math.floor($animation_frame_height * 1.5) + '-bottom-top', "bottom: 450px; opacity: 0;");

            // заканчивается изменение панели управления климатом с тенью и зон
            $('#climate_panel_shadows').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top', "opacity: 1;");
            $('#climate_panel').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top', "bottom: 0; opacity: 1;");
            $('#climate_zones').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top', "bottom: 0; opacity: 1;");
            $('#climate_zones').attr('data--' + Math.floor($animation_frame_height * 1.9) + '-bottom-top', "opacity: 0;");

            // показываем панель управления сигнализацией и контур окон
            $('#alarm_panel').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top', "bottom: 450px; opacity: 0;");
            $('#alarm_cameras').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top', "bottom: 450px; opacity: 0;");
            $('#alarm_panel_shadows').attr('data--' + Math.floor($animation_frame_height * 1.8) + '-bottom-top', "bottom: 0; opacity: 0;");
            $('#alarm_windows').attr('data--' + Math.floor($animation_frame_height * 1.75) + '-bottom-top', "bottom: 0; opacity: 0;");

            // заканчивается изменение панели управления сигнализацией и контура окон
            $('#alarm_panel').attr('data--' + Math.floor($animation_frame_height * 2 - 30) + '-bottom-top', "bottom: 0; opacity: 1;");
            $('#alarm_cameras').attr('data--' + Math.floor($animation_frame_height * 2 - 30) + '-bottom-top', "bottom: 0; opacity: 1;");
            $('#alarm_panel_shadows').attr('data--' + Math.floor($animation_frame_height * 2 - 30) + '-bottom-top', "opacity: 1;");
            $('#alarm_windows').attr('data--' + Math.floor($animation_frame_height * 2 - 30) + '-bottom-top', "opacity: 1;");


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
            if (winW >= 768) {
                // Init Skrollr
                var s = skrollr.init({
                    render: function (data) {
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

                s.refresh($('#screendemo'));
                s.refresh($('.frame'));

            } else {
                // destroy skrollr elements
                $('#slide-3').height($animation_frame_height);
                $('.skrollr_el').remove();
                $('#slide2-ipad img').attr('src', 'images/ipad_slide2_org.jpg');

                // Init Skrollr
                var s = skrollr.init();
                s.destroy();

            }
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

    $('#three_components a').on('click', function(ev){
        ev.preventDefault();

        htmlbody.animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000);
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() >  Math.floor($(this).height() / 4 * 3 ) ) {
            $('.callback_fix_btn').fadeIn(500);
        } else {
            $('.callback_fix_btn').fadeOut(500);
        }

        //$('.navbar-custom .nav li a:focus').blur();

        if( $('#slide-1 .bcg.visible-tablet').is(':visible') ) {
            console.log('visible');

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

        // показываем заголовок формы обратного звонка
        if( location.pathname == '/' || location.pathname == '/en/' ) {
            if( $(this).scrollTop() >= ( $('#slide-4').offset().top - 100 ) ) {
                $('#callback_wrapper').fadeIn(350);
            } else {
                $('#callback_wrapper').fadeOut(350);
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
       // $('#dev-slide-3').height(Math.floor(window.innerWidth / k));
    }

    $window.on('resize', function(){

        frameResize();
        adjustWindow();

        fotoramaResize();

        console.log($('#interior_ipad').width() + 'x' + $('#interior_ipad').height());

        if($('.flexslider').length) {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                    adjustWindow();
                },
                init: function () {

                }
            });
        }

        //$('.fotorama__stage__shaft').width( Math.ceil( $('#gallery_wrapper').width() * 0.8 ) );

        /*var s = skrollr.init({
         render: function(data) {
         //Debugging - Log the current scroll position.
         console.log(data.curTop);
         }
         });*/


        // Refresh Skrollr after resizing our sections
        //s.refresh($('.frame'));

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

            console.log('resize');
            tabulousInit();
            $tabs_container_height = $first_tab.height() + 20;
            $tabs_container.height($tabs_container_height);
        }

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
            effect = tabs_effects[i],
            $tabs = $tabs_container.parent('div[id ^= tabs]');

        //console.log($tabs_container);
        //console.log($tabs);

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

    $('a.inner_anchor').on('click', function(ev){
        ev.preventDefault();

        $('#tabs a, #fake_tabs a').removeClass('tabulous_active');

        $('#fake_tabs a[href=' + $(this).attr('href') + '], #tabs a[href=' + $(this).attr('href') + ']').addClass('tabulous_active');

        dataslide = $(this).data('slide');
        goToByScroll(dataslide);

        if( $(this).closest('div').attr('id') == 'fake_tabs' ) {
            $('#tabs a[href=' + $(this).attr('href') + ']').click();
        }
    });

    $('#fake_tabs ul li a, #slide-4 .visible-lg li a, #slide-4 .visible-md li a, #slide-4 .visible-sm li a, #slide-4 .visible-xs li a').on('click', function(ev){
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
    $('#inputPhone, #inputEmail').on('keypress', function(){
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
        $('#callback_form').slideToggle(350);
    });

    $('.offer-send-btn').on('click', function(ev){
        var $lang = $('html').attr('lang'),
            $url = 'send_email.php',
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
            // все обязательные поля формы заполнены, отправляем письмо
            if( $lang != 'ru' ) {
                $url = '../' + $url;
            }

            $.post($url, $form.serialize(), function(data){

                if( $lang != 'en' ) {
                    var $str = '<div class="result">Ошибка отправки письма. <br/>' + (data.msg) + '</div>';

                    if( data.msg == 1 ) {
                        $str = '<div class="result">&mdash; Спасибо!<br> Мы свяжемся с вами в течение часа.</div>';
                    }
                } else {
                    var $str = '<div class="result">Email sending error. <br/>' + (data.msg) + '</div>';

                    if( data.msg == 1 ) {
                        $str = '<div class="result">&mdash; Thanks!<br> We will contact you shortly.</div>';
                    }
                }

                $('#mySuccessModal .modal-body').html($str);
                $('#mySuccessModal').modal();
            }, 'json')
            .fail(function() {
                alert( "error" );
            });
        }
        else
        {
            $('#mySuccessModal .modal-body').html(( $lang == 'ru' ? '<p>Не все обязательные поля формы заполнены!</p>' : '<p>Some required fields are empty!</p>'));
            $('#mySuccessModal').modal();
        }

        $form.find(':input').each(function(){
            $(this).val('');
        });
        $('#callback_title').click();
    });


    $('#myModal .callback_form').on('submit', function(ev){
        ev.preventDefault();

        $('.send-btn').click();
    });

    $('.send-btn').on('click', function(){
        //console.log('click');

        //console.log($(this).closest('.modal.fade').attr('id'));
        var $modalID = '#' + $(this).closest('.modal.fade').attr('id').toString(),
            $str = '',
            $url = 'send_email.php';

        //console.log(location.href.search('/en'));

        if( $($modalID + ' #inputPhone').val() == '' ) {
            if( location.href.search('/en') != -1 ) {
                $str = 'The field "Cellphone Number" can\'t be empty';
            } else {
                $str = 'Вы не заполнили поле "Телефон"';
            }
            $($modalID + ' #error').text($str);
            $($modalID + ' .alert').fadeIn(250);
        } else {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,7}$/i;

            if( $($modalID + ' #inputPhone').val() != '' ) {

                //Верно
                // $($modalID + ' #inputEmail').closest('div.form-group').removeClass('has-error').addClass('has-success');

                // отправляем письмо
                //$($modalID + ' #inputCheck').val($('body').data('check'));

                //console.log($('.callback_form').serialize());

                if( location.href.search('/en') ) {
                    $url = '../' + $url;
                }

                $.post( $url, $($modalID + ' .callback_form').serialize(), function (data) {

                    //console.log(data);
                    if( location.href.search('/en') == -1 ) {
                        var $str = '<div class="result">Ошибка отправки письма. <br/>' + (data.msg) + '</div>';

                        if( data.msg == 1 ) {
                            $str = '<div class="result">&mdash; Спасибо!<br> Мы свяжемся с вами в течение часа.</div>';
                        }
                    } else {
                        var $str = '<div class="result">Email sending error. <br/>' + (data.msg) + '</div>';

                        if( data.msg == 1 ) {
                            $str = '<div class="result">&mdash; Thanks!<br> We will contact you shortly.</div>';
                        }
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

    $('#myAppStoreModal .ios_form').on('submit', function(ev){
        ev.preventDefault();

        $('.send-ios-btn').click();
    });

    $('.send-ios-btn').on('click', function(){
        console.log('click');

        console.log($(this).closest('.modal.fade').attr('id'));
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

    // show project list
    $('#project_title').on('click', function(){
        $('#project_list').fadeToggle();
    });

    // hide project list
    $('#proj_list_close').on('click', function(){
        // $('#project_list').animate({'opacity': 0}, 250).css({'left': '-5000px'});
        $('#project_list').fadeOut();
    });

    var $projects_cnt = $('#project_list li').length;
    var $project_gallery = $('.project_gallery');
    $project_gallery.width($('.project_gallery .gallery_container.active').innerWidth());
    //$project_gallery.width($('#slide-6 .header + div').width());
    var $gallery_width = $project_gallery.width();

    function projectsInit()
    {
        var $rand_project = Math.floor((Math.random() * $projects_cnt));

        $('#project_list ul')
            .find('li')
            .eq($rand_project)
            .addClass('active');

        $('#project_title').text($('#project_list ul li.active a').text());
        $('.gallery_container')
            .eq($rand_project)
            .addClass('active');

        fotoramaResize();
    }

    projectsInit();

    function fotoramaResize()
    {
        var $fotorama = $('#gallery_wrapper .gallery_container.active .fotorama');
        $gallery_width = $('#gallery_wrapper').width() - $('#gallery_wrapper .gallery_container.active .car-caption').outerWidth();
        $fotorama.width($gallery_width).data('width',$gallery_width); // forse resize
        $fotorama.resize({'width': $gallery_width + 'px' });

        //console.log('width: ' + $gallery_width);
    }

    // change active project in gallery
    function changePojectGallery(el)
    {
        //$('.project_gallery .carousel.active').removeClass('active').closest('.gallery_container').removeClass('active');
        $('.gallery_container.active').removeClass('active');
        $( el.attr('href')).addClass('active').closest('.gallery_container').addClass('active');

        fotoramaResize();

    }

    // make project counter string
    function makeProjectCounterString()
    {
        var $cur_index = $('#project_list li.active').index() + 1,
            $str = 'Проект ' + $cur_index.toString() + ' из ' + $projects_cnt.toString();

        if(location.href.search('/en') != -1) {
            $str = 'Project ' + $cur_index.toString() + ' of ' + $projects_cnt.toString();
        }
        /*else if (location.href.search('/ru') != -1 || location.pathname.length == 1)
            $str = 'Проект ' + $cur_index.toString() + ' из ' + $projects_cnt.toString();*/

        $('#proj_counter').text($str);
    }

    makeProjectCounterString();

    function sliderResize()
    {
        var $img_width = 885, $img_height = 550;

        $gallery_width = $('.navbar > div.container').width() - 60; //$project_gallery.width();
        $project_gallery.width($gallery_width);

        var $koeff = ($img_width / $img_height).toFixed(1),
            $inner_diff = $gallery_width - $('.gallery_container.active .car-caption').innerWidth();

        $('.project_gallery .carousel').width($inner_diff);

        $fw_height = Math.floor($inner_diff / $koeff);

        var $new_height = $fw_height; //( $fh_height < $fw_height ) ? Math.floor($fh_height) : Math.floor($fw_height);

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
    $('#project_list a').on('click', function(ev){
        ev.preventDefault(); //console.log('prevent click 5');

        $('#project_list li.active').removeClass('active');
        $('#project_title').text($(this).text());
        $(this).closest('li').addClass('active');

        $('#proj_list_close').click();
        changePojectGallery($(this));
        makeProjectCounterString();
    });

    /*$window.on('resize', function(){
     sliderResize(); // resize project gallery
     });*/

    // show previous project of gallery
    $('#proj_prev').on('click',function(ev){
        var $cur_proj_index = $('#project_list li.active').index(),
            $new_proj_index = -1,
            $new_active_proj;

        ev.preventDefault(); //console.log('prevent click 8');

        if( $cur_proj_index == 0)
            $new_proj_index = $projects_cnt - 1;
        else
            $new_proj_index = $cur_proj_index - 1;

        $new_active_proj = $('#project_list li').eq( $new_proj_index );

        $('#project_list li.active').removeClass('active');
        $new_active_proj.addClass('active');
        $('#project_title').text( $new_active_proj.text() );

        $('#proj_list_close').click();

        changePojectGallery($new_active_proj.children('a'));

        makeProjectCounterString();

    });

    // show next project of gallery
    $('#proj_next').on('click',function(ev){
        var $cur_proj_index = $('#project_list li.active').index(),
            $new_proj_index = -1,
            $new_active_proj;

        ev.preventDefault(); //console.log('prevent click 9');

        if( $cur_proj_index == ($projects_cnt - 1))
            $new_proj_index = 0;
        else
            $new_proj_index = $cur_proj_index + 1;

        $new_active_proj = $('#project_list li').eq( $new_proj_index );

        $('#project_list li.active').removeClass('active');
        $new_active_proj.addClass('active');
        $('#project_title').text( $new_active_proj.text() );

        $('#proj_list_close').click();

        changePojectGallery($new_active_proj.children('a'));

        makeProjectCounterString();
    });

   // $('#inputPhone').mask("+7 (000) 000-0000");

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

    /* main page top carousel */

    if( $('#slide-1 #carousel').length ) {
        var $myCarousel = $('#slide-1 #carousel');

        // Initialize carousel
        $myCarousel.carousel({
           // interval: 6000
        });

        // Select the elements to be animated
        // in the first slide on page load
        var $firstAnimatingElems = $myCarousel.find('.item:first')
            .find('[data-animation ^= "animated"]');

        // Apply the animation using our function
        doAnimations($firstAnimatingElems);

        // Pause the carousel
        $myCarousel.carousel('pause');

        // Attach our doAnimations() function to the
        // carousel's slide.bs.carousel event
        $myCarousel.on('slide.bs.carousel', function (e) {
            // Select the elements to be animated inside the active slide
            var $animatingElems = $(e.relatedTarget)
                .find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });
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

} )( jQuery );

/**
 * Created by shabashov on 02.07.15.
 */
