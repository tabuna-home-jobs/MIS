@extends('sokzn48ru/ALTheader')
@section('content')

    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="luchiki-heading"><h2>Наши специалисты</h2>
                </div>
            </div>
            <div class="wrrr"></div>
        </section>
        <main role="main" class="site-content">
            <div class="page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="container">
                        <div class="vc_row wpb_row vc_row-fluid bg-content-box ">
                            <div class="about-us-padding   vc_col-sm-8 luchiki-margin-top-35 bg-while">
                                <div class="wpb_wrapper">
                                <div class="row">


                @foreach($Specialisty as $key => $spec)
            	<div class="doctors col-sm-4 col-md-4 col-xs-12 padding-bottom-60 clearfix">
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

                        </h4>
                        {{--
                        @if(isset($spec->subname) && trim($spec->subname) !== "")
                            <p>
                                <span class="heading">Квалификация: </span>
                                <span class="detail">{{str_limit($spec->subname,50,'...')}}</span>
                            </p>
                        @endif
                        --}}
                        @if(isset($spec->opyt) && trim($spec->opyt) !== "")
                        <p>
                            {{--<span class="heading">Специализация: </span>--}}
                            <span class="detail">{{str_limit($spec->opyt,50,'...')}}</span>

                        </p>
                        @endif
                        {{--
                        @if(isset($spec->obrazovanie) && trim($spec->obrazovanie) !== "")
                        <p>
                            <span class="heading">Образование</span>
                            <span class="detail">{{str_limit($spec->obrazovanie,100,'...')}}</span>
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
                            <span class="detail">{{str_limit($spec->about,50,'...')}} </span>
                        </p>
                        @endif
                        --}}
                        </div>
                </div>
                    @if(($key+1) % 3 == 0)
                    <div class="clearfix separator"></div>
                    @endif


                @endforeach



            </div>


            <div class="row">
                {!! $Specialisty->render() !!}
            </div>


                                </div>
                            </div>

                            <div class="  vc_col-sm-4 luchiki-margin-top-35 ">
                                <div class= "padding-top-20 bg-while cat-list">
                                        <div class="cat_list_head">Категории</div>
                                        <ul class="spec-category">

                                            @foreach($SpCat as $album)
                                                <li><a class="@if(isset($id) && $id==$album->id)active @endif"
                                                   href="/team?catspec={{$album['id']}}">{{$album->name}}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
