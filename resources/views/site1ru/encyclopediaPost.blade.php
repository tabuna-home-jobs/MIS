@extends('site1ru/header')


@section('title', $post->title)
@section('description', $post->descript)
@section('keywords', $post->tag)
@section('avatar', $post->avatar)






@section('content')


    <section class="sub-page-banner text-center hidden-xs">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="entry-title">Энциклопедия здоровья</h1>
            <p>Описание причин, симптомов, методов диагностики и лечения большинства известных заболеваний</p>
        </div>
    </section>




    <div class="sub-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">


                    <div class="sidebar-widget">
                        <div class="search clearfix">
                            <form method="get" action="/encypost">
                                <input type="text" name="search" placeholder="Поиск...">
                                <button type="submit" class="search-icon"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>


                    <div class="procedures">
                        <h3>Разделы</h3>

                        <div class="panel-group sidebar-nav" id="accordion3">


                            @foreach($MainElementMenu as $mainElement)


                                <div class="panel panel-sidebar">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion3"
                                               href="#collapse{{$mainElement->id}}">
                                                <i class="fa fa-angle-right"></i> {{$mainElement->name}}
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse{{$mainElement->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">


                                            @foreach($mainElement->subCategory()->get() as $subMenu)

                                                <a href="/medencyclopedia/{{$subMenu->id}}"><i
                                                            class="fa fa-angle-right"></i> {{$subMenu->name}}</a>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>



                            @endforeach




                        </div>
                    </div>

                    <div class="sidebar-widget clearfix">
                        <h2 class="bordered light">Алфавитный указатель</h2>
                        <ul class="archives">
                            @foreach($Index as $bukva)
                                <li><a href="/encypost?index={{$bukva->name}}"><i class="fa fa-long-arrow-right"></i>{{$bukva->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>


                </div>
                <div class="col-md-8">
                    <h2 class="light bordered">{{$post->name}}</h2>

                    <div class="height20"></div>
                    <div>


                        <div class="blog-thumbnail">
                            <img src="{{ $post->avatar }}" alt="{{$post->name}}">
                        </div>




                        <div data-example-id="togglable-tabs" class="bs-example bs-example-tabs">
                            <ul role="tablist" class="nav nav-tabs" id="myTabs">
                                <li class="active" role="presentation"><a aria-expanded="true" aria-controls="home" data-toggle="tab" role="tab" id="opisanie-tab" href="#opisanie">Описание</a></li>
                                <li role="presentation" class=""><a aria-controls="history" data-toggle="tab" id="history-tab" role="tab" href="#history" aria-expanded="false">История</a></li>
                                <li role="presentation" class=""><a aria-controls="lechenie" data-toggle="tab" id="lechenie-tab" role="tab" href="#lechenie" aria-expanded="false">Лечение</a></li>
                                <li role="presentation" class=""><a aria-controls="diagnostica" data-toggle="tab" id="diagnostica-tab" role="tab" href="#diagnostica" aria-expanded="false">Диагностика</a></li>
                            </ul>
                            <div class="tab-content">
                                <div aria-labelledby="opisanie-tab" id="opisanie" class="tab-pane fade active in" role="tabpanel">
                                    {!! $post->opisanie !!}
                                </div>
                                <div aria-labelledby="history-tab" id="history" class="tab-pane fade" role="tabpanel">
                                   {!! $post->history !!}
                                </div>

                                <div aria-labelledby="lechenie-tab" id="lechenie" class="tab-pane fade" role="tabpanel">
                                   {!! $post->lechenie !!}
                                </div>

                                <div aria-labelledby="diagnostica-tab" id="diagnostica" class="tab-pane fade" role="tabpanel">
                                   {!! $post->diagnostica !!}
                                </div>

                            </div>
                        </div>





                        <div class="share-post clearfix">
                            <label>Поделиться</label>
                            <ul class="social-rounded">
                                <li><a href="http://www.facebook.com/sharer.php?u={{Request::url()}}" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/share?url={{Request::url()}}" target="_blank"><i
                                                class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/share?url={{Request::url()}}" target="_blank"><i
                                                class="fa fa-google-plus"></i></a></li>
                                <li><a href="http://vkontakte.ru/share.php?url={{Request::url()}}" target="_blank"><i
                                                class="fa fa-vk"></i></a></li>
                                <li><a href="http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl={{Request::url()}}"
                                       target="_blank"><i class="fa fa-circle-o"></i></a></li>
                            </ul>
                        </div>
                        <p class="blog-meta pull-left">Теги: {{$post->tag}}</p>
                        <p class="blog-meta pull-right">{{$post->created_at}}</p>




                    </div>

                </div>














                <div class="col-md-4">


                    <div class="sidebar-widget light">
                        <h2 class="bordered light">Последние новости</h2>

                        @foreach($LastNews as $lastNew)
                            <article class="popular-post">
                                <img alt="{{$lastNew->title}}" src="{{$lastNew->avatar}}">
                                <h4><a href="/blog/{{$lastNew->id}}">{{$lastNew->name}}</a></h4>

                                <p class="text-justify">{{ substr(strip_tags($lastNew->content), 0, 201) }} ...</p>

                                <p class="popular-date text-right">{{$lastNew->created_at}}</p>
                            </article>
                        @endforeach
                    </div>

                    </div>


                <div class="col-md-8">



                    <!-- ЗАпись на приём-->


                    <h2 class="light bordered">Записаться на приём</h2>

                    <div class="height20"></div>

                    <div class="appointment-form clearfix">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>

                                    <p>Шаг 1</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">2</a>

                                    <p>Шаг 2</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">3</a>

                                    <p>Шаг 3</p>
                                </div>
                            </div>
                        </div>
                        <form role="form" action="appointment/store" method="post">
                            <div class="row setup-content" id="step-1">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h5> Выберите специализацию</h5>

                                        <div class="form-group row">
                                            <label class="control-label">Место</label>
                                            <select name="subdivision" required>
                                                <option selected disabled>Выберите место</option>
                                                @foreach($place as $placeItem)
                                                    <option value="{{$placeItem->subdivision}}">{{$placeItem->subdivision}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label">Специализациия</label>
                                            <select disabled name="specialization" required>
                                                <option>Выберите место</option>
                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label">Врач</label>
                                            <select disabled name="name" required>
                                                <option>Выберите специализацию</option>
                                            </select>
                                        </div>



                                        <script>
                                            $('select[name="subdivision"]').change(function () {

                                                var obj = $(this);
                                                var Curvalue = $(':selected',this).val();
                                                var csrf = $('meta[name="csrf-token"]').attr('content');



                                                $.ajax({
                                                    type: "POST",
                                                    url: "/appointment/special/" + Curvalue ,
                                                    beforeSend: function(request) {
                                                        request.setRequestHeader('X-CSRF-Token', csrf);
                                                    },
                                                    success: function(msg){

                                                        var option = "<option selected disabled>Выберите специализацию</option>";
                                                        for(var i = 0; msg.length > i; i++)
                                                        {
                                                            option += "<option value='"+ msg[i].specialization + "'>"
                                                                    + msg[i].specialization + "</option>";
                                                        }

                                                        $('select[name="specialization"]').html(option);
                                                        $('select[name="specialization"]').attr('disabled',false);

                                                    }
                                                });

                                            });




                                            $('select[name="specialization"]').change(function () {


                                                var obj = $(this);
                                                var Curvalue = $(':selected',this).val();
                                                var Placevalue = $('select[name="subdivision"] :selected').val();
                                                var csrf = $('meta[name="csrf-token"]').attr('content');


                                                $.ajax({
                                                    type: "POST",
                                                    url: "/appointment/fio/" + Placevalue +"/"+ Curvalue ,
                                                    beforeSend: function(request) {
                                                        request.setRequestHeader('X-CSRF-Token', csrf);
                                                    },
                                                    success: function(msg){

                                                        var option = "<option selected disabled>Выберите врача</option>";
                                                        for(var i = 0; msg.length > i; i++)
                                                        {
                                                            option += "<option value='"+ msg[i].name + "'>"
                                                                    + msg[i].name + "</option>";
                                                        }

                                                        $('select[name="name"]').html(option);
                                                        $('select[name="name"]').attr('disabled', false);

                                                    }
                                                });


                                            });


                                            $('select[name="name"]').change(function () {


                                                var obj = $(this);
                                                var Curvalue = $(':selected',this).val();
                                                var Placevalue = $('select[name="subdivision"] :selected').val();
                                                var Specialvalue = $('select[name="specialization"] :selected').val();
                                                var csrf = $('meta[name="csrf-token"]').attr('content');


                                                $.ajax({
                                                    type: "POST",
                                                    url: "/appointment/time/" + Placevalue +"/"+ Specialvalue +"/"+ Curvalue ,
                                                    beforeSend: function(request) {
                                                        request.setRequestHeader('X-CSRF-Token', csrf);
                                                    },
                                                    success: function(msg){

                                                        var option = "";
                                                        for(var i = 0; msg.length > i; i++)
                                                        {

                                                            var beginning = new Date(msg[i].beginning * 1000).toLocaleString();
                                                            var end = new Date(msg[i].end * 1000).toLocaleString();
                                                            option += "<div class='radio'><label><input type='radio' required name='apport' value='" + msg[i].beginning + "|" + msg[i].end + "'> С " + beginning + " по " + end + "</label></div>";

                                                        }








                                                        $('#date').html(option);

                                                    }
                                                });


                                            });














                                        </script>




                                        <button class="btn btn-default  nextBtn btn-rounded pull-right" type="button">
                                            Далее
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-2">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h5> Выберите дату</h5>

                                        <div class="form-group" id="date">

                                        </div>

                                        <button class="btn btn-default nextBtn btn-rounded pull-right" type="button">Далее
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-3">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h5> Информация</h5>

                                        <input type="text" name="firstname" max="255" placeholder="Имя">
                                        <input type="text" name="lastname" max="255" placeholder="Фамилия">
                                        <input type="email" name="email" placeholder="Email адрес">
                                        <input type="number" name="phone" placeholder="Номер телефона">
                                        <textarea rows="4" name="comment" placeholder="Комментарий"></textarea>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn btn-default btn-rounded pull-right" type="submit">Записаться!
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                    <!-- Конец записи на приём -->





                </div>














            </div>
        </div>

        <div class="clr"></div>
    </div><!--end sub-page-content-->






@endsection
