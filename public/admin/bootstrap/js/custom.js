//Тайм пикер для акций

$(function () {

    $('#datetimepickerstart').datetimepicker({
         locale: 'ru'
    });


    $('#datetimepickerend').datetimepicker({
        locale: 'ru'
    });

    $("#datetimepickerstart").on("dp.change", function (e) {
        $('#datetimepickerned').data("DateTimePicker").minDate(e.date);
    });
    $("#datetimepickerstart").on("dp.change", function (e) {
        $('#datetimepickerend').data("DateTimePicker").maxDate(e.date);
    });

});

