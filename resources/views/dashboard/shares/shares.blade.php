
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Список страниц акций
            <small><a href="/dashboard/shares/add">Добавить новую</a></small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Управляй таблицой</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Заголовок</th>
                                <th>Дата начала</th>
                                <th>Дата окончания</th>
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($SharesList as $Share)
                                <tr>
                                    <td>{{ $Share->id }}</td>
                                    <td>{{ $Share->name }}</td>
                                    <td>{{ $Share->title }}</td>
                                    <td>{{ $Share->start }}</td>
                                    <td>{{ $Share->end }}</td>
                                    <td>
                                        <a href="/dashboard/shares/add/{{ $Share->id }}" class="btn btn-primary"><span class="fa fa-edit"></span> </a>
                                        <a href="/dashboard/shares/destroy/{{ $Share->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Заголовок</th>
                                <th>Дата начала</th>
                                <th>Дата окончания</th>
                                <th>Управление</th>
                            </tr>
                            </tfoot>

                        </table>
                        {!! $SharesList->render() !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection
