@extends('zdorovie48ru/header')

@section('content')
    <!--<section class="sub-page-banner text-center hidden-xs">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="entry-title">{{$Category->name}}</h1>
            <p>Описание услуг оказываемых центром "Здоровье Нации"</p>
        </div>
    </section>-->





    <div class="sub-page-content">

        <div class="container">
            <div class="row">

                <aside class="col-md-4">

                    <div class="sidebar-widget clearfix">

                        <!--<h2 class="bordered light">Категории</h2>-->
                        <div class="procedures">
                            <h3>{{$Category->name}}</h3>


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
                    <h2 class="bordered light">{{$Good->name}}</h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-6"><img class="img-rounded" alt="" src="{{$Good->avatar}}"></div>
                        <div class="col-md-6 col-sm-6">
                            <div class="product-single-content">
                                <h4>{{$Good->name}}</h4>
                                <h6>
                                    <small>Категория: {{$Good->category()->first()->name}}</small>
                                </h6>
                                <h6>
                                    <small>Cтоимость: {{$Good->price}} <i class="fa fa-rub"></i></small>
                                </h6>
                            </div>

                        </div>
                    </div>
                    <div class="height30"></div>

                    @if($Good->attribute != "a:0:{}")

                    <h2 class="light bordered">Что <span>входит</span></h2>

                    <div>

                        <ul class="list-group">

                            @foreach( unserialize($Good->attribute) as  $keyAttr=> $valueAttr )

                                @if($keyAttr % 2 == 0)
                                    <li class="list-group-item"><span class="pull-left">{{$valueAttr}}
                                            @else
                                        </span>:<span class="pull-right">{{ $valueAttr }}</span></li>
                                @endif

                            @endforeach
                        </ul>

                    </div>
                    @endif


                    <h2 class="light bordered">Описание</h2>

                    <div>
                        {!! $Good->text!!}
                    </div>

                </div>
            </div>
        </div>




        </div>

@endsection