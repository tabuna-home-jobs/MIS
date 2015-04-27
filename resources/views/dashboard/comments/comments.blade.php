
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
                                <a href="/dashboard/comments/add/" class="btn btn-link btn-sm"><span class="fa fa-plus"></span> Добавить новую запись </a>
                                <a href="/dashboard/comments/trash/" class="btn btn-link btn-sm"><span class="fa fa-trash"></span> Корзина </a>
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
                                    @if($Comment->publish)
                                        <td class="success">{{ $Comment->id }}</td>
                                    @else
                                        <td>{{ $Comment->id }}</td>
                                    @endif
                                    <td>{{ $Comment->fio }}</td>
                                    <td>{{  mb_substr($Comment->content,0,50,'utf-8') }}...</td>
                                    <td>{{ $Comment->goods()->first()->name }}</td>
                                    <td>
                                        <a href="/dashboard/comments/add/{{ $Comment->id }}" class="btn btn-primary"><span class="fa fa-edit"></span> </a>
                                        <a href="/dashboard/comments/destroy/{{ $Comment->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
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
