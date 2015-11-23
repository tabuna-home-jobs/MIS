@extends('medicalsystemtk/header')

@section('content')


    <div class="container galery-container">
        <h1>Фотогалерея</h1>
        <div class="row">
            <div class="col-sm-4 col-xs-12 col-md-3">
                <nav class="primary-albums clearfix">
                    <div class="list-group">
                        <a style="z-index: 99" href="/gallery" class="list-group-item @if(!isset($id))active @endif">Все</a>
                        @foreach($albums as $album)

                           <a class="list-group-item @if(isset($id) && $id==$album->id)active @endif" href="/gallery/{{$album->id}}">{{$album->name}}</a>
                        @endforeach

                    </div>
                </nav>
            </div>

            <div class="col-sm-8 col-xs-12 col-md-9">
                <div class="row">
                        @foreach($photos as $photo)
                        <div class="col-md-3 photo-item-container">
                            <a rel="group" href="{{$photo->url}}" class="photo-item fancybox">
                                <img src="{{$photo->url}}" alt="">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>

                        @endforeach
                </div>
                {!! $photos->render() !!}
            </div>

        </div>



    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script>

    <style>
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
        .photo-item-container a:hover img{
            opacity:0.5;
        }
        .photo-item-container a i{
            opacity: 0;
            position: absolute;
            top: 40%;
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