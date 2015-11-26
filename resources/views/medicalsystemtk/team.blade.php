@extends('medicalsystemtk/header')

@section('content')


    <div class="sub-page-content">


        <div class="container">
            <h2 class="light bordered main-title">Наши <span> Специалисты</span></h2>

            <div class="btn-group " role="group" aria-label="...">
                <a href="/team" type="button" class="btn btn-info">Все <span
                            class="glyphicon glyphicon-info-sign"></span> </a>
                @foreach($SpCat as $spec)

                    <a href="/team?catspec={{$spec['id']}}" type="button" class="btn btn-info">{{$spec['name']}}</a>


                @endforeach
            </div>
            <div class="row">


                @foreach($Specialisty as $spec)
                    <div class="col-md-6 padding-bottom-60 clearfix">
                        <div class="doctors-img">
                            <img src="{{$spec->avatar or ''}}" width="234" alt="" title="">
                        </div>
                        <div class="doctors-detail">
                            <h4>{{$spec->fio or ''}}<span class="text-center">{{$spec->subname or ''}}</span></h4>


                            @if(empty(!$spec->special))
                                <p><label class="heading">Специализация: </label><label
                                            class="detail">{{$spec->special or ''}}</label>
                                </p>
                            @endif

                            @if(empty(!$spec->obrazovanie))
                                <p><label class="heading">Образование</label><label
                                            class="detail">{{$spec->obrazovanie or ''}}</label></p>
                            @endif


                            @if(empty(!$spec->opyt))
                                <p><label class="heading">Должность: </label><label
                                            class="detail">{{$spec->opyt or ''}} </label></p>
                            @endif


                            @if(empty(!$spec->about))
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

<style>
    .btn-group {
        margin: 30px 0;
        margin-bottom: 60px;
    }
</style>