
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Список страниц
        </h1>

        {!! Breadcrumbs::render('curshare') !!}

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <h5 class="box-title">
                                <a href="/dashboard/shares/" class="btn btn-link btn-sm"><span class="fa fa-check"></span> Активные </a>
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
                            @foreach ($SharesList as $Share)
                                <tr>
                                    <td>{{ $Share->id }}</td>
                                    <td>{{ $Share->name }}</td>
                                    <td>{{ $Share->title }}</td>
                                    <td>
                                        <a href="/dashboard/shares/restore/{{ $Share->id }}" class="btn btn-success"><span class="fa fa-reply"></span> </a>
                                        <a href="/dashboard/shares/unset/{{ $Share->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
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
                        {!! $SharesList->render() !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection
