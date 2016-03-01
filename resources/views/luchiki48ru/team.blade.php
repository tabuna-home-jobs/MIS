@extends('luchiki48ru/header')

@section('content')


    <div class="sub-page-content">
    	
        
        <div class="container">
        	<h1 class="blueText center">НАШИ СПЕЦИАЛИСТЫ</h1>
     		<div class="row inline-block-grids padding-top-35">
                <div class="col-sm-12 col-xs-12 col-md-12 of-canvas-xs  padding-top-35">

                    <nav class="primary-albums clearfix">
                        <ul class="list-group specNav">
                            <li>
                                <a style="z-index: 99" href="/team" class="list-group-item @if(!isset($id))active @endif">Все Специалисты</a>
                            </li>
                            @foreach($SpCat as $album)
                            <li>
                                <a class="list-group-item @if(isset($id) && $id==$album->id)active @endif"
                                   href="/team?catspec={{$album['id']}}">{{$album->name}}</a>
                            </li>
                            @endforeach

                        </ul>
                    </nav>
                </div>
                <div class="col-sm-12 font-size-0 padding-top-35">


                    @foreach($Specialisty as $key => $spec)
                                    <div class="doctors col-sm-6 col-md-6 col-xs-12 padding-bottom-60 clearfix">
                                        <div class="doctors-img col-sm-5 col-md-5 col-xs-12 ">
                                            <a href="/team/{{$spec['id']}}">
                                                <img src="{{$spec->avatar}}" width="234" alt="" title="">
                                            </a>

                                        </div>
                                        <div class="doctors-detail col-sm-7 col-md-7 col-xs-12 ">
                                            <a class="specName" href="/team/{{$spec['id']}}">
                                                <h4>{{$spec->fio}}<span class="text-center">{{$spec->subname}}</span></h4>
                                            </a>

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

                                            <a href="/team/{{$spec['id']}}" class="moreBtn">Подробнее</a>
                                        </div>
                                    </div>
                        @if(($key+1) % 2 == 0)
                            <div class="clearfix"></div>
                        @endif
                    @endforeach
                </div>




            </div>
            <div class="row text-center">
                {!! $Specialisty->appends(\Input::except('page'))->render() !!}
            </div>





        </div>


    </div><!--end sub-page-content-->

    <script>
        var resized = function () {

            $('.doctors-detail').each(function(){
                var height_this = $(this).height();
                height_this > height ? height = height_this:'';
            });

            $('.doctors-detail').height(height);
        };



        $(window).on('load',function(){
            var height = 0;
            $('.doctors-detail').each(function(){
                var height_this = $(this).height();
                if(height_this > height){
                    height = height_this
                }

            });


            $('.doctors-detail').height(height);
        });

        $(window).on('resize',function(){

            $('.doctors-detail').css('height','auto');
            var height = 0;
            $('.doctors-detail').each(function(){
                var height_this = $(this).height();
                if(height_this > height){
                    height = height_this
                }

            });


            $('.doctors-detail').height(height);
        });

    </script>
    
    
    
    @endsection
