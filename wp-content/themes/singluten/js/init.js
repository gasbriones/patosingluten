new WOW().init();

(function ($) {


    $.scrollify({
        section : "section",
        sectionName : "section-name",
        easing: "easeOutExpo",
        scrollSpeed: 1100,
        offset : -25,
        scrollbars: true,
        before:function() {
            var currentSection = $($.scrollify.current()).attr('id');

            if(currentSection == 'contacto'){
                $('.nav-vert-bottom').fadeOut()
            }else{
                $('.nav-vert-bottom').fadeIn()
            }
            if(currentSection == 'header'){
                $('.nav-vert-top').fadeOut()
            }else{
                $('.nav-vert-top').fadeIn()
            }
        }
    });


    $('.nav-vert-bottom img').click(function(){
        $.scrollify.next();
    })

    $('.nav-vert-top img').click(function(){
        $.scrollify.previous();
    })

})(jQuery);