@extends('luchiki48ru/ALTheader')

@section('content')

    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="luchiki-heading">
                    <h2>Отзывы</h2>
                </div>
            </div>
            <div class="wrrr"></div>
        </section>
        <main role="main" class="site-content-archive wrapp-review">

            <div class="container clearfix">
                <div class="blog-wrapper">
                    <div class="blog-inner blog-single clearfix">
                        <article id="post-">
                            <div class="page-single-our-staffs">
                                <div class="row">
                                    @if(Session::has('good'))
                                        <div class="alert alert-success">
                                            {{ Session::get('good') }}
                                        </div>
                                    @endif
                                    @foreach($Reviews as $review)
                                    <div class="entry-wrapper clearfix wrap-review">

                                        <div class="entry-content-wrapper clearfix">
                                            <div class="entry-content-container clearfix">

                                                <h3 class="entry-title">
                                                    {{$review->fio}}
                                                </h3>

                                                <div class="entry-meta">
                                                     <span class="entry-meta-date"> Размещено {{$review->created_at->diffForHumans()}}</span>
                                                </div>
                                                <div class="entry-excerpt">
                                                    <p>
                                                        {{$review->content}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="row">
                                    {!! $Reviews->render() !!}
                                </div>
                            </div>
                        </article>

                        <div>
                            <div class="col-md-12">

                                <form action="/reviews" method="post" class="wpcf7-form">

                                    <div class="row contact-form-contact-us row bg-while">
                                        <div class="col-md-3 col-sm-12 contact-form-contact-us-left">
                                            <h3>Напишите отзыв</h3>

                                            <p>мы учитываем каждое мнение</p>

                                            <p></p>
                                        </div>
                                        <div class="col-md-9 col-sm-12 contact-form-contact-us-right">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 contact-form-input">
                        <span class="wpcf7-form-control-wrap your-name">
                            <input type="text" name="fio" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" aria-required="true" aria-invalid="false" placeholder="ФИО*"></span>
                                                </div>



                                                <div class="col-md-12 col-sm-12 contact-form-input">
                        <span class="wpcf7-form-control-wrap your-message">
                            <textarea name="mess" cols="4" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="your-message" aria-required="true" aria-invalid="false" placeholder="Ваше сообщение...*"></textarea></span>
                                                </div>
                                                <div class="col-md-12 col-sm-12 contact-form-submit">
                                                    <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit luchiki-button button-sm" id="submit">
 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>

                                    {{csrf_field()}}
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
