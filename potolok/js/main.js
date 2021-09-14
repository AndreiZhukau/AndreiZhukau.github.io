$(function() {
    $('#square').keyup(function(){
        var square = $(this).val();
        $('#price').val(square*6)
    });
    $('#price').keyup(function(){
        var price = $(this).val();
        $('#square').val((price/6).toFixed(2))
    });

    $('.carousel__inner').slick({
    arrows: false,
    dots: true,
    slidesToShow: 3,
    responsive: [
        {
            breakpoint: 841,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 601,
            settings: {
                slidesToShow: 1
            }
        },
    ]
});

$('.ask__blocks .item h4').click(function(){
    var thisH4 = $(this),
        thisSpan = $('div', $(this).parent()),
        outherH4 = $('.ask__blocks .item h4').not(thisH4),
        outherSpan = $('.ask__blocks .item div').not(thisSpan);
    outherH4.removeClass('active');
    outherSpan.hide().removeClass('active');
    thisH4.toggleClass('active');
    thisSpan.fadeToggle().toggleClass('active');
});

$('.up').click(function() {
    $('body,html').animate({scrollTop:0},1000);
    return false;
})

});