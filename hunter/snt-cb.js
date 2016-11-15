$('#snt-btn-submit').click(function(){
    $('#snt-input-wrapper').css('display', 'inline-block');
    $('#snt-input-wrapper').removeClass("snt-phone-show");
    if($('#snt-input-wrapper').hasClass('slideOutRight')){
        $('#snt-input-wrapper').removeClass("slideOutRight");
        $('#snt-input-wrapper').addClass("slideInRight");
    }else{
        $('#snt-input-wrapper').removeClass("slideInRight");
        $('#snt-input-wrapper').addClass("slideOutRight");
    }
});

$('#snt-btn-email').click(function(){
    if($('#snt-popup').hasClass('snt-close')){
        $('#snt-popup').removeClass("snt-close");
        $('#snt-mask').fadeIn();
        $('#snt-popup').fadeIn();
    }else{
        $('#snt-popup').addClass("snt-close");
        $('#snt-mask').fadeOut();
        $('#snt-popup').fadeOut();
    }
});

$('#snt-close-btn').click(function(){
    $('#snt-popup').fadeOut();
    $('#snt-mask').fadeOut();
     $('#snt-popup').addClass("snt-close");
});