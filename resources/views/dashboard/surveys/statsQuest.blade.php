@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Вопросы</h1>
    </div>






    <div class="wrapper-md col-md-6">

        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading font-bold">Диаграмма</div>
                <div class="panel-body">
                    <div ui-jq="plot" ui-options="
                    [
                      @foreach ($collection as $key => $cout)
                               {'label':'{{$key}}','data':{{$cout}}},
                      @endforeach
                    ],
                        {
                        series: { pie: { show: true, innerRadius: 0.5, stroke: { width: 0 },
                        label: { show: true, threshold: 0.05 } } },
                        grid: { hoverable: false, clickable: false, borderWidth: 0, color: '#ccc' }
                    }
            " style="height:240px"></div>
                </div>
            </div>
        </div>

    </div>







    <div class="wrapper-md col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">

                {{$quest->quest}}

            </div>


            <div class="table-responsive">

                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped m-b-none dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr>
                                    <th>Ответ</th>
                                    <th>Количество</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($collection as $key => $cout)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $cout }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>



@endsection
