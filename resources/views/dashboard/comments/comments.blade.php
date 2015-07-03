
@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Список комментариев</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">

                <a href="/dashboard/comments/add/" class="btn btn-link btn-sm"><span class="fa fa-plus"></span> Добавить новую запись </a>

            </div>
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped m-b-none dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ФИО</th>
                                    <th>Содержание</th>
                                    <th>Услуга</th>
                                    <th>Управление</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($Comments as $Comment)
                                    <tr>
                                        @if($Comment->publish)
                                            <td class="success">{{ $Comment->id }}</td>
                                        @else
                                            <td>{{ $Comment->id }}</td>
                                        @endif
                                        <td>{{ $Comment->fio }}</td>
                                        <td>{{  mb_substr($Comment->content,0,50,'utf-8') }}...</td>
                                        <td>{{ $Comment->goods()->first()->name }}</td>
                                        <td>
                                            <a href="/dashboard/comments/add/{{ $Comment->id }}" class="btn btn-primary"><span class="fa fa-edit"></span> </a>
                                            <a href="/dashboard/comments/destroy/{{ $Comment->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $Comments->count() !!}</small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            {!! $Comments->render() !!}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



@endsection
