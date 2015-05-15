
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
                            <li><a href="/dashboard/feedback"><i class="fa fa-inbox"></i> Входящее</a></li>
                            <li><a href="/dashboard/feedback/noready"><i class="fa fa-file-text-o"></i> Не прочитанные</a></li>
                            <li><a href="/dashboard/feedback/send"><i class="fa fa-envelope-o"></i> Исходящие</a></li>
                            <li class="active"><a href="/dashboard/feedback/trash/"><i class="fa fa-trash-o"></i> Корзина</a></li>
                        </ul>
                    </div><!-- /.box-body -->
                </div><!-- /. box -->


            </div><!-- /.col -->
            <div class="col-md-9">
                <div class="box box-primary">

                    <div class="box-body no-padding">

                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped">
                                <tbody>

                                @forelse($Feedback as $mail )
                                    <tr>
                                        <td class="mailbox-name">{{ $mail->id  }}</td>
                                        <td class="mailbox-name">{{ $mail->fio  }}</td>
                                        <td class="mailbox-subject">{{ $mail->email  }}</td>
                                        <td class="mailbox-attachment">{{ $mail->phone  }}</td>
                                        <td class="mailbox-date">{{ $mail->created_at  }}</td>
                                        <td class="mailbox-name">
                                            <a href="/dashboard/feedback/restore/{{ $mail->id }}" class="btn btn-success"><span class="fa fa-reply"></span> </a>
                                            <a href="/dashboard/feedback/destroy/{{ $mail->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>Нет данных</td>
                                    </tr>
                                @endforelse

                                </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                    <div class="box-footer no-padding">
                        <div class="mailbox-controls">
                            <!-- Пагинация -->
                            {!! $Feedback->render() !!}
                        </div>
                    </div>
                </div><!-- /. box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->


@endsection
