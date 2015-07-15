@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">{{ $Comments->name or 'Комментарий' }}</h1>
    </div>
    <div class="wrapper-md">
        <form class="row" action="/dashboard/comments" method="post">
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Содержание</div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Содержание</label>
                            <textarea class="form-control textarea" name="content" rows="10">{{ $Comments->content or '' }}</textarea>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Общая информация</div>
                    <div class="panel-body">


                        @if(isset($Comments->id))
                            <input type="hidden" name="id" value="{{$Comments->id}}">
                        @endif

                            <div class="form-group">
                                <label>Имя</label>
                                <input class="form-control" type="text" maxlength="255" required name="fio" value="{{$Comments->fio or ''}}">
                            </div>
                            <div class="form-group">
                                <label>Телефон</label>
                                <input class="form-control" type="text" maxlength="255" required name="phone" value="{{$Comments->phone or ''}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" maxlength="255" required name="email" value="{{$Comments->email or ''}}">
                            </div>




                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group col-xs-12">
                                <label class="col-sm-12 control-label text-center">Статус</label>
                                <div class="col-sm-12">
                                    <small style="font-size: 10px">Опубликован</small>
                                    <label class="i-switch bg-primary m-t-xs m-r">
                                        <input type="radio" name="status"  value="1"  @if($Comments->publish) checked @endif >
                                        <i></i>
                                    </label>
                                    <label class="i-switch bg-warning m-t-xs m-r">
                                        <input type="radio" name="status" value="0" @if(!$Comments->publish) checked @endif>
                                        <i></i>
                                    </label>
                                    <small style="font-size: 10px">Не опубликован</small>
                                </div>
                            </div>






                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary">Отправить</button>


                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection














