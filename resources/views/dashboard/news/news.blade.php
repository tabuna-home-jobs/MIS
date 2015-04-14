
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Список Новостей
            <small><a href="/dashboard/news/add">Добавить новую</a></small>
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
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($NewsList as $News)
                                <tr>
                                    <td>{{ $News->id }}</td>
                                    <td>{{ $News->name }}</td>
                                    <td>{{ $News->title }}</td>
                                    <td>
                                        <a href="/dashboard/news/add/{{ $News->id }}" class="btn"><span class="fa fa-edit"></span> </a>
                                        <a href="/dashboard/news/destroy/{{ $News->id }}" class="btn"><span class="fa fa-trash-o"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Заголовок</th>
                                <th>Управление</th>
                            </tr>
                            </tfoot>

                        </table>
                        {!! $NewsList->render() !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection
