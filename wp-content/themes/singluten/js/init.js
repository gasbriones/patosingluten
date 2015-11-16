new WOW().init();

(function ($) {

    $('#menu-header li a').click(function(){
        var section =  $(this).attr('rel');

        if(section != 'news'){
            $('#'+section).animatescroll({
                padding:'32'
            });
        }
    });

})(jQuery);