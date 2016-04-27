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

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-primary">Отправить</button>


                        </div>
                </div>
            </div>
        </form>
    </div>

    <script src="/dash/plugins/select2/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".goods-ajax").select2({
                placeholder: 'Введите название услуги',
                minimumResultsForSearch: Infinity,
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
        });
    </script>

@endsection














