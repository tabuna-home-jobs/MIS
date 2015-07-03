@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Список страниц</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="/dashboard/gallery/add/" class="btn btn-link btn-sm"><span class="fa fa-plus"></span> Добавить новую запись </a>
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
                                    <th>Количество</th>
                                    <th>Дата создания</th>
                                    <th>Управление</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($AlbumList as $album)
                                    <tr>
                                        <td>{{ $album->id }}</td>
                                        <td>{{ $album->name }}</td>
                                        <td>{{ $album->getPhoto()->count() }}</td>
                                        <td>{{ $album->created_at }}</td>
                                        <td>
                                            <a href="/dashboard/gallery/show/{{ $album->id }}" class="btn btn-info"><span class="fa fa-eye"></span> </a>
                                            <a href="/dashboard/gallery/add/{{ $album->id }}" class="btn btn-primary"><span class="fa fa-edit"></span> </a>
                                            <a href="/dashboard/gallery/destroy/{{ $album->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $AlbumList->count() !!}</small>
                    </div>
                    <div class="col-sm-6 text-right text-center-xs">
                        {!! $AlbumList->render() !!}
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>



@endsection



