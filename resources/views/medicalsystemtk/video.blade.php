@extends('medicalsystemtk/header')

@section('content')


<div class="container galery-container">
    <h2 class="light bordered"> <div><a  href="/gallery">Фотогалерея</a><a class="active">Видеогалерея</a></div> </h2>
    <div class="row">
        <div class="col-sm-4 col-xs-12 col-md-3">
            <nav class="primary-albums clearfix">
                <div class="list-group">
                    <a style="z-index: 99" href="/video" class="list-group-item @if(!isset($id))active @endif">Все</a>
                    @foreach($albums as $album)

                    <a class="list-group-item @if(isset($id) && $id==$album->id)active @endif" href="/video/{{$album->id}}">{{$album->name}}</a>
                    @endforeach

                </div>
            </nav>
        </div>

        <div class="col-sm-8 col-xs-12 col-md-9">
            <div class="row">
                @foreach($videos as $video)
                <div class="col-md-3 photo-item-container">
                    <a rel="group" href="{{$video->code}}" class="photo-item fancybox fancybox.iframe">
                        <i style="z-index:999;" class="fa fa-eye"></i>
                        {{--<iframe src="{{preg_replace("/autoplay=1/",'autoplay=0',$video->code)}}" frameborder="0"></iframe>--}}
                        <img src="http://img.youtube.com/vi{{preg_replace("/(.*)embed/",'',$video->code)}}/hqdefault.jpg" alt="">
                    </a>
                </div>

                @endforeach
            </div>
            {!! $videos->render() !!}
        </div>

    </div>



</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>

<style>
    .galery-container {
        padding-top: 50px;
    }



    .galery-container .light.bordered a {
        display: inline-block;
        padding: 10px;
        /* border: 1px #DDDDDD solid; */
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom: none;
        background-color: white;
        padding-top: 4px;
    }
    .galery-container .light.bordered div {
        border-bottom: 1px #DDDDDD solid;
        display: inline-block;
    }
    .galery-container .light.bordered a.active {
        display: inline-block;
        padding: 10px;
        border: 1px #DDDDDD solid;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom: none;
        background-color: #428BCA;
        color: white;
    }

    .photo-item-container {
        margin-bottom: 20px;
    }
    .photo-item-container .photo-item  {
        position: relative;
        height: 200px;
        overflow: hidden;
        display: block;
        border: 2px white solid;
        -webkit-box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.37);
        -moz-box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.37);
        box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.37);
        text-align: center;
        BACKGROUND-COLOR: #E5E9EC;

    }

    @keyframes rotate {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0.5;
        }

    }

    .photo-item-container img {
        height: 100%;
        width: auto;
        max-width: 9999px;
        transition: all .5s;
    }
    .photo-item-container a:hover iframe{
        opacity:0.5;
    }
    .photo-item-container a i{
        opacity: 0;
        position: absolute;
        padding-top: 40%;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        font-size: 50px;
        transition: all .5s;
    }
    .photo-item-container a:hover i{
        opacity:1;
    }
</style>
@endsection