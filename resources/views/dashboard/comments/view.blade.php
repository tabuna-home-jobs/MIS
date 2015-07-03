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

                            <div class="radio">
                                <label>
                                    <input type="radio" name="status"  value="1"  @if($Comments->publish) checked @endif >
                                    Опубликован
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" value="0" @if(!$Comments->publish) checked @endif>
                                    Не опубликован
                                </label>
                            </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary">Отправить</button>


                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection














