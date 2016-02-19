@extends('sokzn48ru.app')

@section('content')

    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                <h1>
                    О нас говорят
                </h1>
            </div>
        </div>
    </section>

    <section class="container">

        <div class="wrapper-md">
            <div class="row">
                <div class="col-sm-9">
                    <div class="blog-post">
                        <div class="panel">
                            <div class="wrapper-lg">
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
                                        @if(Session::has('good'))
                                            <div class="alert alert-success">
                                                {{ Session::get('good') }}
                                            </div>
                                        @endif
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
                                                <div class="col-md-5">
                                                    <input id="textinput" name="fio" type="text" max="255" placeholder="Имя" class="form-control input-md">
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>

                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="textarea">Комментарий</label>
                                                <div class="col-md-5">
                                                    <textarea class="form-control" id="textarea" name="content" placeholder="Комментарий"></textarea>
                                                </div>
                                            </div>

                                            {{csrf_field()}}

                                            <!-- Button -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="singlebutton">Оставить отзыв</label>
                                                <div class="col-md-5">
                                                    <button name="singlebutton" type="submit" class="btn btn-info">ОТПРАВИТЬ</button>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h5 class="font-bold">Последние новости</h5>
                    <div>
                        @foreach($LastNews as $new)
                            <div>
                                <a class="pull-left thumb thumb-wrapper m-r" href="/blog/{{$new->id}}">
                                    <img src="{{$new->avatar}}">
                                </a>
                                <div class="clear">
                                    <a href="/blog/{{$new->id}}" class="font-semibold text-ellipsis">{{$new->name}}</a>
                                    <p><small>{{str_limit(strip_tags($new->content), 50, '...')}}</small></p>
                                    <div class="text-xs block m-t-xs">

                                        {{$new->created_at->diffForHumans()}}
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>



    </section>



    <script>
        var resized = function (height) {

            $('.item-row').each(function(){
                var height_this = $(this).height();
                height_this > height ? height = height_this:'';
            });

            $('.item-row').height(height);
        };

        $(window).resize(function(){
            var height = 0;
            $('.item-row').each(function(){
                var height_this = $(this).height();
                //height_this > height ? height = height_this:'';
                if(height_this > height){
                    height = height_this;
                }
            });

            $('.item-row').height(height);
        });

        $(document).ready(function(){
            var height = 0;
            $('.item-row').each(function(){
                var height_this = $(this).height();
                //height_this > height ? height = height_this:'';
                if(height_this > height){
                    height = height_this;
                }
            });

            $('.item-row').height(height);
        });

    </script>
@endsection
