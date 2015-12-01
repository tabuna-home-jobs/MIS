@extends('medicalsystemtk/header')

@section('content')
    <section class="sub-page-banner text-center hidden-xs">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="entry-title">{{$Category->name}}</h1>
            <p>Описание услуг оказываемых центром "Здоровье Нации"</p>
        </div>
    </section>

    <div class="sub-page-content">

        <div class="container">
            <div class="row">

                <aside class="col-md-4">

                    <div class="sidebar-widget clearfix">

                        <!--<h2 class="bordered light">Категории</h2>-->
                        <div class="procedures">
                            <h3>Разделы</h3>


                            <div class="panel-group sidebar-nav" id="accordion3">
                                @foreach($Goods->toTree() as $category)
                                    @include('medicalsystemtk.category.category', $category)
                                @endforeach

                            </div>
                        </div>

                    </div>





                    <style>
                        .plus-service:hover {
                            color:#2B96CF;
                            -webkit-transition: all .5s;
                            transition: all .5s;
                        }
                        .panel-sidebar a {
                            position: relative;
                            display: inline-block;
                        }
                        .panel-heading a:after {
                            position: absolute;
                            left: 0;
                            content: "";
                            display: block;
                            width: 0%;
                            margin-right: 10px;
                            border-bottom: 1px #373737 solid;

                        }
                        .panel-heading a:hover:after {
                            width: 100%;
                            border-bottom-width: 1px;
                            transition: all .5s ease-out;
                        }
                        .panel-collapse a {
                            transition: all .5s ease-out;
                        }
                        .panel-collapse a:hover {
                            background-color: white;
                        }
                    </style>

                    <script>
                        $('.plus-service').on('click',function(){
                            var allPlus = $('.plus-service');
                            allPlus.removeClass('fa-minus-square').addClass('fa-plus-square');
                            var its = $(this);
                            if(its.parent().parent().next().hasClass('in'))
                            {

                                its.addClass('fa-plus-square').removeClass('fa-minus-square');
                            }
                            else
                            {
                                its.addClass('fa-minus-square').removeClass('fa-plus-square');
                            }
                        });
                    </script>







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
            <div class="sidebar-widget light container">
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
        </div>



@endsection