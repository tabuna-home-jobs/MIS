
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Опросы
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
                            <h5 class="box-title">
                                <a href="/dashboard/surveys/trash/" class="btn btn-link btn-sm"><span class="fa fa-trash"></span> Корзина </a>
                            </h5>
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">


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


                        <table class="table table-bordered table-hover">
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
                                        <a href="/dashboard/surveys/add/{{ $survey->id }}" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> </a>
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
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Управление</th>

                            </tr>
                            </tfoot>

                        </table>
                        {!! $Surveys->render() !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection
