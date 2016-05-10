@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">{{ $GoodsGroup->name or 'Новая группа' }}</h1>
    </div>
    <div class="wrapper-md">
        <form class="row" role="form" action="/dashboard/goods_group" method="post" class="row" enctype="multipart/form-data">
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Содержание</div>
                    <div class="panel-body">
                        <textarea class="textarea textareaedit" name="text" rows="40">
                            {!! $GoodsGroup->text or '' !!}
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Общая информация</div>
                    <div class="panel-body">


                        @if(isset($GoodsGroup->id))
                            <input type="hidden" name="id" value="{{$GoodsGroup->id}}">
                        @endif

                            <div class="form-group">
                                <label>Порядок</label>
                                <input class="form-control" type="text" maxlength="255" required name="sort" value="{{$GoodsGroup->sort or '0'}}">
                            </div>
                            <div class="form-group">
                                <label>Заголовок</label>
                                <input class="form-control" type="text" maxlength="255" required name="title" value="{{$GoodsGroup->title or ''}}">
                            </div>
                            <div class="form-group">
                                <label>Имя</label>
                                <input class="form-control" type="text" maxlength="255" required name="name" value="{{$GoodsGroup->name or ''}}">
                            </div>
                            <div class="form-group">
                                <label>Теги</label>
                                <input data-role="tagsinput" class="form-control" type="text" maxlength="255"
                                       required name="tag" value="{{$GoodsGroup->tag or ''}}">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" maxlength="255" required name="descript" value="{{$GoodsGroup->descript or ''}}">
                            </div>

                            <div class="form-group">
                                <label>Миниатюра</label>

                                <div class="form-group text-center">

                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div data-trigger="fileinput" class="fileinput-preview thumbnail"
                                             style="line-height: 150px;"><img src="{{$GoodsGroup->avatar or ''}}">
                                        </div>

                                        <div>
                                            <span class="btn btn-default btn-file"><span class="fileinput-new">Выбрать изображение</span><span
                                                        class="fileinput-exists">Изменить</span>
                                                <input type="file" name="avatar" value="{{$GoodsGroup->avatar or ''}}">
                                            </span>
                                            <a href="#" class="btn btn-default fileinput-exists"
                                               data-dismiss="fileinput">Удалить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Связанные услуги</label>
                                <div id="good-counts">
                                    @foreach($Goods as $good)
                                        <input id="good-count-{{ $good->id }}" name="count[{{ $good->id }}]" type="hidden" value="{{ $good->count_visit }}" />
                                    @endforeach
                                </div>
                                <select name="good_ids[]" class="form-control w-md goods-ajax" style="width: 100%;" required multiple="multiple">
                                    @foreach($Goods as $good)
                                        <option value="{{ $good->id}}" selected>{{ $good->name}}</option>
                                    @endforeach;
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Категория</label>
                                <select class="form-control w-md" ui-jq="chosen" required name="category">
                                    <option disabled>Выберите категорию</option>

                                    @foreach($Category as $cat)

                                        @if(isset($GoodsGroup->category_id))
                                            @if($GoodsGroup->category_id == $cat->id)
                                                <option value="{{ $cat->id}}" selected>{{ $cat->name}}</option>
                                            @else
                                                <option value="{{ $cat->id}}">{{ $cat->name}}</option>
                                            @endif
                                        @else
                                            <option value="{{ $cat->id}}">{{ $cat->name}}</option>
                                        @endif

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Цена</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" maxlength="255" required name="price" value="{{$GoodsGroup->price or ''}}">
                                    <div class="input-group-addon">
                                        <i class="fa fa-rub"></i>
                                    </div>
                                </div><!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label>Отображать на главной</label>

                                <div class="input-group">
                                    <label class="i-switch bg-success m-t-xs m-r">
                                        <input type="radio" name="onmain" value="1"
                                               @if(isset($GoodsGroup->onmain)&&$GoodsGroup->onmain) checked @endif>
                                        <i></i>
                                    </label>
                                    <label class="i-switch bg-danger m-t-xs m-r">
                                        <input type="radio" name="onmain" value="0"
                                               @if(isset($GoodsGroup->onmain)&&!$GoodsGroup->onmain) checked @endif>
                                        <i></i>
                                    </label>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-primary">Отправить</button>


                        </div>
                </div>
            </div>
        </form>
    </div>

    <style>
        .selection-input {
            width: 28px;
            text-align: center;
            margin: 0 5px;
            border-top: none;
            border-bottom: none;
            border-left: 1px solid rgba(0,0,0,.3);
            border-right: 1px solid rgba(0,0,0,.3);
        }
    </style>

    <script src="/dash/plugins/select2/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            var goods_ajax = $('.goods-ajax');

            // Разрешаем backspace, tab, delete, стрелки, обычные цифры и цифры на дополнительной клавиатуре
            $(document).on('keydown', '.selection-input', function(e) {
                var key = e.charCode || e.keyCode || 0;

                return (
                    key == 8 ||
                    key == 9 ||
                    key == 46 ||
                    (key >= 37 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
            });

            // Копируем значение в другое поле, чтобы сохранить
            $(document).on('keyup', '.selection-input', function() {
                var id = $(this).data('id');
                var value = $(this).val();
                $('#good-count-' + id).val(value);
            });

            // jQuery Select2
            goods_ajax.select2({
                placeholder: 'Введите название услуги',
                minimumResultsForSearch: Infinity,
                minimumInputLength: 1,
                templateSelection: function(item, container) {
                    var good_count = 1;
                    var good_count_obj = $('#good-count-' + item.id);

                    if (good_count_obj.length) {
                        good_count = good_count_obj.val();
                    } else {
                        $('#good-counts').append('<input id="good-count-' + item.id + '" name="count[' + item.id + ']" type="hidden" value="1" />');
                    }

                    var input = $('<input id="good-count-temp-' + item.id + '" data-id="' + item.id + '" class="selection-input" type="text" value="' + good_count + '" />');

                    container.find('span').after(input);
                    return item.text;
                },
                ajax: {
                    url: "{{ url('/api/goods') }}",
                    dataType: 'json',
                    delay: 400,
                    data: function (params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function (data, page) {
                        return {
                            results: data
                        };
                    }
                }
            });

            // Разрешаем фокус по input внутри select
            $(document).on('click', function(e) {
                if ($(e.target).hasClass('selection-input')) {
                    goods_ajax.select2('close');
                    $(e.target).focus();
                     e.preventDefault();
                     return false;
                }
            });
        });
    </script>

@endsection














