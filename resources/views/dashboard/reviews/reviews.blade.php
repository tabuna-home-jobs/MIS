
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Отзывы
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
                                <a href="/dashboard/reviews/trash/" class="btn btn-link btn-sm"><span class="fa fa-trash"></span> Корзина </a>
                            </h5>
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ФИО</th>
                                <th>Кратко</th>
                                <th>Дата</th>
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($ReviewsList as $Review)
                                <tr>
                                    @if( $Review->publish )
                                        <td class="success">{{ $Review->id }}</td>
                                    @else
                                        <td>{{ $Review->id }}</td>
                                    @endif

                                    <td>{{ $Review->fio }}</td>



                                    <td>{{  mb_substr($Review->content,0,50,'utf-8') }}...</td>
                                    <td>{{ $Review->created_at }}</td>
                                    <td>
                                        <a href="/dashboard/reviews/add/{{ $Review->id }}" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> </a>
                                        <a href="/dashboard/reviews/destroy/{{ $Review->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>ФИО</th>
                                <th>Кратко</th>
                                <th>Дата</th>
                                <th>Управление</th>
                            </tr>
                            </tfoot>

                        </table>
                        {!! $ReviewsList->render() !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection
