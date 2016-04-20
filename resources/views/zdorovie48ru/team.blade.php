@extends('zdorovie48ru/header')

@section('content')




        <!-- Команда -->
<section class="container-fluid">
    <div class="row">


        <div class="container">

            <div class="app-content-body ">


                <div class="page-header">
                    <h1 class="font-thin m-b">Наши специалисты</h1>
                </div>



                <div class="row">




                    <div class="col-sm-9">

                        <div class="col-xs-12">

                            <div class="mansory">

                                <div class="row">

                            @foreach($Specialisty as $spec)

                                <article class="item text-center">
                                    <div class="panel">
                                        <div class="wrapper-md">
                                            <a href="/team/{{$spec->id}}">
                                                <img class="img-responsive img-center" src="{{$spec->avatar or ''}}" alt="">
                                                <h5>{{$spec->fio or ''}}
                                                    <p class="m-t-xs"><small>{!!$spec->dopinfo or ''!!}</small></p>
                                                </h5>
                                            </a>
                                        </div>
                                    </div>
                                </article>

                            @endforeach

                                    </div>
                                </div>


                        </div>





                        <div class="row">
                            <div class="text-center m-t-lg m-b-lg">
                                <div class="row text-center">
                                    {!! $Specialisty->appends(\Input::except('page'))->render() !!}
                                </div>
                            </div>
                        </div>


                        </div>




                    <div class="col-sm-3">

                        <a href="/team" class="list-group-item @if(!isset($id))active @endif">Все</a>
                        @foreach($SpCat as $album)

                            <a class="list-group-item @if(isset($id) && $id==$album->id)active @endif"
                               href="/team?catspec={{$album['id']}}">{{$album->name}}</a>
                        @endforeach


                    </div>



                </div>



            </div>


        </div>
    </div>
</section>
<!-- Команда -->













{{--


                                                <div class="doctors-skils">

                                                    @if(empty(!$spec->dopinfo))
                                                        <div>
                                                            <div class="heading-doc">{!!$spec->dopinfo or ''!!}</div>

                                                        </div>
                                                    @endif


                                                    @if(empty(!$spec->opyt))
                                                        <div>
                                                            <div class="heading-doc">Должность: </div>
                                                            <div class="detail-doc">{!!$spec->opyt or ''!!}</div>
                                                        </div>
                                                    @endif


                                                    @if(empty(!$spec->subname))
                                                        <div>
                                                            <div class="heading-doc">Квалификация: </div>
                                                            <div class="detail-doc">{!!$spec->subname or ''!!}</div>

                                                        </div>
                                                    @endif


                                                    @if(empty(!$spec->special) && trim($spec->special) !== '')
                                                        <div>
                                                            <div class="heading-doc">Специализация: </div>
                                                            <div class="detail-doc">{{$spec->special or ''}}</div>
                                                        </div>
                                                    @endif

                                                    @if(empty(!$spec->obrazovanie) && trim($spec->obrazovanie) !== '')
                                                        <div>
                                                            <div class="heading-doc">Образование</div>
                                                            <div class="detail-doc">{{$spec->obrazovanie or ''}}</div>
                                                        </div>
                                                    @endif





                                                    @if(empty(!$spec->about))
                                                        <div>
                                                            <div class="heading-doc"></div>
                                                            <div class="detail-doc">{{$spec->about or ''}}</div>
                                                        </div>
                                                    @endif

                                                </div>

--}}





@endsection
