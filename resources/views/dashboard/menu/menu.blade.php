
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Меню сайта
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <a class="btn btn-link btn-sm" data-toggle="collapse" href="#collapseExample"
                               aria-expanded="false" aria-controls="collapseExample">
                                <span class="fa fa-plus"></span> Добавить новую запись
                            </a>
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">


                        <div class="collapse" id="collapseExample">
                            <div class="well">
                                <form action="/dashboard/menu/add" method="post" class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Название</label>
                                            <input class="form-control" type="text" maxlength="255" required
                                                   name="name">
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="type" required>
                                                <option value="menu-top">Вернее меню</option>
                                                <option value="menu-left">Левое меню</option>
                                                <option value="menu-rigt">Правое меню</option>
                                                <option value="menu-bottom">Нижнее меню</option>
                                            </select>
                                        </div>

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
                                <th>Тип</th>
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($Menu as $li)
                                <tr>
                                    <td>{{ $li->id }}</td>
                                    <td>{{ $li->name }}</td>
                                    <td>{{ $li->type }}</td>

                                    <td>
                                        <a href="/dashboard/menu/childmenu/{{ $li->id }}" class="btn btn-primary"><span
                                                    class="fa fa-plus"></span> </a>
                                        <a class="btn btn-primary" data-toggle="collapse"
                                           href="#menucollapse-{{ $li->id }}" aria-expanded="false"
                                           aria-controls="menucollapse-{{ $li->id }}"><span class="fa fa-edit"></span>
                                        </a>
                                        <a href="/dashboard/menu/destroy/{{ $li->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                    </td>
                                </tr>

                                <tr class="collapse" id="menucollapse-{{ $li->id }}">
                                    <form action="/dashboard/menu/add" method="post">
                                        <td>{{ $li->id }}</td>
                                        <td><input class="form-control" type="text" maxlength="255" required name="name"
                                                   value="{{ $li->name}}"></td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control" name="type" required>
                                                    <option value="menu-top" @if( $li->type =='menu-top')
                                                            selected @endif >Вернее меню
                                                    </option>
                                                    <option value="menu-left" @if( $li->type =='menu-left')
                                                            selected @endif >Левое меню
                                                    </option>
                                                    <option value="menu-rigt" @if( $li->type =='menu-rigt')
                                                            selected @endif >Правое меню
                                                    </option>
                                                    <option value="menu-bottom" @if( $li->type =='menu-bottom')
                                                            selected @endif >Нижнее меню
                                                    </option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="{{$li->id}}">
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
                                <th>Тип</th>
                                <th>Управление</th>
                            </tr>
                            </tfoot>

                        </table>
                        {!! $Menu->render() !!}




                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection
