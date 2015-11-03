@extends('cozn48ru/header')

@section('content')


    <div class="sub-page-content">
    	
        
        <div class="container">
        	<h2 class="light bordered main-title">Наши <span> Специалисты</span></h2>
     		<div class="row">


                @foreach($Specialisty as $spec)
            	<div class="col-md-6 padding-bottom-60 clearfix">
                    <div class="doctors-img"><img src="{{$spec->avatar}}" width="234" alt="" title="">
                        <ul class="list-unstyled social2">
                            <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#." class="twitter"><i class="fa fa-vk"></i></a></li>
                            <li><a href="#." class="odnok"><i class="fa fa-circle-o"></i></a></li>
                        </ul>
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

                        <p><label class="heading">Рабочие дни:</label><label class="detail">
                                @foreach(unserialize($spec->works) as $work)
                                    {{$work}}
                                @endforeach
                            </label>
                        </p>
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