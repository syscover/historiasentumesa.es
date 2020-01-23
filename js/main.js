$(document).ready(function () {

    $('#enter_link').on('click', function(e){
        e.preventDefault();
        $('#welcome').fadeOut(500);
    });

    var s = null;

    var backgroundCurrent = $('.swiper-bg-current'),
        backgroundNext = $('.swiper-bg-next'),
        sliderSpeed = 1500;

    var navigation = new Swiper('.navigation', {
        centeredSlides: true,
        slideToClickedSlide: true,
        speed: sliderSpeed,
        runCallbacksOnInit: true,
        loop: true,
        loopedSlides: 11,
        slidesPerView: 'auto',
        observer: true,
        watchSlidesProgress: false,
        touchRatio:.5,
        onSliderMove: function(swiper, event){
            //Cuando se empieza a arrastrar

            console.log('onSliderMove');
            var nextSlide = null,
                nextSlideBg = null,
                nextOpacity = (Math.abs(swiper.touches.diff) / $('.navigation .swiper-wrapper > .swiper-slide').width()).toFixed(3),
                currentSlide = null;

            console.log(nextOpacity % 1);

            if(swiper.swipeDirection === "next"){
                nextSlide = $('.slider .swiper-wrapper > .swiper-slide:nth-child('+(swiper.activeIndex+2+Math.trunc(nextOpacity))+')');
                nextSlideBg = nextSlide.attr('data-background-rgb');
                currentSlide = (swiper.activeIndex+1+Math.trunc(nextOpacity));
            }else{
                nextSlide = $('.slider .swiper-wrapper > .swiper-slide:nth-child('+((swiper.activeIndex)-Math.trunc(nextOpacity))+')');
                nextSlideBg = nextSlide.attr('data-background-rgb');
                currentSlide = (swiper.activeIndex+1-Math.trunc(nextOpacity));
            }
            backgroundCurrent.css({
                'background': 'rgb('+$('.slider .swiper-wrapper > .swiper-slide:nth-child('+currentSlide+')').attr('data-background-rgb')+')'
            });
            backgroundNext.css({
                'background': 'rgb('+nextSlideBg+')',
                'opacity': nextOpacity % 1
            });
            doParallax(swiper);
        }


    });

    //initialize swiper when document ready
    var productsSlider = new Swiper ('.slider', {
        loop: true,
        loopedSlides: <?php echo $product_count;?>,
    slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: $(window).width()/5,
        speed: sliderSpeed,
        effect: 'slide', //"slide", "fade", "cube", "coverflow" or "flip"
        virtualTranslate: false,
        parallax: false,
        grabCursor: true,
        uniqueNavElements: false,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        a11y: true,
        prevSlideMessage: 'Ir al producto anterior',
        nextSlideMessage: 'Ir al siguiente producto',
        firstSlideMessage: 'Este es el primer producto',
        lastSlideMessage: 'Este es el último producto',
        paginationBulletMessage: 'Ir al producto {{index}}',
        runCallbacksOnInit: true,
        watchSlidesProgress: true,
        hashnav: true,
        hashnavWatchState: true,
        replaceState: true,
        observer: true,
        touchRatio: 1.5,
        onInit: function(swiper){
        var activeSlide = $('.swiper-wrapper > .swiper-slide:nth-child('+(swiper.activeIndex+1)+')'),
            activeSlideBg = activeSlide.attr('data-background-rgb');
        backgroundCurrent.css('background', 'rgb('+activeSlideBg+')');
        backgroundNext.css('opacity', 0);

        var title_difference = parseInt(($('.swiper-slide .inner').offset().top + parseInt($('.swiper-slide .inner').css('padding-top'))) - $('.swiper-slide .title_content').offset().top);
        var title_movement = 0;

        s = skrollr.init({
            render: function(data) {
                console.log(data.curTop);
                title_movement = parseInt(data.curTop + title_difference);
                if(data.curTop > title_difference && title_movement < 0){
                    $('.title_content .title').css({
                        'transform': 'translate(0,'+title_movement+'px)'
                    })
                }else{
                    $('.title_content .title').css({
                        'transform': 'translate(0,0px)'
                    })
                }


            },
            beforerender: function(data){

            },
            forceHeight: false,
            smoothScrolling: false,
            smoothScrollingDuration: 1,
            mobileCheck: function(){
                return (/Android|iPhone|iPad|iPod|BlackBerry/i).test(navigator.userAgent || navigator.vendor || window.opera);
                //return true;
            },
            scale: 3
        });

    },
    onSlideChangeStart: function(swiper){
    },
    onTransitionStart: function(swiper){
        console.log('onTransitionStart');
        //console.log(swiper);
        if(swiper.activeIndex != swiper.previousIndex){
            console.log('Cambiando');
            var activeSlide = $('.swiper-wrapper > .swiper-slide:nth-child('+(swiper.activeIndex+1)+')'),
                activeSlideBg = activeSlide.attr('data-background-rgb');
            backgroundNext.css('background', 'rgb('+activeSlideBg+')');
            backgroundNext.animate({
                opacity: 1
            }, swiper.params.speed, function(){
                backgroundCurrent.css('background', 'rgb('+activeSlideBg+')');
                backgroundNext.css('opacity', 0);
            })
        }else{
            console.log('no ha habido cambio');
            var activeSlide = $('.swiper-wrapper > .swiper-slide:nth-child('+(swiper.activeIndex)+')'),
                activeSlideBg = activeSlide.attr('data-background-rgb');
            backgroundNext.animate({
                opacity: 0
            }, swiper.params.speed);
        }
        doParallaxAnimation(swiper);

    },
    onTransitionEnd: function(swiper){
        console.log('onTransitionEnd');
        backgroundNext.css('opacity', 0);



    },
    onTouchStart: function(swiper, event){
        //Cuando se empieza a arrastrar
    },
    onTouchMove: function(swiper, event){
        //Siempre que se arrastra
    },
    onSliderMove: function(swiper, event){
        //Cuando se empieza a arrastrar
        //console.log('onSliderMove');
        var nextSlide = null,
            nextSlideBg = null,
            nextOpacity = (Math.abs(swiper.touches.diff) / swiper.width).toFixed(3);
        if(swiper.swipeDirection === "next"){
            nextSlide = $('.swiper-wrapper > .swiper-slide:nth-child('+(swiper.activeIndex+2)+')');
        }else{
            nextSlide = $('.swiper-wrapper > .swiper-slide:nth-child('+(swiper.activeIndex)+')');
        }
        nextSlideBg = nextSlide.attr('data-background-rgb');
        backgroundNext.css({
            'background': 'rgb('+nextSlideBg+')',
            'opacity': nextOpacity
        });
        doParallax(swiper);
    },
    onSlideChangeEnd: function(swiper){
        console.log('onSlideChangeEnd');
    },
    onSetTransition: function(swiper, transition){
        if(swiper.activeIndex != swiper.previousIndex){
            console.log('Cambiando');
            var activeSlide = $('.swiper-wrapper > .swiper-slide:nth-child('+(swiper.activeIndex+1)+')');
        }else{
            console.log('no ha habido cambio');
            var activeSlide = $('.swiper-wrapper > .swiper-slide:nth-child('+(swiper.activeIndex)+')')
        }
        console.log(activeSlide.attr('data-hash'));
        loadProduct(activeSlide.attr('data-hash'));
    }
});

navigation.params.control = productsSlider;
productsSlider.params.control = navigation;

function doParallax(swiper){
    //console.log(swiper)
    //console.log(swiper.previousIndex)
    console.log('progress: ' + swiper.progress);
    console.log('translate: ' + swiper.translate);
    console.log('virtualSize: ' + swiper.virtualSize);
    //console.log(swiper.realIndex)
    //console.log(swiper.size) // Tamaño de cada slide
    //console.log(swiper.snapIndex)
    //console.log(swiper.swipeDirection);
    $('.swiper-slide .parallax').each(function(e){
        $(this).css({
            'transform': 'translate('+$(this).closest('.swiper-slide').offset().left * $(this).attr('data-parallax')+'px, 0px)'
        })
    });
}
function doParallaxAnimation(swiper){
    $('.swiper-slide .parallax').each(function(e){
        $(this).css({
            'text-indent': $(this).closest('.swiper-slide').offset().left * $(this).attr('data-parallax')
        });
        $(this).animate({
            textIndent: 0
        }, {
            step: function(now, fx){
                $(this).css({
                    'transform': 'translate('+now+'px, 0px)'
                })
            },
            duration: swiper.params.speed
        },'easeOutSine')
    });
}

function loadProduct(product_slug){
    $.ajax({
        url: 'products/contents/'+product_slug+'.php',
        cache: false,
        success: function(html) {
            $("#product_content").html(html);
        },
        complete: function(){
            setTimeout(s.refresh, 100);
        }
    });
}

function showMap(){
    $('#map_container').fadeIn(300);
}

function closeMap(){
    $('#map_container').fadeOut(600);
}

function closeAndGoTo(slug){
    var index = $('.swiper-slide[data-hash="'+slug+'"]').index();
    console.log(index);
    productsSlider.params.speed = 1;
    navigation.params.speed = 1;
    productsSlider.slideTo(index, 1);
    navigation.slideTo(index, 1);
    closeMap();
    setTimeout(function(){
        productsSlider.params.speed = sliderSpeed;
        navigation.params.speed = sliderSpeed;
    }, 100);
}

$('.closeAndGoTo').on('click', function(e){
    e.preventDefault();
    closeAndGoTo($(this).attr('href'));
});



$('.map-link').on('click', function(e){
    e.preventDefault();
    if($(this).attr('data-map')){
        console.log($(this).attr('data-map'))
    }
    showMap();
});

$('#close_map').on('click', function(e){
    e.preventDefault();
    closeMap();
});

$('.map_pointer').click(function(){
    /*console.log('Top: ' +$(this).position().top);
     console.log('Left: ' +$(this).position().left)*/
});

$('.map_pointer').on({
    click: function() {
        closeAndGoTo($(this).attr('data-product'));
    },
    mouseenter: function() {
        console.log($(this).attr('data-product'));
        $('.map_list a[href="'+$(this).attr('data-product')+'"]').addClass('hover');
    },
    mouseleave: function() {
        $('.map_list a[href="'+$(this).attr('data-product')+'"]').removeClass('hover');
    }
});

var map_img = $('#map_img');
var map_zoom = $('.map_img_zoom');
var map_pointer_size = 11;
var map_img_size = map_img.width();
var map_aumented_scale = 1.5;
$('.map_list li').hover(
    function() {
        //Enter hover
        var map_pointer = $('.map_pointer[data-product="'+$(this).attr('data-product')+'"]');
        map_pointer.addClass('hover');

        console.log(map_img.width());

        var translateY = parseInt((map_img.height()/2) - ((map_pointer.offset().top + (map_pointer_size/2)) - map_img.offset().top));
        var translateX = parseInt((map_img.width()/2) - ((map_pointer.offset().left + (map_pointer_size/2)) - map_img.offset().left));

        map_img.css({
            'transform': 'translate('+ translateX +'px, '+ translateY +'px)'
        });

        map_zoom.css({
            'transform': 'scale(1.5)'
        })

    }, function() {
        //Exit hover
        var map_pointer = $('.map_pointer[data-product="'+$(this).attr('data-product')+'"]');
        map_pointer.removeClass('hover');
        map_img.css({
            'transform': 'translate(0px, 0px)'
        })
        map_zoom.css({
            'transform': 'scale(1)'
        })
    }
);
});