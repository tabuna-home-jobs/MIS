
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Категории
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
                                <a href="/dashboard/encyclopediaCategory/create" class="btn btn-link btn-sm"><span class="fa fa-plus"></span> Добавить</a>
                            </h5>
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Заголовок</th>
                                <th>Родительская категория</th>
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($EncyCategory as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->mainCategory()->name or 'Главная категория'}}</td>
                                    <td class="btn-toolbar">
                                        <div class="btn-group">
                                        <a href="/dashboard/encyclopediaCategory/{{ $category->id }}/edit" class="btn btn-primary"><span class="fa fa-edit"></span> </a>
                                        <form action="/dashboard/encyclopediaCategory/{{ $category->id }}" method="post" class="pull-right">
                                            <button type="submit" class="btn btn-danger"><span class="fa fa-trash-o"></span></button>
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Заголовок</th>
                                <th>Родительская категория</th>
                                <th>Управление</th>
                            </tr>
                            </tfoot>

                        </table>
                        {!! $EncyCategory->render() !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection
