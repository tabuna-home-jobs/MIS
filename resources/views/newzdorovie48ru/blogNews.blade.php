@extends('newzdorovie48ru/header')




@section('title', $New['title'])
@section('description', $New['descript'])
@section('keywords', $New['tag'])
@section('avatar', $New['avatar'])



@section('content')










        <!-- Новости -->
<section class="container-fluid">
    <div class="row">


        <div class="container">


            <div class="app-content-body ">





                <div class="wrapper-md">
                    <div class="row">
                        <div class="col-sm-9">

                            <div class="page-header">
                                <h1 class="font-thin m-b">Новости нашего центра</h1>
                            </div>


                            <div class="blog-post">


                                    <article class="panel">
                                        <div>
                                            <a href="/blog/{{$New['id']}}">
                                                <img alt="{{$New['name']}}" src="{{$New['avatar']}}" class="img-full">
                                            </a>
                                        </div>
                                        <div class="wrapper-lg">
                                            <h2 class="m-t-none"><a href="/blog/{{$New['id']}}">{{$New['name']}}</a></h2>

                                            <div class="blog-content">
                                                {!! $New['content'] !!}
                                            </div>
                                            <div class="line line-lg b-b b-light"></div>
                                            <div class="text-muted row v-center">
                                                <div class="col-md-6">
                                                    <i class="fa fa-clock-o text-muted"></i>  {{$New['created_at']->toDateString()}}
                                                </div>

                                                <div class="col-md-6 text-right">



                                                    <a onClick='window.open ("http://www.facebook.com/sharer.php?u={{Request::url()}}","mywindow","menubar=1,resizable=1,width=650,height=550");' class="btn btn-icon"><i class="fa fa-facebook"></i></a>

                                                    <a onClick='window.open ("https://twitter.com/share?url={{Request::url()}}","mywindow","menubar=1,resizable=1,width=650,height=550");'
                                                       class="btn btn-icon"><i class="fa fa-twitter"></i></a>

                                                    <a onClick='window.open ("https://plus.google.com/share?url={{Request::url()}}","mywindow","menubar=1,resizable=1,width=650,height=550");'
                                                       class="btn btn-icon"><i class="fa fa-google-plus"></i></a>

                                                    <a onClick='window.open ("http://vk.com/share.php?url={{Request::url()}}","mywindow","menubar=1,resizable=1,width=650,height=550");'
                                                       class="btn btn-icon"><i class="fa fa-vk"></i></a>

                                                    <a onClick='window.open ("http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl={{Request::url()}}","mywindow","menubar=1,resizable=1,width=650,height=550");'
                                                       class="btn btn-icon"><i class="fa fa-odnoklassniki"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>





                            </div>



                        </div>
                        <aside class="col-sm-3">

                            <div class="page-header">
                                <h3 class="h1 font-thin m-b"><span class="h3">Опрос</span></h3>
                            </div>

                            <div class="">
                                <div class="stepwizard hide">
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

                                                    <h4 class="m-n">Шаг {{$key+1}} из {{$getQuests->count() +1}}</h4>
                                                    <h6 class="padder-v text-justify">{{$quest->quest}}</h6>


                                                    @if($quest->type == 'one')

                                                        @foreach(unserialize($quest->answer) as $answer)
                                                            <div class="radio">
                                                                <label class="i-checks">
                                                                    <input type="radio" name="answer[{{$quest->id}}][]" value="{{$answer}}" required>
                                                                    <i></i>
                                                                    {{$answer}}
                                                                </label>
                                                            </div>

                                                        @endforeach

                                                    @else

                                                        @foreach(unserialize($quest->answer) as $answer)
                                                            <div class="checkbox">
                                                                <label class="i-checks">
                                                                    <input type="checkbox" name="answer[{{$quest->id}}][]" value="{{$answer}}">
                                                                    <i></i>
                                                                    {{$answer}}
                                                                </label>
                                                            </div>

                                                        @endforeach


                                                    @endif

                                                    <button class="btn btn-primary nextBtn pull-right btn-void-primary btn-sm" type="button">Далее</button>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach

                                    <div class="row setup-content" id="step-end">
                                        <div class="col-xs-12">
                                            <div class="col-md-12">
                                                <h6 class="text-justify">Контакты для обратной связи</h6>

                                                <div class="form-group">
                                                    <input type="text" name="fio" placeholder="ФИО" class=" form-control rounded input-sm" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="E-mail" class="form-control rounded input-sm" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="phone" placeholder="Телефон" class="form-control rounded  input-sm" required>
                                                </div>
                                                <input type="hidden" name="id" value="{{$getSurveys->id}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button class="btn btn-success btn-void-primary btn-sm" type="submit">Отправить</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>





                            <div class="page-header">
                                <h3 class="h1 font-thin m-b"><span class="h3">Последние Новости</span></h3>
                            </div>

                            <div>



                                @foreach($LastNews as $lastNew)

                                    <div>
                                        <a class="pull-left thumb thumb-wrapper m-r">
                                            <img alt="{{$lastNew->title}}" src="{{$lastNew->avatar}}">
                                        </a>

                                        <div class="clear">
                                            <a href="/blog/{{$lastNew->id}}" class="font-semibold text-ellipsis">{{$lastNew->name}}</a>

                                            <div class="text-xs block m-t-xs">
                                                {{str_limit(strip_tags($lastNew->content), 100, '...')}}
                                            </div>
                                    </div>
                                    <div class="line"></div>

                                @endforeach

                                        </div>

                            </div>
                        </aside>
                    </div>
                </div>


            </div>


        </div>
    </div>
</section>
<!-- Новости -->










@endsection
