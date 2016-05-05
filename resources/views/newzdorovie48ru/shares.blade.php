@extends('newzdorovie48ru/header')

@section('content')

<!-- Акции -->
<section class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="app-content-body ">
                <div class="wrapper-md">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header">
                                <h1 class="font-thin m-b">Акции нашего центра</h1>
                            </div>

                            <!-- Хлебные крошки -->
                            <ol class="breadcrumb">
                                <li><a href="/">Главная</a></li>
                                <li class="active">Акции</li>
                            </ol>
                            <!-- Хлебные крошки -->

                            <div class="blog-post">
                                @foreach($Shares as $key => $value)
                                    <article class="panel">
                                        <div>
                                            <a href="/shares/{{$value['id']}}">
                                                <img alt="{{$value['name']}}" src="{{$value['avatar']}}" class="img-full">
                                            </a>
                                        </div>
                                        <div class="wrapper-lg">
                                            <h2 class="m-t-none"><a href="/shares/{{$value['id']}}">{{$value['name']}}</a></h2>

                                            <div class="blog-content">
                                                {{str_limit(strip_tags($value['content']), 300, '...')}}
                                            </div>
                                            <div class="line line-lg b-b b-light"></div>
                                            <div class="text-muted row v-center">
                                                <div class="col-md-6">
                                                    <i class="fa fa-clock-o text-muted"></i>  {{$value['created_at']->toDateString()}}
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>

                            <div class="row text-center m-t-md m-b-md">{!! $Shares->render() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Новости -->
@endsection