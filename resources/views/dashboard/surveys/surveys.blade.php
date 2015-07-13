@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Анкеты</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">

                <a class="btn btn-link btn-sm" data-toggle="collapse" href="#collapseExample"
                   aria-expanded="false" aria-controls="collapseExample">
                    <span class="fa fa-plus"></span> Добавить новую запись
                </a>


            </div>
            <div class="table-responsive">





                <div class="collapse" id="collapseExample">
                    <div class="well">
                        <form action="/dashboard/surveys/add" method="post" class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Название</label>
                                    <input class="form-control" type="text" maxlength="255" required
                                           name="name">
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>


                        </form>
                    </div>
                </div>





                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped m-b-none dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Название</th>
                                    <th>Управление</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($Surveys as $survey)
                                    <tr>
                                        <td>{{ $survey->id }}</td>
                                        <td>{{ $survey->name }}</td>
                                        <td>
                                            <a href="/dashboard/surveys/show/{{ $survey->id }}"
                                               class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>
                                            </a>
                                            <a href="/dashboard/surveys/destroy/{{ $survey->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                        </td>
                                    </tr>

                                    @foreach($survey->quest()->get() as $key => $value)
                                        <tr class="collapse" id="syrveys-{{$survey->id}}">
                                            <td>{{$value->quest}}</td>
                                            <td>{{$value->type}}</td>
                                            <td>
                                                <a href="/dashboard/surveys/add/{{ $survey->id }}"
                                                   class="btn btn-primary"><span
                                                            class="glyphicon glyphicon-eye-open"></span> </a>
                                                <a href="/dashboard/surveys/destroy/{{ $survey->id }}"
                                                   class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach



                                @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $Surveys->count() !!}</small>
                    </div>
                    <div class="col-sm-6 text-right text-center-xs">
                        {!! $Surveys->render() !!}
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>



@endsection
