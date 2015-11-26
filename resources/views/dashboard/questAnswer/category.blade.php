@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Список категорий для вопросов</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                Категории вопросов
            </div>


            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">


                        <form class="form-inline text-right" action="{{URL::route('dashboard.categoryanswer.store')}}"
                              method="post">
                            <div class="form-group">
                                <label for="name">Название</label>
                                <input type="text" class="form-control" name="name" placeholder="Имя категории">
                            </div>
                            <button type="submit" class="btn btn-default">Создать</button>
                            {{csrf_field()}}
                        </form>


                        <div class="col-sm-12">
                            <table class="table table-striped m-b-none dataTable no-footer" id="DataTables_Table_0"
                                   role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>Имя</th>
                                    <th>Управление</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($category as $cat)
                                    <tr>
                                        <td>{{ $cat->id }}</td>
                                        <td>{{ $cat->name }}</td>
                                        <td class="pull-right">


                                            <form action="{{URL::route('dashboard.categoryanswer.destroy',$cat->id)}}"
                                                  method="post" class="pull-right">
                                                <input type="hidden" name="_method" value="delete">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-danger"><span
                                                            class="fa fa-trash-o"></span></button>
                                            </form>


                                            <form action="{{URL::route('dashboard.categoryanswer.update',$cat->id)}}"
                                                  method="post" class="pull-right">
                                                <input type="text" name="name" class="form-control" value="" required>
                                                <input type="hidden" name="_method" value="PUT">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-primary"><span
                                                            class="fa fa-edit"></span></button>
                                            </form>


                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">Всего
                                элементов: {!! $category->count() !!}</small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            {!! $category->render() !!}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



@endsection
