var resized = function () {

    $('.doctors-detail').each(function(){
        var height_this = $(this).height();
        height_this > height ? height = height_this:'';
    });

    $('.doctors-detail').height(height);
};



$(window).on('load',function(){
    var height = 0;
    $('.doctors-detail').each(function(){
        var height_this = $(this).height();
        if(height_this > height){
            height = height_this
        }

    });


    $('.doctors-detail').height(height);
});

$(window).on('resize',function(){

    $('.doctors-detail').css('height','auto');
    var height = 0;
    $('.doctors-detail').each(function(){
        var height_this = $(this).height();
        if(height_this > height){
            height = height_this
        }

    });


    $('.doctors-detail').height(height);
});
