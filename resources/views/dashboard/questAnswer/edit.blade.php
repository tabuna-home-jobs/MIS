@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Вопрос от пользователя {{$QuestAnswer->fio}}</h1>
    </div>
    <div class="wrapper-md">
        <form class="row" action="{{URL::route('dashboard.questanswer.update',$QuestAnswer->id)}}" method="post">
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Содержание</div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Вопрос</label>
                            <textarea class="form-control textarea" name="questions" rows="10">{{ $QuestAnswer->questions or '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Ответ</label>
                            <textarea class="form-control textarea" name="answer" rows="10">{{ $QuestAnswer->answer or '' }}</textarea>
                        </div>



                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Общая информация</div>
                    <div class="panel-body">


                        @if(isset($QuestAnswer->id))
                            <input type="hidden" name="id" value="{{$QuestAnswer->id}}">
                        @endif

                        <div class="form-group">
                            <label>Имя</label>
                            <input class="form-control" type="text" maxlength="255" required name="fio" value="{{$QuestAnswer->fio or ''}}">
                        </div>
                        <div class="form-group">
                            <label>Телефон</label>
                            <input class="form-control" type="text" maxlength="255" required name="phone" value="{{$QuestAnswer->phone or ''}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" maxlength="255" required name="email" value="{{$QuestAnswer->email or ''}}">
                        </div>

                            <div class="form-group">
                                <label>Доктор</label>
                                <select class="form-control" name="doctor_id">
                                    @foreach($Doctors as $key =>  $doc)
                                        <option value="{{$doc}}"
                                                @if($QuestAnswer->doctor_id == $doc) selected @endif>{{$key}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Категория</label>
                                <select class="form-control" name="category_id">
                                    @foreach($Category as $key =>  $cat)
                                        <option value="{{$cat}}"
                                                @if($QuestAnswer->category_id == $cat) selected @endif>{{$key}}</option>
                                    @endforeach
                                </select>
                            </div>



                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group col-xs-12">
                            <label class="col-sm-12 control-label text-center">Статус</label>
                            <div class="col-sm-12">
                                <small style="font-size: 10px">Опубликован</small>
                                <label class="i-switch bg-primary m-t-xs m-r">
                                    <input type="radio" name="publish"  value="1"  @if($QuestAnswer->publish) checked @endif >
                                    <i></i>
                                </label>
                                <label class="i-switch bg-warning m-t-xs m-r">
                                    <input type="radio" name="publish" value="0" @if(!$QuestAnswer->publish) checked @endif>
                                    <i></i>
                                </label>
                                <small style="font-size: 10px">Не опубликован</small>
                            </div>
                        </div>





                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary">Отправить</button>


                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection














