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



    //Визуальный редактор
    $(function () {
            tinymce.init({
                theme: "modern",
                skin: 'light',
                language: 'ru',
                selector: "textarea.textareaedit",
                extended_valid_elements: "img[class=img-responsive|!src|border:0|alt|title|width|height|style]",
                plugins: "image,code,link,preview,hr,media,responsivefilemanager",
                toolbar: "styleselect | fontsizeselect   | bullist numlist outdent indent | link image media  | preview code | more  ",
                menu: "false",
                statusbar: false,
                setup: function (editor) {
                    editor.addButton('more', {
                        text: 'Превью',
                        onclick: function () {
                            editor.insertContent('<!--more-->');
                        }
                    });
                },

                external_filemanager_path: "/admin/filemanager/",
                filemanager_title: "Файловый менеджер",
                external_plugins: {"filemanager": "/admin/filemanager/plugin.min.js"}
            });
    });


});


