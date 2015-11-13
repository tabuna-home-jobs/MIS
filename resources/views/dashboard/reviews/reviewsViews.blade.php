@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Отзыв:  {{ $Reviews->fio }}</h1>
    </div>
    <div class="wrapper-md">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Содержание</div>
                    <div class="panel-body">



                        <form action="/dashboard/reviews" method="post">


                            <div class="form-group">
                                <label for="fio">ФИО</label>
                                <input type="text" class="form-control" name="fio" id="fio" value="{{ $Reviews->fio or '' }}">
                            </div>

                            <div class="form-group">
                                <label for="content">Содержание</label>
                                <textarea class="form-control" name="content" rows="10"
                                          id="content">{{ $Reviews->content or '' }}</textarea>
                            </div>


                            <div class="form-group">
                                <label>Дата публикации</label>

                                <div class='input-group date' id='datetimepicker'>
                                    <input type='text' class="form-control" required name="created_at"
                                           value="{{$Reviews->created_at or ''}}"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label">Статус публикации</label>

                                <div class="col-sm-10">
                                    <label class="i-switch bg-success m-t-xs m-r">
                                        <input type="radio" name="status" value="1"
                                               @if($Reviews->publish) checked @endif>
                                        <i></i>
                                    </label>
                                    <label class="i-switch bg-danger m-t-xs m-r">
                                        <input type="radio" name="status" value="0"
                                               @if(!$Reviews->publish) checked @endif>
                                        <i></i>
                                    </label>
                                </div>
                            </div>




                            <input type="hidden" name="id" value="{{ $Reviews->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-default">Отправить</button>
                        </form>







                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

