@extends('zdorovie48ru/header')


@section('title', $Spec->fio)
@section('description', $Spec->subname)
@section('keywords', $Spec->fio)
@section('avatar', $Spec->avatar)



@section('content')


<!-- Страница -->
<section class="container-fluid">
    <div class="row">


        <div class="container">


            <div class="app-content-body ">



                <div class="col-sm-9">


                    <div class="page-header">
                        <h1 class="font-thin m-b">{{$Spec->fio}}</h1>
                    </div>

                <div class="panel">
                    <div class="wrapper-md">
                        <div class="row">
                            <div class="wrapper-lg">


                                <div class="col-md-5">
                                    <div class="blog-thumbnail">
                                        <img src="{{$Spec->avatar}}">
                                    </div>
                                    </div>

                                <div class="col-md-7">
                                    <div class="doctors-skils">

                                        @if(empty(!$Spec->dopinfo))
                                            <div>
                                                <div class="heading-doc">{!!$Spec->dopinfo or ''!!}</div>

                                            </div>
                                        @endif


                                        @if(empty(!$Spec->opyt))
                                            <div>
                                                <div class="heading-doc">Должность: </div>
                                                <div class="detail-doc">{!!$Spec->opyt or ''!!}</div>
                                            </div>
                                        @endif


                                        @if(empty(!$Spec->subname))
                                            <div>
                                                <div class="heading-doc">Квалификация: </div>
                                                <div class="detail-doc">{!!$Spec->subname or ''!!}</div>

                                            </div>
                                        @endif


                                        @if(empty(!$Spec->special) && trim($Spec->special) !== '')
                                            <div>
                                                <div class="heading-doc">Специализация: </div>
                                                <div class="detail-doc">{{$Spec->special or ''}}</div>
                                            </div>
                                        @endif

                                        @if(empty(!$Spec->obrazovanie) && trim($Spec->obrazovanie) !== '')
                                            <div>
                                                <div class="heading-doc">Образование</div>
                                                <div class="detail-doc">{{$Spec->obrazovanie or ''}}</div>
                                            </div>
                                        @endif



                                        @if(empty(!$Spec->about))
                                            <div>
                                                <div class="heading-doc"></div>
                                                <div class="detail-doc">{{$Spec->about or ''}}</div>
                                            </div>
                                        @endif

















                                    </div>






                    </div>










                            </div>
                        </div>
                    </div>
                </div>




                    <div class="page-header">
                        <h2 class="font-thin m-b">Записаться на приём</h2>
                    </div>

                    <div class="panel">
                        <div class="wrapper-md">
                            <!--Запись на приём -->


                            <div class="row">

                                <div class="col-md-4 text-center">
                                @foreach($timetable as $key => $times)

                                    <h5 class="b-b padder-v"><b>{{$key}}</b></h5>



                                    @foreach($times as $time)

                                        <div class="radio">
                                            <label class="i-checks i-checks-sm">
                                                <input type="radio" required="" name="apport" value="{{$time->beginning}}|{{$time->end}}"><i></i>
                                                C  {{$time->Shours}}:{{$time->Sminute}} по {{$time->Ehours}}:{{$time->Eminute}}
                                            </label>
                                        </div>

                                    @endforeach

                                @endforeach
                                    </div>






                                    <div class="col-md-8 b-l">
                                        <h5> Информация</h5>
                                        <form action="/">
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <input type="text" name="firstname" max="255" required="" class="form-control rounded" placeholder="Имя">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="lastname" max="255" required="" class="form-control rounded" placeholder="Фамилия">
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input type="email" name="email" placeholder="Email адрес" class="form-control rounded">
                                            </div>

                                            <div class="col-md-6">
                                                <input name="phone" placeholder="Номер телефона" class="form-control rounded" required="" type="text" data-mask="+ 9-999-999-99-99">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea rows="5" name="comment" class="form-control rounded" placeholder="Комментарий"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="_token" value="Gm48Q5wvdrnrZzfZG0yDjnMsgsKH9bHvrWdLY5hw">
                                            <p class="col-md-12"><button class="btn btn-default  btn-void-primary pull-right" type="submit">Записаться!
                                                </button></p>
                                        </div>

                                    </form>










</div>

                            </div>

                            <!-- Запись на приём -->

                        </div>
                    </div>







</div>

                <div class="col-sm-3">


                    <div class="page-header">
                        <h1 class="font-thin m-b">Коллеги</h1>
                    </div>

                    @foreach($Collegi as $person)

                        <ul class="list-group no-bg no-borders pull-in">
                            <li class="list-group-item">
                                <a herf="/team/{{$person->id}}" class="pull-left thumb-sm avatar m-r">
                                    <img src="{{$person->avatar}}" alt="{{$person->fio}}" class="img-circle">
                                </a>
                                <div class="clear">
                                    <div><a href="">{{$person->fio}}</a></div>
                                    <small class="text-muted">{{$person->dopinfo or ''}}</small>
                                </div>
                            </li>
                        </ul>


                    @endforeach



                </div>



            </div>








        </div>
    </div>
</section>
<!-- Страница -->















@endsection
