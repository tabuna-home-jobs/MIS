@extends('luchiki48ru/ALTheader')

@section('content')

    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="cupid-heading">
                    <h2>Услуги</h2>
                </div>
            </div>
        </section>
        <main role="main" class="site-content-archive">
            <div class="container clearfix">
                <div class="blog-wrapper">
                    <div class="blog-inner blog-single clearfix">
                        <article id="post-">
                            <div class="page-single-our-staffs">
                                <div class="row">
                        @foreach($data as $item)

                            <div class="col-xs-12">
                                <h2>{{$item->name}}</h2>
                                @foreach($item->goods as $key => $good)

                                    <div class="col-md-4 item-row">
                                        <div>
                                            <div>
                                                <img src="{{$good->avatar}}" alt="{{$good->name}}"></div>
                                            <h4>
                                                <a href="/service/{{$good->id}}">
                                                    {{str_limit((strip_tags($good->name)), 80, '...')}}
                                                </a>
                                            </h4>
                                            <p class="day"></p>
                                            <div>
                                                {{str_limit((strip_tags($good->content)), 130, '...')}}
                                            </div>
                                            <div class="seeall">
                                                <a href="/service/{{$good->id}}" class="btn btn-primary btn-default">
                                                    <span class="glyphicon glyphicon-eye-open"></span> Посмотреть
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @if(($key+1) % 3 == 0)
                                        <div class="clearfix"></div>
                                    @endif

                                @endforeach
                            </div>


                        @endforeach
                                </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
    </div>


@endsection
