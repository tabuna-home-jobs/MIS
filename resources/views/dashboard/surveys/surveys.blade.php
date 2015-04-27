
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
                            <h5 class="box-title">
                                <a href="/dashboard/surveys/trash/" class="btn btn-link btn-sm"><span class="fa fa-trash"></span> Корзина </a>
                            </h5>
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($Surveys as $survey)
                                <tr>
                                    <td>{{ $survey->name }}</td>
                                    <td>
                                        <a href="/dashboard/surveys/add/{{ $survey->id }}" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> </a>
                                        <a href="/dashboard/surveys/destroy/{{ $survey->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Название</th>

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
