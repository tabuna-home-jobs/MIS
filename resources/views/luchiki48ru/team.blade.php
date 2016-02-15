@extends('luchiki48ru/header')

@section('content')


    <div class="sub-page-content">
    	
        
        <div class="container">
        	<h2 class="light bordered main-title">Наши <span> Специалисты</span></h2>
     		<div class="row inline-block-grids">


                @foreach($Specialisty as $spec)
            	<div class="doctors col-sm-4 col-md-3 col-xs-12 padding-bottom-60 clearfix">
                    <div class="doctors-img"><img src="{{$spec->avatar}}" width="234" alt="" title="">

                        </div>
                    <div class="doctors-detail">
                        <h4>{{$spec->fio}}<span class="text-center">{{$spec->subname}}</span></h4>
                        
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
                            <span class="detail">{{$spec->opyt}} </span>
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

                @endforeach



            </div>


            <div class="row">
                {!! $Specialisty->render() !!}
            </div>


        </div>


    </div><!--end sub-page-content-->
    
    
    
    
    
    @endsection