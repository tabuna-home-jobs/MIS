@extends('site2ru/headerALT')




@section('title', $New['title'])
@section('description', $New['descript'])
@section('keywords', $New['tag'])
@section('avatar', $New['avatar'])



@section('content')





    <section class="blogStyle_2">
        <div class="container xsx-width">
            <div class="row">
                <!-- ===== Begin Blog blocks ===== -->
                <div class="col-sm-8">
                    <!-- ===== Begin Thumbnails ===== -->






                    <article class="post type-post">

                        <div class="thumbnail blogs_2">

                            <div class="caption">

                                <h3>
                                    {{$New['name']}}
                                </h3>


                                <div class="section">
                                    {!! $New['content'] !!}
                                </div>


                                <div class="titleB">
                                    <h4>{{$New['created_at']}}</h4>
                                    <div class="right-linie">
                                        <span></span>
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



                                <p class="">Теги: {{$New['tag']}}</p>


                            </div>

                        </div>

                    </article>
                    <!-- ===== End Article ===== -->

                </div>
                <!-- ===== End Blog blocks ===== -->

                <!-- ===== Begin widgets blocks ===== -->
                <aside class="col-sm-4 bloG">

                    @if(!is_null($getQuests))
                    <div id="text-2" class="widget widget-widget_text"><div class="titleC"><h4>Опрос </h4><div class="right-linie"><span></span></div></div>			<div class="textwidget">                   <p>One of the most sublime experiences we can ever have is to wake up feeling healthy after we have been sick.</p>

                            <div class="row">


                                    <div class="sidebar-widget light">

                                        <div class="">
                                            <div class="stepwizard">
                                                <div class="stepwizard-row setup-panel">

                                                    <div class="stepwizard-step">
                                                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                                    </div>

                                                    @for($i= 2 ; $i == $getQuests->count(); $i++)

                                                        <div class="stepwizard-step">
                                                            <a href="#step-{{$i}}" type="button" class="btn btn-circle btn-default"  disabled="disabled">{{$i}}</a>
                                                        </div>

                                                    @endfor

                                                    <div class="stepwizard-step">
                                                        <a href="#step-{{$i}}" type="button" class="btn btn-circle btn-default" disabled="disabled">{{$i}}</a>
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

                                                <div class="row setup-content" id="step-{{$i}}">
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





                            </div>
                        </div>
                    </div>

                    @endif

                    <div id="text-6" class="widget widget-widget_text">
                        <div class="textwidget">
                            <div class="widget widget-form-white-short">


                                <div class="sidebar-widget light">
                                    <div class="titleC"><h4>Последние новости </h4><div class="right-linie"><span></span></div></div>

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
                        </div>
                    </div>

                </aside>
                <!-- ===== End widgets blocks ===== -->
            </div>
        </div>
    </section>
























@endsection
