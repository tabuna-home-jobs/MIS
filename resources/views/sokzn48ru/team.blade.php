@extends('sokzn48ru.app')


@section('content')



    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                <h1>
                    Наши специалисты
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


                                @foreach($Specialisty as $key => $spec)
                                    <div class="doctors col-sm-6 col-md-6 col-xs-12 padding-bottom-60 clearfix">
                                        <div class="doctors-img">
                                            <a href="/team/{{$spec['id']}}">
                                                <img src="{{$spec->avatar}}" width="234" alt="" title="">
                                            </a>
                                            <a href="/team/{{$spec['id']}}">
                                                <h4>{{$spec->fio}}<span class="text-center">{{$spec->subname}}</span></h4>
                                            </a>
                                        </div>
                                        <div class="doctors-detail">


                                            @if(isset($spec->special) && trim($spec->special) !== "")
                                                <p>
                                                    <span class="heading">Специализация: </span>
                                                    <span class="detail">{{$spec->special}}</span>
                                                </p>
                                            @endif



                                            @if(isset($spec->opyt) && trim($spec->opyt) !== "")
                                                <p>
                                                    <span class="heading">Должность: </span>
                                                    <span class="detail">{{str_limit($spec->opyt, 50, '...')}} </span>
                                                </p>
                                            @endif

                                            @if(isset($spec->obrazovanie) && trim($spec->obrazovanie) !== "")
                                                <p>
                                                    <span class="heading">Образование</span>
                                                    <span class="detail">{{str_limit($spec->obrazovanie, 50, '...')}}</span>
                                                </p>
                                            @endif

                                            @if(isset($spec->about) && trim($spec->about) !== "" )
                                                <p>
                                                    <span class="heading">Умения:</span>
                                                    <span class="detail">{{str_limit($spec->about, 50, '...')}} </span>
                                                </p>
                                            @endif


                                        </div>
                                    </div>
                                    @if(($key+1) % 2 == 0)
                                        <div class="clearfix"></div>
                                    @endif
                                @endforeach
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <nav class="primary-albums clearfix">
                        <div class="list-group">
                            <a style="z-index: 99" href="/team" class="list-group-item @if(!isset($id))active @endif">Все</a>
                            @foreach($SpCat as $album)

                                <a class="list-group-item @if(isset($id) && $id==$album->id)active @endif"
                                   href="/team?catspec={{$album['id']}}">{{$album->name}}</a>
                            @endforeach

                        </div>
                    </nav>

                    @if(isset($LastNews))
                        @include('sokzn48ru._layouts.newslsit',['listnews' => $LastNews])
                    @endif
                </div>
            </div>
        </div>



    </section>




@endsection
