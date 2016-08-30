/**
 * Created by hotaru_tomu on 04.08.16.
 */
$(document).ready(function(){
    $('.highslide, .fancybox').fancybox();

    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };


    if(!isMobile.any()) {
        $('.header').addClass('fixheader');
        $('.development-studio,.page-content, .sub-page-content, #wrapper-content').addClass('m-t-150');

       // var h_top =  $('.header-top').outerHeight();
        var h_top = 20;
        $(window).scroll(function () {

            var top = $(document).scrollTop();
            if (top > h_top) {
                $(".header").addClass('top');
            }
            else {

                $(".header").removeClass('top');
            }
        });
    }

});
