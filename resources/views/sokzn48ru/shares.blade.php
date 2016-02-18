@extends('sokzn48ru.app')
@section('content')

    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                <h1>

                    Акции
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


                                @foreach($Shares as $item)
                                    <div class="col-md-4">
                                        <div>
                                            <h3>{{$item['name']}}</h3>
                                            <div>{{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}</div>
                                            <div class="seeall"><a href="/shares/{{$item['id']}}" class="btn btn-primary btn-default"><span class="glyphicon glyphicon-eye-open"></span> Посмотреть</a></div>
                                        </div>
                                    </div>
                                @endforeach
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






@endsection
