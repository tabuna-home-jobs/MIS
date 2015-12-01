@extends('medicalsystemtk/header')

@section('content')


    <div class="sub-page-content">
    	<div class="container">
        	<h2 class="light bordered">Как<span> Добраться</span></h2>
            <div class="row">
            	<div class="col-md-12">
                	<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2423.2438515896024!2d39.592403!3d52.601363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x413a14e9eece3c35%3A0xdfbc4fe617d626e0!2z0J7QutGC0Y_QsdGA0YzRgdC60LDRjyDRg9C7LiwgNjEsINCb0LjQv9C10YbQuiwg0JvQuNC_0LXRhtC60LDRjyDQvtCx0LsuLCAzOTgwNTk!5e0!3m2!1sru!2sru!4v1432638437060" width="600" height="450" frameborder="0"></iframe></div>
                    	<div class="get-directions">
                        	<form action="http://maps.google.com/maps" method="get" target="_blank">
                               <input type="text" name="saddr" placeholder="Введите свой адрес" />
                               <input type="hidden" name="daddr" value="Октябрьская ул., 61, Липецк, Липецкая область" />
                               <input type="submit" value="Get directions" class="direction-btn" />
                            </form>
                        </div>
                </div>
            </div>
            
            <div class="row">
            	<div class="col-md-8 contact-form">
                	<h2 class="light bordered">Написать нам <span>сообщение</span></h2>

                    <form action="/feedback" method="post">
                        <input type="text" name="fio" placeholder="ФИО" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="text" name="phone" placeholder="Телефон" required>
                        <textarea name="message" required placeholder="Текст сообщения"></textarea>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-default" value="Отправить">
                    </form>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4">
                	<h2 class="light bordered">Мы <span>Находимся</span></h2>
                    <div class="get-in-touch-widget">
                    	<ul class="list-unstyled">
                        <li><i class="fa fa-phone"></i>(4742) 227-887, 227-8881</li>
                        <li><i class="fa fa-envelope"></i>octavian48@yandex.ru</li>
                        <li><i class="fa fa-globe"></i><a href="http://zdorovie48.ru/">zdorovie48.ru</a></li>
                        <li><i class="fa fa-clock-o"></i>Понедельник-пятница: 8:00-21:00<br>
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