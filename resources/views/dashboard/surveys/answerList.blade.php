@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> Прошедшие анкетирование</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="table-responsive">


                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped m-b-none dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ФИО</th>
                                    <th>Телефон</th>
                                    <th>E-mail</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($Answers as $AnswerUser)
                                    <tr>
                                        <td>{{ $AnswerUser->id }}</td>
                                        <td>{{ $AnswerUser->fio }}</td>
                                        <td>{{ $AnswerUser->phone }}</td>
                                        <td>{{ $AnswerUser->email }}</td>
                                        <td>
                                            <a href="/dashboard/surveys/ansertquest/{{ $AnswerUser->id }}"
                                               class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $Answers->count() !!}</small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            {!! $Answers->render() !!}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



@endsection
