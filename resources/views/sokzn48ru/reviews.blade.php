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
                            <div class="wrapper">


                                <div class="row">
                                    @if(Session::has('good'))
                                        <div class="alert alert-success">
                                            {{ Session::get('good') }}
                                        </div>
                                    @endif


                                </div>


                                <ul class="timeline">
                                    <li class="tl-header">
                                        <div class="btn btn-info">Последние отзывы</div>
                                    </li>



                                    @foreach($Reviews as $item)


                                    <li class="tl-item">
                                        <div class="tl-wrap  b-info">
                                            <span class="tl-date">{{$item['created_at']->diffForHumans()}}</span>
                                            <div class="tl-content panel padder b-a w-md w-auto-xs">
                                                <span class="arrow left pull-up"></span>
                                                <div class="text-lt m-b-sm">{{$item['fio']}}</div>
                                                <div class="panel-body pull-in b-t b-light">
                                                    <div class="clear">
                                                        {!! str_limit($item['content'],300,'...') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    @endforeach
                                    <li class="tl-item tl-left">
                                        <div class="tl-wrap  b-info">
                                            <span class="tl-date">{{date("m.d.y")}}</span>
                                            <div class="tl-content panel padder b-a block">
                                                <span class="arrow left pull-up hidden-left"></span>
                                                <span class="arrow right pull-up visible-left"></span>
                                                <div class="text-lt m-b-sm">Напишите свой отзыв</div>
                                                <div class="panel-body pull-in b-t b-light">
                                                    <form  role="form" action="/reviews" method="post">
                                                        <input id="textinput" name="fio" type="text" max="255" placeholder="Имя" class="form-control input-md">
                                                    <div class="panel panel-default m-t-md m-b-n-sm pos-rlt">


                                                        <textarea class="form-control no-border" rows="3" id="textarea" name="content" placeholder="Комментарий"></textarea>

                                                        {{csrf_field()}}

                                                        <div class="panel-footer bg-light lter">
                                                            <p class="text-right"><button class="btn btn-info btn-sm" type="submit">Отправить</button></p>

                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tl-header">
                                        <div class="btn btn-icon btn-rounded btn-default"><i class="fa fa fa-envelope"></i></div>
                                    </li>


                                </ul>






                                    <div class="row">
                                        {!! $Reviews->render() !!}
                                    </div>



                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    @if(isset($LastNews))
                        @include('sokzn48ru._layouts.newslsit',['listnews' => $LastNews])
                    @endif
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
