@extends('newzdorovie48ru/header')


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
                                            <img src="{{$Spec->avatar}}" alt="{{$Spec->fio}}" class="img-responsive">
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="doctors-skils">

                                            @if(empty(!$Spec->dopinfo))
                                                <p class="lead">{!!$Spec->dopinfo or ''!!}</p>
                                            @endif


                                            @if(empty(!$Spec->opyt))
                                                <div>
                                                    <b class="heading-doc">Должность:</b>
                                                    <div class="detail-doc">{!!$Spec->opyt or ''!!}</div>
                                                </div>
                                            @endif


                                            @if(empty(!$Spec->subname))
                                                <div>
                                                    <b class="heading-doc">Квалификация:</b>
                                                    <div class="detail-doc">{!!$Spec->subname or ''!!}</div>

                                                </div>
                                            @endif


                                            @if(empty(!$Spec->special) && trim($Spec->special) !== '')
                                                <div>
                                                    <b class="heading-doc">Специализация:</b>
                                                    <div class="detail-doc">{{$Spec->special or ''}}</div>
                                                </div>
                                            @endif

                                            @if(empty(!$Spec->obrazovanie) && trim($Spec->obrazovanie) !== '')
                                                <div>
                                                    <title class="heading-doc">Образование</title>
                                                    <div class="detail-doc">{{$Spec->obrazovanie or ''}}</div>
                                                </div>
                                            @endif

                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="wrapper-md">

                                            @if(empty(!$Spec->about))
                                                <div>
                                                    <div class="detail-doc">{{$Spec->about or ''}}</div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                    @if(count($timetable, COUNT_RECURSIVE) > 1)
                        <div class="page-header">
                            <h2 class="font-thin m-b">Ближайшее время приёма</h2>
                        </div>

                        <div class="panel">
                            <form action="/appointment/store" method="post" class="wrapper-md">
                                <!--Запись на приём -->


                                <div class="row">

                                    <div class="col-md-4">


                                        <script>

                                            $(document).ready(function () {


                                                $('select[name="subdivision"]').on('change', function () {


                                                    //Очищение времени
                                                    $('#time-name').addClass('hide');
                                                    $('.times.radio').each(function ( key, value) {
                                                        $(value).addClass("hide");
                                                    });



                                                    $('select[name="date"] option').each(function ( key, value) {
                                                      var countDate = 0;
                                                        if ($(value).data("subdivision") == $('select[name="subdivision"] option:selected').val()) {
                                                            $('select[name="date"]').removeClass('disabled');
                                                            $('select[name="date"]').prop('disabled', false);
                                                            $(this).removeClass('hide');
                                                            countDate++;
                                                        }
                                                        else {
                                                            $(this).addClass('hide');
                                                        }

                                                        console.log(countDate)
                                                        if(countDate == 0)
                                                        {
                                                            $('#date-false').html("Cвободных дат нет");
                                                            $('#date-false').removeClass('hide');
                                                            $('#date-false').prop('selected', true);
                                                            $('select[name="date"]').prop('disabled', true);
                                                        }
                                                        else {
                                                            $('#date-false').html("Выберите желаемую дату");

                                                        }



                                                    });
                                                });



                                                $('select[name="date"]').on('change', function () {

                                                    $('#subdivision-false').addClass('hide');


                                                    $('.times.radio').each(function ( key, value) {
                                                        subdivision =$('select[name="subdivision"] option:selected').val();
                                                        times = $('select[name="date"] option:selected').val();
                                                        if($(value).data("subdivision") == subdivision && $(value).data("times") == times)
                                                        {
                                                            $('#time-name').removeClass('hide');
                                                            $(value).removeClass("hide");
                                                        }
                                                        else {
                                                            $(value).addClass("hide");
                                                        }

                                                    });
                                                });


                                            });

                                        </script>

                                        <div class="form-group">
                                            <label class="control-label padder-v m-t-sm">Место</label>
                                            <select name="subdivision" required class="form-control rounded">
                                                <option value="false" id="subdivision-false" selected>Выберите место приёма</option>
                                                @foreach($timetable as $subdivision => $dates)
                                                    <option value="{{$subdivision}}">{{$subdivision}}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label">Дата</label>
                                            <select name="date" required class="form-control rounded disabled" disabled>
                                                <option value="false" id="date-false" selected>Выберите желаемую дату</option>
                                                @foreach($timetable as $subdivision => $dates)
                                                    @foreach($dates as $key => $times)
                                                        <option data-subdivision="{{$subdivision}}" value="{{$key}}"
                                                                class="hide">{{$key}}</option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group text-center">
                                            <label id="time-name" class="control-label hide">Время</label>
                                            @foreach($timetable as $subdivision => $dates)


                                                {{--
                                                @if(!empty($dates))
                                                        <h5 class="b-b padder-v"><b>{{$subdivision}}</b></h5>
                                                @endif
                                                --}}

                                                @foreach($dates as $key => $times)


                                                    {{--
                                                    <h5 class="padder-v"  role="tab">
                                                       <b>{{$key}}</b>

                                                    </h5>
                                                      --}}


                                                    @foreach($times as $time)

                                                        <div class="times radio hide"
                                                             data-subdivision="{{$subdivision}}" data-times="{{$key}}">
                                                            <label class="i-checks i-checks-sm">
                                                                <input type="radio" required name="apport"
                                                                       value="{{$time->beginning}}|{{$time->end}}"><i></i>
                                                                C {{$time->Shours}}:{{$time->Sminute}}
                                                                по {{$time->Ehours}}:{{$time->Eminute}}
                                                            </label>
                                                        </div>
                                                    @endforeach

                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>


                                    <div class="col-md-8 b-l">
                                        <h5 class="padder-v"> Личные данные</h5>

                                        <div>
                                            <div class="row form-group">
                                                <div class="col-md-6">
                                                    <input type="text" name="firstname" max="255" required=""
                                                           class="form-control rounded" placeholder="Имя">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="lastname" max="255" required=""
                                                           class="form-control rounded" placeholder="Фамилия">
                                                </div>

                                            </div>


                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <input type="email" name="email" placeholder="Email адрес"
                                                           class="form-control rounded">
                                                </div>

                                                <div class="col-md-6">
                                                    <input name="phone" placeholder="Номер телефона"
                                                           class="form-control rounded" required="" type="text"
                                                           data-mask="+ 9-999-999-99-99">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <textarea rows="5" name="comment" class="form-control rounded"
                                                          placeholder="Комментарий"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <input type="hidden" name="_token"
                                                       value="{{csrf_token()}}">

                                                <input type="hidden" id="specialization-input" name="specialization" required value="{{$doctor->specialization}}">
                                                <input type="hidden" id="name-input" name="name" required value="{{$doctor->name}}">

                                                <p class="col-md-12">
                                                    <button class="btn btn-default  btn-void-primary pull-right"
                                                            type="submit">Записаться!
                                                    </button>
                                                </p>
                                            </div>

                                        </div>


                                    </div>

                                </div>

                                <!-- Запись на приём -->

                            </form>
                        </div>
                    @endif


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
                                    <div><a href="/team/{{$person->id}}">{{$person->fio}}</a></div>
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
