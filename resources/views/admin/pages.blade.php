
@extends('admin/app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Список страниц
                <small>Выберите нужную</small>
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
                                @foreach ($PageList as $Page)
                                    <tr>
                                        <td>{{ $Page->id }}</td>
                                        <td>{{ $Page->name }}</td>
                                        <td>{{ $Page->title }}</td>
                                        <td>
                                            <a href="/panel/page/{{ $Page->id }}">Редактировать</a>
                                           Удалить
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
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->

@endsection
