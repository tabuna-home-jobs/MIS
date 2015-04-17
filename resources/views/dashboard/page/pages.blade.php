
@extends('app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Список страниц
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
                                    <a href="/dashboard/page/add/" class="btn btn-link btn-sm"><span class="fa fa-plus"></span> Добавить новую запись </a>
                                    <a href="/dashboard/page/trash/" class="btn btn-link btn-sm"><span class="fa fa-trash"></span> Корзина </a>
                                </h5>
                            </h3>
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
                                            <a href="/dashboard/page/add/{{ $Page->id }}" class="btn btn-primary"><span class="fa fa-edit"></span> </a>
                                            <a href="/dashboard/page/destroy/{{ $Page->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
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
                            {!! $PageList->render() !!}
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->

@endsection
