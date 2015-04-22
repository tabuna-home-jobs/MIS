@extends('app')

@section('content')

    <section class="content-header">
        <h1>
            {{ $Goods->name or 'Новая Услуга' }}
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class='row'>
            <div class='col-md-12'>

                <div class='box'>
                    <div class='box-header'>
                        <h3 class='box-title'>Чтобы добавить страницу заполните форму <small>Это очень просто!</small></h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Свернуть"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Закрыть"><i class="fa fa-times"></i></button>
                        </div><!-- /. tools -->
                    </div><!-- /.box-header -->
                    <div class='box-body pad controls'>



                        <form action="/dashboard/goods" method="post" class="row">

                            @if(isset($Goods->id))
                                <input type="hidden" name="id" value="{{$Goods->id}}">
                            @endif


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control" type="text" maxlength="255" required name="title" value="{{$Goods->title or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input class="form-control" type="text" maxlength="255" required name="name" value="{{$Goods->name or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Теги</label>
                                    <input class="form-control" type="text" maxlength="255" required name="tag" value="{{$Goods->tag or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <input class="form-control" type="text" maxlength="255" required name="descript" value="{{$Goods->descript or ''}}">
                                </div>

                                <div class="form-group">
                                    <label>Миниатюра</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-picture"></i>
                                        </div>
                                        <input class="form-control" type="text" maxlength="255" required name="avatar" value="{{$Goods->avatar or ''}}">
                                    </div><!-- /.input group -->
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


                                        @endforeach



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


                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Содержание</label>
                                    <textarea class="textarea textareaedit" name="text" rows="30">
                                        {!! $Goods->text or '' !!}
                                    </textarea>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>


                        </form>

                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- ./row -->

    </section><!-- /.content -->


@endsection
