new WOW().init();
(function ($) {

    $('#menu-header li a').click(function () {
        var section = $(this).attr('rel');

        if (section != 'news') {
            $('#' + section).animatescroll({
                padding: '32'
            });
        }
    });


    $(window).scroll(function () {
        var window = $(document).scrollTop();

        console.log('window ---> ',window);

        if(window < 500 ){
            sect = 'sobre-pato'
            console.log('window ---> ',sect);
        }else if(window > 914 && window < 2759){
            sect = 'recetas'
            console.log('window ---> ',sect);
        }else if(window > 2759 && window < 3500){
            sect = 'contacto'
            console.log('window ---> ',sect);
        }

        if (window > 3500){
            $('.nav-vert-bottom').fadeOut();
        }else{
            $('.nav-vert-bottom').fadeIn();
        }

        if (window > 3500){
            $('.nav-vert-bottom').fadeOut();
        }else{
            $('.nav-vert-bottom').fadeIn();
        }


        $('.nav-vert-bottom img').unbind().click(function(){
            console.log('about ---> ',sect);
            $('#' + sect).animatescroll({
                padding: '32'
            });

        });


    });


})(jQuery);

function getPosition(element) {
    var xPosition = 0;
    var yPosition = 0;

    while (element) {
        xPosition += (element.offsetLeft - element.scrollLeft + element.clientLeft);
        yPosition += (element.offsetTop - element.scrollTop + element.clientTop);
        element = element.offsetParent;
    }
    return {x: xPosition, y: yPosition};
}