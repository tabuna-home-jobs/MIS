
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Список новостей
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <a href="/dashboard/news/add/" class="btn btn-link btn-sm"><span class="fa fa-plus"></span> Добавить новую запись </a>
                            <a href="/dashboard/news/trash/" class="btn btn-link btn-sm"><span class="fa fa-trash"></span> Корзина </a>
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Миниатюра</th>
                                <th>Имя</th>
                                <th>Заголовок</th>
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($NewsList as $News)
                                <tr>
                                    <td>{{ $News->id }}</td>
                                    <td><img src="{{ $News->avatar }}" width="100px" height="50px"></td>
                                    <td>{{ $News->name }}</td>
                                    <td>{{ $News->title }}</td>
                                    <td>
                                        <a href="/dashboard/news/add/{{ $News->id }}" class="btn btn-primary"><span class="fa fa-edit"></span> </a>
                                        <a href="/dashboard/news/destroy/{{ $News->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Миниатюра</th>
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
