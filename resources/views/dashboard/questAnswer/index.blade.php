
@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Список вопросов и ответов</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                Вопросы и ответы
            </div>
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped m-b-none dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>Имя</th>
                                    <th>Телефон</th>
                                    <th>Email</th>
                                    <th>Вопрос</th>
                                    <th>Статус</th>
                                    <th>Управление</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($QuestAnswer as $QuestAnswerElement)
                                    <tr>
                                        <td>{{ $QuestAnswerElement->id }}</td>
                                        <td>{{ $QuestAnswerElement->fio }}</td>
                                        <td>{{ $QuestAnswerElement->phone }}</td>
                                        <td>{{ $QuestAnswerElement->email }}</td>
                                        <td>{{str_limit($QuestAnswerElement->questions, $limit = 30, $end = '...') }}</td>
                                        <td>@if($QuestAnswerElement->publish) <span title="Опубликован" class="label bg-success">Опубликован</span> @else <span title="Не опубликован" class="label bg-light">Не опубликован</span> @endif</td>
                                        <td class="pull-right">
                                            <a href="{{URL::route('dashboard.questanswer.edit',$QuestAnswerElement->id)}}" class="btn btn-primary"><span class="fa fa-edit"></span> </a>
                                            <form action="{{URL::route('dashboard.questanswer.destroy',$QuestAnswerElement->id)}}" method="post" class="pull-right">
                                                <input type="hidden" name="_method" value="delete">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-danger"><span class="fa fa-trash-o"></span></button>
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
                        <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $QuestAnswer->count() !!}</small>
                    </div>
                    <div class="col-sm-6 text-right text-center-xs">
                        {!! $QuestAnswer->render() !!}
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>



@endsection
