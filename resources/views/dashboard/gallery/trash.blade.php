
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Удалённые Альбомы
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
                                <a href="/dashboard/gallery/" class="btn btn-link btn-sm"><span class="fa fa-check"></span> Активные </a>
                            </h5>
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Количество</th>
                                <th>Дата создания</th>
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach ($AlbumList as $album)
                                <tr>
                                    <td>{{ $album->id }}</td>
                                    <td>{{ $album->name }}</td>
                                    <td>{{ $album->getPhoto()->count() }}</td>
                                    <td>{{ $album->created_at }}</td>
                                    <td>
                                        <a href="/dashboard/gallery/restore/{{ $album->id }}" class="btn btn-success"><span class="fa fa-reply"></span> </a>
                                        <a href="/dashboard/gallery/unset/{{ $album->id }}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Количество</th>
                                <th>Дата создания</th>
                                <th>Управление</th>
                            </tr>
                            </tfoot>

                        </table>
                        {!! $AlbumList->render() !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection
