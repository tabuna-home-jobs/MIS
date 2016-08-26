@extends('luchiki48ru/header')

@section('content')

    <div class="page-content">
        <div class="container">
            <h1 class="blueText center">Отзывы о нас</h1>
            <div class="padding-top-35">
                <ul class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li>Отзывы о нас</li>
                </ul>
            </div>
            <div class="page-text">

                <div class="row">
                    @if(Session::has('good'))
                        <div class="alert alert-success">
                            {{ Session::get('good') }}
                        </div>
                    @endif
                    @foreach($Reviews as $item)
                    <div class="single-review col-md-6">
                        <div class="rev-img col-md-2 col-sm-3 hidden-xs"><i class="feature-icon fa fa-commenting"></i></div>
                        <div class="rev-text col-md-10 col-sm-9">
                            <p>{!! str_limit($item['content'],300,'...') !!}
                                </p>
                            <div class="text-right rev-name">
                               <div class="black">- {{$item['fio']}}</div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @endforeach

                </div>
                <div class="row">
                    {!! $Reviews->render() !!}
                </div>

            </div>
        </div>
    </div>
    <div class="reviews-form" id="reviews_form">
        <h2 class="blueBg center white feedHead">Оставить отзыв</h2>
        <div class="container">

            <div class="col-sm-6 hidden-xs big textst">
                Здесь Вы можете оставить свой отзыв

            </div>

            <div class="col-sm-offset-2 col-sm-4">

                <form class="form-horizontal" role="form" action="/reviews" method="post">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="textinput" name="fio" type="text" max="255" placeholder="Имя" class="form-control input-md">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">

                            <div class="col-md-12">
                                <textarea class="form-control" id="textarea" name="content" placeholder="Комментарий"></textarea>
                            </div>
                        </div>

                        {{csrf_field()}}

                                <!-- Button -->
                        <div class="form-group">

                            <div class="col-md-12">
                                <button name="singlebutton" type="submit" class="btn btn-primary">ОТПРАВИТЬ</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>







@endsection
