
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Список пользователей
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
                                <th>Фамилия</th>
                                <th>E-mail</th>
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($UsersList as $User)
                                <tr>
                                    <td>{{ $User->id }}</td>
                                    <td>{{ $User->first_name }}</td>
                                    <td>{{ $User->last_name }}</td>
                                    <td>{{ $User->email }}</td>
                                    <td>
                                        <a href="/dashboard/user/{{ $User->id }}">Редактировать</a>
                                        Удалить
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Фамилия</th>
                                <th>E-mail</th>
                                <th>Управление</th>
                            </tr>
                            </tfoot>

                        </table>
                        {!! $UsersList->render() !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection
