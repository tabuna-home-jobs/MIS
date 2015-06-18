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


                        <div class="collapse" id="collapseExample">
                            <div class="well">
                                <form action="/dashboard/surveys/add" method="post" class="row">

                                    <div class="col-md-4">


                                        <div id="GoodsAttr" class="text-center">
                                            <label>Атрибуты</label>

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
                            @foreach ($quests as $survey)
                                <tr>
                                    <td>{{ $survey->id }}</td>
                                    <td>{{ $survey->quest }}</td>
                                    <td>{{ $survey->type }}</td>
                                    <td>{{ $survey->created_at }}</td>
                                    <td>
                                        <a href="/dashboard/surveys/show/{{ $survey->id }}"
                                           class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                        <a href="/dashboard/surveys/destroy/{{ $survey->id }}"
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
