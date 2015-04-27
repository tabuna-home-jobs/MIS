
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Комментарии
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <h5 class="box-title">
                                <a href="/dashboard/comments/" class="btn btn-link btn-sm"><span class="fa fa-check"></span> Активные </a>
                            </h5>
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ФИО</th>
                                <th>Содержание</th>
                                <th>Услуга</th>
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($Comments as $Comment)
                                <tr>
                                    <td>{{ $Comment->id }}</td>
                                    <td>{{ $Comment->fio }}</td>
                                    <td>{{  mb_substr($Comment->content,0,50,'utf-8') }}...</td>
                                    <td>{!! $Comment->goods()->first()->name or 'Услуга удалена <br><small> Для востановления записи необходимо востановить её родителя </small>' !!}</td>
                                    <td>
                                        @if(isset($Comment->goods()->first()->name))
                                            <a href="/dashboard/comments/restore/{{ $Comment->id }}" class="btn btn-success"><span class="fa fa-reply"></span> </a>
                                        @endif
                                        <a href="/dashboard/comments/unset/{{ $Comment->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>ФИО</th>
                                <th>Содержание</th>
                                <th>Услуга</th>
                                <th>Управление</th>
                            </tr>
                            </tfoot>

                        </table>
                        {!! $Comments->render() !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection
