@extends('zdorovie48ru/header')

@if(0)
    @section('title', $thisCategory['title'])
    @section('description', $thisCategory['descript'])
    @section('keywords', $thisCategory['tag'])
    @section('avatar', $thisCategory['avatar'])
@endif



@section('content')

   {{-- dd($thisCategory) --}}

<div class="sub-page-content">

    <div class="container">
        <div class="row">

            @if(!$thisCategory)
                <h2 class="bordered light">Предоставляемые <span>Услуги</span></h2>
                <div class="products">



                    @foreach($Category as $cat)



                        <div class="product">
                            <div class="product-thumb">
                                <a href="/service/{{$cat['id']}}"><img alt="" src="{{$cat['avatar']}}" height="100px"></a>
                            </div>
                            <h4>{{$cat['name']}}</h4>

                            <!--<div class="price-rating">
                                <p class="price"><i class="fa fa-rub"></i> {{$cat['price']}}</p>
                                <div class="clearfix"></div>
                            </div>-->
                            <span class="sperator"></span>
                            <a class="ad-to-cart" href="/service?category={{$cat['id']}}"><i class="fa fa-hospital-o"></i>Подробнее</a>
                        </div>

                    @endforeach

                </div>
            @else

            <aside class="col-md-4">

                <div class="sidebar-widget clearfix">

                    <!--<h2 class="bordered light">Категории</h2>-->
                    <div class="procedures">
                        <h3>{{$thisCategory->name}}</h3>


                        <div class="side-bar-catalog">

                            <ul class="menu-catalog">
                                @foreach($Goods->toTree() as $category)
                                    @include('zdorovie48ru.category.category', $category)
                                @endforeach
                            </ul>

                            <script>
                                $('.menu-catalog .fa-plus-square').click(function(){
                                    $(this).toggleClass('fa-minus-square');
                                    $(this).next().next().toggleClass('active');
                                });
                            </script>
                        </div>
                    </div>

                </div>



                <div class="sidebar-widget light">
                    <h2 class="bordered light">Последние новости</h2>

                    @foreach($LastNews as $lastNew)
                        <article style="overflow: hidden" class="popular-post col-xs-12">
                            <img style="width: 170px" alt="{{$lastNew->title}}" src="{{$lastNew->avatar}}">
                            <h4><a href="/blog/{{$lastNew->id}}">{{$lastNew->name}}</a></h4>

                            <p class="text-justify">{{ substr(strip_tags($lastNew->content), 0, 201) }} ...</p>

                            <p class="popular-date text-right">{{$lastNew->created_at}}</p>
                        </article>
                    @endforeach
                </div>


            </aside>

            <div class="col-md-8">
                <h2 class="bordered light">{{$thisCategory->name}}</h2>

                <ol class="breadcrumb">
                    <li><a href="/">Главная</a></li>

                    <li class="active">{{$thisCategory->name}}</li>
                </ol>

                <div class="row">
                    <div class="col-md-6 col-sm-6"><img class="img-rounded" alt="" src="{{$thisCategory->avatar}}"></div>
                    <div class="col-md-6 col-sm-6">
                        <div class="product-single-content">
                            <h4>{{$thisCategory->name}}</h4>

                        </div>

                    </div>
                </div>
                <div class="height30"></div>


                <h2 class="light bordered">Описание</h2>

                <div>
                    {!! $thisCategory->text!!}
                </div>



                <div class="share-post clearfix">
                    <label>Поделиться</label>
                    <ul class="social-rounded">
                        <li><a href="http://www.facebook.com/sharer.php?u={{Request::url()}}" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/share?url={{Request::url()}}" target="_blank"><i
                                        class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/share?url={{Request::url()}}" target="_blank"><i
                                        class="fa fa-google-plus"></i></a></li>
                        <li><a href="http://vkontakte.ru/share.php?url={{Request::url()}}" target="_blank"><i
                                        class="fa fa-vk"></i></a></li>
                        <li><a href="http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl={{Request::url()}}"
                               target="_blank"><i class="fa fa-odnoklassniki"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>





            </div>
            @endif
        </div>
    </div>




</div>

@endsection

