@extends('app')

@section('content')

    <section class="content-header">
        <h1>
            {{ $Category->name or 'Новая Категория' }}
        </h1>

        {!! Breadcrumbs::render('curcategory',$Category) !!}
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
                    <div class='box-body pad'>


                        <form action="/dashboard/category" method="post" class="row" enctype="multipart/form-data">

                            @if(isset($Category->id))
                                <input type="hidden" name="id" value="{{$Category->id}}">
                            @endif


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control" type="text" maxlength="255" required name="title" value="{{$Category->title or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input class="form-control" type="text" maxlength="255" required name="name" value="{{$Category->name or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Теги</label>
                                    <input class="form-control" data-role="tagsinput" type="text" maxlength="255"
                                           required name="tag" value="{{$Category->tag or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <input class="form-control" type="text" maxlength="255" required name="descript" value="{{$Category->descript or ''}}">
                                </div>

                                <div class="form-group">
                                    <label>Миниатюра</label>

                                    <div class="form-group text-center">

                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div data-trigger="fileinput" class="fileinput-preview thumbnail"
                                                 style="line-height: 150px;"><img src="{{$Category->avatar or ''}}">
                                            </div>

                                            <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Выбрать изображение</span><span
                                                            class="fileinput-exists">Изменить</span><input type="file"
                                                                                                           name="avatar"
                                                                                                           value="{{$Category->avatar or ''}}"></span>
                                                <a href="#" class="btn btn-default fileinput-exists"
                                                   data-dismiss="fileinput">Удалить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Содержание</label>
                                    <textarea class="textarea textareaedit" name="text" rows="30">
                                        {!! $Category->text or '' !!}
                                    </textarea>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- ./row -->

    </section><!-- /.content -->

@endsection
