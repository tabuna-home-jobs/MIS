@extends('luchiki48ru/ALTheader')

@section('content')

    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="cupid-heading">
                    <h2>Отзывы</h2>
                </div>
            </div>
            <div class="wrrr"></div>
        </section>
        <main role="main" class="site-content-archive">
            <div class="container clearfix">
                <div class="blog-wrapper">
                    <div class="blog-inner blog-single clearfix">
                        <article id="post-">
                            <div class="page-single-our-staffs">
                                <div class="row">
                                    @foreach($Reviews as $review)
                                    <div class="entry-wrapper clearfix">

                                        <div class="entry-content-wrapper clearfix">
                                            <div class="entry-content-container clearfix">

                                                <h3 class="entry-title">
                                                    {{$review->fio}}
                                                </h3>

                                                <div class="entry-meta">
                                                     <span class="entry-meta-date"> Размещено {{$review->created_at}}</span>
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
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
