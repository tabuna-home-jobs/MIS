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

});
