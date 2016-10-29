@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">{{ $SubGoods->name or 'Новая Услуга' }}</h1>
    </div>
    <div class="wrapper-md">
        <form class="row" role="form" action="/dashboard/subgoods" method="post" class="row" enctype="multipart/form-data">

            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Общая информация</div>
                    <div class="panel-body">


                        @if(isset($SubGoods->id))
                            <input type="hidden" name="id" value="{{$SubGoods->id}}">
                        @endif

                            <div class="form-group">
                                <label>Порядок</label>
                                <input class="form-control" type="text" maxlength="255" required name="sort" value="{{$subGoods->sort or '0'}}">
                            </div>

                            <div class="form-group">
                                <label>Выберите родителькую услугу</label>
                                <select class="form-control w-md"   ui-jq="chosen" name="parent_good_id">
                                    <option value="">Выберите значение</option>
                                    @foreach($AllGoods as $item)
                                        @if(isset($SubGoods))

                                            @if($SubGoods->parent_good_id == $item['id'])
                                                <option value="{{$item['id']}}" selected >{{$item['name']}}</option>
                                            @endif

                                        @endif
                                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Имя</label>
                                <input class="form-control" type="text" maxlength="255" required name="name" value="{{$SubGoods->name or ''}}">
                            </div>



                            <div class="form-group">
                                <label>Миниатюра</label>

                                <div class="form-group text-center">

                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div data-trigger="fileinput" class="fileinput-preview thumbnail"
                                             style="line-height: 150px;"><img src="{{$SubGoods->avatar or ''}}">
                                        </div>

                                        <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Выбрать изображение</span><span
                                                            class="fileinput-exists">Изменить</span><input type="file"
                                                                                                           name="avatar"
                                                                                                           value="{{$SubGoods->avatar or ''}}"></span>
                                            <a href="#" class="btn btn-default fileinput-exists"
                                               data-dismiss="fileinput">Удалить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>








                            <div class="form-group">
                                <label>Цена</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" maxlength="255" required name="price" value="{{$SubGoods->price or ''}}">
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

@endsection














