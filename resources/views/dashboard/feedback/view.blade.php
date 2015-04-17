
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Обратная связь
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Написать</a>
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Папки</h3>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="/dashboard/feedback"><i class="fa fa-inbox"></i> Входящее</a></li>
                            <li><a href="/dashboard/feedback/noready"><i class="fa fa-file-text-o"></i> Не прочитанные</a></li>
                            <li><a href="/dashboard/feedback/send"><i class="fa fa-envelope-o"></i> Исходящие</a></li>
                            <li><a href="/dashboard/feedback/trash/"><i class="fa fa-trash-o"></i> Корзина</a></li>
                        </ul>
                    </div><!-- /.box-body -->
                </div><!-- /. box -->
            </div><!-- /.col -->


            <div class="col-md-9">
                <div class="box box-primary">

                    <div class="box-body no-padding">
                        <div class="mailbox-read-info">
                            <h3>{{ $Feedback->fio  }}</h3>
                            <h5><u>Электронная почта:</u> {{$Feedback->email}} <span class="mailbox-read-time pull-right">{{$Feedback->created_at}} </span></h5>
                            <h5><u>Номер телефона:</u> {{$Feedback->phone}} </h5>
                        </div><!-- /.mailbox-read-info -->


                        <div class="mailbox-read-message">
                            {{$Feedback->content}}
                        </div><!-- /.mailbox-read-message -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="pull-right">
                            <button class="btn btn-default"><i class="fa fa-reply"></i> Ответить</button>
                        </div>
                        <a href="/dashboard/feedback/destroy/{{ $Feedback->id }}"> <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                        <button class="btn btn-default"><i class="fa fa-print"></i></button>
                    </div><!-- /.box-footer -->
                </div><!-- /. box -->
            </div><!-- /.col -->



        </div><!-- /.row -->
    </section><!-- /.content -->


@endsection
