@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">{{ $Goods->name or 'Новая Услуга' }}</h1>
    </div>
    <div class="wrapper-md">
        <form class="row" role="form" action="/dashboard/goods" method="post" class="row" enctype="multipart/form-data">
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Содержание</div>
                    <div class="panel-body">

                                    <textarea class="textarea textareaedit" name="text" rows="40">
                                        {!! $Goods->text or '' !!}
                                    </textarea>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Общая информация</div>
                    <div class="panel-body">


                        @if(isset($Goods->id))
                            <input type="hidden" name="id" value="{{$Goods->id}}">
                        @endif

                            <div class="form-group">
                                <label>Порядок</label>
                                <input class="form-control" type="text" maxlength="255" required name="sort" value="{{$Goods->sort or '0'}}">
                            </div>
                            <div class="form-group">
                                <label>Заголовок</label>
                                <input class="form-control" type="text" maxlength="255" required name="title" value="{{$Goods->title or ''}}">
                            </div>
                            <div class="form-group">
                                <label>Выберите родителькую услугу</label>
                                <select class="form-control w-md"   ui-jq="chosen" name="parent">
                                    <option value="">Выберите значение</option>
                                    @foreach($All as $item)
                                        @if(isset($Goods))

                                            @if($Goods->parent_id == $item['id'])
                                                <option value="{{$item['id']}}" selected >{{$item['name']}}</option>
                                            @endif

                                        @endif
                                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Имя</label>
                                <input class="form-control" type="text" maxlength="255" required name="name" value="{{$Goods->name or ''}}">
                            </div>
                            <div class="form-group">
                                <label>Теги</label>
                                <input data-role="tagsinput" class="form-control" type="text" maxlength="255"
                                       required name="tag" value="{{$Goods->tag or ''}}">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" maxlength="255" required name="descript" value="{{$Goods->descript or ''}}">
                            </div>

                            <div class="form-group">
                                <label>Миниатюра</label>

                                <div class="form-group text-center">

                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div data-trigger="fileinput" class="fileinput-preview thumbnail"
                                             style="line-height: 150px;"><img src="{{$Goods->avatar or ''}}">
                                        </div>

                                        <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Выбрать изображение</span><span
                                                            class="fileinput-exists">Изменить</span><input type="file"
                                                                                                           name="avatar"
                                                                                                           value="{{$Goods->avatar or ''}}"></span>
                                            <a href="#" class="btn btn-default fileinput-exists"
                                               data-dismiss="fileinput">Удалить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Категория</label>
                                <select class="form-control w-md"   ui-jq="chosen" required name="category">
                                    <option disabled>Выберите категорию</option>

                                    @foreach($Category as $cat)


                                        @if(isset($Goods->category_id))
                                            @if($Goods->category_id == $cat->id)
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
                                <label>Отображать так-же в категориях:</label>

                                <select name="categories_ids[]" class="form-control w-md goods-ajax" style="width: 100%;"  multiple="multiple">
                                    @foreach($Categories as $good)
                                        <option value="{{ $good->id}}" selected>{{ $good->name}}</option>
                                    @endforeach;
                                </select>
                            </div>






                            <div class="form-group">
                                <label>Цена</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" maxlength="255" required name="price" value="{{$Goods->price or ''}}">
                                    <div class="input-group-addon">
                                        <i class="fa fa-rub"></i>
                                    </div>
                                </div><!-- /.input group -->
                            </div>

                            <div id="GoodsAttr" class="text-center">
                                <label>Атрибуты</label>

                                @if(isset($Goods->attribute))
                                    @forelse(unserialize($Goods->attribute) as $key => $attr)

                                        @if($key % 2 == 0)
                                            <div class="entry input-group row">
                                                <div class="form-group col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="glyphicon btn-remove glyphicon-minus"></span>
                                                        </div>
                                                        <input type="text" placeholder="Название" value="{{ $attr }}" name="fieldsAttr[]" pattern="^[а-яА-ЯёЁa-zA-Z0-9\s]+$" class="form-control">
                                                    </div><!-- /.input group -->

                                                </div>
                                                @else

                                                    <div class="form-group col-md-6">
                                                        <input type="text" placeholder="Значение" value="{{ $attr }}" name="fieldsAttr[]" pattern="^[а-яА-ЯёЁa-zA-Z0-9\s]+$" class="form-control">
                                                    </div>

                                            </div>
                                        @endif

                                    @empty

                                        <div class="entry input-group row">
                                            <div class="form-group col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-plus btn-add"></span>
                                                    </div>
                                                    <input class="form-control" name="fieldsAttr[]" type="text" placeholder="Название" />
                                                </div><!-- /.input group -->

                                            </div>

                                            <div class="form-group col-md-6">
                                                <input class="form-control" name="fieldsAttr[]" type="text" placeholder="Значение" />
                                            </div>
                                        </div>

                                    @endforelse
                                @else
                                    <div class="entry input-group row">
                                        <div class="form-group col-md-6">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-plus btn-add"></span>
                                                </div>
                                                <input class="form-control" name="fieldsAttr[]" type="text" placeholder="Название" />
                                            </div><!-- /.input group -->

                                        </div>

                                        <div class="form-group col-md-6">
                                            <input class="form-control" name="fieldsAttr[]" type="text" placeholder="Значение" />
                                        </div>
                                    </div>

                                @endif
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
                placeholder: 'Введите название подуслуги',
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
                    url: "{{ url('/api/categories') }}",
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














