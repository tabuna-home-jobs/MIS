@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">{{$Answers->fio}}</h1>
    </div>
    <div class="wrapper-md">

            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Общая информация</div>
                    <div class="panel-body">
                        <p>{{$Answers->phone}}</p>
                        <p>{{$Answers->email}}</p>
                    </div>

                    <!-- List group -->
                    <ul class="list-group">

                        @foreach(unserialize($Answers->answer) as $key => $answer)

                            <li class="list-group-item">Вопрос:
                                <strong>{{$Quest::find($key)->quest}}</strong>
                            </li>

                            <li class="list-group-item">

                                @if(is_array($answer))
                                    @foreach($answer as $value)
                                        {{$value}},
                                    @endforeach
                                @else
                                        {{$answer}}
                                @endif
                            </li>


                        @endforeach


                    </ul>
                </div>
            </div>

    </div>

@endsection
