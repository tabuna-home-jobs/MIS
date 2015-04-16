//Тайм пикер для акций
$(document).ready(function(){


    //Тайм пикер для акций
    $(function () {
        if(document.getElementById('datetimepickerstart') &&  document.getElementById('datetimepickerend')){

                $('#datetimepickerstart').datetimepicker({
                    locale: 'ru',
                    defaultDate:  $('#datetimepickerstart input').attr('value')
                });

                $('#datetimepickerend').datetimepicker({
                    locale: 'ru',
                    defaultDate:  $('#datetimepickerend input').attr('value')
                });

                $("#datetimepickerstart").on("dp.change", function (e) {
                    $('#datetimepickerend').data("DateTimePicker").minDate(e.date);
                });
                $("#datetimepickerend").on("dp.change", function (e) {
                    $('#datetimepickerstart').data("DateTimePicker").maxDate(e.date);
                });

         };
    });




});


