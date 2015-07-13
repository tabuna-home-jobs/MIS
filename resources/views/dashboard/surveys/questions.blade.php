@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Вопросы</h1>
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


                <div class="collapse controls" id="collapseExample">
                    <div class="well">
                        <form action="/dashboard/surveys/store" method="post" class="row">

                            <div class="col-md-4">


                                <div id="GoodsAttr" class="text-center">
                                    <label>Варианты</label>

                                    <div class="entry input-group row">
                                        <div class="form-group col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-plus btn-add"></span>
                                                </div>
                                                <input class="form-control" name="fieldsAttr[]" type="text"
                                                       placeholder="Название"/>
                                            </div>
                                            <!-- /.input group -->

                                        </div>

                                    </div>

                                </div>


                            </div>


                            <div class="col-md-4">


                                <div class="form-group">
                                    <label>Вопрос</label>
                                    <input class="form-control" type="text" maxlength="255" required
                                           name="quest">
                                </div>


                                <input type="hidden" name="surveysID" value="{{$surveysID}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Тип</label>
                                    <select class="form-control" name="type">
                                        <option value="one">Один вариант</option>
                                        <option value="more">Несколько вариантов</option>
                                    </select>
                                </div>
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
                                    <th>Вопрос</th>
                                    <th>Тип</th>
                                    <th>Дата создания</th>
                                    <th>Управление</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($quests as $quest)
                                    <tr>
                                        <td>{{ $quest->id }}</td>
                                        <td>{{ $quest->quest }}</td>
                                        @if($quest->type == 'one')
                                            <td>Один вариант</td>
                                        @else
                                            <td>Несколько вариантов</td>
                                        @endif
                                        <td>{{ $quest->created_at }}</td>

                                        <td>


                                            <a href="/dashboard/surveys/showstatquest/{{ $quest->id }}"
                                               class="btn btn-info"><i class="fa fa-bar-chart"></i>
                                            </a>

                                            <a href="/dashboard/surveys/showquest/{{ $quest->id }}"
                                               class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>
                                            </a>
                                            <a href="/dashboard/surveys/destroyquest/{{ $quest->id }}"
                                               class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $quests->count() !!}</small>
                    </div>
                    <div class="col-sm-6 text-right text-center-xs">
                        {!! $quests->render() !!}
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>



@endsection
