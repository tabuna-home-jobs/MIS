/**
 * Created by hotaru_tomu on 04.08.16.
 */
$(document).ready(function(){


    $('.cirleses .circle:nth-child(4)').addClass('width-4');
    $('.cirleses .circle:nth-child(1),.development-studio .circle:nth-child(6)').addClass('width-1');
    $('.cirleses .circle:nth-child(3),.development-studio .circle:nth-child(8)').addClass('width-3');
    $('.cirleses .circle:nth-child(2),.development-studio .circle:nth-child(5),.development-studio .circle:nth-child(7)').addClass('width-2');


    $('.autoplay').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

});


var resized = function () {

    $('.single-st').each(function(){
        var height_this = $(this).height();
        height_this > height ? height = height_this:'';
    });

    $('.single-st').height(height);
};



$(window).on('load',function(){
    var height = 0;
    $('.single-st').each(function(){
        var height_this = $(this).height();
        if(height_this > height){
            height = height_this
        }

    });


    $('.single-st').height(height);
});
