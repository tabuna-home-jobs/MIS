@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Вопросы
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <a class="btn btn-link btn-sm" data-toggle="collapse" href="#collapseExample"
                               aria-expanded="false" aria-controls="collapseExample">
                                <span class="fa fa-plus"></span> Добавить новую запись
                            </a>
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">


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


                        <table class="table table-bordered table-hover">
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
                                    @if($quest->type = 'one')
                                        <td>Один вариант</td>
                                    @else
                                        <td>Несколько вариантов</td>
                                    @endif
                                    <td>{{ $quest->created_at }}</td>
                                    <td>
                                        <a href="/dashboard/surveys/showquest/{{ $quest->id }}"
                                           class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                        <a href="/dashboard/surveys/destroyquest/{{ $quest->id }}"
                                           class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Вопрос</th>
                                <th>Тип</th>
                                <th>Дата создания</th>
                                <th>Управление</th>
                            </tr>
                            </tfoot>

                        </table>
                        {!! $quests->render() !!}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section><!-- /.content -->

@endsection
