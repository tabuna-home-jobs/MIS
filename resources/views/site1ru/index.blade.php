@extends('site1ru/header')

@section('content')



    <div class="content-index">
    
    <section class="creative-sec">
        <div class="container">
            <div class="text-center">
                <h1 class="light">«Здоровье Нации»
                </h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Nam vitae felis pretium, euismod ipsum nec</p>
            </div>
            
            <div class="creative-sec-thumb one">
                <figure>
                <span class="overlay"><a href="#test"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img1.jpg" width="154" class="img-circle img-thumbnail img-responsive" alt="" title="">
                <figcaption>Outpatient Surgery</figcaption>
                </figure>
            </div>
            
            <div class="creative-sec-thumb two">
                <figure>
                <span class="overlay"><a href="#test"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img2.jpg" width="266" class="img-circle img-thumbnail img-responsive" alt="" title="">
                <figcaption>Pediatric Clinic</figcaption>
                </figure>
            </div>
            
            <div class="creative-sec-thumb three">
                <figure>
                <span class="overlay"><a href="#test"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img3.jpg" width="162" class="img-circle img-thumbnail img-responsive" alt="" title="">
                <figcaption>Primery Health Care</figcaption>
                </figure>
            </div>
            
            <div class="creative-sec-thumb four">
                <figure>
                <span class="overlay"><a href="#test"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img4.jpg" width="305" class="img-circle img-thumbnail img-responsive" alt="" title="">
                <figcaption>Cardiac Clinic</figcaption>
                </figure>
            </div>
        </div>
    </section>
    
    
    <section class="medicom-awesome-features-sec" data-stellar-background-ratio="0.3">
    <div class="featires-overlay"></div>
    	<div class="container">
        <div class="text-center">
        	<h1 class="light">Medicom is <span>Incredibly Awesome</span> Design.</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Nam vitae felis pretium, euismod ipsum nec</p>
		</div>
			<ul class="awesome-features list-unstyled pull-left text-right">
            	<li><i class="pull-right img-circle fa fa-ambulance"></i><span>Emergency</span>If you need a doctor for to consectetuer</li>
                <li class="middle"><i class="pull-right img-circle fa fa-eye"></i><span>eye specialist</span>If you need a service</li>
                <li><i class="pull-right img-circle fa fa-flask"></i><span>Robot therapy</span>If you need a doctor for to consectetuere</li>
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
            	<li><i class="pull-left img-circle fa fa-user-md"></i><span>Emergency</span>If you need a doctor for to consectetuer</li>
                <li class="middle"><i class="pull-left img-circle fa fa-heart"></i><span>eye specialist</span>If you need a service</li>
                <li><i class="pull-left img-circle fa fa-tint"></i><span>Robot therapy</span>If you need a doctor for to consectetuer</li>
            </ul>
        </div>
    </section>
    
    
    <section class="appointment-sec text-center bg-gray">
        <div class="container">
            <h1>Make an appointment</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            <div class="row">
            <div class="col-md-6">
            <figure><img src="/site1.ru/images/appointment-img2.png" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
            </div>
            <div class="col-md-6">
                <div class="appointment-form clearfix">
                <form>
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="email" placeholder="Email Address">
                <input type="text" placeholder="Phone No">
                <input type="text" id="datepicker" placeholder="Appointment Date">
                <select>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Child</option>
                </select>
                <textarea placeholder="Message"></textarea>
                <input type="submit" value="submit" class="btn btn-default btn-rounded">
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
                        	<li>
                            <i class="post-icon img-circle fa fa-picture-o"></i>
                            <article class="blog2-item">
                            <div class="blog2-thumbnail">
                            <img src="/site1.ru/images/blog2-img1.jpg" alt="">
                            </div>
                            <div class="blog2-content">
                            <span class="arrow-right"></span>
                            <h4 class="blog2-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                            <p class="post-date">10 December, 2013 - 18:33:04</p>
                            <p>Printing and typesetting industry. Lorem Ipsum has been the industryâ€&trade;s standard dummy text ever scrambled...<a class="#." href="#.">READ MORE</a></p>
                            </div>
                            </article>
                            </li>

                            <li>
                            <i class="post-icon img-circle fa fa-video-camera"></i>
                            <article class="blog2-item">
                            <div class="blog2-thumbnail">
                            <img src="/site1.ru/images/blog2-img2.jpg" alt="">
                            </div>
                            <div class="blog2-content">
                            <span class="arrow-right"></span>
                            <h4 class="blog2-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                            <p class="post-date">10 December, 2013 - 18:33:04</p>
                            <p>Printing and typesetting industry. Lorem Ipsum has been the industryâ€&trade;s standard dummy text ever scrambled...<a class="#." href="#.">READ MORE</a></p>
                            </div>
                            </article>
                            </li>

                            <li>
                            <i class="post-icon img-circle fa fa-picture-o"></i>
                            <article class="blog2-item">
                            <div class="blog2-thumbnail">
                            <img src="/site1.ru/images/blog2-img3.jpg" alt="">
                            </div>
                            <div class="blog2-content">
                            <span class="arrow-right"></span>
                            <h4 class="blog2-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                            <p class="post-date">10 December, 2013 - 18:33:04</p>
                            <p>Printing and typesetting industry. Lorem Ipsum has been the industryâ€&trade;s standard dummy text ever scrambled...<a class="#." href="#.">READ MORE</a></p>
                            </div>
                            </article>
                            </li>

                            <li>
                            <i class="post-icon img-circle fa fa-picture-o"></i>
                            <article class="blog2-item">
                            <div class="blog2-thumbnail">
                            <img src="/site1.ru/images/blog2-img1.jpg" alt="">
                            </div>
                            <div class="blog2-content">
                            <span class="arrow-right"></span>
                            <h4 class="blog2-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                            <p class="post-date">10 December, 2013 - 18:33:04</p>
                            <p>Printing and typesetting industry. Lorem Ipsum has been the industryâ€&trade;s standard dummy text ever scrambled...<a class="#." href="#.">READ MORE</a></p>
                            </div>
                            </article>
                            </li>

                            <li>
                            <i class="post-icon img-circle fa fa-video-camera"></i>
                            <article class="blog2-item">
                            <div class="blog2-thumbnail">
                            <img src="/site1.ru/images/blod2-img2.html" alt="">
                            </div>
                            <div class="blog2-content">
                            <span class="arrow-right"></span>
                            <h4 class="blog2-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                            <p class="post-date">10 December, 2013 - 18:33:04</p>
                            <p>Printing and typesetting industry. Lorem Ipsum has been the industryâ€&trade;s standard dummy text ever scrambled...<a class="#." href="#.">READ MORE</a></p>
                            </div>
                            </article>
                            </li>
                        </ul>

                    </div>

                </div>
                <div class="col-md-5">
                <h2 class="light bordered">Наши <span>Акции</span></h2>
                
                <div class="panel-group accordian-style2" id="accordion2">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title active">
                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                          <i class="fa fa-medkit"></i>our responsibility<i class="fa pull-right fa-angle-up"></i>
                        </a>
                      </h4>
                    </div>
                    
                    <div id="collapse1" class="panel-collapse collapse in">
                      <div class="panel-body">
                        Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.<br /><br />veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit nemo minima rerums unsers sadips amets.  Sed ut perspiciatis unde 
sed quia consequuntur.
Page Maker including versions.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                      <i class="fa fa-heart"></i>heart specialist<i class="fa fa-angle-down pull-right"></i>
                      </a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">
                       Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.<br /><br />veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit nemo minima rerums unsers sadips amets.  Sed ut perspiciatis unde 
sed quia consequuntur.
Page Maker including versions.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                      <i class="fa fa-eye"></i>eye specialist<i class="fa fa-angle-down pull-right"></i>
                      </a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">
                        Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.<br /><br />veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit nemo minima rerums unsers sadips amets.  Sed ut perspiciatis unde 
sed quia consequuntur.
Page Maker including versions.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
                      <i class="fa fa-mobile"></i>responsive design<i class="fa fa-angle-down pull-right"></i>
                      </a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                      <div class="panel-body">
                        Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.<br /><br />veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit nemo minima rerums unsers sadips amets.  Sed ut perspiciatis unde 
sed quia consequuntur.
Page Maker including versions.
                      </div>
                    </div>
                  </div>
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
                            <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                <span>AVAILABLE ON STORES</span>
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