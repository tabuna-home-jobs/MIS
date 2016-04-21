@extends('cozn48ru/header')

@section('content')


    <div class="sub-page-content">
    	
        
        <div class="container">
        	<h2 class="light bordered main-title title-inner text-left">Наши Специалисты</h2>
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li>Наши специалисты</li>
            </ul>
     		<div class="row">


                @foreach($Specialisty as $key =>$spec)
            	<div class="col-md-4 padding-bottom-60 clearfix wrapper-team-elem">
                    <div class="doctors-img text-center">
                        <img src="{{$spec->avatar}}" class="img-circle" width="234" alt="{{$spec->fio}}" title="{{$spec->fio}}">

                        <ul class="list-unstyled social2">
                            <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#." class="twitter"><i class="fa fa-vk"></i></a></li>
                            <li><a href="#." class="odnok"><i class="fa fa-circle-o"></i></a></li>
                        </ul>
                        </div>
                    <div class="doctors-detail text-center">
                        <a href="/team/{{$spec['id']}}"><h4>{{$spec->fio}}</h4></a>

                        <p>
                            <span class="text-center subname-team">{{$spec->subname}}</span>
                        </p>

                    </div>
                </div>
                    @if(($key+1) % 3 == 0)
                        <div class="clearfix"></div>
                    @endif
                @endforeach



            </div>


            <div class="row text-center">
                {!! $Specialisty->render() !!}
            </div>


        </div>


    </div><!--end sub-page-content-->
    
    
    
    
    
    @endsection
