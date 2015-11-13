@extends('medicalsystemtk/header')

@section('content')


    <div class="sub-page-content">

        
        <div class="container">
        	<h2 class="light bordered main-title">Наши <span> Специалисты</span></h2>


            <nav class="clearfix text-center padding-bottom-30">
                <ul class="tags">
                    <li><a href="/team">Все <span class="glyphicon glyphicon-info-sign"></span> </a></li>
                    @foreach($SpCat as $spec)
                        <li><a href="/team?catspec={{$spec['id']}}">{{$spec['name']}}</a></li>
                    @endforeach

                </ul>
            </nav>


            <div class="row">

                @foreach($Specialisty as $spec)
                    <div class="col-md-6 padding-bottom-20 clearfix">
                    <div class="doctors-img"><img src="{{$spec->avatar or ''}}" width="234" alt="" title="">
                        </div>
                    <div class="doctors-detail">
                        <h4>{{$spec->fio or ''}}<span class="text-center">{{$spec->subname or ''}}</span></h4>

                        @if(!empty($spec->special))
                        <p><label class="heading">Специализация: </label><label
                                    class="detail">{{$spec->special or ''}}</label>
                        </p>
                        @endif

                        @if(!empty($spec->obrazovanie))
                        <p><label class="heading">Образование</label><label
                                    class="detail">{{$spec->obrazovanie or ''}}</label></p>
                        @endif

                        @if(!empty($spec->opyt))
                            <p><label class="heading">Должность: </label><label
                                        class="detail">{{$spec->opyt or ''}} </label></p>
                        @endif

                        @if(!empty($spec->about))
                            <p><label class="heading">Умения:</label><label
                                        class="detail">{{$spec->about or ''}} </label></p>
                        @endif

                        </div>
                </div>

                @endforeach



            </div>


            <div class="row text-center">
                {!! $Specialisty->appends(\Input::except('page'))->render() !!}
            </div>


        </div>


    </div><!--end sub-page-content-->
    @endsection
