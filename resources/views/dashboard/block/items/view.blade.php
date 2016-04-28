@extends('app')

@section('content')
    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">{{ $item->name or 'Новый элемент' }}</h1>
    </div>
    <div class="wrapper-md">
        <form class="row" role="form" action="/dashboard/block/{{ $block->id }}/items" method="post" class="row" enctype="multipart/form-data">
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Содержание</div>
                    <div class="panel-body">
                        <textarea class="textarea textareaedit" name="text" rows="40">
                            {!! old('text', isset($item->text) ? $item->text : '') !!}
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Общая информация</div>
                    <div class="panel-body">
                        @if(isset($item->id))
                            <input type="hidden" name="id" value="{{$item->id}}">
                        @endif

                        <div class="form-group">
                            <label>Порядок</label>
                            <input class="form-control" type="text" maxlength="255" required name="sort" value="{{ old('sort', isset($item->sort) ? $item->sort : '') }}">
                        </div>
                        <div class="form-group">
                            <label>Имя</label>
                            <input class="form-control" type="text" maxlength="255" required name="name" value="{{ old('name', isset($item->name) ? $item->name : '') }}">
                        </div>
                        <div class="form-group">
                            <label>Ссылка</label>
                            <input class="form-control" type="text" maxlength="255" name="link" value="{{ old('link', isset($item->link) ? $item->link : '') }}">
                        </div>
                        <div class="form-group">
                            <label>Описание</label>
                            <input class="form-control" type="text" maxlength="255" name="descript" value="{{ old('descript', isset($item->descript) ? $item->descript : '') }}">
                        </div>

                        <div class="form-group">
                            <label>Изображение</label>

                            <div class="form-group text-left">
                                <div class="fileinput fileinput-new" data-provides="fileinput">

                                    <div data-trigger="fileinput" class="fileinput-preview thumbnail"
                                         style="line-height: 150px;"><img src="{{ old('avatar', isset($item->avatar) ? $item->avatar : '') }}">
                                    </div>

                                    <div>
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Выбрать изображение</span><span
                                                    class="fileinput-exists">Изменить</span>
                                            <input type="file" name="avatar" value="{{ old('avatar', isset($item->avatar) ? $item->avatar : '') }}">
                                        </span>
                                        <a href="#" class="btn btn-default fileinput-exists"
                                           data-dismiss="fileinput">Удалить</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection














