@extends('medicalsystemtk/header')




@section('title', $New['title'])
@section('description', $New['descript'])
@section('keywords', $New['tag'])
@section('avatar', $New['avatar'])



@section('content')


    <div class="sub-page-content">

        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-wrapper clearfix">
                    <h2 class="bordered light">{{$New['name']}}</h2>

                    <article class="blog-item blog-full-width blog-detail">
                        <div class="blog-thumbnail">
                            <img src="{{$New['avatar']}}">
                        </div>

                        <div class="blog-content">
                            {!! $New['content'] !!}
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
                        <p class="blog-meta pull-left">Теги: {{$New['tag']}}</p>
                        <p class="blog-meta pull-right">{{$New['created_at']}}</p>

                    </article>

                </div>
                <aside class="col-md-4">


                    <div class="sidebar-widget light">
                        <h2 class="bordered light">Опрос</h2>



                        <div class="">
                            <div class="stepwizard">
                                <div class="stepwizard-row setup-panel">

                                    <div class="stepwizard-step">
                                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    </div>


                                    @for($i= 2 ; $i != $getQuests->count(); $i++)

                                    <div class="stepwizard-step">
                                        <a href="#step-{{$i}}" type="button" class="btn btn-circle btn-default"  disabled="disabled">{{$i}}</a>
                                    </div>

                                    @endfor

                                    <div class="stepwizard-step">
                                        <a href="#step-end" type="button" class="btn btn-circle btn-default"
                                           disabled="disabled">{{$i}}</a>
                                    </div>


                                </div>
                            </div>

                            <form role="form" method="post" action="/answers">

                                @foreach($getQuests as $key => $quest)

                                <div class="row setup-content" id="step-{{$key+1}}">
                                    <div class="col-xs-12">
                                        <div class="col-md-12">
                                            <h6 class="text-justify">{{$quest->quest}}</h6>


                                            @if($quest->type == 'one')

                                                @foreach(unserialize($quest->answer) as $answer)
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="answer[{{$quest->id}}][]" value="{{$answer}}" required>
                                                        {{$answer}}
                                                    </label>
                                                </div>

                                                @endforeach

                                            @else

                                                @foreach(unserialize($quest->answer) as $answer)
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="answer[{{$quest->id}}][]" value="{{$answer}}">
                                                            {{$answer}}
                                                        </label>
                                                    </div>

                                                @endforeach


                                            @endif

                                            <button class="btn btn-primary nextBtn pull-right  btn-sm" type="button">Далее</button>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                                <div class="row setup-content" id="step-end">
                                    <div class="col-xs-12">
                                        <div class="col-md-12">
                                            <h6 class="text-justify">Контакты для обратной связи</h6>

                                            <div class="form-group">
                                                <input type="text" name="fio" placeholder="ФИО" required="" style="width: 100%">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="E-mail" required="" style="width: 100%">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" placeholder="Телефон" required="" style="width: 100%">
                                            </div>
                                            <input type="hidden" name="id" value="{{$getSurveys->id}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button class="btn btn-success btn-lg" type="submit">Отправить</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>





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



                </aside>
            </div>
        </div>



        <div class="clr"></div>
    </div><!--end sub-page-content-->





    <div class="tri-sec-bg">
        <div class="container">
            <div class="tri-sec text-center">
                <i class="feature-icon fa fa-plus-square"></i>
                <h4>Услуги</h4>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised only five Power of centuries.<br><a href="/service">- Перейти</a></p>
            </div>
            <div class="tri-sec text-center">
                <i class="feature-icon fa fa-thumbs-o-up"></i>
                <h4>Отзывы</h4>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised only five Power of centuries.<br><a href="/reviews">- Перейти</a></p>
            </div>
            <div class="tri-sec text-center">
                <i class="feature-icon fa fa-stethoscope"></i>
                <h4>Записатсья на приём</h4>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised only five Power of centuries.<br><a href="/appointment">- Перейти</a></p>
            </div>
        </div>
    </div>





@endsection
