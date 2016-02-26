@extends('luchiki48ru/header')

@section('content')


    <div class="sub-page-content">

        	<h1 class="blueBg center white feedHead">Мы на карте</h1>
            <div class="row">
            	<div class="col-md-12">
                	<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2423.2438515896024!2d39.592403!3d52.601363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x413a14e9eece3c35%3A0xdfbc4fe617d626e0!2z0J7QutGC0Y_QsdGA0YzRgdC60LDRjyDRg9C7LiwgNjEsINCb0LjQv9C10YbQuiwg0JvQuNC_0LXRhtC60LDRjyDQvtCx0LsuLCAzOTgwNTk!5e0!3m2!1sru!2sru!4v1432638437060"  height="450" frameborder="0" style="border:0; width: 100%"></iframe></div>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <h2 class="blueText center feedHead">Обратная связь</h2>
            	<div class="col-md-6 contact-form">
                    <div class="row">
                        @if(Session::has('good'))
                            <div class="alert alert-success">
                                {{ Session::get('good') }}
                            </div>
                        @endif
                    </div>
                    <form action="/feedback" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fio" placeholder="ФИО" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"  name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Телефон" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" required placeholder="Текст сообщения"></textarea>
                        </div>
                        {{csrf_field()}}
                        <input type="submit" class="btn btn-primary" value="Отправить">
                    </form>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 contacts">

                    <div class="get-in-touch-widget">
                    	<ul class="list-unstyled">
                        <li><i class="fa fa-phone"></i> (4742) 227-887, 227-8881</li>
                        <li><i class="fa fa-envelope"></i> octavian48@yandex.ru</li>
                        <li><i class="fa fa-globe"></i> <a href="http://zdorovie48.ru/">zdorovie48.ru</a></li>
                        <li><i class="fa fa-clock-o"></i> Понедельник-пятница: 8:00-21:00<br>
                            Суббота: 8:00-18:00<br>
                            Воскресенье: 10:00-16:00</li>
                        <li><i class="fa fa-map-marker"></i> г.Липецк ул.Октябрьская д.61 </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    @endsection
