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



                                <ul class="timeline">
                                    <li class="tl-header">
                                        <div class="btn btn-info">Now</div>
                                    </li>
                                    <li class="tl-item">
                                        <div class="tl-wrap b-info">
                                            <span class="tl-date">5s ago</span>
                                            <div class="tl-content">
                                                Just a title
                                            </div>
                                        </div>
                                    </li>



                                    @foreach($Reviews as $item)


                                    <li class="tl-item">
                                        <div class="tl-wrap  b-info">
                                            <span class="tl-date">{{$item['created_at']}}</span>
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
                                            <span class="tl-date">04.2014</span>
                                            <div class="tl-content panel padder b-a block">
                                                <span class="arrow left pull-up hidden-left"></span>
                                                <span class="arrow right pull-up visible-left"></span>
                                                <div class="text-lt m-b-sm">Напишите свой отзыв</div>
                                                <div class="panel-body pull-in b-t b-light">
                                                    <p>I'm working on a realy amazing application, It will be available soon. here is a little tease. </p>
                                                    <div class="panel panel-default m-t-md m-b-n-sm pos-rlt">
                                                        <span class="arrow top pull-left"></span>
                                                        <form>
                                                            <textarea class="form-control no-border" rows="3" placeholder="Your comment..."></textarea>
                                                        </form>
                                                        <div class="panel-footer bg-light lter">
                                                            <button class="btn btn-info pull-right btn-sm">Отправить</button>
                                                            <ul class="nav nav-pills nav-sm">
                                                                <li><a href=""><i class="fa fa-camera text-muted"></i></a></li>
                                                                <li><a href=""><i class="fa fa-video-camera text-muted"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tl-header">
                                        <div class="btn btn-sm btn-default btn-rounded">2014</div>
                                    </li>
                                    <li class="tl-item">
                                        <div class="tl-wrap">
                                            <span class="tl-date">10.08.2013</span>
                                            <div class="tl-content panel padder b-a">
                                                <span class="arrow left pull-up hidden-left"></span>
                                                <span class="arrow right pull-up visible-left"></span>
                                                <div class="text-lt">A good story to hear.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tl-header">
                                        <div class="btn btn-icon btn-rounded btn-default"><i class="fa fa-twitter"></i></div>
                                    </li>
                                    <li class="tl-item tl-left">
                                        <div class="tl-wrap b-white">
                                            <span class="tl-date">5.07.2013</span>
                                            <div class="tl-content panel padder b-a">
                                                <span class="arrow left pull-up hidden-left"></span>
                                                <span class="arrow right pull-up visible-left"></span>
                                                <div class="text-lt">Yesterday is History</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tl-header">
                                        <div class="btn btn-sm btn-default btn-rounded">more</div>
                                    </li>
                                </ul>





                                    <div class="row">
                                        @if(Session::has('good'))
                                            <div class="alert alert-success">
                                                {{ Session::get('good') }}
                                            </div>
                                        @endif


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
