(function ($) {

    $(document).ready(function(){
        $('.bxslider').each(function(){
            $(this).bxSlider({
                mode: $(this).data('bxslider-mode'),
                speed: 4000,
                slideMargin: $(this).data('bxslider-slide-margin'),
                startSlide: $(this).data('bxslider-start-slide'),
                randomStart: $(this).data('bxslider-random-start'),
                slideSelector: $(this).data('bxslider-slide-selector'),
                infiniteLoop: $(this).data('bxslider-infinite-loop'),
                hideControlOnEnd: $(this).data('bxslider-hide-control-on-end'),
                captions: $(this).data('bxslider-captions'),
                ticker: $(this).data('bxslider-ticker'),
                tickerHover: $(this).data('bxslider-ticker-hover'),
                adaptiveHeight: $(this).data('bxslider-adaptive-height'),
                adaptiveHeightSpeed: $(this).data('bxslider-adaptive-height-speed'),
                video: $(this).data('bxslider-video'),
                responsive: $(this).data('bxslider-responsive'),
                useCSS: $(this).data('bxslider-use-css'),
                easing: $(this).data('bxslider-easing'),
                preloadImages: $(this).data('bxslider-preload-images'),
                touchEnabled: $(this).data('bxslider-touch-enabled'),
                swipeThreshold: $(this).data('bxslider-swipe-threshold'),
                oneToOneTouch: $(this).data('bxslider-one-to-one-touch'),
                preventDefaultSwipeX: $(this).data('bxslider-prevent-default-swipe-x'),
                preventDefaultSwipeY: $(this).data('bxslider-prevent-default-swipe-y'),
                auto:true,
                controls:false,
                mode:'fade'
            });
        });

    })


})(jQuery);

