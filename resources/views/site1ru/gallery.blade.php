@extends('site1ru/header')

@section('content')





    <div class="row text-center no-margin">
        <div class="col-md-4 bg-default">
            <div class="home-box">
                <span class="glyphicon glyphicon-tint"></span>

                <h3>Услуги</h3>

                <p>Текст про наши услуги, Текст про наши услуги , Текст про наши услуги, Текст про наши услуги</p>
                <a class="btn-rounded btn-bordered" href="#.">Посмотреть</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="home-box opening-hours clearfix">
                <span class="glyphicon glyphicon-time"></span>

                <h3>Часы приёма</h3>

                <p>Мы всегда рады видеть вас в нашем медицинском центре</p>
                <ul class="list-unstyled">
                    <li class="clearfix">
				<span>
					Понедельник - Пятница
				</span>

                        <div class="value">
                            8.00 - 16.00
                        </div>
                    </li>
                    <li class="clearfix">
				<span>
					Субота
				</span>

                        <div class="value">
                            9.30 - 15.30
                        </div>
                    </li>
                    <li class="clearfix">
				<span>
					Воскресенье
				</span>

                        <div class="value">
                            9.30 - 17.00
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 bg-default">
            <div class="home-box">
                <span class="glyphicon glyphicon-tint"></span>

                <h3>Услуги</h3>

                <p>Текст про наши услуги, Текст про наши услуги , Текст про наши услуги, Текст про наши услуги</p>
                <a class="btn-rounded btn-bordered" href="#.">Посмотреть</a>
            </div>
        </div>
    </div>



    <div class="container">
        <nav class="primary clearfix">
                    <ul>
                      <li><a href="#" class="selected" data-filter="*">Все</a></li>
                      <li><a href="#" data-filter=".doctors">Доктора</a></li>
                      <li><a href="#" data-filter=".treatments">Трейты</a></li>
                      <li><a href="#" data-filter=".output-surgery">Ещё</a></li>
                      <li><a href="#" data-filter=".laboratory">Оборудование</a></li>
                      <li><a href="#" data-filter=".events" class="last">События</a></li>
                    </ul>
                  </nav>
                  
        <section class="main">
                    <div class="portfolio">
                      <article class="entry doctors">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                            <a href="/site1.ru/images/gallery-img1.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img1.jpg" alt="">
                        </div>
                          <p><a href="#.">Тестовая запись</a>Тестовая запись</p>
                      </article>
                      <article class="entry laboratory">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img2.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img2.jpg" alt="">
                        </div>
                          <p><a href="#.">Тестовая запись</a>Тестовая запись</p>
                      </article>
                      <article class="entry output-surgery">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img3.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img3.jpg" alt="">
                        </div>
                          <p><a href="#.">Тестовая запись</a>Тестовая запись</p>
                      </article>
                      <article class="entry treatments">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img4.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img4.jpg" alt="">
                        </div>
                          <p><a href="#.">Тестовая запись</a>Тестовая запись</p>
                      </article>
                      <article class="entry events">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img5.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img5.jpg" alt="">
                        </div>
                          <p><a href="#.">Тестовая запись</a>Тестовая запись</p>
                      </article>
                      <article class="entry treatments">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img6.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img6.jpg" alt="">
                        </div>
                          <p><a href="#.">Тестовая запись</a>Тестовая запись</p>
                      </article>
                      <article class="entry events">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img7.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img7.jpg" alt="">
                        </div>
                          <p><a href="#.">Тестовая запись</a>Тестовая запись</p>
                      </article>
                      <article class="entry doctors">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img8.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img8.jpg" alt="">
                        </div>
                          <p><a href="#.">Тестовая запись</a>Тестовая запись</p>
                      </article>
                      <article class="entry treatments">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img9.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img9.jpg" alt="">
                        </div>
                          <p><a href="#.">Тестовая запись</a>Тестовая запись</p>
                      </article>
                    </div>
                  </section>
    </div>






    <section class="about-sec text-center" data-stellar-background-ratio="0.3">
        <div class="container">
            <h1>Наш центр</h1>

            <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

            <div class="row text-center" id="counters">
                <div class="col-md-3">
                    <div class="counter">
                        <span class="quantity-counter1 highlight">180</span>
                        <h6 class="counter-details">Посетителей</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter">
                        <span class="quantity-counter2 highlight">99</span>
                        <h6 class="counter-details">Сотрудников</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter">
                        <span class="quantity-counter3 highlight">50</span>
                        <h6 class="counter-details">Кабинетов</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter">
                        <span class="quantity-counter4 highlight">362</span>
                        <h6 class="counter-details">Наград</h6>
                    </div>
                </div>
            </div>

        </div>
    </section>








@endsection