@extends('app')

@section('content')

    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Список Подуслуг</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">

                <a href="/dashboard/subgoods/add/" class="btn btn-link btn-sm"><span class="fa fa-plus"></span> Добавить новую запись </a>

                <div class="pull-right">
                <form class="form-inline" action="/dashboard/subgoods">

                    <div class="form-group">
                        <input class="form-control" type="text" maxlength="255" required name="query" placeholder="Поиск ...">
                        <button type="submit" class="btn btn-default">Найти</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </form>
                    </div>


            </div>
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped m-b-none dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Миниатюра</th>
                                    <th>Услуга</th>
                                    <th>Имя</th>
                                    <th>Управление</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($SubGoods as  $key => $subGood)
                                    @include('dashboard.subgoods._partials.category', $subGood)
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $SubGoods->count() !!}</small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            {!! $SubGoods->render() !!}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



@endsection
