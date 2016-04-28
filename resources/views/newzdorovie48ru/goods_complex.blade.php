@extends('newzdorovie48ru/header')


@section('title', $Good['title'])
@section('description', $Good['descript'])
@section('keywords', $Good['tag'])
@section('avatar', $Good['avatar'])

@section('content')

<!-- Комплексная услуга -->
<section class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="app-content-body ">
                <div class="col-sm-4">
                    <div class="procedures">
                        <div class="page-header">
                            <h3 class="h1 font-thin m-b"><span class="h3">{{$Category->name}}</span></h3>
                        </div>

                        <div class="side-bar-catalog">
                            <nav class="navmenu navmenu-default" role="navigation">
                                <ul class="nav navmenu-nav">
                                    @if(!empty($complexGoods))
                                        <li class="text-center bg-light" style="padding: 10px 15px;">Комплексные услуги</li>
                                        @foreach($complexGoods as $category)
                                            @include('newzdorovie48ru.category.category', ['category' => $category, 'type' => 'complex'])
                                        @endforeach
                                    @endif
                                </ul>
                            </nav>
                            <br>
                            <nav class="navmenu navmenu-default" role="navigation">
                                <ul class="nav navmenu-nav">
                                    @if(!empty($Goods))
                                        <li class="text-center bg-light" style="padding: 10px 15px;">Услуги</li>
                                        @foreach($Goods->toTree() as $category)
                                            @include('newzdorovie48ru.category.category', $category)
                                        @endforeach
                                    @endif
                                </ul>
                            </nav>

                            <ul class="menu-catalog"></ul>

                            <script>
                                $('.menu-catalog .fa-plus-square').click(function(){
                                    $(this).toggleClass('fa-minus-square');
                                    $(this).next().next().toggleClass('active');
                                });
                            </script>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="page-header">
                        <h1 class="font-thin m-b">{{$Good->name}}</h1>
                    </div>

                    <ol class="breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/service?category={{$Good->category()->first()->id}}">{{$Good->category()->first()->name}}</a></li>
                        <li class="active">{{$Good->name}}</li>
                    </ol>


                    <div class="panel">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="blog-post">
                                    <div class="wrapper-lg">
                                        <div class="row padder-v v-center">
                                            <div class="col-md-6 col-sm-6"><img class="img-responsive img-rounded" alt="" src="{{$Good->avatar}}"></div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="text-center">
                                                    <h4>{{$Good->name}}</h4>
                                                    <h5>Категория: {{$Good->category()->first()->name}}</h5>
                                                    <h5>Цена: {{$Good->price or 0}} рублей</h5>
                                                    <p class="text-center btn-order-good">
                                                        <a href="/#main-appointments-section" class="btn btn-default btn-void-primary">Заказать</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-header">
                        <h3 class="h4 font-thin m-b"><span class="h4">Что входит:</span></h3>
                    </div>
                    <div class="row complex_goods_list">
                        @foreach($Good->goods as $key => $value)
                            <div class="col-md-4">
                                <a class="h5" href="/service/{{ $value->slug }}">
                                    <div class="bg-white">
                                        <div class="img">
                                            <img src="@if(file_exists($value->avatar)){{$value->avatar}}@else{{'/upload/no_img.png'}}@endif" alt="">
                                        </div>
                                        <div class="name">
                                            {{ str_limit($value->name, 45) }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="page-header">
                        <h3 class="h4 font-thin m-b"><span class="h4">Описание:</span></h3>
                    </div>
                    <div class="panel">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="blog-post">
                                    <div class="wrapper-lg">
                                        <main>
                                            {!! $Good->text!!}
                                        </main>
                                    </div>

                                    <div class="line line-lg b-b b-light"></div>
                                    <div class="text-muted v-center">
                                        <div class="col-md-6">
                                            <i class="fa fa-clock-o text-muted"></i>  {!! $Good->created_at->toDateString()!!}
                                        </div>

                                        <div class="col-md-6 text-right">
                                            <a onClick='window.open ("http://www.facebook.com/sharer.php?u={{Request::url()}}","mywindow","menubar=1,resizable=1,width=650,height=550");' class="btn btn-icon"><i class="fa fa-facebook"></i></a>

                                            <a onClick='window.open ("https://twitter.com/share?url={{Request::url()}}","mywindow","menubar=1,resizable=1,width=650,height=550");'
                                               class="btn btn-icon"><i class="fa fa-twitter"></i></a>

                                            <a onClick='window.open ("https://plus.google.com/share?url={{Request::url()}}","mywindow","menubar=1,resizable=1,width=650,height=550");'
                                               class="btn btn-icon"><i class="fa fa-google-plus"></i></a>

                                            <a onClick='window.open ("http://vk.com/share.php?url={{Request::url()}}","mywindow","menubar=1,resizable=1,width=650,height=550");'
                                               class="btn btn-icon"><i class="fa fa-vk"></i></a>

                                            <a onClick='window.open ("http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl={{Request::url()}}","mywindow","menubar=1,resizable=1,width=650,height=550");'
                                               class="btn btn-icon"><i class="fa fa-odnoklassniki"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Услуга -->

@endsection
