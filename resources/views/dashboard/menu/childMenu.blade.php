@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Меню сайта - {{ $Menu->name }}
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <a class="btn btn-link btn-sm" data-toggle="collapse" href="#menucollapse-add"
                               aria-expanded="false" aria-controls="menucollapse-add">
                                <span class="fa fa-plus"></span> Добавить новую запись
                            </a>
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">


                        <div class="collapse" id="menucollapse-add">
                            <div class="well">

                                <form action="/dashboard/menu/addchild" method="post" class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Имя</label>
                                            <input class="form-control" type="text" maxlength="255" required name="name"
                                                   value="">
                                        </div>
                                        <div class="form-group">
                                            <label>URL адрес</label>
                                            <input class="form-control" type="text" maxlength="255" required name="url"
                                                   value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Порядок</label>
                                            <input class="form-control" type="number" maxlength="255" required
                                                   name="order" value="">
                                        </div>
                                        <input type="hidden" name="menuid" value="{{$Menu->id}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-default">Отправить</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Адрес</th>
                                <th>Порядок</th>
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($Child as $key=> $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->url }}</td>
                                    <td>{{ $value->order }}</td>

                                    <td>
                                        <a href="/dashboard/menu/add/{{ $value->id }}" class="btn btn-primary"><span
                                                    class="fa fa-plus"></span> </a>
                                        <a class="btn btn-primary" data-toggle="collapse"
                                           href="#menucollapse-{{ $value->id }}" aria-expanded="false"
                                           aria-controls="menucollapse-{{ $value->id }}"><span
                                                    class="fa fa-edit"></span> </a>
                                        <a href="/dashboard/menu/destroy/{{ $value->id }}" class="btn btn-danger"><span
                                                    class="fa fa-trash-o"></span></a>
                                    </td>
                                </tr>
                                <tr class="collapse" id="menucollapse-{{ $value->id }}">
                                    <form action="/dashboard/menu/addchild" method="post">
                                        <td>{{ $value->id }}</td>
                                        <td><input class="form-control" type="text" maxlength="255" required name="name"
                                                   value="{{ $value->name}}"></td>
                                        <td>
                                            <input class="form-control" type="text" maxlength="255" required name="url"
                                                   value="{{ $value->url}}">
                                        </td>
                                        <td>
                                            <input class="form-control" type="number" maxlength="255" required
                                                   name="order" value="{{ $value->order}}">
                                        </td>
                                        <td>
                                            <input type="hidden" name="menuid" value="{{ $Menu->id }}">
                                            <input type="hidden" name="id" value="{{$value->id}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-default">Отправить</button>
                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Адрес</th>
                                <th>Порядок</th>
                                <th>Управление</th>
                            </tr>
                            </tfoot>

                        </table>

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
