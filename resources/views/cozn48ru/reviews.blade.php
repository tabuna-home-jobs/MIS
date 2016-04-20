@extends('cozn48ru/header')

@section('content')
    <div class="page-content">
        <div class="container">
            <h1>Отзывы</h1>
            <div class="page-text">
                <div class="row">

                    @foreach($Reviews as $key=>$value)
                        <div class="col-md-6">
                            <div class="feature">
                                <div class="feature-head">
                                    <i class="pull-left fa fa-male"></i>
                                    <span>{{$value['fio']}}</span>
                                </div>

                                <div class="feature-content">
                                    <p>{{$value['content']}}</p>
                                </div>

                                <div class="feature-date">
                                    <small> <i class="fa fa-clock-o"></i>{{$value['created_at']}} </small>
                                </div>
                            </div>
                        </div>
                        @if(($key +1)%2==0)
                            <div class="clearfix"></div>
                        @endif
                    @endforeach

                </div>
                <div class="clearfix"></div>
                <div class="row">

                    {!! $Reviews->render() !!}
                </div>
                <div class="clearfix"></div>
                <div class="row formblock">

                    <div class="col-md-6">
                        <h3>Здесь вы можете оставить свой отзыв!</h3>
                    </div>
                    <div class="col-md-6">

                        <form role="form" action="/reviews" method="post">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <input type="text" name="fio" max="255" placeholder="Имя" class="form-control">
                                    <br>
                                    <textarea class="form-control" name="content" placeholder="Комментарий"></textarea>
                                    <br>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-lg button1" type="submit" style="float: right">отправить
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
