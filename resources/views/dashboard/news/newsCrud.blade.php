@extends('app')

@section('content')

    <section class="content-header">
        <h1>
            {{ $News->name or 'Новая страница' }}
            <small>Добавить новую страницу</small>
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
                            <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /. tools -->
                    </div><!-- /.box-header -->
                    <div class='box-body pad'>



                        <form action="/dashboard/news" method="post" class="row">

                            @if(isset($News->id))
                                <input type="hidden" name="id" value="{{$News->id}}">
                            @endif


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control" type="text" maxlength="255" required name="title" value="{{$News->title or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input class="form-control" type="text" maxlength="255" required name="name" value="{{$News->name or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Теги</label>
                                    <input class="form-control" type="text" maxlength="255" required name="tag" value="{{$News->tag or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <input class="form-control" type="text" maxlength="255" required name="descript" value="{{$News->descript or ''}}">
                                </div>

                                <div class="form-group">
                                    <label>Миниатюра</label>
                                    <input class="form-control" type="text" maxlength="255" required name="avatar" value="{{$News->avatar or ''}}">
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Содержание</label>
                                    <textarea class="textarea" name="content" placeholder="Place some text here"
                                              style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                        {{$News->descript or ''}}
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
