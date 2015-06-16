@extends('app')

@section('content')

    <section class="content-header">
        <h1>
            {{ $Shares->name or 'Новая страница' }}
        </h1>

        {!! Breadcrumbs::render('curshare',$Shares) !!}

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


                        <form action="/dashboard/shares" method="post" class="row" enctype="multipart/form-data">

                            @if(isset($Shares->id))
                                <input type="hidden" name="id" value="{{$Shares->id}}">
                            @endif


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control" type="text" maxlength="255" required name="title" value="{{$Shares->title or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input class="form-control" type="text" maxlength="255" required name="name" value="{{$Shares->name or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Теги</label>
                                    <input class="form-control" data-role="tagsinput" type="text" maxlength="255"
                                           required name="tag" value="{{$Shares->tag or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <input class="form-control" type="text" maxlength="255" required name="descript" value="{{$Shares->descript or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Миниатюра</label>

                                    <div class="form-group text-center">

                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div data-trigger="fileinput" class="fileinput-preview thumbnail"
                                                 style="line-height: 150px;"><img src="{{$Shares->avatar or ''}}">
                                            </div>

                                            <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Выбрать изображение</span><span
                                                            class="fileinput-exists">Изменить</span><input type="file"
                                                                                                           name="avatar"
                                                                                                           value="{{$Shares->avatar or ''}}"></span>
                                                <a href="#" class="btn btn-default fileinput-exists"
                                                   data-dismiss="fileinput">Удалить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label>Дата начала</label>
                                    <div class='input-group date' id='datetimepickerstart'>
                                        <input type='text' class="form-control" required name="start" value="{{$Shares->start or ''}}" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Дата окончания</label>
                                    <div class='input-group date' id='datetimepickerend'>
                                        <input type='text' class="form-control" required name="end" value="{{$Shares->end or ''}}" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    </div>
                                </div>



                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Содержание</label>
                                    <textarea class="textarea textareaedit" name="content" rows="30">
                                        {{ $Shares->content or '' }}
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
