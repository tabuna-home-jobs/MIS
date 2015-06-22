@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Список Специалистов
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
                                <a href="/dashboard/special/add/" class="btn btn-link btn-sm"><span
                                            class="fa fa-plus"></span> Добавить новую запись </a>
                                <a href="/dashboard/special/trash/" class="btn btn-link btn-sm"><span
                                            class="fa fa-trash"></span> Корзина </a>
                            </h5>
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ФИО</th>
                                <th>Квалификация</th>
                                <th>Специализация</th>
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($Specialisty as $special)
                                <tr>
                                    <td>{{ $special->id }}</td>
                                    <td>{{ $special->fio }}</td>
                                    <td>{{ $special->subname }}</td>
                                    <td>{{ $special->special }}</td>
                                    <td>
                                        <a href="/dashboard/special/add/{{ $special->id }}"
                                           class="btn btn-primary"><span class="fa fa-edit"></span> </a>
                                        <a href="/dashboard/special/destroy/{{ $special->id }}"
                                           class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>ФИО</th>
                                <th>Квалификация</th>
                                <th>Специализация</th>
                                <th>Управление</th>
                            </tr>
                            </tfoot>

                        </table>
                        {!! $Specialisty->render() !!}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section><!-- /.content -->

@endsection
