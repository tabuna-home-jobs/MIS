@extends('newzdorovie48ru/header')

@section('title', $Share['title'])
@section('description', $Share['descript'])
@section('keywords', $Share['tag'])
@section('avatar', $Share['avatar'])

@section('content')

<!-- Детальная страница акции -->
<section class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="app-content-body ">
                <div class="wrapper-md">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header">
                                <h1 class="font-thin m-b">{{$Share['name']}}</h1>
                            </div>

                            <div class="blog-post">
                                <article class="panel">
                                    <div>
                                        <img alt="{{$Share['name']}}" src="{{$Share['avatar']}}" class="img-full">
                                    </div>
                                    <div class="wrapper-lg">
                                        <div class="blog-content">
                                            {!! $Share['content'] !!}
                                        </div>
                                        <div class="line line-lg b-b b-light"></div>
                                        <div class="text-muted row v-center">
                                            <div class="col-md-6">
                                                <i class="fa fa-clock-o text-muted"></i>  {{$Share['created_at']->toDateString()}}
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
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Новости -->










@endsection
