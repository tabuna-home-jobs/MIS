@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Список меню</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                Меню сайта

                <a href="{{URL::route('dashboard.page.create')}}" class="btn btn-success btn-xs pull-right">Добавить <i class="fa fa-plus"></i></a>


            </div>
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped m-b-none dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr role="row">
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
                        </table>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $Menu->count() !!}</small>
                    </div>
                    <div class="col-sm-6 text-right text-center-xs">
                        {!! $Menu->render() !!}
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>


@endsection











