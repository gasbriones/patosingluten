jQuery(document).ready(function () {

    jQuery('.menu .item').hover(function () {
        jQuery(this).find('.item-bg').stop().animate({height: '30px'}, 250).find('.bg').stop().animate({opacity: 0}, 250, function () {
            jQuery(this).parent().find('span').show();
        });
    }, function () {
        if (jQuery(this).attr('class') != 'item active') {
            jQuery(this).find('.item-bg').stop().animate({height: '100%'}, 250).find('.bg').stop().animate({opacity: 1}, 250, function () {
                jQuery(this).parent().find('span').hide();
            });
        }
    });

    jQuery('.mobile-btn').on('click',function(){
        jQuery('.menu-mobile').slideToggle();
    });

   switch (jQuery('body').attr('class')){
        case 'obras':
            jQuery('.slider').bxSlider({
                pagerCustom: jQuery('.thumb'),
                slideWidth:583,
                captions: true,
                adaptiveHeight:true
            });
        break;
       case 'contacto':
           jQuery('#contact-form').submit(function(e){
               e.preventDefault();
               jQuery.ajax({
                   url:'siteWideMessage',
                   data:jQuery(this).serialize(),
                   success:function(){
                       alert('Su mensaje fue enviado');
                   }
               });
           });


           break;
    }


});

