@extends('newzdorovie48ru/header')

@section('content')


        <!-- О нас -->
<section class="container-fluid">
    <div class="row">


        <div class="container">


            <div class="app-content-body ">


                <div class="page-header">
                    <h1 class="font-thin m-b">О центре</h1>
                </div>

                <!-- Хлебные крошки -->
                <ol class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li class="active">О центре</li>
                </ol>
                <!-- Хлебные крошки -->


                <article class="panel">

                    <div class="wrapper-lg">
                        <p style="text-align: center;"><strong>Медицинский центр «Здоровье нации» - современная,
                                известная, многопрофильная, развивающаяся компания, оказывающая широкий спектр услуг для
                                всей семьи.</strong></p>

                        <p style="text-align: justify;">Наши клиенты – успешные, активные люди, которые ценят своё время
                            и предпочитают качественные медицинские услуги, высокий уровень сервиса, удобство, комфорт,
                            престиж.</p>

                        <p><strong>Для ВАС:</strong></p>
                        <ul>
                            <li style="text-align: justify;">Работают врачи первой,&nbsp; высшей квалификационной&nbsp;
                                категории, соискатели научной степени, кандидаты&nbsp; медицинских наук, заслуженные&nbsp;
                                врачи Российской Федерации.
                            </li>
                            <li style="text-align: justify;">Центр оснащен высокотехнологичным диагностическим
                                оборудованием экспертного класса, которое позволяет нам осуществлять полное обследование
                                всего организма человека, выявлять заболевания и проводить качественное лечение.
                            </li>
                            <li style="text-align: justify;">Используем в своей работе высокие стандарты медицинского
                                обслуживания, подразумевающие систематизацию и чёткую регламентацию действий врача,
                                сочетая их с традиционной для отечественной медицины заботой и вниманием к пациенту.
                            </li>
                            <li style="text-align: justify;">Наблюдение и ведение беременности, с выдачей обменной карты
                                и больничного листа. Принципиально не делаем аборты. Наша цель – здоровое зачатие,
                                рождение и развитие человека.
                            </li>
                            <li style="text-align: justify;">Работаем&nbsp; с ведущими&nbsp; страховыми компаниями по
                                добровольному медицинскому страхованию (ДМС).
                            </li>
                            <li style="text-align: justify;">Если по каким-то причинам Вы не можете приехать на прием к
                                врачу, в нашей клинике Вы можете воспользоваться услугой «выезд врача на дом» и получить
                                необходимую помощь, не выходя из дома.
                            </li>
                        </ul>
                        <p style="text-align: center;"><strong>Надежность и качество проверенное временем!</strong></p>
                    </div>

                </article>


                <div class="page-header">
                    <h1 class="font-thin m-b">Как Добраться</h1>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2423.2438515896024!2d39.592403!3d52.601363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x413a14e9eece3c35%3A0xdfbc4fe617d626e0!2z0J7QutGC0Y_QsdGA0YzRgdC60LDRjyDRg9C7LiwgNjEsINCb0LjQv9C10YbQuiwg0JvQuNC_0LXRhtC60LDRjyDQvtCx0LsuLCAzOTgwNTk!5e0!3m2!1sru!2sru!4v1432638437060"
                                    width="100%" height="450" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>


                <div class="panel">
                    <div class="wrapper-lg">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="">Написать нам</h2>
                                <hr>

                                <form action="/feedback" method="post">
                                    <div class="form-group">
                                        <label>Как Вас зовут?</label>
                                        <input type="text" name="fio" placeholder="ФИО" class="form-control rounded" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ваш email</label>
                                        <input type="email" name="email" placeholder="Email" class="form-control rounded"
                                               required>
                                    </div>

                                    <div class="form-group">

                                        <label>Ваш номер телефона</label>
                                        <input type="text" name="phone" placeholder="Телефон" class="form-control rounded"
                                               data-mask="+ 9-999-999-99-99">
                                    </div>

                                    <div class="form-group">

                                        <label>Ваше сообщение</label>
                                        <textarea name="message" required class="form-control rounded"
                                                  placeholder="Текст сообщения"></textarea>
                                    </div>

                                    <div class="form-group text-center">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-default btn-void-primary" value="Отправить">
                                    </div>
                                </form>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <h2>Мы Находимся</h2>
                                <hr>


                                <ul class="list-unstyled  m-t-xl">
                                    <li>
                                        <i class="fa fa-phone pull-left text-lg m-r text-success "></i>

                                        <p class="clear m-b-xs text-justify">
                                            <a href="tel:+74742227887">(4742) 227-887</a></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope pull-left text-lg m-r  text-success"></i>

                                        <p class="clear m-b-xs text-justify"><a href="mailto:info@zdorovie48.ru">info@zdorovie48.ru</a>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-globe pull-left text-lg m-r  text-success"></i>

                                        <p class="clear m-b-xs text-justify"><a target="_blank"
                                                                                href="http://zdorovie48.ru/">zdorovie48.ru</a></p>
                                    </li>


                                    <li>
                                        <i class="fa fa-clock-o pull-left text-lg m-r  text-success"></i>

                                        <p class="clear m-b-xs text-justify ">Понедельник-пятница: 8:00-21:00<br>
                                            Суббота: 8:00-18:00
                                            <br>
                                            Запись на прием по телефону с 8.00 до 21.00 ежедневно</p>
                                    </li>

                                    <li>
                                        <i class="fa fa-map-marker pull-left text-lg m-r  text-success"></i>

                                        <p class="clear m-b-xs text-justify "> г.Липецк ул.Октябрьская д.61</p>
                                    </li>

                                </ul>


                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
</section>
<!-- О нас -->
    
    @endsection
