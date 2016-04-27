@extends('newzdorovie48ru/header')

@section('content')



        <!-- Галлерея -->
<section class="container-fluid">
    <div class="row">


        <div class="container">


            <div class="app-content-body ">


                <div class="page-header">
                    <h1 class="font-thin m-b">Галерея</h1>
                </div>



                <span id="overlay-suggestions"></span>

                <div class="search-results">

                    <div class="row">


                        <div class="col-sm-9">
                            <section class="vbox">
                                <section class="scrollable padder-lg w-f-md" id="bjax-target">




                                    <div class="row row-sm">


                                        <div class="mansory">

                                            <div class="row">

                                                @foreach($videos as $video)

                                                    <div class="item">
                                                        <div class="pos-rlt">
                                                            <a class="fancybox  fancybox.iframe" href="{{$video->code}}">
                                                                <img src="http://img.youtube.com/vi{{preg_replace("/(.*)embed/",'',$video->code)}}/hqdefault.jpg" class="r r-2x img-full" alt="">
                                                            </a>

                                                        </div>
                                                    </div>

                                                    <div class="clearfix visible-xs"></div>
                                                @endforeach

                                            </div>
                                        </div>

                                    </div>



                                    <div class="row row-sm text-center">
                                        {!! $videos->render() !!}
                                    </div>


                                </section>
                            </section>
                        </div>



                        <div class="col-sm-3">

                            <div class="row m-b-md">
                                <div class="col-md-6 text-center">
                                    <a href="/gallery" class="opacity">
                                        <i class="fa fa-camera fa-2x text-primary m-r-xs" aria-hidden="true"></i>  <span class="h3"> Фото</span>
                                    </a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <a href="/video">
                                        <i class="fa fa-video-camera fa-2x  text-primary m-r-xs" aria-hidden="true"></i>  <span class="h3"> Видео</span>
                                    </a>
                                </div>
                            </div>


                            <ul class="list-group">

                                <div class="list-group">
                                    <a href="/gallery" class="list-group-item @if(!isset($id))active @endif">Все</a>
                                    @foreach($albums as $album)
                                        <li class="list-group-item  text-center @if(isset($id) && $id==$album->id)active @endif">
                                            <a href="/video/{{$album->id}}">{{$album->name}}</a>
                                        </li>
                                    @endforeach

                                </div>


                            </ul>


                        </div>


                    </div>


                </div>

            </div>
        </div>
    </div>
</section>

<!-- Галлерея -->


@endsection


