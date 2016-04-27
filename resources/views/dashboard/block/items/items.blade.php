@extends('app')

@section('content')
    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> &laquo;{{ $block->name }}&raquo; - Список элементов </h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="/dashboard/block/" class="btn btn-danger btn-xs"> <i class="fa fa-arrow-left"></i> Список блоков</a>
                <a href="/dashboard/block/{{$block->id}}/items/add/" class="btn btn-success btn-xs pull-right">Добавить элемент <i class="fa fa-plus"></i></a>
            </div>

            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped m-b-none dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr>
                                    <th style="width: 5%;">#</th>
                                    <th style="width: 15%;">Изображение</th>
                                    <th>Имя</th>
                                    <th style="width: 12%;">Управление</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($items as  $key => $item)
                                    @include('dashboard.block.items._partials.list', $item)
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $items->count() !!}</small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            {!! $items->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
