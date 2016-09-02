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
                            <div class="h1 font-thin m-b"><span class="h3">{{$Category->name}}</span></div>
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
                        <li> {{--<a href="/service?category={{$Good->category()->first()->id}}">{{$Good->category()->first()->name}}</a>--}} {{$Good->category()->first()->name}}</li>
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
                                                    <div class="h4 m-t m-b">{{$Good->name}}</div>
                                                    <div class="h5 m-t m-b">Категория: {{$Good->category()->first()->name}}</div>
                                                    <div class="h4 total_price">Цена: <s>{{number_format($Good->total_price, 0, '.', ' ')}} <i class="fa fa-rub"></i></s></div>
                                                    <div class="h3 text-danger font-bold m-t m-b">{{number_format($Good->price, 0, '.', ' ')}} <i class="fa fa-rub"></i></div>
                                                    <p class="text-center btn-order-good">
                                                        <button onclick="order()" class="btn btn-default btn-void-primary">Записаться на приём</button>
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
                        <div class="h4 font-thin m-t m-b"><span class="h4">Что входит:</span></div>
                    </div>
                    <div class="row complex_goods_list">
                        @foreach($Good->goods as $key => $value)
                            <div class="col-md-4 @if($key > 4 && count($Good->goods) > 6) hidden hidden-good @endif">
                                <a class="h5" href="/service/{{ $value->slug }}">
                                    <div class="bg-white box-shadow">
                                        <div class="img">
                                            <img src="{{ $value->avatar }}" alt="">
                                        </div>
                                        <div class="name">
                                            {{ str_limit($value->name, 45) }}
                                        </div>
                                        <div class="row info">
                                            <div class="col-md-6">
                                                <span title="Количество посещений"><i class="fa fa-user-md" aria-hidden="true"></i> {{ $value->count_visit }}</span>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <span title="Количество посещений x Стоимость услуги">{{ $value->total_price }} <i class="fa fa-rub"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                            @if( count($Good->goods) > 6)
                                <div class="col-md-4 more-btn">
                                    <div class="bg-purple box-shadow text-center">
                                        <span>
                                            <i class="fa fa-angle-right fa-4x padder-v" aria-hidden="true"></i>
                                            <br>
                                            <small>Показать все</small>
                                        </span>

                                        <span class="hidden">

                                        <i class="fa fa-angle-left  fa-4x hidden  padder-v" aria-hidden="true"></i>
                                              <br>
                                            <small> Свернуть</small>
                                        </span>

                                    </div>
                                </div>
                            @endif


                    </div>

                    <div class="page-header">
                        <div class="h4 font-thin m-t m-b"><span class="h4">Описание:</span></div>
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
                                    <div class="text-muted padder-v v-center">
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

<script>
    $(document).ready(function() {
        $('.more-btn').on('click', function() {
            $('.hidden-good').toggleClass('hidden');
            $(this).find('span, i').toggleClass('hidden');
        });
    });



    function order() {
        swal({
            title: "Запись на приём!",
            text: '<form action="/feedback" method="post"><div class="form-group"><label>Как Вас зовут?</label><input type="text" name="fio" placeholder="ФИО" class="form-control show rounded" required=""></div><div class="form-group"><label>Ваш email</label><input type="email" name="email" placeholder="Email" class="form-control show rounded" required=""></div><div class="form-group"><label>Ваш номер телефона</label><input type="text" name="phone" placeholder="Телефон" class="form-control show rounded" data-mask="+ 9-999-999-99-99"></div><div class="form-group"><label>Ваше сообщение</label><textarea name="message" required="" class="form-control hidden rounded" placeholder="Текст сообщения">Хочу воспользоваться услогой : {{$Good->name}}</textarea></div><div class="form-group text-center"><input type="hidden" name="_token" value="{!! csrf_token() !!}"><input type="submit" class="btn btn-default btn-void-primary show" value="Отправить"></div></form>',
            html: true,
            closeOnConfirm: false,
            showConfirmButton: false,
        });
    }


</script>

@endsection
