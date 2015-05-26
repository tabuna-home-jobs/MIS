@extends('site1ru/header')

@section('content')





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
                        <p><a href="#.">seniour staff</a>Pediatric clinic</p>
                      </article>
                      <article class="entry laboratory">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img2.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img2.jpg" alt="">
                        </div>
                        <p><a href="#.">Clinical Experties</a>Pediatric clinic</p>
                      </article>
                      <article class="entry output-surgery">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img3.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img3.jpg" alt="">
                        </div>
                        <p><a href="#.">Robot therapy</a>Pediatric clinic</p>
                      </article>
                      <article class="entry treatments">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img4.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img4.jpg" alt="">
                        </div>
                        <p><a href="#.">Satisfied Patients</a>Pediatric clinic</p>
                      </article>
                      <article class="entry events">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img5.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img5.jpg" alt="">
                        </div>
                        <p><a href="#.">Pressure guidelines</a>Pediatric clinic</p>
                      </article>
                      <article class="entry treatments">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img6.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img6.jpg" alt="">
                        </div>
                        <p><a href="#.">Dental Treatment</a>Pediatric clinic</p>
                      </article>
                      <article class="entry events">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img7.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img7.jpg" alt="">
                        </div>
                        <p><a href="#.">Springtime allergies</a>Pediatric clinic</p>
                      </article>
                      <article class="entry doctors">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img8.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img8.jpg" alt="">
                        </div>
                        <p><a href="#.">treatment</a>Pediatric clinic</p>
                      </article>
                      <article class="entry treatments">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                        <a href="/site1.ru/images/gallery-img9.jpg" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="/site1.ru/images/gallery-img9.jpg" alt="">
                        </div>
                        <p><a href="#.">Satisfied Patients</a>Pediatric clinic</p>
                      </article>
                    </div>
                  </section>
    </div>


   @endsection