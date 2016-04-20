@extends('zdorovie48ru/header')

@section('content')







        <!-- Новости -->
<section class="container-fluid">
    <div class="row">


        <div class="container">


            <div class="app-content-body ">


                <div class="page-header">
                    <h1 class="font-thin m-b">Новости нашего центра</h1>
                </div>


                <div class="wrapper-md">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="blog-post">



                                @foreach($News as $key => $value)



                                    <article class="panel">
                                        <div>
                                            <a href="/blog/{{$value['id']}}">
                                                <img alt="{{$value['name']}}" src="{{$value['avatar']}}" class="img-full">
                                            </a>
                                        </div>
                                        <div class="wrapper-lg">
                                            <h2 class="m-t-none"><a href="/blog/{{$value['id']}}">{{$value['name']}}</a></h2>

                                            <div class="blog-content">
                                                {{str_limit(strip_tags($value['content']), 300, '...')}}
                                            </div>
                                            <div class="line line-lg b-b b-light"></div>
                                            <div class="text-muted row v-center">
                                                <div class="col-md-6">
                                                    <i class="fa fa-clock-o text-muted"></i>  {{$value['created_at']->toDateString()}}
                                                </div>


                                                <div class="col-md-6 text-right">
                                                    <a href="http://www.facebook.com/sharer.php?u={{Request::url()}}" target="_blank" class="btn btn-icon"><i class="fa fa-facebook"></i></a>
                                                    <a href="https://twitter.com/share?url={{Request::url()}}" target="_blank" class="btn btn-icon"><i class="fa fa-twitter"></i></a>
                                                    <a href="https://plus.google.com/share?url={{Request::url()}}" target="_blank" class="btn btn-icon"><i class="fa fa-google-plus"></i></a>
                                                    <a href="http://vk.com/share.php?url={{Request::url()}}" target="_blank" class="btn btn-icon"><i class="fa fa-vk"></i></a>
                                                    <a href="http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl={{Request::url()}}"
                                                       target="_blank" class="btn btn-icon"><i class="fa fa-odnoklassniki"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                @endforeach












                            </div>


                                <div class="row text-center m-t-md m-b-md">{!! $News->render() !!}</div>


                        </div>
                        <div class="col-sm-3">


                            <div class="">

                                <h5 class="font-bold">Опрос</h5>
                                <div class="stepwizard">
                                    <div class="stepwizard-row setup-panel">

                                        <div class="stepwizard-step">
                                            <a href="#step-1" type="button"
                                               class="btn btn-circle btn-default btn-primary">1</a>
                                        </div>


                                        <div class="stepwizard-step">
                                            <a href="#step-2" type="button" class="btn btn-circle btn-default"
                                               disabled="disabled">2</a>
                                        </div>



                                        <div class="stepwizard-step">
                                            <a href="#step-end" type="button" class="btn btn-circle btn-default"
                                               disabled="disabled">10</a>
                                        </div>


                                    </div>
                                </div>

                                <form role="form" method="post" action="/answers">


                                    <div class="row setup-content" id="step-1" style="display: block;">
                                        <div class="col-xs-12">
                                            <div class="col-md-12">
                                                <h6 class="text-justify">Что наиболее важно для Вас при выборе
                                                    медицинского центра?</h6>



                                                <div class="checkbox">
                                                    <label class="i-checks">
                                                        <input type="checkbox" name="answer[22][]" value="Цена">
                                                        <i></i>
                                                        Цена
                                                    </label>
                                                </div>


                                                <div class="checkbox">
                                                    <label class="i-checks">
                                                        <input type="checkbox" name="answer[22][]" value="Качество">
                                                        <i></i>
                                                        Качество
                                                    </label>
                                                </div>


                                                <div class="checkbox">
                                                    <label class="i-checks">
                                                        <input type="checkbox" name="answer[22][]"
                                                               value="Территориальная близость">
                                                        <i></i>
                                                        Территориальная близость
                                                    </label>
                                                </div>


                                                <div class="checkbox">
                                                    <label class="i-checks">
                                                        <input type="checkbox" name="answer[22][]" value="Надежность">
                                                        <i></i>
                                                        Надежность
                                                    </label>
                                                </div>


                                                <div class="checkbox">
                                                    <label class="i-checks">
                                                        <input type="checkbox" name="answer[22][]"
                                                               value="Многопрофильность">
                                                        <i></i>
                                                        Многопрофильность
                                                    </label>
                                                </div>


                                                <div class="checkbox">
                                                    <label class="i-checks">
                                                        <input type="checkbox" name="answer[22][]" value="Другое ">
                                                        <i></i>
                                                        Другое
                                                    </label>
                                                </div>


                                                <button class="btn btn-primary nextBtn pull-right  btn-sm"
                                                        type="button">Далее
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row setup-content" id="step-2" style="display: none;">
                                        <div class="col-xs-12">
                                            <div class="col-md-12">
                                                <h6 class="text-justify">Какой период времени Вы являетесь клиентом
                                                    нашего медицинского центра?</h6>



                                                <div class="checkbox">
                                                    <label class="i-checks">
                                                        <input type="checkbox" name="answer[13][]" value="менее 1 года">
                                                        <i></i>
                                                        менее 1 года
                                                    </label>
                                                </div>


                                                <div class="checkbox">
                                                    <label class="i-checks">
                                                        <input type="checkbox" name="answer[13][]" value="1 год">
                                                        <i></i>
                                                        1 год
                                                    </label>
                                                </div>


                                                <div class="checkbox">
                                                    <label class="i-checks">
                                                        <input type="checkbox" name="answer[13][]" value="более 1 года">
                                                        <i></i>
                                                        более 1 года
                                                    </label>
                                                </div>


                                                <button class="btn btn-primary nextBtn pull-right  btn-sm"
                                                        type="button">Далее
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row setup-content" id="step-end" style="display: none;">
                                        <div class="col-xs-12">
                                            <div class="col-md-12">
                                                <h6 class="text-justify">Контакты для обратной связи</h6>

                                                <div class="form-group">
                                                    <input type="text" name="fio" placeholder="ФИО" class="form-control" required=""
                                                           style="width: 100%">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="E-mail" class="form-control" required=""
                                                           style="width: 100%">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="phone" placeholder="Телефон" class="form-control" required=""
                                                           style="width: 100%">
                                                </div>
                                                <input type="hidden" name="id" value="10">
                                                <input type="hidden" name="_token"
                                                       value="gVVZkrbjyy0WR1MiyfJVUKshOQgkG6lNCh6iA9DS">
                                                <button class="btn btn-info pull-right btn-sm" type="submit">Отправить</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>







                            <h5 class="font-bold">Последние Новости</h5>

                            <div>
                                <div>
                                    <a class="pull-left thumb thumb-wrapper m-r">
                                        <img src="/dist/img/news/post1.jpg">
                                    </a>

                                    <div class="clear">
                                        <a href="" class="font-semibold text-ellipsis">Выпускной в Семейном клубе «СОЛО»</a>

                                        <div class="text-xs block m-t-xs">«Апрельский микст» запестрел по-весеннему яркими красками в стиле танца. Прекрасные и лучезарные, эксце ...</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div>
                                    <a class="pull-left thumb thumb-wrapper m-r">
                                        <img src="/dist/img/news/post2.jpg">
                                    </a>

                                    <div class="clear">
                                        <a href="" class="font-semibold text-ellipsis">«Узнай свое здоровье»</a>

                                        <div class="text-xs block m-t-xs">«Апрельский микст» запестрел по-весеннему яркими красками в стиле танца. Прекрасные и лучезарные, эксце ...</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div>
                                    <a class="pull-left thumb thumb-wrapper m-r">
                                        <img src="/dist/img/news/post3.jpg">
                                    </a>

                                    <div class="clear">
                                        <a href="" class="font-semibold text-ellipsis">«Апрельский микст»</a>

                                        <div class="text-xs block m-t-xs">«Апрельский микст» запестрел по-весеннему яркими красками в стиле танца. Прекрасные и лучезарные, эксце ...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
</section>
<!-- Новости -->




@endsection