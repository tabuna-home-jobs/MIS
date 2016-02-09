jQuery(document).ready(function($){

    $(".caruselTeachers .item:first-child").addClass('active');

    $("#accordion .panel-collapse:first-child").addClass('in');



});

function luchstep2(){

    jQuery(".luchstep1").slideUp('slow', function(){

        jQuery(".luchstep2").slideDown('slow');
    });

}
function luchstep1(){

    jQuery(".luchstep2").slideUp('slow', function(){

        jQuery(".luchstep1").slideDown('slow');
    });

}
