@extends('luchiki48ru/header')

@section('content')

    <div class="page-content">
        <div class="container">
            <h1>Отзывы о нас</h1>
            <div class="page-text">

                <style>
                    .single-review>div:nth-child(1) {
                        overflow: hidden;
                    }
                    .single-review i {
                        display: block;
                        font-size: 4em;
                        text-align: center;
                    }
                </style>
                <div class="row">

                    @foreach($Reviews as $item)
                    <div class="single-review col-md-12">
                        <div class="rev-img col-md-2 col-sm-2"><i class="feature-icon fa fa-commenting"></i></div>
                        <div class="rev-text col-md-10 col-sm-10">
                            <h4>{{$item['fio']}}</h4>
                            <span>{{$item['created_at']}}</span>
                            <p>{!! str_limit($item['content'],300,'...') !!}
                                </p>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="row">
                    {!! $Reviews->render() !!}
                </div>




                <form class="form-horizontal" role="form" action="/reviews" method="post">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Напишите свой отзыв</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Имя</label>
                            <div class="col-md-4">
                                <input id="textinput" name="fio" type="text" max="255" placeholder="Имя" class="form-control input-md">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textarea">Комментарий</label>
                            <div class="col-md-4">
                                <textarea class="form-control" id="textarea" name="content" placeholder="Комментарий"></textarea>
                            </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Оставить отзыв</label>
                            <div class="col-md-4">
                                <button id="singlebutton" name="singlebutton" class="btn btn-primary">ОТПРАВИТЬ</button>
                            </div>
                        </div>

                    </fieldset>
                </form>




            </div>
        </div>
    </div>







@endsection