@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Список категорий</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">

                <a href="/dashboard/category/add/" class="btn btn-link btn-sm"><span class="fa fa-plus"></span> Добавить новую запись </a>


            </div>
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped m-b-none dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th class="pull-right">Управление</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($Category->toTree() as $category)
                                    @include('dashboard.category._partials.category', $category)
                                @endforeach


                                </tbody>
                        </table>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $Category->count() !!}</small>
                    </div>
                    <div class="col-sm-6 text-right text-center-xs">
                        {!! $Category->render() !!}
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>



@endsection
