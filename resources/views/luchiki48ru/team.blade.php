@extends('luchiki48ru/header')

@section('content')


    <div class="sub-page-content">
    	
        
        <div class="container">
        	<h1 class="light bordered main-title">Наши <span> Специалисты</span></h1>
     		<div class="row inline-block-grids">
                <div class="col-sm-4 col-xs-12 col-md-3 of-canvas-xs">

                    <nav class="primary-albums clearfix">
                        <div class="list-group">
                            <a style="z-index: 99" href="/team" class="list-group-item @if(!isset($id))active @endif">Все</a>
                            @foreach($SpCat as $album)

                                <a class="list-group-item @if(isset($id) && $id==$album->id)active @endif"
                                   href="/team?catspec={{$album['id']}}">{{$album->name}}</a>
                            @endforeach

                        </div>
                    </nav>
                </div>
                <div class="col-sm-8 font-size-0">


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
                </div>




            </div>
            <div class="row text-center">
                {!! $Specialisty->appends(\Input::except('page'))->render() !!}
            </div>





        </div>


    </div><!--end sub-page-content-->
    
    
    
    
    
    @endsection
