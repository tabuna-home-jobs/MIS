
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Список страниц
        </h1>

        {!! Breadcrumbs::render('page') !!}

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <h5 class="box-title">
                                <a href="/dashboard/page/" class="btn btn-link btn-sm"><span class="fa fa-check"></span> Активные </a>
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
                                        <a href="/dashboard/page/restore/{{ $Page->id }}" class="btn btn-success"><span class="fa fa-reply"></span> </a>
                                        <a href="/dashboard/page/unset/{{ $Page->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
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
