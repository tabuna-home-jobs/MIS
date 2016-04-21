@extends('luchiki48ru/header')

@section('content')


    <div class="sub-page-content">

        	<h1 class="blueBg center white feedHead">Мы на карте</h1>
            <div class="row">
            	<div class="container padding-top-35">
                    <ul class="breadcrumb">
                        <li><a href="/">Главная</a></li>

                        <li>Контакты</li>
                    </ul>
                	<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.409015326709!2d39.58208250461453!3d52.59837735796068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x413a14c15913a36b%3A0x1e0c7ae23f078194!2z0YPQuy4g0J3QtdC00LXQu9C40L3QsCwgMTXQkCwg0JvQuNC_0LXRhtC6LCDQm9C40L_QtdGG0LrQsNGPINC-0LHQuy4sIDM5ODA1OQ!5e0!3m2!1sru!2sru!4v1450430447138"  height="450" frameborder="0" style="border:0; width: 100%"></iframe></div>
                </div>
            </div>
        <div class="container pad-b-1">
            <div class="row">
                <h2 class="blueText center feedHead">Обратная связь</h2>
            	<div class="col-md-6 col-sm-6 contact-form">
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
                <div class="col-md-6 col-sm-6 contacts">
                    <div class="col-md-6 col-xs-6 center">
                        <i class="fa fa-map-marker fa-big blueText"></i><br><br><br>
                        (4742) 77-03-97.<br><br>
                        info@luchiki.ru<br><br>
                        г. Липецк, ул. Неделина, 15-а

                    </div>
                    <div class="col-md-6 col-xs-6 center">
                        <i class="fa fa-clock-o fa-big blueText"></i><br><br><br>
                        Понедельник-пятница: 8:30-20:30<br><br>
                        Суббота: 8:30-17:00<br><br>
                        Воскресенье: 9:30-15:30
                    </div>
                    <!-- <div class="get-in-touch-widget">
                    	<ul class="list-unstyled">
                        <li><i class="fa fa-phone"></i> </li>
                        <li><i class="fa fa-envelope"></i> octavian48@yandex.ru</li>
                        <li><i class="fa fa-globe"></i> <a href="http://zdorovie48.ru/">zdorovie48.ru</a></li>
                        <li><i class="fa fa-clock-o"></i> Понедельник-пятница: 8:00-21:00<br>
                            Суббота: 8:00-18:00<br>
                            Воскресенье: 10:00-16:00</li>
                        <li><i class="fa fa-map-marker"></i> г.Липецк ул.Октябрьская д.61 </li>
                        </ul>
                    </div>-->
                </div>
            </div>
            
        </div>
    </div>
    
    @endsection
