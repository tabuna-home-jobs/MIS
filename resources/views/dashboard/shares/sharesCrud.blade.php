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



                        <form action="/dashboard/shares" method="post" class="row">

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
                                    <input class="form-control" type="text" maxlength="255" required name="tag" value="{{$Shares->tag or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <input class="form-control" type="text" maxlength="255" required name="descript" value="{{$Shares->descript or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Миниатюра</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="avatar" maxlength="255" required name="avatar" value="{{$Shares->avatar or ''}}">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-picture" data-toggle="modal" data-target="#avatarimage"></i>
                                        </div>
                                    </div><!-- /.input group -->
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





    <!-- Modal -->
    <div class="modal fade" id="avatarimage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Выберите изображение</h4>
                </div>
                <div class="modal-body">

                    <iframe width="100%" height="500" frameborder="0"
                             src="/admin/filemanager/dialog.php?type=1&field_id=avatar">
                    </iframe>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </div>
    </div>




@endsection
