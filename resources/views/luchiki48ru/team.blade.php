@extends('luchiki48ru/ALTheader')

@section('content')


    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="cupid-heading">
                    <h2>Наши учителя</h2>
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


                @foreach($Specialisty as $key => $spec)
            	<div class="doctors col-sm-4 col-md-3 col-xs-12 padding-bottom-60 clearfix">
                    <div class="doctors-img">
                        <a href="team/{{$spec['id']}}">
                            <img src="{{$spec->avatar}}"  alt="{{$spec->fio}}" title="{{$spec->fio}}" class="img-responsive">
                        </a>
                        </div>
                    <div class="doctors-detail">
                        <h4>
                            <a href="team/{{$spec['id']}}">
                                {{$spec->fio}}
                            </a>
                            <span class="text-center">
                                {{str_limit($spec->subname, 100 ,'...')}}
                            </span>
                        </h4>

                        @if(isset($spec->special) && trim($spec->special) !== "")
                        <p>
                            <span class="heading">Специализация: </span>
                            <span class="detail">{{$spec->special}}</span>
                        </p>
                        @endif

                        @if(isset($spec->obrazovanie) && trim($spec->obrazovanie) !== "")
                        <p>
                            <span class="heading">Образование</span>
                            <span class="detail">{{$spec->obrazovanie}}</span>
                        </p>
                        @endif

                        @if(isset($spec->opyt) && trim($spec->opyt) !== "")
                        <p>
                            <span class="heading">Должность: </span>
                            <span class="detail">{{str_limit($spec->opyt, 50, '...')}} </span>
                        </p>
                        @endif

                        @if(isset($spec->about) && trim($spec->about) !== "" )
                        <p>
                            <span class="heading">Умения:</span>
                            <span class="detail">{{$spec->about}} </span>
                        </p>
                        @endif

                        </div>
                </div>
                    @if(($key+1) % 4 == 0)
                    <div class="clearfix"></div>
                    @endif


                @endforeach



            </div>


            <div class="row">
                {!! $Specialisty->render() !!}
            </div>


        </div>
        </article>


    </div>
                </div>
            </div>
    </main>
    </div>

@endsection
