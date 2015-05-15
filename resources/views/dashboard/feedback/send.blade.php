
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Обратная связь
        </h1>


        {!! Breadcrumbs::render('feedback') !!}

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <a href="/dashboard/feedback/send" class="btn btn-primary btn-block margin-bottom">Написать</a>
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Папки</h3>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="/dashboard/feedback/"><i class="fa fa-inbox"></i> Входящее</a></li>
                            <li><a href="/dashboard/feedback/noready"><i class="fa fa-file-text-o"></i> Не прочитанные</a></li>
                            <li><a href="/dashboard/feedback/send"><i class="fa fa-envelope-o"></i> Исходящие</a></li>
                            <li><a href="/dashboard/feedback/trash/"><i class="fa fa-trash-o"></i> Корзина</a></li>
                        </ul>
                    </div><!-- /.box-body -->
                </div><!-- /. box -->


            </div><!-- /.col -->
            <div class="col-md-9">
                <div class="box box-primary">

                    <form method="post" action="/dashboard/feedback/send">
                    <div class="box-header with-border">
                        <h3 class="box-title">Написать новое сообщение</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <input class="form-control" name="email" required placeholder="Кому:" value="{{ $Feedback->email or '' }}"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="theme" required placeholder="Тема:"/>
                        </div>
                        <div class="form-group">
                    <textarea class="form-control textarea textareaedit" required name="contentmess" style="height: 400px">

                    </textarea>

                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Отправить</button>
                        </div>
                        <a href="/dashboard/feedback/"><button class="btn btn-default"><i class="fa fa-times"></i> Отмена</button></a>
                    </div><!-- /.box-footer -->
                </div><!-- /. box -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>


            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->


@endsection
