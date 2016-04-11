@extends('zdorovie48ru/header')

@section('content')


    <div class="sub-page-content">


        <div class="container">
            <h2 class="light bordered main-title">Наши <span> Специалисты</span></h2>


            <div class="row relative">


                <input type="checkbox" name="" id="nav-trigger">
                <label for="nav-trigger"><i class="fa fa-bars"></i></label>

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
                    @foreach($Specialisty as $spec)
                        <div class="col-md-6 padding-bottom-60 display-inline-block vertical-align-top float-none">
                            <div class="doctors-img">
                                <img src="{{$spec->avatar or ''}}" width="234" alt="" title="">
                                <h4>{{$spec->fio or ''}}</h4>
                            </div>
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
                        </div>

                    @endforeach
                </div>


            </div>


            <div class="row text-center">
                {!! $Specialisty->appends(\Input::except('page'))->render() !!}
            </div>


        </div>


    </div><!--end sub-page-content-->





@endsection
