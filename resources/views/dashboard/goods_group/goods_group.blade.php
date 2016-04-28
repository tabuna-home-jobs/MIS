@extends('app')

@section('content')
    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Список комплексных услуг</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <a href="/dashboard/goods_group/add/" class="btn btn-success btn-xs pull-right">Добавить <i class="fa fa-plus"></i></a>
            </div>

            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped m-b-none dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr>
                                    <th style="width: 5%;">#</th>
                                    <th style="width: 15%;">Миниатюра</th>
                                    <th style="width: 20%;">Категория</th>
                                    <th>Имя</th>
                                    <th style="width: 12%;">Управление</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($Groups as  $key => $item)
                                    @include('dashboard.goods_group._partials.category')
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $Groups->count() !!}</small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            {!! $Groups->render() !!}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



@endsection
