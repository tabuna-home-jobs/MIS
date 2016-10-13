/**
 * Created by hotaru_tomu on 01.09.16.
 */
$(document).ready(function() {

    // var h_top =  $('.header-top').outerHeight();
    var h_top = 20;
    $(window).scroll(function () {

        var top = $(document).scrollTop();
        if (top > h_top) {
            $(".navbar-top").addClass('fixheader');
        }
        else {

            $(".navbar-top").removeClass('fixheader');
        }
    });

    $('.highslide').fancybox();

});


var resized = function (height) {

    $('.border_gradient .list-unstyled').each(function(){
        var height_this = $(this).height();
        height_this > height ? height = height_this:'';
    });

    $('.border_gradient .list-unstyled').height(height);
};

$(window).resize(function(){
    var height = 0;
    $('.border_gradient .list-unstyled').each(function(){
        var height_this = $(this).height();
        if(height_this > height){
            height = height_this;
        }
    });

    $('.border_gradient .list-unstyled').height(height);
});

window.onload=function(){
    var height = 0;
    $('.border_gradient .list-unstyled').each(function(){
        var height_this = $(this).height();
        if(height_this > height){
            height = height_this;
        }
    });

    $('.border_gradient .list-unstyled').height(height);
}
