@extends('app')

@section('content')

    <section class="content-header">
        <h1>
           {{ $Page->name or 'Новая страница' }}
            <small>Добавить новую страницу</small>
        </h1>


        {!! Breadcrumbs::render('curpage',$Page) !!}


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



                            <form action="/dashboard/page" method="post" class="row">

                                @if(isset($Page->id))
                                    <input type="hidden" name="id" value="{{$Page->id}}">
                                @endif


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control" type="text" maxlength="255" required name="title" value="{{$Page->title or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input class="form-control" type="text" maxlength="255" required name="name" value="{{$Page->name or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Теги</label>
                                    <input class="form-control" type="text" maxlength="255" required name="tag" value="{{$Page->tag or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <input class="form-control" type="text" maxlength="255" required name="descript" value="{{$Page->descript or ''}}">
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Содержание</label>
                                    <textarea class="textarea textareaedit" name="content" rows="30">
                                        {!! $Page->content or '' !!}
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
