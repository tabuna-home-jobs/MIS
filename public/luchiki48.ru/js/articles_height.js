/**
 * Created by hotaru_tomu on 04.08.16.
 */
var resized = function (height) {

    $('.item-row').each(function(){
        var height_this = $(this).height();
        height_this > height ? height = height_this:'';
    });

    $('.item-row').height(height);
};

$(window).resize(function(){
    var height = 0;
    $('.item-row').each(function(){
        var height_this = $(this).height();
        if(height_this > height){
            height = height_this;
        }
    });

    $('.item-row').height(height);
});

window.onload=function(){
    var height = 0;
    $('.item-row').each(function(){
        var height_this = $(this).height();
        if(height_this > height){
            height = height_this;
        }
    });

    $('.item-row').height(height);
}
