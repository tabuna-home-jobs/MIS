@extends('sokzn48ru.app')


@section('content')



    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                <h2>
                    {{$New->name}}
                   семейный оздоровительный комплекс
                </h2>
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


                            <div>{!! $New->content !!}</div>

                            <div class="line line-lg b-b b-light"></div>
                            <div class="text-muted">
                                <i class="fa fa-clock-o text-muted"></i> {{$New->created_at->toDateString()}}
                          </div>
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
