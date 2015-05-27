@extends('site1ru/header')

@section('content')



    <div class="content-index">
    
    <section class="creative-sec">
        <div class="container">
            <div class="text-center">
                <h1 class="light">«Здоровье Нации»
                </h1>

                <p class="lead"> многопрофильная компания, оказывающая широкий спектр услуг для всей семьи отрудников и
                    клиентов.</p>
            </div>
            
            <div class="creative-sec-thumb one">
                <figure>
                <span class="overlay"><a href="#test"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img1.jpg" width="154" class="img-circle img-thumbnail img-responsive" alt="" title="">
                    <figcaption>О центре</figcaption>
                </figure>
            </div>
            
            <div class="creative-sec-thumb two">
                <figure>
                <span class="overlay"><a href="#test"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img2.jpg" width="266" class="img-circle img-thumbnail img-responsive" alt="" title="">
                    <figcaption>О центре</figcaption>
                </figure>
            </div>
            
            <div class="creative-sec-thumb three">
                <figure>
                <span class="overlay"><a href="#test"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img3.jpg" width="162" class="img-circle img-thumbnail img-responsive" alt="" title="">
                    <figcaption>О центре</figcaption>
                </figure>
            </div>
            
            <div class="creative-sec-thumb four">
                <figure>
                <span class="overlay"><a href="#test"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img4.jpg" width="305" class="img-circle img-thumbnail img-responsive" alt="" title="">
                    <figcaption>О центре</figcaption>
                </figure>
            </div>
        </div>
    </section>
    
    
    <section class="medicom-awesome-features-sec" data-stellar-background-ratio="0.3">
    <div class="featires-overlay"></div>
    	<div class="container">
        <div class="text-center">
            <h1 class="light">Здоровье нации – наша цель</h1>

            <p class="lead">Мы помогаем нашим клиентам обрести здоровье – физическое, психологическое и духовное.
                С нами вы будете уверены в своём здоровье и в здоровье ваших близких.</p>
		</div>
			<ul class="awesome-features list-unstyled pull-left text-right">
                <li><i class="pull-right img-circle fa fa-ambulance"></i><span>Индивидуальный</span>подход к каждому
                    клиенту центра
                </li>
                <li class="middle"><i class="pull-right img-circle fa fa-eye"></i><span>Внимание</span> со стороны
                    персонала
                </li>
                <li><i class="pull-right img-circle fa fa-flask"></i><span>Качество</span>проверенное временем</li>
            </ul>
            <div class="tab-slider">
            	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="item active text-center">
                         <img src="/site1.ru/images/tab-slider-img.jpg" alt="" title="">
                        </div>
                        <div class="item">
                        <img src="/site1.ru/images/tab-slider-img.jpg" alt="" title="">
                        </div>
                        <div class="item">
                        <img src="/site1.ru/images/tab-slider-img.jpg" alt="" title="">
                        </div>
                      </div>
				</div>
            	<span class="hand"></span>
            </div>
            <ul class="awesome-features list-unstyled pull-right text-left">
                <li><i class="pull-left img-circle fa fa-user-md"></i><span>Отличная</span>квалификация специалистов
                </li>
                <li class="middle"><i class="pull-left img-circle fa fa-heart"></i><span>Комфорт</span>и безопасность
                    для детей и родителей.
                </li>
                <li><i class="pull-left img-circle fa fa-tint"></i><span>Современное </span>медицинское оборудование.
                </li>
            </ul>
        </div>
    </section>
    
    
    <section class="appointment-sec text-center bg-gray">
        <div class="container">
            <h1>Записаться на приём</h1>

            <p class="lead">Быстрая и удобная запись в врачу где бы вы не были</p>
            <div class="row">
            <div class="col-md-6">
            <figure><img src="/site1.ru/images/appointment-img2.png" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
            </div>
            <div class="col-md-6">


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
                    <form role="form">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <h5> Выберите специализацию</h5>

                                    <div class="form-group row">
                                        <label class="control-label">Место</label>
                                        <select>
                                            <option>Политехническая 1</option>
                                            <option>Политехническая 2</option>
                                            <option>Политехническая 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label">Специализациия</label>
                                        <select>
                                            <option>Врач-гастроэнтеролог</option>
                                            <option>Врач акушер-гинеколог</option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label">Врач</label>
                                        <select>
                                            <option>Дмитриева Калерия Ивановна</option>
                                            <option>Истомин Максим Олегович</option>
                                        </select>
                                    </div>


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

                                    <h4>Тут должен быть хороший календарь</h4>

                                    <button class="btn btn-default nextBtn btn-rounded pull-right" type="button">Далее
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <h5> Выберите специализацию</h5>

                                    <input type="text" placeholder="Имя">
                                    <input type="text" placeholder="Фамилия">
                                    <input type="email" placeholder="Email адрес">
                                    <input type="text" placeholder="Номер телефона">
                                    <textarea rows="4" placeholder="Комментарий"></textarea>

                                    <button class="btn btn-default btn-rounded pull-right" type="submit">Записаться!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            </div>
        </div>

    </section>
    
    <div class="height40"></div>
    
    <div class="container">
    	<div class="row">
                <div class="col-md-7">
                    <div class="latest-news2">
                        <h2 class="light bordered">Последнии <a href="/blog" style="text-decoration: underline"><span>Новости</span></a></h2>
                        <ul id="mycarousel" class="jcarousel-skin-tango blog-style2 list-unstyled">

                            @foreach($getNews as $key => $value)



                                <li>
                                    <i class="post-icon img-circle fa fa-file-text"></i>
                            <article class="blog2-item">
                            <div class="blog2-thumbnail">
                                <img src="{{$value['avatar']}}" alt="">
                            </div>
                            <div class="blog2-content">
                            <span class="arrow-right"></span>
                                <h4 class="blog2-title"><a href="/blog/{{$value['id']}}">{{$value['name']}}</a></h4>

                                <p class="post-date">{{$value['created_at']}}</p>
                                {{ substr(strip_tags($value['content']), 0, 150)  }} ...</p>
                                <p class="text-right"><a href="/blog/{{$value['id']}}">Читать дальше</a></p>
                            </div>
                            </article>
                            </li>


                            @endforeach

                        </ul>

                    </div>

                </div>
                <div class="col-md-5">
                <h2 class="light bordered">Наши <span>Акции</span></h2>
                
                <div class="panel-group accordian-style2" id="accordion2">


                    @foreach($getShares as $key => $value)

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title active">
                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse{{$value['id']}}">
                              {{$value['name']}}<i class="fa pull-right fa-angle-up"></i>
                        </a>
                      </h4>
                    </div>

                      <div id="collapse{{$value['id']}}" class="panel-collapse collapse @if($key == 0) in @endif ">
                          <div class="panel-heading">
                              <span class="text-center"><img src="{{$value['avatar']}}"></span>
                          </div>
                      <div class="panel-body">
                          {!! $value['content'] !!}
                      </div>
                          <div class="panel-footer">
                              c {{$value['start']}} по {{$value['end']}}
                          </div>
                    </div>
                  </div>

                    @endforeach




				</div>
                </div>
            </div>

    </div>



        <section class="medicom-app" data-stellar-background-ratio="0.3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="/site1.ru/images/mobile-hand.png" class="app-img" alt="" title="">
                    </div>
                    <div class="col-md-7">
                        <div class="medicom-app-content">
                            <h1>Всегда вместе</h1>

                            <p class="lead">Попробуйте мобильное приложение "Здоровье Нации" на своём устройстве,
                                которое позволит
                                вам удобно управлять собственным здоровьем.
                                <span>Бесплатно!</span>
                            </p>
                            <ul class="list-unstyled app-buttons">
                                <li><a href="#."><img src="/site1.ru/images/app-store-btn.png" alt="" title="App Store"></a></li>
                                <li><a href="#."><img src="/site1.ru/images/google-play-btn.png" alt="" title="Google App"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    @endsection