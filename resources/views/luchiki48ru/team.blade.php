@extends('luchiki48ru/header')

@section('content')


    <div class="sub-page-content">
    	
        
        <div class="container">
        	<h2 class="light bordered main-title">Наши <span> Специалисты</span></h2>
     		<div style="font-size: 0" class="row">


                @foreach($Specialisty as $spec)
            	<div style="float: none!important;display: inline-block!important;vertical-align: top;text-align: center" class="col-sm-4 col-md-3 col-xs-12 padding-bottom-60 clearfix">
                    <div class="doctors-img"><img src="{{$spec->avatar}}" width="234" alt="" title="">

                        </div>
                    <div class="doctors-detail">
                        <h4>{{$spec->fio}}<span class="text-center">{{$spec->subname}}</span></h4>

                        <p><label class="heading">Специализация: </label><label
                                    class="detail">{{$spec->special}}</label>
                        </p>

                        <p><label class="heading">Образование</label><label
                                    class="detail">{{$spec->obrazovanie}}</label></p>

                        <p><label class="heading">Опыт: </label><label class="detail">{{$spec->opyt}} </label></p>

                        <p><label class="heading">Умения:</label><label class="detail">{{$spec->about}} </label></p>

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